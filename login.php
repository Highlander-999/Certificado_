<?php
// valida sessão de login ativo
session_start();

// conecta no banco
include('connect.php');

// confere e-mail e senha vazio
if (empty($_POST['email']) || empty($_POST['senha'])) {
header('Location: index.php');
exit();

}
$email = mysqli_real_escape_string($con, $_POST['email']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "select * from usuario where email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($con, $query);
$linha = mysqli_num_rows($result);

if ($linha == 1) {
   $valores = mysqli_fetch_assoc($result);
   $id = $valores['id'];
   $nome = $valores['nome'];
   $master = $valores['master'];
   $_SESSION['id'] = $id;
   $_SESSION['nome'] = $nome;
   $_SESSION['email'] = $email;
   $_SESSION['master'] = $master;
   header('Location: menu.php');
   exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}


?>