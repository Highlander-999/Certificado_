<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$id = $_GET['updateid'];
$sql = "select * from aluno where id = " . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$nome = $row['nome'];
$email = $row['email'];
$contato = $row['contato'];
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $contato = $_POST['contato'];
    $sql = 'update aluno set nome="' . $nome . '", email="' . $email . '", contato="' . $contato . '" where id=' . $id;
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: aluselect.php');
    } else {
        die(mysqli_error($con));
    }
}
;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="dnv.css">
    <title>Alterar Aluno</title>
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
                <a id="atop" href="aluselect.php" style="text-decoration: none;color: #28a7e9;">ALUNO</a>
                <a id="atop" href="ususelect.php" style="text-decoration: none;">USUÁRIO</a>
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

          

            <form method="POST">

                <div class="jumbotron" style="margin-top: 20px;padding-top: 15px;width: fit-content;">

                    <h1 style="color: rgb(2, 84, 160); ">Alterar Aluno</h1>

                    <div class="row" style="margin-bottom: 50px;margin-top: 20px;">
                        <div class="col">
                            <p class="pselect">Nome</p>
                            <input id="inpselect" type="text" name="nome" value="<?php echo $nome ?>">
                            <br><br>
                            <p class="pselect">E-mail</p>
                            <input id="inpselect" type="text" name="email" value="<?php echo $email ?>">
                            <br><br>
                            <p class="pselect">Contato</p>
                            <input id="inpselect" type="text" name="contato" value="<?php echo $contato ?>">

                        </div>
                    </div>



                    <div class="row" style="margin-top: 50px;">
                        <div class="col">
                            <div class="col">
                                <a href="aluselect.php">
                                    <button type="button" class="btn btn-warning"
                                        style="width: 120px;font-size: 25px;  color: white;">Voltar</button>
                                </a>
                            </div>
                        </div>

                        <div class="col">
                            <a href="">
                                <button type="submit" name="submit" class="btn btn-primary"
                                    style="width: 120px;font-size: 25px; color: white;">Salvar</button>
                            </a>
                        </div>
                    </div>

                </div>

            </form>

        </div>

    </center>

</body>

</html>