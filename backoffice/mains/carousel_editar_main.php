<?php

$editar = isset($_GET["editar"]);

if ($editar) {

    $id = $_GET["editar"];


    $form = isset($_GET["observacao"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem_desktop"]) && isset($_GET["imagem_mobile"]) && isset($_GET["link_saber_mais"]);

    if ($form) {
        $observacao = $_GET["observacao"];
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        $imagem_desktop = $_GET["imagem_desktop"];
        $imagem_mobile = $_GET["imagem_mobile"];
        $link_saber_mais = $_GET["link_saber_mais"];

        iduSQL("UPDATE carousel SET observacao = '$observacao', titulo = '$titulo', texto = '$texto', imagem_desktop = '$imagem_desktop', imagem_mobile = '$imagem_mobile', link_saber_mais = '$link_saber_mais' WHERE id=$id");

        header("Location: carousel.php");
        exit();  

}

        $carousel_especifico = getCarousel($id);

}else{
    header("Location: carousel.php");
    exit();
}
?>



<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-75 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Editar Carousel</h3>
           
        </div>

        <div class="row text-center">
            <form action="" class="col-12">
                <input type="hidden" name="editar" value="<?=$_GET["editar"];?>">
                <label for="observacao">Observação</label>
                <br>
                <input type="text" name="observacao" value="<?=$carousel_especifico["observacao"];?>">
                <br><br>                
                <label for="titulo">Titulo</label>
                <br>
                <input type="text" name="titulo"  value="<?=$carousel_especifico["titulo"];?>" required>
                <br><br>                
                <label for="texto">Texto</label>
                <br>
                <textarea name="texto" id="editor" cols="80" rows="10"><?=$carousel_especifico["texto"];?></textarea>
                <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                </script>

                <br><br>                
                <label for="imagem_desktop">Imagem desktop</label>
                <br>
                <input type="text" name="imagem_desktop" value="<?=$carousel_especifico["imagem_desktop"];?>" required>
                <br><br>
                <a href="../filemanager/tinyfilemanager.php" target="_blank"><button type="button">Gestor de ficheiros</button></a>
                
                <br><br>                
                <label for="imagem mobile">Imagem mobile</label>
                <br>
                <input type="text" name="imagem_mobile" value="<?=$carousel_especifico["imagem_mobile"];?>" required>
                <br><br>                
                <label for="link_saber_mais">Link Saber Mais</label>
                <br>
                <input type="text" name="link_saber_mais" value="<?=$carousel_especifico["link_saber_mais"];?>"  required>
                <br><br>                
                <input type="submit" value="Editar">
            </form>
        </div>
   </div>
   
</main>