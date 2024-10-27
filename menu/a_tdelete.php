<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$id = $_GET['deleteid'];
$sql = "select a.id idaluno, a.nome aluno, t.id idturma, t.nome turma, a_t.ordem ordem, a_t.id 
from aluno a inner join aluno_turma a_t on a.id = a_t.idaluno inner join turma t on t.id = a_t.idturma where a_t.id =" . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$aluno = $row['aluno'];
$turma = $row['turma'];
$ordem = $row['ordem'];
if (isset($_POST['submit'])) {

    $sql = 'DELETE FROM aluno_turma WHERE id =' . $id;
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
    <title>Excluir Turma</title>
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

                <div class="jumbotron" style="width: fit-content;">
                <h1 style="color: rgb(2, 84, 160); ">Excluir Aluno Turma</h1>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col">
                            <p class="pselect">ALUNO</p>
                            <label id="inpnoselect"><?php echo $aluno ?></label>
                            <br><br>
                            <p class="pselect">TURMA</p>
                            <label id="inpnoselect"><?php echo $turma ?></label>
                            <br><br>
                            <p class="pselect">ORDEM</p>
                            <label id="inpnoselect"><?php echo $ordem ?></label>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col">
                        <?php
                            echo "<a href='a_tselect.php?a_tid={$row['idaluno']}'
                            <button type='button' class='btn btn-warning' style='width: 120px;font-size: 25px;color: white;margin-top:-10px;'>
                             Voltar
                             </button>
                                </a>" ?>
                        </div>
                        <div class="col">
                            <button type="submit" name="submit" class="btn btn-danger"
                                style="width: 120px;font-size: 25px; color: white;">Apagar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </center>

</body>

</html>