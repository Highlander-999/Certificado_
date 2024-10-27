<?php
session_start();
include('../verifica_login.php');
include('../connect.php');

$nome = $_GET['nome'];
$turma = $_GET['turma'];
$instrutor = $_GET['instrutor'];
$curso = $_GET['curso'];
$horario = $_GET['horario'];
$ordem = $_GET['ordem'];
$pesqcep = "";
$pesqdata = "";

$datainicial = $_GET['datainicial'];
$datainicial = substr($datainicial, 8, 2) .
    substr($datainicial, 4, 4) .
    substr($datainicial, 0, 4);

$datafinal = $_GET['datafinal'];
$datafinal = substr($datafinal, 8, 2) .
    substr($datafinal, 4, 4) .
    substr($datafinal, 0, 4);

$data_ini = substr($datainicial, 3, 2);
$data_fim = substr($datafinal, 3, 2);

$dia_ini = substr($datainicial, 0, 2);
$dia_fim = substr($datafinal, 0, 2);

$ano_ini = substr($datainicial, 6, 4);
$ano_fim = substr($datafinal, 6, 4);


if ($data_ini == "01") {
    $mes_ini = "Janeiro";
} elseif ($data_ini == "02") {
    $mes_ini = "Fevereiro";
} elseif ($data_ini == "03") {
    $mes_ini = "Março";
} elseif ($data_ini == "04") {
    $mes_ini = "Abril";
} elseif ($data_ini == "05") {
    $mes_ini = "Maio";
} elseif ($data_ini == "06") {
    $mes_ini = "Junho";
} elseif ($data_ini == "07") {
    $mes_ini = "Julho";
} elseif ($data_ini == "08") {
    $mes_ini = "Agosto";
} elseif ($data_ini == "09") {
    $mes_ini = "Setembro";
} elseif ($data_ini == "10") {
    $mes_ini = "Outubro";
} elseif ($data_ini == "11") {
    $mes_ini = "Novembro";
} elseif ($data_ini == "12") {
    $mes_ini = "Dezembro";
};

if ($data_fim == "01") {
    $mes_fim = "Janeiro";
} elseif ($data_fim == "02") {
    $mes_fim = "Fevereiro";
} elseif ($data_fim == "03") {
    $mes_fim = "Março";
} elseif ($data_fim == "04") {
    $mes_fim = "Abril";
} elseif ($data_fim == "05") {
    $mes_fim = "Maio";
} elseif ($data_fim == "06") {
    $mes_fim = "Junho";
} elseif ($data_fim == "07") {
    $mes_fim = "Julho";
} elseif ($data_fim == "08") {
    $mes_fim = "Agosto";
} elseif ($data_fim == "09") {
    $mes_fim = "Setembro";
} elseif ($data_fim == "10") {
    $mes_fim = "Outubro";
} elseif ($data_fim == "11") {
    $mes_fim = "Novembro";
} elseif ($data_fim == "12") {
    $mes_fim = "Dezembro";
};

date_default_timezone_set('America/Sao_Paulo');
$hoje = date(" d/m/Y");
$hora = date("Hi");

$data_hoj = substr($hoje, 4, 2);
$dia_hoj = substr($hoje, 0, 3);
$ano_hoj = substr($hoje, 7, 5);

if ($data_hoj == "01") {
    $mes_hoj = "Janeiro";
} elseif ($data_hoj == "02") {
    $mes_hoj = "Fevereiro";
} elseif ($data_hoj == "03") {
    $mes_hoj = "Março";
} elseif ($data_hoj == "04") {
    $mes_hoj = "Abril";
} elseif ($data_hoj == "05") {
    $mes_hoj = "Maio";
} elseif ($data_hoj == "06") {
    $mes_hoj = "Junho";
} elseif ($data_hoj == "07") {
    $mes_hoj = "Julho";
} elseif ($data_hoj == "08") {
    $mes_hoj = "Agosto";
} elseif ($data_hoj == "09") {
    $mes_hoj = "Setembro";
} elseif ($data_hoj == "10") {
    $mes_hoj = "Outubro";
} elseif ($data_hoj == "11") {
    $mes_hoj = "Novembro";
} elseif ($data_hoj == "12") {
    $mes_hoj = "Dezembro";
}
$data_hoj = $dia_hoj . " de " . $mes_hoj . " de " . $ano_hoj;
$nomereduz = substr($nome, 0, strpos($nome, ' '));

