<main>

        <div class="container-fluid" id="caixa-livro">
            <div class="row">
                <div class="col-12 ">
                    <div class="caixa-top offset-md-1  ">                       
                            <div class="col-6 mt-5  ">
                                <h3 id="titulo-livro" >AUTOR</h3>
                            </div>                        
                    </div>
                    <div class="sub-titulo offset-md-1">                        
                            <div class="col-6 mt-2 ml-5 mb-2 ">
                                <h3>SOBRE MIM</h3>
                            </div>                        
                    </div>

                </div>
            </div>
        </div>
        <br><br>

        <div class="container ">
            <div class="row d-flex justify-content-center">                
                    <img src="<?=getImagemAutor();?>" id="img-bem-vindo2" alt="foto-autor" >
                <div class="col-10 p-4 " id=texto_abreviado >
                    <p id="P"><?=getTextoAbreviadoAutor();?></p>               
                </div>          
                <div class="col-10 p-4" id=texto_completo >
                    <p id="P"><?=getTextoAutor();?></p>               
                </div>          
                <div class="col-10 d-md-none d-flex justify-content-center mx-auto mb-3">
                    <button onclick="verMais()" id="btn-Saber_Mais_autor">Ver mais</button>
                </div>
                
                <div class="col-10 d-flex justify-content-center justify-content-lg-start mx-auto mb-5">
                    <button id="btn-voltar" onclick="voltar()"></button>
                </div>
                
            </div>
        </div>      

       
    </main> 