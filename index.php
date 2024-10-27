<?php
session_start();
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
        label {
            text-align: left;
        }

        p {
            text-align: left;
            font-weight: 600;
            font-size: 22px;
        }

        input {
            margin-right: 100%;
            width: 90%;
            height: 35px;
            padding-left: 10px;
            border-radius: 5px;
            border: solid 1px;
            transition: 0.3s ease-in-out;
        }

        input:focus {
            border: solid 1px #0c89fc;
            outline: none;
            transition: 0.2s ease-in-out;

        }

        button {
            background-color: #0254A0;
            color: white;
            margin-top: 50px;
            font-size: 30px;
            height: 60px;
            border: none;
            border-radius: 5px;
            width: 200px;
            cursor: pointer;
        }

        button:hover {
            background-color: #02488A;
        }

        .jumbotron {
            border: solid 2px #28a7e9;
            padding-top: 50px;
            padding-bottom: 25px;
        }
    </style>
    <title>Login Certificado</title>
</head>

<body style="background-image: url(img/fundo.jpg);background-size: cover;  background-attachment: fixed;">

    <center>

        <div class="container">


            <div class="jumbotron"
                style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.700);
                            margin-top: 100px;box-shadow: 0px 0px 55px 7px #cfcfcfc9;width: 40%;
                            height: fit-content;">

                <?php
                if (isset($_SESSION['nao_autenticado'])) :
                ?>
                    <div class="alert alert-danger text-center">
                        <p>Usuário ou senha inválidos.</p>
                    </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>

                <form action="login.php" method="POST">
                    <h1 style="color: #0254A0;text-align: center;">Login</h1>
                    <br>
                    <p>Digite seu email</p>
                    <input placeholder="Email" type="email" name="email">
                    <br><br>
                    <p>Digite sua senha</p>
                    <input placeholder="Senha" type="password" name="senha">
                    <button type="submit" name="submit" id="login">Login</button>
                </form>
            </div>

        </div>

    </center>



</body>

</html>