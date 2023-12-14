<?php

$form= isset($_GET["imagem_bem_vindo"]) && isset($_GET["texto_ultimos_livros"]);

if($form){

    $imagem_bem_vindo = $_GET["imagem_bem_vindo"];
    $texto_ultimos_livros = $_GET["texto_ultimos_livros"];
    iduSQL("UPDATE home SET imagem_bem_vindo = '$imagem_bem_vindo', texto_ultimos_livros = '$texto_ultimos_livros'");
}

?>

<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-75 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Home</h3>
           
        </div>

        <div class="row text-center">
            <form action="" class="col-12 ">
                <label for="imagem_bem_vindo">Link da imagem</label>
                <br>
                <img src="<?=getImagemHome();?>" alt="imagem" style="max-width:200px; margin-bottom: 20px"><br>
                <input type="text" name="imagem_bem_vindo" value="<?= getImagemHome();?>" required>
                <br><br>
                <a href="../filemanager/tinyfilemanager.php" target="_blank"><button type="button">Gestor de ficheiros</button></a>
                <br><br>
                <label for="texto_ultimos_livros">Texto do campo: "Últimos livros"</label>
                <br>
                <textarea name="texto_ultimos_livros" id="editor" cols="80" rows="10"><?= getTextoUltimosLivrosHome()?>"</textarea>
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