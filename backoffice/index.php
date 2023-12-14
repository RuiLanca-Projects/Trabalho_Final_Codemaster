<?php

require_once("requisitos.php");

$form = isset($_POST["login"]) && isset ($_POST["senha"]);

if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if(fazerLogin($login, $senha)){
        header("Location: inicio.php");
        exit();
    }
}


?>




<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\estilo.css">
</head>

<body>

    <main class="container">
        <div class="row mx-auto d-flex justify-content-center">
            <div class="col-10 p-3 my-5 bg-light border rounded-2 text-center">
                <h3>Login</h3>
                <br>
                <?php if($form): ?>

                    <h5 style="color:red">LOGIN INVÁLIDO!!!</h5>

                <?php endif; ?>

               <form action="" autocomplete="off" method="POST">
                <input type="text"  name = "login" placeholder="Login" style="text-align:center" autofocus>
                <br><br>
                <input type="password"  name = "senha" placeholder="Senha" style="text-align:center">
                <br><br>
                <input type="submit" value="Aceder">
                <br><br>

               </form>
            </div>
        </div>
    </main>

</body>

</html>