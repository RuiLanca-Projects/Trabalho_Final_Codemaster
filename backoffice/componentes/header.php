<?php

if(!verificarLogado()){

    header("Location:index.php");
    exit();
}



?>





<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- CKEDITOR -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>    
    <link rel="stylesheet" href="css\estilo_backoffice.css">
</head>
<body>

<header>

       <div class="caixa">
            <div class="row">
                <col-12 class="text-center">
                    <h1>Backoffice</h1> 
                </col-12>
            </div>

            <div class="row">
                <div class="nav col-12 d-flex justify-content-center gap-4">
                    <a href="index.php">Início</a>
                    <a href="home.php">Home</a>
                    <a href="autor.php">Autor</a>
                    <div class="dropdown">
                        <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Carousel
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="carousel_criar.php">Criar</a></li>
                            <li><a class="dropdown-item" href="carousel.php">Editar</a></li>                            
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Livros
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="livros_criar.php">Criar</a></li>
                            <li><a class="dropdown-item" href="livros.php">Editar</a></li>                            
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Imprensa
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="imprensa_criar.php">Criar</a></li>
                            <li><a class="dropdown-item" href="imprensa.php">Editar</a></li>                            
                        </ul>
                    </div>
                    <a href="destaques.php">Destaques</a>
                    <a href="contactos.php">Contactos</a>
                    <a href="logout.php">Logout</a>
                    
                </div>
            </div>
       </div>

</header>


    
</body>
</html>