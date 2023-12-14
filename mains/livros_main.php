<?php

$form= isset($_GET["id"]);

if ($form) {

    $id = $_GET["id"];

}

$livro_especifico = selectSQLUnico("SELECT * FROM livros WHERE id='$id'");


?>

<main>      
        
    <div class="container-fluid  d-flex justify-content-start align-items-center" id="caixa-livro2">
        <div class="row">
            <div class="col-12 ">
                <div class="caixa-top offset-md-1">                       
                        <div class="col-6 mt-5  ">
                            <h3 id="titulo-livro">LIVROS</h3>
                        </div>                        
                </div>
                <div class="sub-titulo offset-md-1 ">                        
                        <div class="col-12 mt-2 ml-5 mb-2 ">
                            <h3><?=getTituloLivro($id)?></h3>
                        </div>                        
                </div>

            </div>
        </div>
    </div>
    <br><br>

    <div class="container-livro ">
        <div class="row d-block d-md-flex justify-content-around mt-5 mt-md-3  ">
            <div class="col-12 col-md-4 text-center offset-md-1  ">
                <img src="<?=getImagemLivro($id)?>" alt="Senhora do Amor e da Guerra" id="img-livro">
            </div>
            <div class="col-12 col-md-5 p-5 pt-md-0 text-md-left" id="P" id="descri-livro">
                <p><?=getTextoLivro($id)?></p>
                <br>
                
            <br><br><br><br>
            <div class="d-none col-12 d-sm-flex justify-content-end align-items-strech  ">
                <a href="#" onclick="voltar()"><button id="btn-voltar"></button></a>
            </div>
                
            </div>
        </div>
    </div>
        



      


</main>