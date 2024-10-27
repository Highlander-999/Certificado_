<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$sql = 'select id, nome, email, contato from aluno order by 1';
$pesqnome = '';
if (isset($_POST['submit'])) {
    $pesqnome = $_POST['pesqnome'];
    $sql = "select * from aluno where nome like '%$pesqnome%' order by 1";
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
    <link rel="stylesheet" href="dnv.css">
    <style>
        .btn-success, .btn-danger, #btn-primary
        {
            margin: 0;
        }

        .btn-success{
            margin-right: 10px;
        }

        .btn-danger{
            margin-left: 10px;
        }

        #btn-primary
        {
            margin-left: 20px;
        }
        
    </style>


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
                <a id="atop" href="pesq2020.php" style="text-decoration: none;">CERTIFICADO 2020</a>
                <a id="atop" href="pesq2023.php" style="text-decoration: none;">CERTIFICADO 2023</a>
            </div>
        </div>
    </div>
    <center>


        <div class="container-fluid" style="width: 1250px;">


            <div class="jumbotron" style="padding-top: 15px;">

                <form method="POST">
                    <h1 style="color: rgb(2, 84, 160);">Consultar Aluno</h1>

                    <div class="row">
                        <div class="col">
                            <p class="pselect">Nome</p>
                            <input type="text" id="inpselect" name="pesqnome" placeholder="Nome"
                                value="<?php echo $pesqnome ?>">

                            <button type="submit" name="submit" class="btn btn btn-primary"
                                style="width: 120px;font-size: 25px; color: white;margin-right: 10px;">Consulta</button>

                            <a href="aluselect.php" style="text-decoration: none;">
                                <button type="button" class="btn btn-secondary"
                                    style="width: 120px;font-size: 25px; color: white; margin-left: 10px;">Limpar</button>
                            </a>

                            <a href="aluinsert.php" style="text-decoration: none;">
                                <button type="button" class="btn btn-info"
                                    style="width: 120px;font-size: 25px; color: white;">Inclusão</button>
                            </a>

                            <!-- <a href="logselect.php">
                                <button type="button" class="btn btn-info"
                                    style="width: auto;font-size: 20px; color: white;">LOG</button>
                            </a> -->
                           <a href="logselect.php"><img id="log" src="../img/log.png" style="height: 36px;width: 36px;"></a>
                        </div>
                    </div>

               
            </div>

            <table class="table table-bordered" style="background-color: white; text-align: center;">
                <thead style="background-color: rgb(2, 84, 160);">
                    <tr>
                        <th scope="col" style="color: white;">Código</th>
                        <th scope="col" style="color: white;">Nome</th>
                        <th scope="col" style="color: white;">E-Mail</th>
                        <th scope="col" style="color: white;">Contato</th>
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
                        <td style='font-size: 20px;'>" . $row['email'] . "</td>
                        <td style='font-size: 20px;'>" . $row['contato'] . "</td>
                        <td style='width:30%;'>
                        <a href='aluupdate.php?updateid={$row['id']}'
                         <button type='button' class='btn btn-success'>
                         Alterar
                         </button>
                         </a>

                         <a href='aludelete.php?deleteid={$row['id']}'
                         <button type='button' class='btn btn-danger'>
                         Apagar
                         </button>
                         </a>

                         <a href='a_tselect.php?a_tid={$row['id']}'
                         <button type='button'  class='btn btn-primary' id = 'btn-primary'>
                         Turma
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



        </div>

    </center>

</body>

</html>