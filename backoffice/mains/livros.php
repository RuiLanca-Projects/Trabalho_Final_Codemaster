<?php

$livros = getTodosLivros();


?>

<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-100 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Livros Editar</h3>
           
        </div>

        <div class="row text-center">
            <table>
                <tr>
                    <th>ID</th>
                   
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Texto</th>                    
                    <th>Acções</th>
                    </tr>
                <?php foreach($livros as $l): ?>
                    <tr>
                       <td><?=$l["id"];?></td>     
                       <img style="max-width: 110px;"src="<?=$l["imagem"];?>" alt="<?=$l["imagem"];?>">                  
                       <td><?=$l["titulo"];?></td>
                       <td><?=$l["texto"];?></td>                                 
                      
                       <td>
                            <form action="livros_editar.php">
                                <button name="editar" value="<?=$l["id"];?>">Editar</button>
                            </form>
                                <br>
                            <form action="livros_apagar.php">
                                <br>
                                <button name="apagar" value="<?=$l["id"];?>">Apagar</button>
                            </form>
                       </td>
                    </tr>

                <?php endforeach; ?>
                    
            </table>
        </div>
   </div>
   
</main>