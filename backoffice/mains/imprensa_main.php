<?php

$imprensa = getTodaImprensa();


?>

<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-100 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Imprensa Editar</h3>
           
        </div>

        <div class="row text-center">
            <table>
                <tr>
                    <th>ID</th>                   
                    <th>Título</th>
                    <th>Data</th>
                    <th>Imagem</th>                    
                    <th>Texto</th>                    
                    <th>Acções</th>
                    </tr>
                <?php foreach($imprensa as $i): ?>
                    <tr>
                       <td><?=$i["id"];?></td>  
                       <td><?=$i["titulo"];?></td>   
                       <td><?=$i["data"];?></td>   
                       <td><img style="max-width: 110px;"src="<?=$i["imagem"];?>" alt="<?=$i["imagem"];?>"></td>                  
                       <td><?=$i["texto"];?></td>                    
                       <td>
                            <form action="imprensa_editar.php">
                                <button name="editar" value="<?=$i["id"];?>">Editar</button>
                            </form>
                                <br>
                            <form action="imprensa_apagar.php">
                                <br>
                                <button name="apagar" value="<?=$i["id"];?>">Apagar</button>
                            </form>
                       </td>
                    </tr>

                <?php endforeach; ?>
                    
            </table>
        </div>
   </div>
   
</main>