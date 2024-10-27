<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$erro_mensagem = "";
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $contato = $_POST['contato'];
    $turma = $_POST['idturma'];
    $ordem = $_POST['ordem'];
    $sql = "select * from aluno where nome = '$nome'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $erro_mensagem = '<div class="alert alert-danger text-center" style="padding-right: 100px; padding-left: 100px;">
            <p>ERRO: Aluno já cadastrado</p>
        </div>';
    } else {
        $sql = "INSERT INTO aluno (nome, email, contato) VALUES
         ('$nome', '$email', '$contato')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $sql = "select * from aluno where nome = '$nome'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $idaluno = $row['id'];
        }

        if ($turma != '') {
            $sql = "INSERT INTO aluno_turma (idaluno, idturma, ordem) VALUES
            ('$idaluno', '$turma', '$ordem')";
            $result = mysqli_query($con, $sql);
        }

        header('Location: aluselect.php');
    }
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
    <title>Alunos</title>
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
                <a id="atop" href="logselect.php" style="text-decoration: none;">CONSULTA LOG</a>
            </div>
        </div>
    </div>

    <center>

        <div class="container">

            <form method="POST">

                <div class="jumbotron" style="margin-top: 30px;padding-top: 15px;width: fit-content;">

                    <h1 style="color: rgb(2, 84, 160); margin-bottom: 20px;">Incluir Aluno</h1>


                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <p class="pselect">Nome</p>
                                    <input id="inpselect" type="text" name="nome" placeholder="Nome">
                                    <br><br>
                                    <p class="pselect">E-mail</p>
                                    <input id="inpselect" type="text" name="email" placeholder="E-mail">
                                    <br><br>
                                    <p class="pselect">Contato</p>
                                    <input id="inpselect" type="text" name="contato" placeholder="Contato">
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="jumbotron" style="background-color: rgba(218, 211, 211, 0.541); border-radius: 10px; margin-left: 20px; height: auto;">
                                <div class="row">
                                    <div class="col">
                                        <label  style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;">Cadastro Prático de Turma</label>
                                        <p class="pselect">TURMA</p>
                                        <?php
                                        $sqltt = 'select * from turma order by 1';
                                        $resulttt = mysqli_query($con, $sqltt);
                                        if ($resulttt) {
                                            echo '<select name="idturma" id="selcurso"  placeholder="Turma">';
                                            while ($row = mysqli_fetch_assoc($resulttt)) {
                                                echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
                                            }
                                            echo '</select>';
                                        }
                                        ?>

                                       
                                        <br><br>
                                        <p class="pselect">ORDEM</p>
                                        <input type="number" id="inpselect" name="ordem" placeholder="Ordem" style="width: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row" style="margin-top: 25px;">
                        <div class="col">
                            <div class="col">
                                <a href="aluselect.php">
                                    <button type="button" class="btn btn-warning" style="width: 120px;font-size: 25px;  color: white; ">Voltar</button>
                                </a>
                            </div>
                        </div>

                        <div class="col">
                            <a href="">
                                <button type="submit" name="submit" class="btn btn-primary" style="width: 120px;font-size: 25px; color: white; ">Salvar</button>
                            </a>
                        </div>

                        <?php echo $erro_mensagem; ?>

                    </div>

                </div>

            </form>


        </div>

    </center>

</body>

</html>