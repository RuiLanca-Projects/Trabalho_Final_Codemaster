<footer>
        <div class="caixa-nav-baixo ">
            <div class="row">
                <div class="col">
                    <div class="titulo_e_nav">
                        <div class="col-12 px-0 text-center mt-4 d-none d-md-block">
                            <div class="separador-mobile">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <hr id="hr1-mobile ">
                                    </div>
                                </div>
                            </div>
                            <nav class="navbar navbar-expand-sm d-none d-sm-block  " id="nav">
                                <div class="container-fluid ">

                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-center p-2"
                                        id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 gap-3 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link <?= ($pagina_actual == "home") ? "active" : "";?>" aria-current="page"
                                                    href="index.php"><b>HOME</b></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= ($pagina_actual == "autor") ? "active" : "";?>" href="autor.php"><b>Autor</b></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= ($pagina_actual == "livros") ? "active" : "";?>" onclick="abrirMenuLivros()" href="#" role="button" 
                                                    aria-expanded="false">
                                                    LIVROS
                                                </a>                                              
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link <?= ($pagina_actual == "imprensa") ? "active" : "";?>" href="imprensa.php">IMPRENSA</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link <?= ($pagina_actual == "contactos") ? "active" : "";?>" href="contactos.php">CONTACTOS</a>
                                            </li>


                                        </ul>

                                    </div>
                                </div>
                            </nav>
                            
                            <hr id="hr1">




                        </div>



                    </div>



                </div>
            </div>
        </div>


        <footer class="caixa-contactos d-none d-md-block">
            <div class="row">
                <div class="contacto mt-5 ">
                    <div class="row d-flex justify-content-around">
                        <div class="col-5">
                            <h4 id="contactos">contactos</h4>
                        </div>
                        <div class="col-5 ">
                            <h4 id="siga">Siga-me nas Redes Sociais</h4>
                            <div class="container text-center">

                                <div class="col d-flex justify-content-center mt-4 ">
                                    <div class="col-2 ">
                                        <a href="<?=getInstagramContactos();?>" target="_blank"><button id="btn-1"></button></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="<?=getFacebookContactos();?>" target="_blank"><button id="btn-2"></button></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="<?=getLinkedinContactos();?>" target="_blank"><button id="btn-3"></button></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="morada text-left ml-3 " id="morada">
                <div class="row d-flex justify-content-start">
                    <div class="col-2 ">
                        <h2 id="contactos-titulo"><b>morada</b></h2>

                        <p id="contactos-conteudo"><?=getMoradaContactos();?></p>
                    </div>
                    <div class="col-2">
                        <h2 id="contactos-titulo"><b>telefone</b></h2>

                        <p id="contactos-conteudo"><?=getTelefoneContactos();?></p>
                    </div>
                    <div class="col-1">
                        <h2 id="contactos-titulo"><b>email</b></h2>

                        <p id="contactos-conteudo"><?=getEmailContactos();?></p>
                    </div>
                </div>
            </div>



            <div class="links text-center ">
                <div class="row  px-0 ">

                    <div class="col-2">
                        <a href="#"><img src=".\Img\livroreclamacoes.svg" alt="livro reclamações"></a>
                    </div>
                    <div class="col-1 " id="ralc">
                        <a href="#"><img src=".\Img\ralc.svg" alt="livro reclamações"></a>

                    </div>

                </div>

                <div class="container.politica ">
                    <div class="row d-flex justify-content-end">
                        <div class="col-6">
                            <div class="container text-center">
                                <div class="row ">
                                    <div class="col-12 " id="P-politica">
                                        <a href="#" id="P-politica">Política de Cookies</a>
                                        <p>Copyright © 2021 Grupo MediaMaster. Todos os direitos reservados.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            </div>


             



        </footer>

        <div class="separador">
            <div class="row">
                <div class="col-12 ">
                    <hr id="hr-mobile">
                </div>
            </div>
        </div>       


    



        <footer class="caixa-contactos-2 d-md-none">                                 
                <div class="contacto mt-5 ">
                    <div class="d-flex flex-column justify-content-center ">
                        <div class="col-12 text-center p-3">
                            <h4 id="contactos">contactos</h4>
                        </div>

                        <div class="morada text-left ml-3 " >
                            <div class=" d-flex flex-column justify-content-center align-items-center gap-2">
                                <div class="col-6 text-center">
                                    <h2 id="contactos-titulo"><b>morada</b></h2>
            
                                    <p id="contactos-conteudo"><?=getMoradaContactos();?></p>
                                </div>
                                <div class="col-6 text-center">
                                    <h2 id="contactos-titulo"><b>telefone</b></h2>
            
                                    <p id="contactos-conteudo"><?=getTelefoneContactos();?></p>
                                </div>
                                <div class="col-3 text-center">
                                    <h2 id="contactos-titulo"><b>email</b></h2>
            
                                    <p id="contactos-conteudo"><?=getEmailContactos();?></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        
                        <div class="col-auto text-center">
                            <h4 id="contactos" >Siga-me nas Redes Sociais</h4>
                            </div>
                            
                            <div class="container text-center">
                                <div class="col d-flex justify-content-center mt-4 ">
                                    <div class="col-2 ">
                                        <a href="<?=getInstagramContactos();?>"><button id="btn-1"></button></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="<?=getFacebookContactos();?>"><button id="btn-2"></button></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="<?=getLinkedinContactos();?>"><button id="btn-3"></button></a>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
           



            <div class="links text-center d-flex flex-column justify-content-center ">
                <div class="row  d-flex justify-content-between ">

                    <div class="col-6 ">
                        <a href="#"><img src=".\Img\livroreclamacoes.svg" alt="livro reclamações"></a>
                    </div>
                    <div class="col-6 " id="ralc">
                        <a href="#"><img src=".\Img\ralc.svg" alt="livro reclamações"></a>

                    </div>

                </div>

                <div class="container.politica ">
                    <div class="row d-flex justify-content-end">
                        <div class="col-12">
                            <div class="container text-center">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9 mt-5" id="P-politica">
                                        <a href="#" id="P-politica">Política de Cookies</a>
                                        <p>Copyright © 2021 Grupo MediaMaster. Todos os direitos reservados.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            </div>





        </footer>




    </footer>

    </body>



</html>