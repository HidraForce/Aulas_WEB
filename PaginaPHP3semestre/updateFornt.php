<?php
require "paginas_Back\connection.php";
require "paginas_Back\header.php";

$id = $_GET['id'];
$comando = "SELECT p.*,g.* FROM produto as p INNER JOIN grafica as g where g.idGrafica =p.idGrafica and  p.idProduto = '$id'";
$resultado = mysqli_query($conexao, $comando);

$data = mysqli_fetch_assoc($resultado);

print_r($data);

?>


<div class="item4">
        <form action="\paginas_Back\updateBack.php" method="post" class="form1"">
            <h1>Formulario de Cadastro de Produtos</h1>
            <input type="hidden" name="id" value="<?=$data["idProduto"];?>">
            <input type="hidden" name="idGra" value="<?=$data["idGrafica"];?>"> 
            <label for="nomeProduto">Nome do produto</label>
            <input type="text" name="nomeProduto" class="inputform" value="<?=$data["nomeProduto"];?>">
    
            <label for="desc">Descrição do produto</label>
            <input type="text" name="desc"  id="textarea" value="<?= $data["descricao"]; ?>">
    
            <label for="cat">Categoria</label>
            <p>Categoria atual: <?= $data["categoriaProduto"]; ?></p>
            <select id="cat" name="cat" value="<?= $data["categoriaProduto"]; ?>">
                <option value="Livro">Livro</option>
                <option value="Revista">Revista</option>
                <option value="Manga">Manga</option>
                <option value="Infantil">Infantil</option>
                <option value="Outro">Outro...</option>
            </select>
    
            <label for="preco">Preço</label>
            <input type="text" name="preco" class="inputform"  value="<?=$data["precoProduto"];?>">
    
            <label for="nome_graf">Nome da grafica</label>
            <input type="text" name="nome_graf" class="inputform"  value="<?=$data["nomeGrafica"];?>">
    
            <label for="data_publ">Data de publicação pela grafica</label>
            <input type="date" name="data_publ" value="<?=$data["dataPublicacao"];?>">
   
            <label for="auth">Nome do autor(a)</label>
            <input type="text" name="auth" class="inputform"  value="<?=$data["nomeAutor"];?>">
    
    
            <input type="submit" name="submitForm" id="submiit" plceholder="ENVIAR" value="Alterar"><br><br>


            <a href="pagCRUDProd.php" class="CRUDbtn">EDITAR////DELETAR</a>
        </form>
</div>






























<?php require "paginas_Back\\footer.php"; ?>