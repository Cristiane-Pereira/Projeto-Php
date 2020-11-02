<?php //Alteração do projeto para consultar e exibir os produtos registrados do banco de dados.
$servername ="localhost";
$username = "root";
$password = "";
$database ="loja_virtual";

//criando a conexão
$conn = mysqli_connect($servername,$username,$password,$database);

//verificando conexão
if(!$conn){
  die("A conexão ao BD falhou: " . mysqli_connect_error());
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script src="./funcoes.js"></script>
</head>
<body>
    <!-- Menu-->
    <?php
      Include('menu.html');
    ?>

      <!--Começo da primeira linha de produtos-->

    <table class="produtosloja"> 
        <tr>
                <td id="lista" rowspan="5" valign="top">
                    <h3 class="lista">Categorias</h3>
                    <ul class="roupas">
                        <li onclick="exibir_todos()">Todos (12)</li>
                        <li onclick="exibir_categoria ('Acessórios')">Acessórios (4)</li>
                        <li onclick="exibir_categoria ('Cosméticos')">Cosméticos (4)</li>
                        <li onclick="exibir_categoria ('Bolsas')">Bolsas (4)</li>
                    </ul>
                </td>
          
  <section id="loja">
  <tr>
  <?php
          $sql = "select * from acessorios";
          $result =$conn->query($sql);

          if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
              
  ?>
   <td class="item" valign="botton" id="Bolsas <?php echo $rows["Produto_categoria"]; ?> " >
          <img class="imagem" src="<?php   echo $rows["Imagem"]; ?>" style="display: inline-flexbox;"  onclick="destaque(this)">
          <br>
          <p><?php  echo $rows["Descriçao"]; ?> </p>
          <p><strike> <?php echo $rows["Preço"]; ?> </strike></p><br>
          <p class="preco"><?php echo $rows["Valor_Total"]; ?> </p><br><br>
          <hr>
          </td> 

  <?php
        }
          }else {
            echo "Nenhum produto cadastrado!";
          }

?>
   
  
</table>
</section>
<!--fim da 3 linha de produtos-->


    <!--Imagem do cupon-->
     <img  width="100%" src="./img/download.gif">
     <br><br><br> <br><br><br> <br>


     <div class="tabela2">
        <p3><b>GANHE R$10,00</b> DE <b>DESCONTO</b> NA PRIMEIRA COMPRA!</p3><br>
        <p4>Válido para compras acima de R$100,00.</p4><br><br><br>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="mail" placeholder="Dígite seu E-mail para ganhar...">
        <button class="btn" onmousemove="btn1()", onclick="btn2()", onmouseout="btn3()" >Enviar</button>

    </div>
    

         <!--Formas de pagamento-->
        <br><br><br><br>
         <section class="pagamento">
            <h4>Formas de Pagamento</h4>
            <img id="pagamento" src="./img/icon-pagseguro-horiz.png" alt="Formas de Pagamentos">
           <br><br><br>
        </section>
    
       <footer id="rodape">      
            <p>Copyright &copy; 2020- by Cristiane Pereira -Recode </p>
                
        </footer>
    
</body>
</html>