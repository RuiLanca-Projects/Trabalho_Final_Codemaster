<?php

$editar = isset($_GET["editar"]);

if ($editar) {

    $id = $_GET["editar"];

    $form = isset($_GET["observacao"]) && isset($_GET["id_livro"]) ;

    if ($form) {
        $observacao = $_GET["observacao"];
        $id_livro = $_GET["id_livro"];
        iduSQL("UPDATE destaques SET observacao = '$observacao', id_livro = '$id_livro' WHERE id=$id");
        header("Location:destaques.php");
        exit() ;   

}

        $destaque_especifico = getDestaque($id);
        $livros = getMenuLivros();

}
else {
    header("Location:destaques.php");
    exit() ;    
}

?>

<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-75 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Destaques</h3>           
        </div>

        <div class="row text-center">
            <form action="" class="col-12">
                <input type="hidden" name="editar" value="<?=$_GET["editar"];?>">
                <label for="observacao">Observação</label>
                <br>
                <input type="text" name="observacao" value="<?=$destaque_especifico["observacao"];?>" required><br><br>
                <label for="id_livro">Livro a destacar</label>
                <br>
                <select name="id_livro"><br>

                    <?php foreach($livros as $l): ?>

                    <option value="<?= $l["id"];?>"><?= $l["titulo"];?></option>
                    
                    <?php endforeach; ?>
                </select>
                <br><br>
                
                <input type="submit" value="Editar">
            </form>
        </div>
   </div>
   
</main>