if (isset($_POST['submit'])) {
    $pesqcep = $_POST['pesqcep'];
    $pesqdata = $_POST['pesqdata'];

    if ($pesqdata != "") {
        $data_hoj = $pesqdata;
    }

    $conteudo1 = file_get_contents('certificadoparte1.txt');
    $frase1 = "O servico nacional certifica que " . $nome . " foi aprovado(a) no Curso " . $curso . " ,no período de " . $dia_ini . " de " . $mes_ini .  " de " . $ano_ini . " a " . $dia_fim . " de " . $mes_fim . " de " . $ano_fim . " na cidade de Governador Valadares/MG. \par Governador Valadares, " . $data_hoj . ". \par  _____________________________________________________ " . "\par CEP " . $pesqcep . "\par Registro no Senac: " . $turma . "/" . $ordem;

    $frase1_substituida = str_replace("Á", "\\'c1", $frase1);
    $frase1_substituida = str_replace("É", "\\'c9", $frase1_substituida);
    $frase1_substituida = str_replace("Í", "\\'cd", $frase1_substituida);
    $frase1_substituida = str_replace("Ó", "\\'d3", $frase1_substituida);
    $frase1_substituida = str_replace("Ú", "\\'da", $frase1_substituida);
    $frase1_substituida = str_replace("Ç", "\\'c7", $frase1_substituida);
    $frase1_substituida = str_replace("Ã", "\\'c3", $frase1_substituida);
    $frase1_substituida = str_replace("Õ", "\\'d5", $frase1_substituida);
    $frase1_substituida = str_replace("á", "\\'e1", $frase1_substituida);
    $frase1_substituida = str_replace("é", "\\'e9", $frase1_substituida);
    $frase1_substituida = str_replace("í", "\\'ed", $frase1_substituida);
    $frase1_substituida = str_replace("ó", "\\'f3", $frase1_substituida);
    $frase1_substituida = str_replace("ú", "\\'fa", $frase1_substituida);
    $frase1_substituida = str_replace("ç", "\\'e7", $frase1_substituida);
    $frase1_substituida = str_replace("ã", "\\'e3", $frase1_substituida);
    $frase1_substituida = str_replace("õ", "\\'f5", $frase1_substituida);
    $frase1_substituida = str_replace("â", "\\'e2", $frase1_substituida);
    $frase1_substituida = str_replace("ô", "\\'f4", $frase1_substituida);
    $frase1_substituida = str_replace("Â", "\\'c2", $frase1_substituida);
    $frase1_substituida = str_replace("Ô", "\\'d4", $frase1_substituida);


    $conteudo2 = file_get_contents('certificadoparte2.txt');
    $frase2 = " " . $nome . " \par Numero de serie: " . $turma . "/" . $ordem;

    $frase2_substituida = str_replace("Ç", "\\'c7", $frase2);
    $frase2_substituida = str_replace("Á", "\\'c1", $frase2_substituida);
    $frase2_substituida = str_replace("É", "\\'c9", $frase2_substituida);
    $frase2_substituida = str_replace("Í", "\\'cd", $frase2_substituida);
    $frase2_substituida = str_replace("Ó", "\\'d3", $frase2_substituida);
    $frase2_substituida = str_replace("Ú", "\\'da", $frase2_substituida);
    $frase2_substituida = str_replace("Ã", "\\'c3", $frase2_substituida);
    $frase2_substituida = str_replace("Õ", "\\'d5", $frase2_substituida);
    $frase2_substituida = str_replace("á", "\\'e1", $frase2_substituida);
    $frase2_substituida = str_replace("é", "\\'e9", $frase2_substituida);
    $frase2_substituida = str_replace("í", "\\'ed", $frase2_substituida);
    $frase2_substituida = str_replace("ó", "\\'f3", $frase2_substituida);
    $frase2_substituida = str_replace("ú", "\\'fa", $frase2_substituida);
    $frase2_substituida = str_replace("ç", "\\'e7", $frase2_substituida);
    $frase2_substituida = str_replace("ã", "\\'e3", $frase2_substituida);
    $frase2_substituida = str_replace("õ", "\\'f5", $frase2_substituida);
    $frase2_substituida = str_replace("â", "\\'e2", $frase2_substituida);
    $frase2_substituida = str_replace("ô", "\\'f4", $frase2_substituida);
    $frase2_substituida = str_replace("Â", "\\'c2", $frase2_substituida);
    $frase2_substituida = str_replace("Ô", "\\'d4", $frase2_substituida);

    $conteudo3 = file_get_contents('certificadoparte3.txt');
    $arquivogerado = $conteudo1 . $frase1_substituida . $conteudo2 . $frase2_substituida . $conteudo3;
    $arquivo_nome = './certificado/' . $nomereduz . "_" . $turma . "_" . $hora . '.rtf';
    echo '<h2>Nome do arquivo:' . $arquivo_nome . '</h2>';
    file_put_contents($arquivo_nome, $arquivogerado);
    echo '<a href="' . $arquivo_nome . '"> <button type="button" class="btn btn-primary" style="width: 230px;font-size: 25px; color: white; margin-left: 10px;">Baixar Certificado</button></a> <br>';
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="dnv.css">
    <title>Certificado SENAC</title>
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



    <form method="POST">
        <center>
            <div class="jumbotron" style="width: fit-content;">

                <div class="container">


                    <div class="row">

                        <div class="col form-group">
                            <p class="pselect">Nome Completo:</p>
                            <input type="text" id="inpnoselect" placeholder="Nome" value="<?php echo $nome ?>" readonly><br><br>
                        </div>

                        <div class="col form-group">
                            <p class="pselect">Turma:</p>
                            <input type="text" id="inpnoselect" placeholder="Nome" value="<?php echo $turma ?>" readonly><br><br>
                        </div>

                        <div class="col form-group">
                            <p class="pselect">Instrutor:</p>
                            <input type="text" id="inpnoselect" placeholder="Nome" value="<?php echo $instrutor ?>" readonly><br><br>
                        </div>

                        <div class="col form-group">
                            <p class="pselect">Curso:</p>
                            <input type="text" id="inpnoselect" placeholder="Nome" value="<?php echo $curso ?>" readonly><br><br>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col form-group">
                            <p class="pselect">Horário:</p>
                            <input type="text" id="inpnoselect" placeholder="Nome" value="<?php echo $horario ?>" readonly><br><br>
                        </div>

                        <div class="col form-group">
                            <p class="pselect">Data de Início:</p>
                            <input type="text" id="inpnoselect" placeholder="Nome" value="<?php echo $datainicial ?>" readonly><br><br>
                        </div>

                        <div class="col form-group">
                            <p class="pselect">Data de Término:</p>
                            <input type="text" id="inpnoselect" placeholder="Nome" value="<?php echo $datafinal ?>" readonly><br><br>
                        </div>

                        <div class="col form-group">
                            <p class="pselect">Ordem:</p>
                            <input type="text" id="inpnoselect" placeholder="Nome" value="<?php echo $ordem ?>" readonly><br><br>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col form-group">
                            <p class="pselect">CEP:</p>
                            <input type="text" id="inpselect" placeholder="CEP" name="pesqcep" value="<?php echo $pesqcep ?>"><br><br>
                        </div>

                        <div class="col form-group">
                            <p class="pselect">DIA:</p>
                            <input type="text" id="inpselect" placeholder="Data" name="pesqdata" value="<?php echo $pesqdata ?>"><br><br>
                        </div>

                    </div>

                    <br><br>


                    <a href="conselect.php" style="text-decoration: none;">
                        <button type="button" class="btn btn-secondary" style="width: 150px;font-size: 25px; color: white; margin-left: 10px;">Voltar</button>
                    </a>

                    <button name='submit' type='submit' class="btn btn-primary" style="width: 150px;font-size: 25px; color: white; margin-left: 10px;"> certificado</button>


                </div>
            </div>
        </center>

    </form>

</body>

</html>