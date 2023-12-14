<?php

$apagar = isset($_GET["apagar"]);

if ($apagar) {

    $id = $_GET["apagar"];
    
    $form = isset($_GET["resposta"]);

    if ($form) {      

        iduSQL("DELETE FROM livros WHERE id=$id");
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
            <h3 class="text-center">Apagar livro</h3>
           
        </div>

        <div class="row text-center">
            <form action="" class="col-12">
                <input type="hidden" name="apagar" value="<?=$_GET["apagar"];?>">
                <h3>Tem a certeza que quer apagar o livro <?=$livro_especifico["titulo"];?>?</h3>
                <button name="resposta" >Sim</button>
                <a href="livros.php">
                <button type="button" >Não</button>
                </a>            
              
            </form>
        </div>
   </div>
   
</main>