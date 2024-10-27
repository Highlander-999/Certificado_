<?php session_start();


$nome = $_SESSION['nome'];
$TITULADO = $_SESSION['TITULADO'];
$filho = $_SESSION['filho'];
$pai = $_SESSION['pai'];
$mae = $_SESSION['mae'];
$nacionalidade = $_SESSION['nacionalidade'];
$natural = $_SESSION['natural'];
$cep = $_SESSION['cep'];
$DO = $_SESSION['DO'];
$ALUNO = $_SESSION['ALUNO'];
$estado = $_SESSION['Estado'];
$ato = $_SESSION['ato'];
$nascido = $_SESSION['nascido'];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Certificado</title>


</head>

<body style="background-color: rgb(249, 244, 190);">

    <center>

        <div style="background-color: white; margin-top: 30px; width: 1500px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                "><br>

            <div class="justify" style="width: 1300px;">
                <h2 style="padding-top: 20px;"> SENAC – UNIDADE DE ENSINO TÉCNICO DO CEP DE GORVENADOR VALADARES</span>
                </h2>


                <h4>Endereço <span id="xendereco">Av. JK, 1825 - Vila Bretas - Governador Valadares/MG <br>
                        Ato de criação: Portaria SEEMG nº 520/05, de 03 de Maio de 2005<br>
                        Mudança de denominação: Resolução CR/SENACMG nº 709/12, de 29 de novembro de 2012 <br>
                        <?php echo $ato; ?> 
                </h4>

                <br>


                <h3 style="margin-top: 25px;">DIPLOMA DE TÉCNICO DE NIVEL MÉDIO</h3>
                <br>

                
                O Diretor da unidade educacional <strong style="color: black;"> SENAC - UNIDADE DE ENSINO
                    TÉCNICO DO
                    CEP DE GORVENADOR VALADARES,</strong> confere a 
                    <br>
                <br>

                <span id="nome" style="font-size:35px;font-family: 'Merriweather', serif;"><?php echo $nome; ?></span>
            </div>
            <br><br>



            <div class="justificado" style="width: 1250px; font-size: 17px; text-align: justify; margin-left: 10px;">

                <?php echo $filho; ?> de <?php echo $pai; ?> e de
                <?php echo $mae; ?> , <?php echo $nacionalidade; ?>
                , 
                natural de  <?php echo $natural; ?> , <?php echo $estado; ?>, nascido em ---- de ------ de
                ------, Carteira de Identidade nº -------------- - 
                (órgão expedidor/UF), o presente Diploma por haver concluído em ------ de -------------- de -------,
                a Habilitação Profissional de TÉCNICO EM --- 
                ----------------------------------, do Eixo Tecnológico
                ---------------------------------------------------.

                <br><br><br>

                Título profissional conferido: <strong>TÉCNICO EM </strong>
                -------------------------------------

                <br>
                <strong>
                    Fundamentação legal: <span style="color: rgb(62, 123, 220);"> Diploma expedido de acordo com o
                        Art. 24, inc. VII e Art. 36D da Lei Federal n.º 9.394, de 20 de dezembro de 1996
                    </span></strong>

            </div>
            <br><br>
            Governador Valadares, --------- de ------------------------- de -----------------



            <br><br><br>
            <div style="justify-content:center;">
                <table style="border: solid white 0px; ">
                    <tr>
                        <td style="width: 600px; padding-top: 30px; border:solid white 0px;">

                            ____________________________________________________________ <br>
                            ---------------------- <br>
                            SECRETÁRIO ESCOLAR <br>
                            Portaria SENACMG nº -----/-----

                        </td>

                        <td style="width: 600px; border:solid white 0px;">

                            ____________________________________________________________ <br>
                            <?php echo $nome; ?> <br>
                            <?php echo $TITULADO; ?>


                        </td>

                        <td style="width: 600px;  padding-top: 30px;  border:solid white 0px;">

                            _____________________________________________________________ <br>
                            ---------------------- <br>
                            DIRETOR DE ESCOLA <br>
                            Portaria SENACMG nº -----/-----


                        </td>
                    </tr>
                </table>
            </div>

            <br><br>
        </div>



        <div style="background-color: white; margin-top: 30px; width: 1450px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ; margin-top: 200px;">


            <table style="border: solid 1px black;">
                <tr style="border: solid 1px black;">

                    <td colspan="5">
                        <pre style="font-size: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  text-align: left; "><strong style="color: black;">CURSO TÉCNICO EM ----------------------     CARGA HORÁRIA: --------- HORAS </strong></pre>
                    </td>

                </tr>
                <tr style="border: solid 1px black;">

                    <td colspan="5">
                        <pre style="font-size: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: left;"><strong style="color: black;">NOME <?php echo $DO; ?> <?php echo $ALUNO; ?>:</strong> ---------------------- </pre>
                    </td>

                </tr>
                <tr style="border: solid 1px black;">

                    <td colspan="2" style="text-align: left; width: 1400px;">
                        <pre style="font-size: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center;">
<strong style="color: black;">ENSINO MÉDIO OU EQUIVALENTE</strong></pre>
                        <pre style="font-size: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: left;">
ANO DE CONCLUSÃO:<span id="unidade1"></span>
   
ESTABELECIMENTO: <span id="unidade2"></span>

ENDEREÇO:        <span id="unidade3"></span>
                       
MUNICÍPIO/UF:    <span id="unidade4"></span>

</pre>
                    </td>

                    <td colspan="2" style="width: 600px;">
                        <pre style="font-size: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center;">

 <strong style="color: black;">OBSERVAÇÕES  </strong>


-------------------------------------------------------------------







                            </pre>

                    </td>

                </tr>

                <tr>
                    <td>
                        <h4 style="color: black;">REGISTRO DE EXPEDIÇÃO <br>
                            (Título expedido nos termos do Art. 49, da Resolução <br>
                            CNE/CP nº 01/2021)</h4><br>
                        <div style="text-align: justify;">

                            <div style="margin-bottom: 10px;"> Registro n° </div>

                            <div style="margin-bottom: 10px;"> Folha n° </div>

                            <div style="margin-bottom: 30px;"> Livro n° </div>


                            Governador Valadares, <span id="dataexp">22 de dezembro de 2023.</span><br>
                        </div>
                        <div style="margin-top: 30px; font-size: 13px;">
                            .................................................................... <br>
                            Daniele Morura Soares Farias <br>
                            Diretor de Escola <br>
                            Portaria SENACMG n° 0106/2020
                        </div>
                    </td>

                    <td>
                        <strong> APROVAÇÃO DO PLANO DE CURSO</strong><br>
                        Art. 25 da Revolção CNE/CP n° 01/2021 <br><br>
                        <span id=""> Revolção CR/SENAC/MG n° 400, de 02/09/2021.</span>


                        <hr style="margin-top: 20px; border: solid 1px;">

                        Curso cadastrado no SISTEC/MEC EM <br>
                        04/08/2009, nos termos da alínea A, inciso IV, Art. <br>
                        6° da Portaria MEC n° 31/2022. <br>

                        <hr style="margin-top: 20px; border: solid 1px;">
                        <div>
                            <strong> CÓDIGO AUTENTICADOR DO DIPLOMA</strong><br>
                            <br><br><br>
                            <span id="cad">xxxxxxxxxxx</span>
                        </div>

                    </td>

                    <td>
                        <strong>ORGÃO DE FISCALIZAÇÃO PROFISSIONAL</strong>
                        <pre>

















                            </pre>




                    </td>
                </tr>


            </table>

        </div>

        </div>



    </center>
    <script src="pesq2023.js"></script>
</body>

</html>