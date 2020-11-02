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
                    <td id="lista"rowspan="5" valign="top">
                        <h3 class="lista">Categorias</h3>
                        <ul>
                            <li onclick="exibir_todos()">Todos (12)</li>
                            <li onclick="exibir_categoria('Vestidos')">Vestidos (5)</li>
                            <li onclick="exibir_categoria ('Conjunto')">Conjuntos (3)</li>
                            <li onclick="exibir_categoria ('Saias')">Saias (1)</li>
                            <li onclick="exibir_categoria ('Blusinhas')" >Blusinhas (1)</li>
                            <li onclick="exibir_categoria ('Macacao')" >Macacão (1)</li>
                            <li onclick="exibir_categoria ('Blusa')" >Blusa (1)</li>
                        </ul>
                    </td>
     <section id="loja">
      <tr>

      <?php
            $sql = "select * from produtos";
            $result =$conn->query($sql);
            
            if($result->num_rows > 0){
               while($rows = $result->fetch_assoc()){
                 
      ?>
            <td class="item"valign="botton" id="Vestidos <?php  echo $rows["Produto_categoria"]; ?>" >
               <img class="imagem" src=" <?php echo $rows["Imagem"]; ?>"  style="display: inline-flexbox;"  onclick="destaque(this)">
                  <br>
                  <p><?php echo $rows["Descriçao"]; ?></p>
                  <p><strike> <?php  echo $rows["Preço"]; ?> </strike></p><br>
                  <p class="preco "> <?php  echo $rows["Valor_Total"]; ?> </p><br><br>
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
           <!--Imagem do cupon-->
            <img  width="100%" src="./img/download.gif">
            <br><br><br> <br><br><br> <br>

             <div class="tabela2">
                <p3><b>GANHE R$20,00</b> DE <b>DESCONTO</b> NA PRIMEIRA COMPRA!</p3><br>
                <p4>Válido para compras acima de R$200,00.</p4><br><br><br>
                <label for="mail">E-mail:</label>
                <input type="email" id="mail" name="mail" placeholder="Dígite seu e-mail para ganhar...">
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