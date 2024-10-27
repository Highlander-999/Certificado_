<?php
session_start();
include('../verifica_login.php');
include('../connect.php');

$id = $_GET['idalunook'];
$sql = "select * from aluno where id = " . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$nome = $row['nome'];
$idaluno = $row['id'];


if (isset($_POST['submit'])) {  
    $idturma = $_POST['idturma'];
    $ordem = $_POST['ordem'];

    $sql = 'insert into aluno_turma (idaluno, idturma, ordem) values
    ("' . $idaluno . '","' . $idturma . '","' . $ordem . '")';
    
    $result = mysqli_query($con, $sql);

    $data = date('Y-m-d');
    $dataHora = new DateTime();
    $hora = $dataHora->format('H:i:s');


    $sqll = "insert into log (idusuario,data,hora,comando) values (" .
            $_SESSION["id"] . ",'" . $data . "','" . $hora . "', '" . $sql . "')";
    $result = mysqli_query($con, $sqll);
    
    if ($result) {
        header('Location: aluselect.php');
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
    <title>Incluir Aluino Turma</title>
</head>

<body style="background-image: url(../img/fundo.jpg); background-size: cover;">
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
        <div class="container" style="width: 30%;">
            <br>
            <form method="POST">

                <div class="jumbotron">

                    <h1 style="color: rgb(2, 84, 160); ">Incluir Aluno e Turma</h1>


                    <div class="row">
                        <div class="col">
                            <p class="pselect">ALUNO</p>
                            <label id="inpnoselect" style="width: 400px;"><?php echo $nome ?></label>
                            <br><br>
                            <p class="pselect">TURMA</p>
                            <?php
                            $sqltt = 'select * from turma order by 1';
                            $resulttt = mysqli_query($con, $sqltt);
                            if ($resulttt) {
                                echo '<select name="idturma" id="selcurso"  placeholder="Turma">';
                                while ($row = mysqli_fetch_assoc($resulttt)) {
                                    echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
                                }
                                echo '</select>';
                            }
                            ?>

                            <br><br>

                            <p class="pselect">ORDEM</p>
                            <input type="number" id="inpselect" name="ordem" placeholder="Ordem" style="width: 300px;">
                        </div>

                    </div>



                    <div class="row" style="margin-top: 50px;">
                        <div class="col">

                            <button type="submit" name="submit" class="btn btn-primary"
                                style="width: 120px;font-size: 25px; color: white;">Salvar</button>

                        </div>
                        <div class="col">
                        <button type="submit" name="submit" class="btn btn-warning"
                                style="width: 120px;font-size: 25px; color: white;">Voltar</button>
                        </div>
                    </div>

            </form>
        </div>
    </center>

</body>

</html>