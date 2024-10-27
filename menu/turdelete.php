<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$id = $_GET['deleteid'];
$sql = " select c.id idcurso, c.nome curso, i.id idinstrutor, i.nome instrutor, t.id idturma, t.nome nome, 
t.data_periodo_inicial data_periodo_inicial, t.data_periodo_final data_periodo_final, t.horario horario, t.natureza natureza,
t.cargahoraria cargahoraria
from turma t
inner join curso c on c.id = t.idcurso
inner join instrutor i on i.id = idinstrutor where t.id = " . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$nome = $row['nome'];
$nomecurso = $row['curso'];
$nomeinstrutor = $row['instrutor'];
$data_periodo_inicial = $row['data_periodo_inicial'];
$data_periodo_final = $row['data_periodo_final'];
$horario = $row['horario'];
$natureza = $row['natureza'];
$cargahoraria = $row['cargahoraria'];
$idcurso = $row['idcurso'];
$idinstrutor = $row['idinstrutor'];
if (isset($_POST['submit'])) {
    $sql = 'delete from turma where id=' . $id;
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: turselect.php');
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
    <style>
        #inpnoselect{
            width: 400px;
        }
    </style>
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
                </h2>
            </div>

            <div class="mnu">
                <a id="atop" href="../menu.php" style="text-decoration: none;">MENU</a>
                <a id="atop" href="conselect.php" style="text-decoration: none;">CONSULTA GERAL</a>
                <a id="atop" href="turselect.php" style="text-decoration: none;color: #28a7e9">TURMA</a>
                <a id="atop" href="aluselect.php" style="text-decoration: none;">ALUNO</a>
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
                <div class="jumbotron">
                    <h1 style="color: rgb(2, 84, 160); ">Excluir Turma</h1>

                    <div class="row">
                        <div class="col">
                            <p class="pselect">Nome</p>
                            <label id="inpnoselect"><?php echo $nome ?></label>
                            <br><br>
                            <p class="pselect">Curso</p>
                            <label id="inpnoselect" name="curso" ><?php echo $nomecurso ?></label>
                            <br><br>
                            <p class="pselect">Data Inicial</p>
                            <label id="inpnoselect"><?php echo $data_periodo_inicial ?></label>
                            <br><br>
                            <p class="pselect">Data Final</p>
                            <label id="inpnoselect"><?php echo $data_periodo_final ?></label>
                        </div>


                        <div class="col">
                            <p class="pselect">Horário</p>
                            <label id="inpnoselect"><?php echo $horario ?></label>
                            <br><br>
                            <p class="pselect">Carga Horária</p>
                            <label id="inpnoselect"><?php echo $cargahoraria ?></label>
                            <br><br>
                            <p class="pselect">Instrutor</p>
                            <label id="inpnoselect" name="instrutor" ><?php echo $nomeinstrutor ?></label>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col">



                            <a href="turselect.php">
                                <button type="button" class="btn btn-warning"
                                    style="width: 120px;font-size: 25px;  color: white;">Voltar</button>
                            </a>



                        </div>

                        <div class="col">
                            <button type="submit" name="submit" class="btn btn-danger"
                                style="width: 120px;font-size: 25px; color: white;">Apagar</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>

</body>

</html>