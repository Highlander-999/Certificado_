<?php
session_start();
include('../verifica_login.php');
include('../connect.php');
if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $sql = 'insert into curso (nome) values
    ("' . $nome . '")';
    
    $result = mysqli_query($con, $sql);
    if($result){
        header('Location: curselect.php');
    }else{
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <title>Cursos</title>
</head>

<body style="background-image: url(../img/fundo.jpg); background-image: fixed; background-size: cover;">
<h4>Usuário: <?php echo $_SESSION['nome']; ?> </h4>

    <center>
  
        <div class="container">

            <br>

            <form method="POST">

            <div class="jumbotron" style="border-radius: 30px; border: solid rgba(244, 246, 248, 0.795); background-color: rgba(255, 255, 255, 0.700);">

                <h2 style="color: rgb(2, 84, 160); ">Incluir Curso</h2>

                <br><br>

                <div class="col">

                    <div class="form-group">
                        <label for="">
                            <h5>Nome</h5>
                        </label>
                        <input type="text" name="nome" class="form-control" id="" placeholder="Nome" style="font-size: 25px; width: 400px;">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <div class="col">
                            <a href="">
                                <button type="submit" name="submit" class="btn btn" style="width: 120px;font-size: 25px; color: white; background-color:rgb(2, 84, 160);">Salvar</button>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <a href="./curselect.php">
                            <button type="button" class="btn btn" style="width: 120px;font-size: 25px;  color: white; background-color: rgb(250, 146, 31);">Voltar</button>
                        </a>
                    </div>
                </div>

            </div>

            </form>

        </div>

    </center>

</body>

</html>