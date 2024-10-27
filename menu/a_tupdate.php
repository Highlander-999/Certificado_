<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$id = $_GET['updateid'];
$sql = "select a_t.id id, a.id idaluno, a.nome aluno, t.id idturma, t.nome turma, a_t.ordem 
from aluno a inner join aluno_turma a_t on a.id = a_t.idaluno 
             inner join turma t on t.id = a_t.idturma WHERE a_t.id =  " . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$nomealuno = $row['aluno'];
$nometurma = $row['turma'];
$idaluno = $row['idaluno'];
$idturma = $row['idturma'];
$ordem = $row['ordem'];

if (isset($_POST['submit'])) {
    $ordem = $_POST['ordem'];
    $sql = 'update aluno_turma set ordem="' . $ordem . '" where id=' . $id;
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
    <title>Alterar Aluno e Turma</title>
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
        <div class="container">
            <form method="POST">
                <div class="jumbotron" style="width: fit-content;">
                    <h1 style="color: rgb(2, 84, 160); ">Alterar Aluno Turma</h1>
                    <div class="row" style="margin-bottom: 50px;margin-top: 20px;">
                        <div class="col">
                            <p class="pselect">Aluno</p>
                            <label id="inpnoselect"><?php echo $nomealuno ?></label>
                            <br><br>
                            <p class="pselect">Turma</p>
                            <label id="inpnoselect"><?php echo $nometurma ?></label>
                            <br><br>
                            <p class="pselect">Ordem</p>
                            <input id="inpselect" type="text" name="ordem" value="<?php echo $ordem ?>" >

                        </div>
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col">
                            <div class="col">
                            <?php
                            echo "<a href='a_tselect.php?a_tid={$row['idaluno']}'
                            <button type='button' class='btn btn-warning' style='width: 120px;font-size: 25px;color: white;margin-top:-10px;'>
                             Voltar
                             </button>
                                </a>" ?>
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