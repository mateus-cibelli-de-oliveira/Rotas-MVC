<html>
<head>
    <title>Formulário de produtos</title>
    <link rel="stylesheet" type="text/css" href="css/produtos.css">
</head>
    <body>
    <h1>Página de Produtos</h1>
  
<div id="containerForm">
<div class="bordaColor">
<form class="formulario" method="post">
   @csrf

<b>Produtos:<b>
<input type="text" name="produto"><br><br>

<b>Preço:<b>
<input type="text" name="preco"><br><br>

<b>Categoria:<b>
<input type="text" name="categoria"><br><br>

<input type="submit" value="Salvar">

</form>
</div><!--BordaColor-->
</div><!--containerForm-->

<hr><br>

<label>Produto: {{$produto}}</label><br><br>
<label>Preço: {{$preco}}</label><br><br>
<label>Categoria: {{$categoria}}</label><br><br>

    </body>
</html>