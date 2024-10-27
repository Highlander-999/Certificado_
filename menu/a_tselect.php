<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$id = $_GET['a_tid'];
$sql = 'select a.id idaluno, a.nome aluno
from aluno a  where id=' . $id;

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$idaluno = $row['aluno'];
$pesqnome = '';

$sql = 'select a.id idaluno, a.nome aluno, t.id codturma, c.nome curso, t.nome turma, al.ordem, al.id
from aluno a inner join aluno_turma al on a.id=al.idaluno
inner join turma t on t.id = al.idturma
inner join curso c on c.id = t.idcurso where idaluno=' . $id;

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $pesqnome = $_POST['pesqnome'];
    $sql = "select * from aluno_turma where nome like '%$pesqnome%' order by 1";
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="dnv.css">
     <style>
        .btn-success, .btn-danger
        {
            margin: 0;
        }

        .btn-success{
            margin-right: 10px;
        }

        .btn-danger{
            margin-left: 10px;
        }
        
    </style>
    <title>Turma</title>
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
            </div>
        </div>
    </div>
    <center>


        <div class="container-fluid" style="width: 70%;">

            <br>

            <div class="jumbotron">

                <form method="POST">



                    <h1 style="color: rgb(2, 84, 160); ">Consultar Aluno e Turma</h1>

                    <div class="row">
                        <div class="col">
                            <p class="pselect">Nome</p>
                            
                            <label id="inpnoselect" name="idaluno"><?php echo $idaluno ?></label>


                            <div class="row" style="padding-left: 20px;gap: 10px;">
                             <?php
                               echo '
                                <a href="a_tinsert.php?idalunook=' . $id . '"  style="text-decoration: none;">
                                    <button type="button" class="btn btn-info" style="width: 120px;font-size: 25px; color: white;">Inclusão</button>
                                </a>';
                                ?>

                                <a href="aluselect.php" style="text-decoration: none;">
                                    <button type="button" class="btn btn-warning" style="width: 120px;font-size: 25px; color: white;">Voltar</button>
                                </a>
                            </div>

                        </div>


                    </div>

            </div>


            <table class="table table-bordered" style="background-color: white; text-align: center;">
                <thead style="background-color: rgb(2, 84, 160);">
                    <tr>
                        <th scope="col" style="color: white;">id</th>
                        <th scope="col" style="color: white;">codturma</th>
                        <th scope="col" style="color: white;">curso</th>
                        <th scope="col" style="color: white;">turma</th>
                        <th scope="col" style="color: white;">ordem</th>
                        <th scope="col" style="color: white;">Operações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>

                        <td style='font-size: 20px;'>" . $row['id'] . "</td>
                        <td style='font-size: 20px;'>" . $row['codturma'] . "</td>
                        <td style='font-size: 20px;'>" . $row['curso'] . "</td>
                        <td style='font-size: 20px;'>" . $row['turma'] . "</td>
                        <td style='font-size: 20px;'>" . $row['ordem'] . "</td>
                        <td style='width:21%;'>
                       

                        <a href='a_tupdate.php?updateid={$row['id']}'
                         <button type='button' class='btn btn-success'>
                         Alterar
                         </button>
                         </a>

                         <a href='a_tdelete.php?deleteid={$row['id']}'
                         <button type='button' class='btn btn-danger'>
                         Apagar
                         </button>
                         </a>


                        </td></tr>";
                        }
                    }
                    ?>
                </tbody>

            </table>



            </form>

        </div>

    </center>

</body>

</html>