<?php

$destaques = getTodosDestaques();

$form= isset($_GET["observacao"]) && isset($_GET["id_livro"]);

if($form){

    $observacao = $_GET["observacao"];
    $texto = $_GET["id_livro"];
    iduSQL("UPDATE destaques SET observacao = '$observacao', id_livro = '$id_livro'");
}

?>

<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-75 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Destaques</h3>
           
        </div>

        <div class="row p-3 text-center">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Livro (Imagem)</th>
                    <th>Livro (Título)</th>
                    <th>Livro (Observação)</th>
                    <th>Acções</th>
                    </tr>
                <?php foreach($destaques as $d): ?>
                    <tr>
                        <td><?= $d["id"]; ?></td>
                        <td><img style = "max-height: 150px" src="<?= getImagemLivro($d["id_livro"]); ?>" alt="<?= getImagemLivro($d["id_livro"]); ?>"></td>
                        <td><?= getTituloLivro($d["id_livro"]); ?></td>
                        <td><?=$d["observacao"];?></td>
                        <td>
                            <form action="destaques_editar.php">
                                <button name="editar" value="<?= $d["id"]; ?>">Editar</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; ?>
                    
            </table>
        </div>
   </div>
   
</main>