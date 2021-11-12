<?php
include 'db.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM USUARIOS WHERE usuario = '$usuario' AND senha = '$senha'";
$execute = mysqli_query($conexao, $query);

if(mysqli_num_rows($execute) == 1) {
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    header('location:index.php?pagina=cursos');
}
else {
    header('location:index.php?error=1');
}