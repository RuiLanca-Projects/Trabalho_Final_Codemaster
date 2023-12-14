<?php


$form = isset($_GET["morada"]) && isset($_GET["telefone"]) && isset($_GET["email"]) && isset($_GET["instagram"]) && isset($_GET["facebook"]) && isset($_GET["linkedin"]);

if($form){
    $morada = $_GET["morada"];
    $telefone = $_GET["telefone"];
    $email = $_GET["email"];
    $instagram = $_GET["instagram"];
    $facebook = $_GET["facebook"];
    $linkedin = $_GET["linkedin"];
    iduSQL("UPDATE contactos SET morada='$morada', telefone = '$telefone', email = '$email', instagram = '$instagram', facebook = '$facebook', linkedin = '$linkedin'");
}

?>



<main class="container">
   <div class="row mx-auto bg-light border rounded-2 mt-3 w-75 p-3 d-flex justify-content-center">
        <div class="col-10 p-3 ">
            <h3 class="text-center">Contactos</h3>
           
        </div>

        <div class="row text-center">
            <form action="" class="col-12">
                <label for="morada">Morada</label>
                <br>
                <input type="text" name="morada" value="<?=getMoradaContactos();?>" required>
                <br><br>                
                <label for="telefone">Telefone</label>
                <br>
                <input type="text" name="telefone" value="<?=getTelefoneContactos();?>" required>
                <br><br>                
                <label for="email">Email</label>
                <br>
                <input type="text" name="email" value="<?=getEmailContactos();?>"required>
                <br><br>                
                <label for="instagram">Instagram</label>
                <br>
                <input type="text" name="instagram" value="<?=getInstagramContactos();?>"required>
                <br><br>                
                <label for="facebook">Facebook</label>
                <br>
                <input type="text" name="facebook" value="<?=getFacebookContactos();?>"required>
                <br><br>                
                <label for="linkedin">Linkedin</label>
                <br>
                <input type="text" name="linkedin" value="<?=getLinkedinContactos();?>"required>
                <br><br>                
                <input type="submit" value="Editar">
            </form>
        </div>
   </div>
   
</main>