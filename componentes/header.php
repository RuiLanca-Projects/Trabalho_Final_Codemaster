<?php

$menu_livros = getMenuLivros();


$carousel = getTodosCarousel();

?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="funcoes.js"></script>
</head>

<body >
<header>
        <div class="container-fluid px-0">
            <div class="row" id="titulo-nav">
                <div class="titulo_e_nav ml-3 mt-4 px-0" >
                    <div class="col-12 px-0 d-flex justify-content-around align-items-center d-md-block "  >
                        <div class="titulo ">
                            <div class="row">
                                <div class="col-12 text-center">                                    
                                    <h1 id="titulo"><b>SEBASTIÃO ALVES</b></h1>
                                </div>
                            </div>
                        </div>
                       <div class="d-none d-md-block">
                        <hr>
                       </div>    
                                               
                        <nav class="navbar navbar-expand-md  " id="nav" >
                            <div class="container-fluid ">

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon " id="botao-menu" onclick="mudarImagemHamburger()"></span>                                    
                                </button>
                                <div class="collapse navbar-collapse d-md-flex justify-content-center"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav mb-2 gap-3 mb-lg-0 " id="menu-livros">
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($pagina_actual == "home") ? "active" : "";?>" aria-current="page" 
                                                href="index.php"><b>HOME</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($pagina_actual == "autor") ? "active" : "";?>" href="autor.php#titulo-livro" ><b>Autor</b></a>
                                        </li>
                                        <li class="nav-item dropdown " >
                                            <a class="nav-link dropdown  <?= ($pagina_actual == "livros") ? "active" : "";?>" id="livros"   role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                LIVROS
                                            </a>
                                        
                                            <ul class="dropdown-menu p-4 rounded-0 border-0 " >
                                                
                                                <?php foreach($menu_livros as $l): ?>
                                                    <li><a class="dropdown-item submenu p-2" href="livros.php?id=<?= $l["id"];?>#caixa-livro2" id="hover-drop">  <?= $l["titulo"];?></a></li>                                             
                                                <?php endforeach; ?>    

                                            </ul>
                                        </li>                                        
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($pagina_actual == "imprensa") ? "active" : "";?>" href="imprensa.php#lancamento">IMPRENSA</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link <?= ($pagina_actual == "contactos") ? "active" : "";?>" href="contactos.php#titulo-livro">CONTACTOS</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </nav>                                
                        
                    </div>
                    <div class="separador">
                        <div class="row">
                            <div class="col-12 d-md-none">
                                <hr id="hr1">
                            </div>
                        </div>
                    </div> 
                    
                   
                </div>
            </div>
        </div>
      
        

 

        <div class="carousel-container-fluid px-0 d-lg-block d-none ">
            <div class="row" >
                <div class="col-12 px-0">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators ">
                        <?php foreach($carousel as $i => $c): ?>
                            <button type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide-to="<?=$i?>" <?= ($i == 0) ? "class='active' aria-current='true'" : ""; ?>
                                aria-label="Slide 1"></button>
                        <?php endforeach; ?>
    
                        </div>

                        <div class="carousel-inner ">

                            <?php foreach($carousel as $i => $c): ?>
                                <div class="carousel-item <?=($i == 0) ? "active" : ""; ?>">
                                    <img src="<?= $c["imagem_desktop"];?>" class="d-block w-100" alt="Senhora" id="img_livro">
                                    <div class="carousel-caption mb-3 d-md-block">
                                        <h3><?= $c["observacao"];?></h3>
                                        <h2><?= $c["titulo"];?></h2>
                                        <p><?= $c["texto"];?></p>
                                            <a href="livros.php?id=<?=$c["id"]?>#titulo-livro"><button id="btn-Saber_Mais"></button></a>
                                        

                                    </div>

                                </div>                 
                            <?php endforeach; ?>



                        </div>



                    </div>


                </div>


            </div>
        </div>
        
        
        
        <div class="carousel-container-fluid px-0 d-md-block d-lg-none ">
            <div class="row">
                <div class="col-12  px-0">

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        
                    <div class="carousel-indicators" > 
                            <div class="carousel-indicators-mobile " >
                                    <?php foreach($carousel as $i => $c): ?>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="<?=$i?>" <?= ($i == 0) ? "class='active' aria-current='true'" : ""; ?>
                                        aria-label="Slide 1"></button>
                                    <?php endforeach; ?>
                            </div>                           
                            
                    </div>

                        <div class="carousel-inner">
                            

                        <?php foreach($carousel as $i => $c): ?>
                        
                            <div class="carousel-item <?=($i == 0) ? "active" : ""; ?> ">                
                                                                            
                                <img src="<?= $c["imagem_mobile"];?>" class="d-block img-fluid mb-5" alt="Senhora" id="img_livro-mobile"> 
                                
                                <div class="cabecalho-legendas-mobile px-3 mt-5 ">
                                    <h3 id="nov-mobile"><?= $c["observacao"];?></h3>
                                    <br>
                                    <h2 id="titulo-legenda-mobile"><?= $c["titulo"];?></h2>
                                    <p id="P"><?= $c["texto"];?></p>
                                        <a href="livros.php?id=<?=1?>"><button id="btn-Saber_Mais"></button></a>
                                    

                                </div>                               
                                

                            </div>                     
                            

                        <?php endforeach; ?>


                        </div>



                    </div>


                </div>


            </div>


        </div>
        




    </header>