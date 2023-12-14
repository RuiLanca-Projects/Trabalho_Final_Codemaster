<?php


function getTituloImprensa($id){
    $resultado = selectSQLUnico("SELECT titulo FROM imprensa WHERE id=$id");
    return $resultado["titulo"];
}
function getTextoImprensa($id){
    $resultado = selectSQLUnico("SELECT texto FROM imprensa WHERE id=$id");
    return $resultado["texto"];
}

function getImagemImprensa($id){
    $resultado = selectSQLUnico("SELECT imagem FROM imprensa WHERE id=$id");
    return $resultado["imagem"];
}


function  getDataImprensa($id){
    $resultado = selectSQLUnico("SELECT data FROM imprensa WHERE id=$id");
    return $resultado["data"];
}

function getTodaImprensa(){
    $resultado = selectSQL("SELECT * FROM imprensa ORDER BY data DESC" );
    return $resultado;
}

function getPublicacao($id){
    $resultado = selectSQLUnico("SELECT * FROM imprensa WHERE id=$id");
    return $resultado;
}