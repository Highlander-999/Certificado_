<?php session_start();



if (isset($_POST['submit'])) {
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['titulado'] = $_POST['titulado'];
    $_SESSION['DO'] = $_POST['DO'];
    $_SESSION['ALUNO'] = $_POST['ALUNO'];

    if ($_POST['sexo'] == 'm') {
        $_SESSION['filho'] = 'filho';
    } else {
        $_SESSION['filho'] = 'filha';
    }

    if ($_POST['sexo'] == 'm') {
        $_SESSION['TITULADO'] = 'TITULADO';
    } else {
        $_SESSION['TITULADO'] = 'TITULADA';
    }

    if ($_POST['sexo'] == 'm') {
        $_SESSION['DO'] = 'DO';
    } else {
        $_SESSION['DO'] = 'DA';
    }

    if ($_POST['sexo'] == 'm') {
        $_SESSION['ALUNO'] = 'ALUNO';
    } else {
        $_SESSION['ALUNO'] = 'ALUNA';
    }

    if ($_POST['sexo'] == 'm') {
        $_SESSION['nascido'] = 'nascido';
    } else {
        $_SESSION['nascido'] = 'nascida';
    }

    $_SESSION['cep'] = $_POST['cep'];
    $_SESSION['pai'] = $_POST['pai'];
    $_SESSION['mae'] = $_POST['mae'];
    $_SESSION['ato'] = $_POST['ato'];
    $_SESSION['nacionalidade'] = $_POST['nacionalidade'];
    $_SESSION['natural'] = $_POST['natural'];
    $_SESSION['Estado'] = $_POST['Estado'];
    



    header('Location: certificado2023.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> input </title>
    <style>
        #inp::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
    </style>

</head>

<body style="background-color: rgb(249, 244, 190);">

    <center>
        <form action="" method="post">
            <div class="container">
                <h1 style="padding-top: 30px;">Preenchimento do certificado</h1>
                <div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.906); height: auto; width: 1200px; margin-top: 30px;
                    border-radius: 25px;">
                    <div class="row">
                        <div class="col">

                            <h5 style="text-align: left;"> Nome: </h5>
                            <input type="text" placeholder="Nome" name="nome" style="width: 330px;" value="NICOLAS ANDERSON MANUEL RODRIGUES,"><br> <br>

                            <h5 style="text-align: left;"> Pai: </h5>
                            <input type="text" placeholder="Pai" name="pai" style="width: 330px;" value="Luiz Pedro Henrique Rodrigues "> <br> <br>

                            <h5 style="text-align: left;"> Mãe: </h5>
                            <input type="text" placeholder="Mãe" name="mae" style="width: 330px;" value="Eloá Patrícia Marina "> <br> <br>

                            <h5 style="text-align: left;"> Ato de: </h5>
                            <input type="text" placeholder="Ato de" name="ato" style="width: 400px;" value="Ato de Prorrogação do Curso: Resolução CR/SENACMG nº 142/2022, de 27 de outubro de 2022"> <br> <br>






                            <h5 style="text-align: left;"> Sexo:</h5>

                            <select class="form-control" name="sexo" style="border:solid 1px ; width: 190px; height: 33px; border-radius: 3px;">

                                <option value="m">Masculino</option>
                                <option value="f">Feminino</option>
                            </select>
                            <br>

                            <h5 style="text-align: left;">Nacionalidade:</h5>
                            <input type="text" placeholder="Nacionalidade" name="nacionalidade" value="brasileira"><br><br>

                            <h5 style="text-align: left;"> Carteira de Identidade: </h5>
                            <input type="text" placeholder="Carteira de Identidade" name="identidade" value="43.406.204-2 - (SSP/MG)"> <br> <br>

                            <h5 style="text-align: left;"> Data de nascimento: </h5>
                            <input type="text" placeholder="data de nascimento" name="datanascimento" value="04 de fevereiro de 1999"> <br> <br>

                            <h5 style="text-align: left;"> Habilitação Profissional: </h5>
                            <input type="text" placeholder="Habilitação Profissional" name="habilitacao" value="TÉCNICO EM SEGURANÇA DO TRBALHO"> <br> <br>
                            
                            <h5 style="text-align: left;"> Eixo Tecnológico : </h5>
                            <input type="text" placeholder="Eixo Tecnológico" name="eixotecnologico" value="SEGURANÇA"> <br> <br>

                            <h5 style="text-align: left;"> Fundamentação legal: </h5>
                            <input type="text" placeholder="Fundamentação legal" name="fundamentacao" value="Diploma expedido de acordo com o Art. 24, inc. VII e Art. 36D da Lei Federal n.º 9.394, de 20 de dezembro de 1996."> <br> <br>

                            <h5 style="text-align: left;"> Data certificado: </h5>
                            <input type="text" placeholder="Data certificado" name="datacert" value="22 de dezembro de 2023"> <br> <br>
                            
                            
                            
                        </div>
                        <div class="col">


                            <h5 style="text-align: left;">Natural de:</h5>
                            <input type="text" placeholder="natural" name="natural" value="Água Boa"> <br> <br>

                            <h5 style="text-align: left;"> Estado: </h5>
                            <input type="text" placeholder="Estado" name="estado" value="Minas Gerais"> <br> <br>

                            <h5 style="text-align: left;"> Curso tecnico em: </h5>
                            <input type="text" placeholder="Curso tecnico em" name="tecnivo" value="Curso tecnico em"> <br> <br>

                            <h5 style="text-align: left;"> Carga horario: </h5>
                            <input type="text" placeholder="xxx" name="ch" value="xxx"> <br> <br>

                            <h5 style="text-align: left;"> xxx: </h5>
                            <input type="text" placeholder="xxx" name="xxx" value="xxx"> <br> <br>
                            
                            <h5 style="text-align: left;"> xxx: </h5>
                            <input type="text" placeholder="xxx" name="xxx" value="xxx"> <br> <br>

                            <h5 style="text-align: left;"> xxx: </h5>
                            <input type="text" placeholder="xxx" name="xxx" value="xxx"> <br> <br>

                            <h5 style="text-align: left;"> xxx: </h5>
                            <input type="text" placeholder="xxx" name="xxx" value="xxx"> <br> <br>

                            <h5 style="text-align: left;"> xxx: </h5>
                            <input type="text" placeholder="xxx" name="xxx" value="xxx"> <br> <br>
                            
                            <h5 style="text-align: left;"> xxx: </h5>
                            <input type="text" placeholder="xxx" name="xxx" value="xxx"> <br> <br>

                            <h5 style="text-align: left;"> xxx: </h5>
                            <input type="text" placeholder="xxx" name="xxx" value="xxx"> <br> <br>

                            <h5 style="text-align: left;"> xxx: </h5>
                            <input type="text" placeholder="xxx" name="xxx" value="xxx"> <br> <br>
                            
                            <h5 style="text-align: left;"> xxx: </h5>
                            <input type="text" placeholder="xxx" name="xxx" value="xxx"> <br> <br>

                        </div>
                    </div>



                    <button type="submit" name="submit" class="btn btn-secondary" style="width: 100px; height: 40px; background-color: rgb(0, 0, 0);">enviar</button>


                </div>
            </div>

        </form>

    </center>

</body>

</html>