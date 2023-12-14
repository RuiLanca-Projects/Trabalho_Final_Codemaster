<?php

$form = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem"]);

if($form){

    
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem_desktop = $_GET["imagem"];

    iduSQL("INSERT INTO livros (titulo, texto, imagem) VALUES ('$titulo', '$texto', '$imagem')");    
   
    header("Location: livros.php");
    exit() ;
}


?>


<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-75 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Criar livro novo</h3>
           
        </div>

        <div class="row text-center">
            <form action="" class="col-12">
                <label for="titulo">Título</label>
                <br>
                <input type="text" name="titulo" required>
                <br><br>                
                <label for="texto">Texto</label>
                <br>
                <textarea name="texto" id="editor" cols="80" rows="10"></textarea>
                <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                </script>

                <br><br>                
                <label for="imagem">Imagem</label>
                <br>
                <input type="text" name="imagem" required>
                <br><br>                 
                <a href="../filemanager/tinyfilemanager.php" target="_blank"><button type="button">Gestor de ficheiros</button></a>
                <br><br>      
                       
                <input type="submit" value="Criar">
            </form>
        </div>
   </div>
   
</main>