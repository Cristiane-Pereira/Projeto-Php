<?php //Ligaçao com o Banco de Dados WampSever para envio do pedido do formulario!!
$servername ="localhost";
$username = "root";
$password = "";
$database ="loja_virtual";

//criando a conexão
$conn = mysqli_connect($servername,$username,$password,$database);

//verificando conexão
if(!$conn){
    die("A conexão ao BD falhou:" . mysqli_connect_error());
  }

  if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['produto']) && isset($_POST['quantidade'])){
     $nome = $_POST['nome'];
     $endereco = $_POST['endereco'];
     $telefone = $_POST['telefone'];
     $produto = $_POST['produto'];
     $quantidade= $_POST['quantidade'];

   //  echo $nome,$endereco,$telefone,$produto,$quantidade;

     $sql = "INSERT INTO envio_pedido (nome,endereco,telefone,produto,quantidade) values ('$nome', '$endereco','$telefone','$produto','$quantidade')";
     $result = $conn->query($sql);

     echo "<script>
     alert('Pedido enviado com Sucesso!')
     window.location.href ='contato.php'
     </script>
     ";
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
</head>
<body>
      <!-- Menu-->
    <?php
      Include('menu.html');
    ?>

       <!--Informaçao de contatos-->
    <main>
     <h2>Contato</h2>
     <hr>
     <table id="contato">
     <tr>
        <td class="contato">
            <img class="icon" src="./img/6eca98e8d266fe2cc7a961c5df51989f-en-el-correo-electronico-by-vexels.png">
            <p>lojavirtual@modafeminina.com</p>
        </td>
        <td class="contato">
           <img class="icon" src="./img/Whatsapp (LOGO) (28).png">
           <p>(11) 997856-9876</p>
        </td>
        <td class="contato">
            <img class="icon" src="./img/linkedin-icon-0.png">
            <p>www.linkedin.com/in/modafeminina</p>
        </td>
     </tr> 
     </table>
    </main>
                 <!--Fim da informaçao de contatos-->
<hr>     

        <!-- formulário para envio de pedido -->

        <h2>Formulário de pedidos</h2>

        <form method ="Post" action ="">
           Nome:<br> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
           &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
           &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
           <input type="text" name="nome" placeholder="Digíte seu nome"  style="width:700px"><br>
           Endereço:<br> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
           <input type="text" name="endereco" placeholder="Digíte seu endereço"  style="width:700px"><br>
           Telefone:<br> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
           <input type="text" name="telefone" placeholder="(11)97393-5521"  style="width:700px"><br>
           Produto:<br> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
           <input type="text" name="produto" placeholder="Digite seu Pedido"  style="width:700px"><br>
           Quantidade:<br> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
           <input type="number" name="quantidade" placeholder=""  style="width:80px"><br>
          Mensagem:<br>
          <textarea type="text" name="msg" placeholder="Digíte uma mensagem..." style="width:700px"></textarea><br><br>
          <button type="submit" name="button" value="Enviar">Enviar</button>

    </form>
                  <!-- Fim do formulario -->
        

                  <!--Formas de pagamento-->

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