<?php
define('HOST', 'localhost');
define('USER', 'root'); # usuário do banco de dados
define('PASSWORD', 'victorsg'); # senha do usuário do banco de dados
define('DATABASE', 'usuarios');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$conexao) {
    die("Não foi possível conectar ao banco de dados: " . mysqli_connect_error());
}
?>
