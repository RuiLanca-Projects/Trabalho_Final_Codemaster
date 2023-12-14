<?php

function getImagemAutor(){
    $resultado = selectSQLUnico("SELECT imagem FROM autor WHERE id=1");
    return $resultado["imagem"];

}
function getTextoAutor(){
    $resultado = selectSQLUnico("SELECT texto FROM autor WHERE id=1");
    return $resultado["texto"];

}
function getTextoAbreviadoAutor(){
    $resultado = substr(getTextoAutor(),0,1300) . "...";
    return $resultado;

}


?>