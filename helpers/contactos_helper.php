<?php

function getMoradaContactos(){
    $resultado = selectSQLUnico("SELECT morada FROM contactos WHERE id=1");
    return $resultado["morada"];

}
function getTelefoneContactos(){
    $resultado = selectSQLUnico("SELECT telefone FROM contactos WHERE id=1");
    return $resultado["telefone"];

}
function getEmailContactos(){
    $resultado = selectSQLUnico("SELECT email FROM contactos WHERE id=1");
    return $resultado["email"];

}
function getInstagramContactos(){
    $resultado = selectSQLUnico("SELECT instagram FROM contactos WHERE id=1");
    return $resultado["instagram"];

}
function getFacebookContactos(){
    $resultado = selectSQLUnico("SELECT facebook FROM contactos WHERE id=1");
    return $resultado["facebook"];

}
function getLinkedinContactos(){
    $resultado = selectSQLUnico("SELECT linkedin FROM contactos WHERE id=1");
    return $resultado["linkedin"];

}


?>