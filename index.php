<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
   
<body>
    <!-- Menu-->
    <?php
      Include('menu.html');
    ?>

   <!--Conteudos do meu carrosel-->

   <div id="carouselsite" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="carouselsite" data-slide-to="0" class="active"></li>
      <li data-target="carouselsite" data-slide-to="1"></li>
    </ol> 
     
      <div class="carousel-inner">
        <div class="carousel-item active">
              <img src="./img/jjj.png"  class="img-fluid d-block">
           <div class="carousel-caption d-none d-md-block">

              <h1>Loja Virtual Moda Feminina</h1>
              <p class="lead">Compras até 6x no cartão.</p>
             
           </div>
        </div>
      <div class="carousel-item">
             <img src="./img/ppp.jpg" class="img-fluid d-block">

           <div class="carousel-caption d-none d-md-block">
              <p class="lead">Conjuntos com até 50% de desconto.</p>
             
          </div>
      </div>

     </div>
        <a class="carousel-control-prev" href="#carouselsite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselsite" role="button" data-slide="next">
           <span class="carousel-control-next-icon"></span>
           <span class="sr-only">Avançar</span>
       </a>
  </div>      
                <!--Fim do carousel-->

                  <!--Sobre nós-->
     <article>             
        <div class="container-fluid">
            <h2>Sobre Nós</h2>
                  <hr class="hr">
            <div class="jumbotron">
                  <h5><u>Moda Femininas Online</u></h5>

                  <p>Uma marca de roupas femininas feita para mulheres modernas, arrojadas e dinâmicas: esta é a MOB.</p>
                  <p>Com mais de 30 anos de história, 32 lojas e mais de 350 pontos de venda multimarcas espalhados por todo o Brasil, o que destaca a marca das demais lojas de moda feminina no mercado é sua capacidade de se comunicar com a mulher contemporânea, traduzindo sua essência por meio de nossas peças.</p>
                  <p>Buscamos constantemente a qualidade de nossos produtos, pensando desde o melhor tecido até o corte e caimento ideal. Tudo para valorizar a beleza e autenticidade da mulher MOB.</p>
           </div>
       </div>

     </article>
               <!--Formas de pagamento-->

     <section class="pagamento">
        <h4>Formas de Pagamento</h4>
        <img id="pagamento" src="./img/icon-pagseguro-horiz.png" alt="Formas de Pagamentos">
       <br><br><br>
    </section>

   <footer id="rodape">      
        <p>Copyright &copy; 2020- by Cristiane Pereira -Recode </p>
            
    </footer>

    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>