function voltar(){
    window.history.back();
}

function abrirMenuLivros(){
    //Variáveis locais
    let menu_livros = document.querySelector("#livros");

    //Executar

    menu_livros.scrollIntoView();
    setTimeout(clicar,750);
}


function clicar(){

    let menu_livros = document.querySelector("#livros");
    menu_livros.click();

}

function verMais(){
    let texto_curto = document.getElementById("texto_abreviado");
    let texto_completo = document.getElementById("texto_completo"); 
    let texto_botao = document.getElementById("btn-Saber_Mais_autor");   

    
    if (texto_completo.style.display === "none" || texto_completo.style.display == "") {
        texto_completo.style.display = "inline";
        texto_curto.style.display = "none";
        texto_botao.innerHTML = "Ver Menos";
        texto_botao.style.backgroundColor = "#4D4D4D";
      } else {
        texto_completo.style.display = "none";
        texto_curto.style.display = "inline";
        texto_botao.innerHTML = "Ver Mais";
        texto_botao.style.backgroundColor = "#B47D33";
      }   
    
  
}

function mudarImagemHamburger(){
    let imagem = document.getElementById("botao-menu");
    

    if (imagem.style.backgroundImage === 'url("Img/menu.svg")'|| imagem.style.backgroundImage == "" ){
        imagem.style.backgroundImage = 'url("Img/fechar.svg")';
    } else{
        imagem.style.backgroundImage = 'url("Img/menu.svg")';
    }


}