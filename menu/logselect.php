<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
$sql = 'select l.id, u.nome, l.idusuario, l.data, l.hora, l.comando from log l inner join usuario u on u.id = l.idusuario';
$pesqnome = '';
if (isset($_POST['submit'])) {
    $pesqnome = $_POST['pesqnome'];
    $datai = $_POST['datai'];
    $dataf = $_POST['dataf'];
    $xdata = '';
    if ($datai == '') {
        $datai = '0000-00-00';
    };
    if ($dataf == '') {
        $dataf = '3000-12-31';
    };

    $sql = "select l.id, u.nome, l.idusuario, l.data, l.hora, l.comando 
          from log l inner join usuario u on u.id = l.idusuario 
          where nome like '%$pesqnome%' and data between '$datai' and '$dataf' ";
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
    <title>Log</title>
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
                <a id="atop" href="aluselect.php" style="text-decoration: none;">ALUNO</a>
                <a id="atop" href="ususelect.php" style="text-decoration: none;">USUÁRIO</a>
                <a id="atop" href="curselect.php" style="text-decoration: none;">CURSO</a>
                <a id="atop" href="insselect.php" style="text-decoration: none;">INSTRUTOR</a>
                <a id="atop" href="pesq2020.php" style="text-decoration: none;">CERTIFICADO 2020</a>
                <a id="atop" href="pesq2023.php" style="text-decoration: none;">CERTIFICADO 2023</a>
                <a id="atop" href="logselect.php" style="text-decoration: none;color: #28a7e9;">LOG</a>
            </div>
        </div>
    </div>
    <center>



        <div class="container">


            <form method="POST">
                <div class="jumbotron">
                    <h1 style="color: rgb(2, 84, 160); ">Consultar Usuário</h1>


                    <div class="row">
                        <div class="col">
                            <p class="pselect">Nome</p>
                            <input type="text" id="inpselect" name="pesqnome" placeholder="Nome" value="<?php echo $pesqnome ?>" style="width:200px;margin-right: 20px;">
                            <input type="date" id="inpselect" name="datai" placeholder="inicial" value="<?php echo $datai ?>" style="width:200px;margin-right: 20px;">
                            <input type="date" id="inpselect" name="dataf" placeholder="final" value="<?php echo $dataf ?>" style="width:200px;">

                            <button type="submit" name="submit" class="btn btn btn-primary" style="width: 120px;font-size: 25px; color: white;margin-right: 10px;">Consulta</button>

                            <a href="logselect.php" style="text-decoration: none;">
                                <button type="button" class="btn btn-secondary" style="width: 120px;font-size: 25px; color: white; margin-left: 10px;">Limpar</button>
                            </a>

                        </div>
                    </div>

                </div>




                <table class="table table-bordered" style="background-color: white; text-align: center;">
                    <thead style="background-color: rgb(2, 84, 160);">
                        <tr>
                            <th scope="col" style="color: white;">Código</th>
                            <th scope="col" style="color: white;">Usuário</th>
                            <th scope="col" style="color: white;">IdUsuário</th>
                            <th scope="col" style="color: white;">Data</th>
                            <th scope="col" style="color: white;">Hora</th>
                            <th scope="col" style="color: white;">Comando</th>
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
                                    <td style='font-size: 20px;'>" . $row['idusuario'] . "</td>
                                    <td style='font-size: 20px; width: 130px'>" . $data = substr($row['data'], 8, 2) .
                                    substr($row['data'], 4, 4) .
                                    substr($row['data'], 0, 4) . "</td>
                                    <td style='font-size: 20px;'>" . $row['hora'] . "</td>
                                    <td style='font-size: 20px;'>" . $row['comando'] . "</td>
                                    
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