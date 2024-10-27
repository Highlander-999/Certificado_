<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$sql = 'SELECT
    a.nome nome_aluno,
    t.nome nome_turma,
    a_t.ordem ordem,
    t.data_periodo_inicial,
    t.data_periodo_final,
    t.horario horario,
    t.natureza natureza,
    c.nome nome_curso,
    i.nome nome_instrutor
   
FROM
    aluno_turma a_t
INNER JOIN aluno a ON a_t.idaluno = a.id

INNER JOIN turma t ON a_t.idturma = t.id
INNER JOIN curso c ON t.idcurso = c.id
INNER  JOIN instrutor i ON t.idinstrutor = i.id order by 1';

$pesqnome = '';
$pesqturma = '';
$pesqcurso = '';
if (isset($_POST['submit'])) {
    $pesqnome = $_POST['pesqnome'];
    $pesqturma = $_POST['pesqturma'];
    $pesqcurso = $_POST['pesqcurso'];

    $pesqdata_periodo_inicial = $_POST['pesqdata_periodo_inicial'];
    if ($_POST['pesqdata_periodo_inicial'] == '') {
        $vdatainicial = '';
    } else {
        $vdatainicial = ' and t.data_periodo_inicial >= "' . $pesqdata_periodo_inicial . '"';
    }

    $pesqdata_periodo_final = $_POST['pesqdata_periodo_final'];
    if ($_POST['pesqdata_periodo_final'] == '') {
        $vdatafinal = '';
    } else {
        $vdatafinal = 'and t.data_periodo_final <= "' . $pesqdata_periodo_final . '"';
    }

    $sql = "SELECT
    a.nome nome_aluno,
    t.nome nome_turma,
    a_t.ordem ordem,
    t.data_periodo_inicial,
    t.data_periodo_final,
    t.horario horario,
    t.natureza natureza,
    c.nome nome_curso,
    i.nome nome_instrutor
FROM
    aluno_turma a_t
INNER JOIN aluno a ON a_t.idaluno = a.id
INNER JOIN turma t ON a_t.idturma = t.id
INNER JOIN curso c ON t.idcurso = c.id
INNER  JOIN instrutor i ON t.idinstrutor = i.id where a.nome like '%$pesqnome%' and t.nome like '%$pesqturma%' and c.nome like '%$pesqcurso%' $vdatainicial $vdatafinal ";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="dnv.css">
    <style>
        label {

            font-weight: 600;
            font-size: 22px;

        }

        #inpselect {
            width: 250px;
            font-size: 15px;
            margin-right: 100%;


        }

        input::-webkit-calendar-picker-indicator {
            background-image: url(../img/calendar_month_24dp_28A7E9_FILL0_wght400_GRAD0_opsz24.svg);
        }

        .pselect {
            margin: 0;
            float: left;
        }

        .col {
            padding: 0;
            margin: 0;
        }

        button {
            margin: 0;

        }
    </style>
    <title>Consultar Geral</title>
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
                <a id="atop" href="conselect.php" style="text-decoration: none;color: #28a7e9">CONSULTA GERAL</a>
                <a id="atop" href="turselect.php" style="text-decoration: none;">TURMA</a>
                <a id="atop" href="aluselect.php" style="text-decoration: none;">ALUNO</a>
                <a id="atop" href="ususelect.php" style="text-decoration: none;">USUÁRIO</a>
                <a id="atop" href="curselect.php" style="text-decoration: none;">CURSO</a>
                <a id="atop" href="insselect.php" style="text-decoration: none;">INSTRUTOR</a>
                <a id="atop" href="pesq2020.php" style="text-decoration: none;">CERTIFICADO 2020</a>
                <a id="atop" href="pesq2023.php" style="text-decoration: none;">CERTIFICADO 2023</a>
            </div>
        </div>
    </div>
    <center>

        <div class="container-fluid">
            <div class="jumbotron" style="margin-top: 30px;padding-bottom: 30px;">
                <form method="POST">

                    <div class="row">
                        <div class="col">
                            <label class="pselect">Nome</label>
                            <br>
                            <input type="text" id="inpselect" placeholder="Nome" name="pesqnome" value="<?php echo $pesqnome ?>">
                        </div>
                        <div class="col">
                            <label class="pselect">Turma</label>
                            <br>
                            <input type="text" id="inpselect" placeholder="Turma" value="<?php echo $pesqturma ?>" name="pesqturma">
                        </div>
                        <div class="col">
                            <label class="pselect">Curso</label>
                            <br>
                            <input type="text" id="inpselect" placeholder="Curso" value="<?php echo $pesqcurso ?>" name="pesqcurso">
                        </div>
                        <div class="col">
                            <label class="pselect">Data Período Inicial</label>
                            <br>
                            <input type="date" id="inpselect" name="pesqdata_periodo_inicial" value="<?php echo $pesqdata_periodo_inicial ?>">
                        </div>
                        <div class="col">
                            <label class="pselect">Data Período Final</label>
                            <br>
                            <input type="date" id="inpselect" name="pesqdata_periodo_final" value="<?php echo $pesqdata_periodo_inicial ?>">
                        </div>
                        <div class="col" style="padding-top: 20px;">
                            <button type="submit" name="submit" class="btn btn-primary" style="width: 120px;font-size: 25px; color: white;margin-right: 5px;">Consulta</button>
                            <a href="conselect.php">
                                <button type="button" class="btn btn-secondary" style="width: 120px;font-size: 25px; color: white;margin-left: 5px;">Limpar</button>
                            </a>
                        </div>
                    </div>
            </div>



            <table class="table table-bordered" style="background-color: white; text-align: center;margin-top: 35px;">
                <thead style="background-color: rgb(2, 84, 160);">
                    <tr>
                        <th scope="col" style="color: white; width: auto;">Imprimir</th>
                        <th scope="col" style="color: white;">Nome do Aluno</th>
                        <th scope="col" style="color: white;">Turma</th>
                        <th scope="col" style="color: white;">Instrutor</th>
                        <th scope="col" style="color: white;">Curso</th>
                        <th scope="col" style="color: white;">Horário</th>
                        <th scope="col" style="color: white;">Data periodo Inicial</th>
                        <th scope="col" style="color: white;">Data periodo Final</th>
                        <th scope="col" style="color: white;">Ordem</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                           
                            <td style='width: 0px';>" .
                                "<a href='certificadoimg.php?nome={$row['nome_aluno']}&turma={$row['nome_turma']}&instrutor={$row['nome_instrutor']}&curso={$row['nome_curso']}&horario={$row['horario']}
                            &datainicial={$row['data_periodo_inicial']}&datafinal={$row['data_periodo_final']}&ordem={$row['ordem']}' style = 'text-decoration: none'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-printer' viewBox='0 0 16 16'>
                              <path d='M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1'/>
                              <path d='M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1
                               1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1
                                1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1'/></svg>
                                
                        </a>" . "</td>
                            
                        <td style='font-size: 20px;'>" . $row['nome_aluno'] . "</td>
                        <td style='font-size: 20px;'>" . $row['nome_turma'] . "</td>
                        <td style='font-size: 20px;'>" . $row['nome_instrutor'] . "</td>
                        <td style='font-size: 20px;'>" . $row['nome_curso'] . "</td>
                        <td style='font-size: 20px;'>" . $row['horario'] . "</td>
                        <td style='font-size: 20px;'>" . $datainicial = substr($row['data_periodo_inicial'], 8, 2) .
                                substr($row['data_periodo_inicial'], 4, 4) .
                                substr($row['data_periodo_inicial'], 0, 4) . "</td>
                                <td style='font-size: 20px;'>" . $datafinal = substr($row['data_periodo_final'], 8, 2) .
                                substr($row['data_periodo_final'], 4, 4) .
                                substr($row['data_periodo_final'], 0, 4) . "</td>
                        <td style='font-size: 20px;'>" . $row['ordem'] . "</td>";
                        }
                    } ?>

                </tbody>

            </table>

            </form>



        </div>

    </center>

</body>

</html>