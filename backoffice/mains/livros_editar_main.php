<?php

$editar = isset($_GET["editar"]);

if ($editar) {

    $id = $_GET["editar"];


    $form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);

    if ($form) {
        
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        $imagem = $_GET["imagem"];   

        iduSQL("UPDATE livros SET titulo = '$titulo', texto = '$texto', imagem = '$imagem' WHERE id=$id");
        header("Location: livros.php");
        exit();  

}

        $livro_especifico = getLivro($id);

}else{
    header("Location: livros.php");
    exit();
}
?>

<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-75 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Editar livro</h3>
           
        </div>

        <div class="row text-center">
            <form action="" class="col-12">
                <input type="hidden" name="editar" value="<?=$_GET["editar"];?>">
                <label for="titulo">Título</label>
                <br>
                <input type="text" name="titulo" value="<?=$livro_especifico["titulo"];?>" required>
                <br><br>                
                <label for="texto">Texto</label>
                <br>
                <textarea name="texto" id="editor" cols="80" rows="10"> value="<?=$livro_especifico["texto"];?>"</textarea>
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
                <input type="text" name="imagem"  value="<?=$livro_especifico["imagem"];?>"required>
                <br><br>                
                <a href="../filemanager/tinyfilemanager.php" target="_blank"><button type="button">Gestor de ficheiros</button></a>
                <br><br>  
                       
                <input type="submit" value="Editar">
            </form>
        </div>
   </div>
   
</main>