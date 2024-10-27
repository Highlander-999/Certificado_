<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $sql = 'insert into instrutor (nome) values
    ("' . $nome . '")';
    $result = mysqli_query($con, $sql);


    // salvar log
    $data = date('Y-m-d');
    $dataHora = new DateTime();
    $hora = $dataHora->format('H:i:s');


    $sqll = "insert into log (idusuario,data,hora,comando) values (" .
            $_SESSION["id"] . ",'" . $data . "','" . $hora . "', '" . $sql . "')";
    $result = mysqli_query($con, $sqll);
    // fim do log
    if ($result) {
        header('Location: insselect.php');
    } else {
        die(mysqli_error($con));
    }
}
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
    <title>Incluir Instrutor</title>
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
                <a id="atop" href="ususelect.php" style="text-decoration: none;">USUÁRIO</a>
                <a id="atop" href="curselect.php" style="text-decoration: none;">CURSO</a>
                <a id="atop" href="insselect.php" style="text-decoration: none;color: #28a7e9;">INSTRUTOR</a>
                <a id="atop" href="certificado2020.php" style="text-decoration: none;">CERTIFICADO 2020</a>
                <a id="atop" href="certificado2023.php" style="text-decoration: none;">CERTIFICADO 2023</a>
                <a id="atop" href="logselect.php" style="text-decoration: none;">CONSULTA LOG</a>
            </div>
        </div>
    </div>

    <center>

        <div class="container">

       
            <form method="POST">

                <div class="jumbotron" style="width: fit-content;">

                    <h1 style="color: rgb(2, 84, 160); ">Incluir Instrutor</h1>

                 

                    <div class="row" >
                        <div class="col">
                            <p class="pselect">Nome</p>
                            <input id="inpselect" type="text" name="nome" placeholder="Nome">

                        </div>
                    </div>



                    <div class="row" style="margin-top: 25px;">
                        <div class="col">
                            <div class="col">
                                <a href="insselect.php">
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