<?php

$editar = isset($_GET["editar"]);

if ($editar) {

    $id = $_GET["editar"];


    $form = isset($_GET["titulo"]) && isset($_GET["data"]) && isset($_GET["imagem"]) && isset($_GET["texto"]);

    if ($form) {
        
        $titulo = $_GET["titulo"];
        $data = $_GET["data"];
        $imagem = $_GET["imagem"]; 
        $texto = $_GET["texto"];
         

        iduSQL("UPDATE imprensa SET titulo = '$titulo', data = '$data', imagem = '$imagem', texto = '$texto' WHERE id=$id");
        header("Location: imprensa.php");
        exit();  

}

        $publicacao_especifica = getPublicacao($id);

}else{
    header("Location: imprensa.php");
    exit();
}
?>

<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-75 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Editar imprensa</h3>
           
        </div>

        <div class="row text-center">
            <form action="" class="col-12">
                <input type="hidden" name="editar" value="<?=$_GET["editar"];?>">
                <label for="titulo">Título</label>
                <br>
                <input type="text" name="titulo" value="<?=$publicacao_especifica["titulo"];?>" required>
                <br><br> 
                <label for="imagem">Imagem</label>
                <br>
                <input type="text" name="data" value="<?=$publicacao_especifica["data"];?>" required>
                <br><br> 
                <label for="imagem">Imagem</label>
                <br>
                <input type="text" name="imagem"  value="<?=$publicacao_especifica["imagem"];?>"required>
                <br><br>                
                <label for="texto">Texto</label>
                <br>
                <textarea name="texto" id="editor" cols="80" rows="10"> value="<?=$publicacao_especifica["texto"];?>"</textarea>
                <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                </script>

                <br><br>                
                               
                <a href="../filemanager/tinyfilemanager.php" target="_blank"><button type="button">Gestor de ficheiros</button></a>
                <br><br>  
                       
                <input type="submit" value="Editar">
            </form>
        </div>
   </div>
   
</main>