<?php



function fazerLogin($login, $senha){
    $utilizador_encontrado = selectSQLUnico("SELECT * FROM backoffice WHERE login = '$login' AND senha = '$senha' ");

    if(!empty($utilizador_encontrado)){

        session_start();
        $_SESSION["utilizador"] = $utilizador_encontrado;

        date_default_timezone_set("Europe/Lisbon");
        $data_actual = date("H:i:s - d/m/Y");
        $id = $utilizador_encontrado["id"];
        iduSQL("UPDATE backoffice SET data_ultimo_acesso ='$data_actual' WHERE id=$id");
        return true;

    }
    else{
        return false;
    }

}

function verificarLogado(){
    session_start();
    if(!empty($_SESSION["utilizador"])){
        return true;
}
else{
    return false;
}

}

?>