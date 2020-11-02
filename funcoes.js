function exibir_categoria(categoria){
    //alert('categorias');
    let elementos = document.getElementsByClassName('item');
    console.log(elementos);
    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
          if(categoria == elementos[i].id)
             elementos[i].style ='display:inline-flexbox';
          else
              elementos[i].style ='display:none';
    }
}

let exibir_todos =() => {
    let elementos = document.getElementsByClassName('item');
       for(var i=0; i<elementos.length; i++){
         elementos[i].style ='display:inline-flexbox';
        
    }
};

let destaque = (imagem) => {
    console.log(imagem);
      if(imagem.width == 300)
           imagem.width =200;
    else 
    imagem.width=300;
};

          function btn1() {
              document.body.style.background='#fc006b'
          }
          function btn2() {
              document.body.style.background='pink'
          }
          function btn3() {
            document.body.style.background='rgba(211, 211, 211, 0.685)'
        }