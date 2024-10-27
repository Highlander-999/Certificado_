<?php
session_start();
include('../verifica_login.php');
include('../connect.php');

$sql_curso = "SELECT * FROM curso";
$result_curso = mysqli_query($con, $sql_curso);

$sql_idinstrutor = "SELECT * FROM instrutor";
$result_idinstrutor = mysqli_query($con, $sql_idinstrutor);

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $data_periodo_inicial = $_POST['data_periodo_inicial'];
    $data_periodo_final = $_POST['data_periodo_final'];
    $horario = $_POST['horario'];
    $natureza = $_POST['natureza'];
    $cargahoraria = $_POST['cargahoraria'];
    $idcurso = $_POST['idcurso'];
    $idinstrutor = $_POST['idinstrutor'];

    $sql = "INSERT INTO turma (nome, data_periodo_inicial, data_periodo_final, horario, natureza, cargahoraria, idcurso, idinstrutor)
            VALUES ('$nome', '$data_periodo_inicial', '$data_periodo_final', '$horario', '$natureza', '$cargahoraria', $idcurso, $idinstrutor)";


    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: turselect.php');
        exit();
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

    <style>
        .col {

            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 20px;
            padding-right: 20px;

        }

        .pselect {
            text-align: left;
            font-weight: 600;
            /*font-weight - grossura da fonte, fonte com a linha fina ou grossa*/
            font-size: 22px;

        }

        label {
            margin-left: 15;
            margin-right: 15px;
            font-size: 25px;
            text-align: left;
            font-family: 'Arial';
        }



        #rowfundo {
            margin-top: 100px;
        }

        #selcurso {
            width: 300px;
            height: 35px;
            padding-left: 5px;
            border-color: #2aa2ff;


        }

        option {
            background-color: #008bf6;
            border: solid 2px yellow;
            color: white;
            font-weight: 500;

        }

        .jumbotron {
            box-shadow: 0px 0px 55px 7px #cfcfcfc9;
            border: solid 2px #28a7e9;
            border-radius: 30px;
            background-color: rgba(255, 255, 255, 0.700);
            margin-top: 30px;
            padding-top: 15px;
            padding-bottom: 5px;
            width: fit-content;

        }

        input {
            width: 300px;
            height: 35px;
            border: 1px solid black;
            padding-left: 10px;
            border-radius: 5px;
            float: left;

        }

        input::-webkit-calendar-picker-indicator {
            background-image: url(../img/calendar_month_24dp_28A7E9_FILL0_wght400_GRAD0_opsz24.svg);
        }

        #inpselect:focus {
            border: solid 1px #0c89fc;
            outline: none;
            transition: 0.2s ease-in-out;
        }

        #selcurso:focus {
            border: 1px solid #005faa;
            border-radius: 2px;
            outline: none;

        }



        button:hover {

            filter: brightness(80%);
            transition: 0.3s ease-in-out;
        }


        #selcurso {
            width: 300px;
            height: 35px;
            padding-left: 5px;
            border-radius: 5px;
            border: solid 1px;
            float: left;



        }

        #selcurso:focus {
            outline: solid 1px #0c89fc;
            /*outline - mesma coisa de border, so não ocupa espaço, feita mais pra destacar alguma coisa*/
            border: none;
        }

        .nav {
            background-color: #fff;
            box-shadow: 0px 0px 20px 15px #95959557;
            border-top: #28a7e9 3px solid;
            height: 70px;
            padding: 10px;
            line-height: 40px;
        }



        .mnu {
            margin-left: 500px;
        }

        @media only screen and (max-width: 1660px) {
            .mnu {
                margin-left: 50px;
            }



        }

        @media only screen and (max-width: 1360px) {
            .mnu {
                margin-left: 200px;
            }

            #usushow {
                margin-left: 100px;
            }


        }

        @media only screen and (max-width: 1222px) {
            .mnu {
                margin-left: 170px;
            }

            #usushow {
                margin-left: 10px;
            }


        }




        @media only screen and (max-width: 1110px) {
            .mnu {
                margin-left: auto;


            }

            #usushow {
                margin-left: 10px;
            }

            .nav {
                height: fit-content;
            }


        }

        @media only screen and (max-width: 1110px) {

            #inpselect {
                width: 350px;
            }


        }


        button {
            margin-top: -10px;

        }

        a {
            color: #777777;
            margin-right: 25px;
            font-weight: 700;
            font-size: 13px;
        }

        a:hover {
            color: #28a7e9;
        }

        #usushow:hover {
            color: #5e5e5e;
        }

        #usushow {
            color: #777777;
            margin-left: 20px;

        }

        h2 {
            font-weight: 400;
        }
    </style>

    <title>Incluir Turma</title>

</head>

<body style="background-image: url(../img/fundo.jpg); background-size: cover;">
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
        <div class="container-fluid">
            <form method="POST">
                <div class="jumbotron" style="margin-top: 30px;">
                    <h1 style="color: rgb(2, 84, 160); ">Incluir Turma</h1>

                    <div class="row">
                        <div class="col">
                            <p class="pselect">Nome</p>
                            <input type="text" id="inpselect" placeholder="Digite a turma" name="nome">
                            <br><br>
                            <p class="pselect">Curso</p>
                            <?php
                            $sql = 'select * from curso order by nome';
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                echo '<select  id="selcurso"  name="idcurso" required>';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($row['id'] == $idcurso) {
                                        echo '<option value ="' . $row['id'] . '" selected>' . $row['nome'] . '</option>';
                                    } else {
                                        echo '<option value ="' . $row['id'] . '" >' . $row['nome'] . '</option>';
                                    }
                                }
                                echo '</select>';
                            }
                            ?>
                            <br><br>
                            <p class="pselect">Data Inicial</p>
                            <input type="date" id="inpselect" name="data_periodo_inicial">
                            <br><br>
                            <p class="pselect">Data Final</p>
                            <input type="date" id="inpselect" name="data_periodo_final">
                        </div>


                        <div class="col">

                            <p class="pselect">Horário</p>
                            <input type="text" id="inpselect" placeholder="Horário" name="horario">
                            <br><br>
                            <p class="pselect">Carga Horária</p>
                            <input type="text" id="inpselect" placeholder="Carga horária" name="cargahoraria">
                            <br><br>
                            <p class="pselect">Instrutor</p>
                            <?php
                            $sql = 'select * from instrutor order by nome';
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                echo '<select id = "selcurso" name="idinstrutor" style="">';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($row['id'] == $idinstrutor) {
                                        echo '<option value ="' . $row['id'] . '" selected>' . $row['nome'] . '</option>';
                                    } else {
                                        echo '<option value ="' . $row['id'] . '" >' . $row['nome'] . '</option>';
                                    }
                                }
                                echo '</select>';
                            }
                            ?>


                        </div>
                    </div>

                    <div class="row">

                        <div class="col">


                            <a href="turselect.php">
                                <button type="button" class="btn btn-warning"
                                    style="width: 120px;font-size: 25px;  color: white;">Voltar</button>
                            </a>


                        </div>


                        <div class="col">
                            <button type="submit" name="submit" class="btn btn-primary"
                                style="width: 120px;font-size: 25px; color: white;">Salvar</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>

    </center>

</body>

</html>