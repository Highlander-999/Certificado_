<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$id = $_GET['updateid'];
$sql = "select * from usuario where id = " . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$nome = $row['nome'];
$email = $row['email'];
$master = $row['master'];
$senha = $row['senha'];
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $master = $_POST['master'];
    $sql = 'update usuario set nome="' . $nome . '", email="' . $email . '", master="' . $master . '", senha="' . $senha . '" where id=' . $id;
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: ususelect.php');
    } else {
        die(mysqli_error($con));
    }
};
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
	<!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
	<title>Certificado</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="dnv.css">
    <title>Usuario</title>
</head>

<body style="background-image: url(../img/fundo.jpg); background-image: fixed; background-size: cover;">

<div class="nav">
        <div class="row" id="rowtop">

            <div id="usushow">
                <h2>Usuário:
                    <span>
                        <?php echo $_SESSION['nome']; ?>
                    </span>

                    <p></p>
                </h2>
            </div>

            <div class="mnu">
                <a id="atop" href="../menu.php" style="text-decoration: none;">MENU</a>
                <a id="atop" href="conselect.php" style="text-decoration: none;">CONSULTA GERAL</a>
                <a id="atop" href="turselect.php" style="text-decoration: none;">TURMA</a>
                <a id="atop" href="aluselect.php" style="text-decoration: none;">ALUNO</a>
                <a id="atop" href="ususelect.php" style="text-decoration: none;color: #28a7e9;">USUÁRIO</a>
                <a id="atop" href="curselect.php" style="text-decoration: none;">CURSO</a>
                <a id="atop" href="insselect.php" style="text-decoration: none;">INSTRUTOR</a>
                <a id="atop" href="certificado2020.php" style="text-decoration: none;">CERTIFICADO 2020</a>
                <a id="atop" href="certificado2023.php" style="text-decoration: none;">CERTIFICADO 2023</a>
                <a id="atop" href="logselect.php" style="text-decoration: none;">CONSULTA LOG</a>
            </div>
        </div>
    </div>

    <center>

        <div class="container">

            <br>

            <form method="POST">

            <div class="jumbotron" style="width: fit-content;">

<h1 style="color: rgb( 2, 84, 160); ">Alterar Usuário</h1>


<div class="row">
    <div class="col">
        <p class="pselect">Nome</p>
        <input type="text" id="inpselect" name="nome" value="<?php echo $nome ?>">
        <br><br>
        <p class="pselect">Email</p>
        <input type="email" id="inpselect" name="email" value="<?php echo $email ?>">
    </div>
    <div class="col">
        <p class="pselect">
            Master
        </p>
        <select name="master" id="selcurso" style="width: 25%;">

            <option value="N" <?php if ($master == "N") {
                                    echo "selected";
                                } ?>>Não</option>
            <option value="S" <?php if ($master == "S") {
                                    echo "selected";
                                } ?>>Sim</option>
        </select>
        <br><br>
        <p class="pselect">Senha</p>
        <input type="text" id="inpselect" style="width: 300px;" name="senha" value="<?php echo $senha ?>">
    </div>
</div>


<br>

<div class="row" style="margin-top: 25px;">
    <div class="col">
        <div class="col">
            <a href="ususelect.php">
                <button type="button" class="btn btn-warning" style="width: 120px;font-size: 25px;  color: white;">Voltar</button>
            </a>
        </div>
    </div>

    <div class="col">
        <a href="./ususelect.php">
            <button type="submit" name="submit" class="btn btn-primary" style="width: 120px;font-size: 25px; color: white;">Salvar</button>
        </a>
    </div>
</div>

</div>

            </form>

        </div>

    </center>

</body>

</html>