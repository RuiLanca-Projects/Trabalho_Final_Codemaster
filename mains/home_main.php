<?php

$destaques = getTodosDestaques();

    
?>



<main>



    <div class="container.bem-vindo  container-fluid" id="bem-vindo">

        <div class="d-md-flex justify-content-between gap-2">
            
            <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-4  p-3  ">
                <img src="<?= getImagemHome();?>" alt="foto escritor" id="img-bem-vindo">
            </div>

            <div class="col-lg-8 col-md-6 col-sm-12 p-4 mt-2  mx-auto ">
                <div class="titulo-bem-vindo">
                    <h3 id="T1">BEM-VINDO AO MEU WEBSITE</h3>
                </div>
                <p id="P"><?= getTextoAbreviadoAutor();?></p>

                <div class="d-flex justify-content-lg-end d-xs-flex justify-content-center p-3">
                    <a href="autor.php#titulo-livro"><button id="btn-Saber_Mais"></button></a>
                </div>

            </div>



        </div>


    </div>


    <br><br>


    <div class="container " id="ultimos-livros">
        <div class="row">

            <div class="col-12">

                <div class="ultimos-livros p-3">
                    <div class="row">
                        <div class="col">
                            <h2 id="T1-Main">ÚLTIMOS LIVROS</h2>
                        </div>
                    </div>
                </div>
                <br>
                <div class="texto ultimos livros p-3">
                    <div class="row">
                        <div class="col">
                            <p id="P">
                                <?=getTextoUltimosLivrosHome();?>
                            </p>
                        </div>
                    </div>
                </div>
                <br><br>




            </div>


        </div>



    </div>

    <div class="caixa-card ">

        <div class="row ">

            <div class="col-12 d-flex justify-content-center flex-wrap gap-5 ">

                <?php foreach ($destaques as $d ) : ?>
                    <div class="card col-md-6 " style="width: 18rem;">
                        <img src="<?=getImagemLivro($d["id_livro"]);?>" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mt-1" id="T1-Main"><?=getTituloLivro($d["id_livro"]);?></h5>
                            <h5 id="p_card"><?=$d["observacao"]?></h5>
                            <p class="card-text text-left" id="P"><?=getTextoAbreviadoLivro($d["id_livro"])?></p>
                        </div>
                        <div class="col-11 p-3 mb-2 d-flex justify-content-end">
                            <form action="livros.php#caixa-livro2">
                                <button  id="btn-Saber_Mais" name="id" value=<?=$d["id_livro"]?>></button>
                            </form>                          
                            
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>



    <br><br>




</main>