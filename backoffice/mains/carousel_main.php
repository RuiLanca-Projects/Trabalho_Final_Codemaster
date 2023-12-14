<?php

$carousel = getTodosCarousel();


?>

<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-100 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Carousel Editar</h3>
           
        </div>

        <div class="row text-center">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Imagem Desktop</th>
                    <th>Imagem Mobile</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Observação</th>
                    <th>Link Saber Mais</th>
                    <th>Acções</th>
                    </tr>
                <?php foreach($carousel as $c): ?>
                    <tr>
                       <td><?=$c["id"];?></td>
                       <td><img style="max-width: 110px;"src="<?=$c["imagem_desktop"];?>" alt="<?=$c["imagem_desktop"];?>"></td>
                       <td><img style="max-width: 50px;"src="<?=$c["imagem_mobile"];?>" alt="<?=$c["imagem_mobile"];?>"></td>                       
                       <td><?=$c["titulo"];?></td>
                       <td><?=$c["texto"];?></td>
                       <td><?=$c["observacao"];?></td>
                       <td><?=$c["link_saber_mais"];?></td>
                      
                       <td>
                            <form action="carousel_editar.php">
                                <button name="editar" value="<?=$c["id"];?>">Editar</button>
                            </form>
                                <br>
                            <form action="carousel_apagar.php">
                                <br>
                                <button name="apagar" value="<?=$c["id"];?>">Apagar</button>
                            </form>
                       </td>
                    </tr>

                <?php endforeach; ?>
                    
            </table>
        </div>
   </div>
   
</main>