<?php
session_start();

if (isset($_POST['submit'])) {

    $_SESSION['nomealuno'] = $_POST['nomealuno'];
    $_SESSION['atode'] = $_POST['atode'];
    $_SESSION['cep'] = $_POST['cep'];
    $_SESSION['pai'] = $_POST['pai'];
    $_SESSION['mae'] = $_POST['mae'];
    $_SESSION['nacionalidade'] = $_POST['nacionalidade'];
    $_SESSION['naturalidade'] = $_POST['naturalidade'];
    $_SESSION['estado'] = $_POST['estado'];
    $_SESSION['nascido'] = $_POST['nascido'];
    $_SESSION['ci'] = $_POST['ci'];
    $_SESSION['concluido'] = $_POST['concluido'];
    $_SESSION['tecnico'] = $_POST['tecnico'];
    $_SESSION['tecnologico'] = $_POST['tecnologico'];
    $_SESSION['titulado'] = $_POST['titulado'];
    $_SESSION['data'] = $_POST['data'];

    header('Location: certificado2020.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Input</title>
</head>

<center>

    <body style="background-color: rgb(249, 244, 190);">
        <div class="container">

            <br><br>
            <form action="" method="post">
                <div class="jumbotron"
                    style="border-radius: 30px; border: solid 2px; background-color: rgba(255, 255, 255, 0.700);">

                    <div class="row">
                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Nome</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                placeholder="Nome do Aluno"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="nomealuno"> <br><br>
                        </div>

                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Cep</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Cep"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="cep">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Ato de</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ato de"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="atode"> <br><br>
                        </div>

                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Pai</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="pai"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="pai"> <br><br>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Mãe</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Mãe"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="mae"> <br><br>
                        </div>

                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Nacionalidade</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nacionalidade"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="nacionalidade"> <br><br>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Naturalidade</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Naturalidade"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="naturalidade"> <br><br>
                        </div>

                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Estado</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Estado"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="estado"> <br><br>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Nascido</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nascido"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="nascido"> <br><br>
                        </div>

                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Ci</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ci"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="tecnico
                                "> <br><br>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Concluido</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Concluido"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="concluido"> <br><br>
                        </div>

                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Técnico</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Técnico"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="tecnico"> <br><br>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Eixo Tecnológico</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Eixo Tecnológico"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="tecnologico"> <br><br>
                        </div>

                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Titulo Profissional</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Titulo Profissional"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name=""> <br><br>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Data Certificado</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Data Certificado"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="data"> <br><br>
                        </div>

                        <div class="col">
                            <label style="color: black; font-family: cursive; font-size: 20px;">Titulado</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Titulado"
                                style="border: solid 2px; width: 230px; background-color: rgba(240, 255, 255, 0.695); font-size: 20px; font-family: cursive;"
                                name="titulado"> <br><br>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col">
                            <button class="button btn-warning" type="submit" name="submit"
                                style="border: solid 2px; font-family: cursive; border-radius: 5px; font-size: 23px;">Gerar</button>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </body>
</center>