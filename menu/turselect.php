<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$sql = 'select t.id id, t.nome nome, data_periodo_inicial, data_periodo_final, c.nome curso, horario, i.nome instrutor, natureza, cargahoraria 
from turma t inner join curso c on c.id = t.idcurso inner join instrutor i on i.id = t.idinstrutor order by 1';
$pesqnome = '';
if (isset($_POST['submit'])) {
    $pesqnome = $_POST['pesqnome'];
    $sql = "select t.id id, t.nome nome, data_periodo_inicial, data_periodo_final, c.nome curso, horario, i.nome instrutor, natureza, cargahoraria 
    from turma t inner join curso c on c.id = t.idcurso inner join instrutor i on i.id = t.idinstrutor where t.nome like '%$pesqnome%' order by 1";
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
                <a id="atop" href="turselect.php" style="text-decoration: none;color: #28a7e9">TURMA</a>
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

            <div class="jumbotron" style="width: 60%;">

                <form method="POST">


                    <h1 style="color: rgb(2, 84, 160); ">Consultar Turma</h1>


                    <div class="row">
                        <div class="col">
                            <p class="pselect">Nome</p>
                            <input type="text" id="inpselect" name="pesqnome" placeholder="Nome" value="<?php echo $pesqnome ?>">

                            <div class="row" style="padding-left: 55px;">
                                <button type="submit" name="submit" class="btn btn btn-primary" style="width: 120px;font-size: 25px; color: white;margin-right: 10px;">Consulta</button>

                                <a href="turselect.php" style="text-decoration: none;">
                                    <button type="button" class="btn btn-secondary" style="width: 120px;font-size: 25px; color: white; margin-left: 10px;">Limpar</button>
                                </a>

                                <a href="turinsert.php">
                                    <button type="button" class="btn btn-info" style="width: 120px;font-size: 25px; color: white;">Inclusão</button>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>

            <table class="table table-bordered" style="background-color: white; text-align: center;">
                <thead style="background-color: rgb(2, 84, 160);">
                    <tr>
                        <th scope="col" style="color: white;">Código</th>
                        <th scope="col" style="color: white;">Nome</th>
                        <th scope="col" style="color: white;">Data Inicial</th>
                        <th scope="col" style="color: white;">Data Final</th>
                        <th scope="col" style="color: white;">Curso</th>
                        <th scope="col" style="color: white;">Horário</th>
                        <th scope="col" style="color: white;">Instrutor</th>
                        <th scope="col" style="color: white;">Carga horária</th>
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
                                <td style='font-size: 20px;'>" . $row['nome'] . "</td>

                                <td style='font-size: 20px;'>" .   $datainicial = substr($row['data_periodo_inicial'], 8, 2) .
                                substr($row['data_periodo_inicial'], 4, 4) .
                                substr($row['data_periodo_inicial'], 0, 4) . "</td>
                                <td style='font-size: 20px;'>" . $datafinal = substr($row['data_periodo_final'], 8, 2) .
                                substr($row['data_periodo_final'], 4, 4) .
                                substr($row['data_periodo_final'], 0, 4)  . "</td>

                                <td style='font-size: 20px;'>" . $row['curso'] . "</td>
                                <td style='font-size: 20px;'>" . $row['horario'] . "</td>
                                <td style='font-size: 20px;'>" . $row['instrutor'] . "</td>
                                <td style='font-size: 20px;width: 7%;'>" . $row['cargahoraria'] . "</td>
                                <td style='width: 13%;' >
                                <a href='turupdate.php?updateid={$row['id']}'
                                <button type='button' class='btn btn-success'>
                                Alterar
                                </button>
                                </a>

                                <a href='turdelete.php?deleteid={$row['id']}'
                                <button type='button' class='btn btn-danger'>
                                Apagar
                                </button>
                                </a>


                                </td>
                                </tr>";
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

<!-- feito por egman, highlander e karlos -->