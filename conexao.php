<?php
if (!defined('HOST')) {
    define('HOST', 'localhost');
}

if (!defined('USER')) {
    define('USER', 'root');
}

if (!defined('PASSWORD')) {
    define('PASSWORD', 'victorsg');
}

if (!defined('DATABASE')) {
    define('DATABASE', 'usuarios');
}

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$conexao) {
    die("Não foi possível conectar ao banco de dados: " . mysqli_connect_error());
}
?>
