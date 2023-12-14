<?php

$form= isset($_GET["imagem"]) && isset($_GET["texto"]);

if($form){

    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];
    iduSQL("UPDATE autor SET imagem = '$imagem', texto = '$texto'");
}

?>

<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-75 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Autor</h3>
           
        </div>

        <div class="row text-center">
            <form action="" class="col-12">
                <label for="imagem">Link da imagem do autor</label>
                <br>
                <img src="<?=getImagemAutor();?>" alt="imagem" style="max-width:200px; margin-bottom: 20px"><br>
                <input type="text" name="imagem" value="<?=getImagemAutor();?>" required>
                <br><br>                
                <a href="../filemanager/tinyfilemanager.php" target="_blank"><button type="button">Gestor de ficheiros</button></a>
                <br><br>
                <label for="texto">Texto</label>
                <br>
                <textarea name="texto" id="editor" cols="80" rows="10"><?=getTextoAutor();?></textarea>
                <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                </script>

                <br><br>
                <input type="submit" value="Editar">
            </form>
        </div>
   </div>
   
</main>