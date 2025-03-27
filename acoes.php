<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require "conexao.php";

$erro = "";
$sucesso = "";

if (isset($_POST['criar-conta'])) {
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $password = mysqli_real_escape_string($conexao, trim($_POST['password']));
    $confirmPassword = mysqli_real_escape_string($conexao, trim($_POST['confirm-password']));

    function redirecionarComErro($message) {
        $_SESSION['erro'] = $message;
        header("Location: criar-conta.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirecionarComErro("E-mail inválido.");
    }

    if ($password !== $confirmPassword) {
        redirecionarComErro("As senhas não coincidem.");
    }

    if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        redirecionarComErro("A senha deve ter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma minúscula, um número e um caractere especial.");
    }

    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) > 0) {
        redirecionarComErro("Este e-mail já está cadastrado.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $insertSql = "INSERT INTO usuario (email, senha) VALUES ('$email', '$hashedPassword')";
    if (mysqli_query($conexao, $insertSql)) {
        $_SESSION['sucesso'] = "Cadastro realizado com sucesso!";
        header("Location: index.php");
        exit();
    } else {
        redirecionarComErro("Ocorreu um erro ao cadastrar o usuário. Tente novamente.");
    }
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $password = mysqli_real_escape_string($conexao, trim($_POST['password']));

    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['senha'])) {
            $_SESSION['usuario'] = $user['email'];
            header("Location: portal.php");
            exit();
        } else {
            $_SESSION['erro'] = "Senha incorreta.";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['erro'] = "E-mail não encontrado.";
        header("Location: index.php");
        exit();
    }
}

if (isset($_POST['logout'])) {
    session_unset();
    
    session_destroy();
    
    header("Location: index.php");
    exit();
}
?>