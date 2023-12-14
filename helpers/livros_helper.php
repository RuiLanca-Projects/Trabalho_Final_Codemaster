<?php

function getMenuLivros(){
    $resultado = selectSQL("SELECT id, titulo FROM livros ORDER BY titulo ASC");
    return $resultado;
}

function getTituloLivro($id){
    $resultado = selectSQLUnico("SELECT titulo FROM livros WHERE id=$id");
    return $resultado["titulo"];
}
function getTextoLivro($id){
    $resultado = selectSQLUnico("SELECT texto FROM livros WHERE id=$id");
    return $resultado["texto"];
}
function getTextoAbreviadoLivro($id){
   $texto = substr(getTextoLivro($id),0,250). "...";
    return $texto;
}
function getImagemLivro($id){
    $resultado = selectSQLUnico("SELECT imagem FROM livros WHERE id=$id");
    return $resultado["imagem"];
}

function getTodosLivros(){
    $resultado = selectSQL("SELECT * FROM livros ORDER BY titulo ASC");
    return $resultado;
}

function getLivro($id){
    $resultado = selectSQLUnico("SELECT * FROM livros WHERE id=$id");
    return $resultado;
}



?>