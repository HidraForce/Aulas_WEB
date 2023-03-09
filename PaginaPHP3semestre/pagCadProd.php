<?php 
require "paginas_Back\connection.php";


require "paginas_Back\header.php";


include ("paginas_Back\\verifylogin.php");

echo session_status()
?>
<div class="item4">
<form action="paginas_Back\receberProduto.php" method="post" class="form1" enctype="multipart/form-data">
    <h1>Formulario de Cadastro de Produtos</h1>
    <label for="nomeProduto">Nome do produto</label>
    <input type="text" name="nomeProduto" class="inputform">
    
    <label for="desc">Descrição do produto</label>
    <input type="text" name="desc"  id="textarea">
    
    <label for="cat">Categoria</label>
    <select id="cat" name="cat">
        <option value="Livro">Livro</option>
        <option value="Revista">Revista</option>
        <option value="Manga">Manga</option>
        <option value="Infantil">Infantil</option>
        <option value="Outro">Outro...</option>
    </select>
    
    <label for="preco">Preço</label>
    <input type="text" name="preco" class="inputform" >
    
    <label for="nome_graf">Nome da grafica</label>
    <input type="text" name="nome_graf" class="inputform">
    
    <label for="data_publ">Data de publicação pela grafica</label>
    <input type="date" name="data_publ">
   
    <label for="auth">Nome do autor(a)</label>
    <input type="text" name="auth" class="inputform">
    
    <label for="img_input">Imagens da obra</label>
    <input type="file" requierd name="img_rep[]" id="img_input" multiple >
    
    <input type="submit" name="submitForm" id="submiit" plceholder="ENVIAR" value="upload"><br><br>


    <a href="pagCRUDProd.php" class="CRUDbtn">EDITAR////DELETAR</a>


</form>

                
</div>





<?php require "paginas_Back\\footer.php"?>