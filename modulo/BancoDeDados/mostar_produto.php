<?php

$conexao=$conexao = mysqli_connect("localhost", "root","","loja");
$comando ="SELECT * FROM produto";
$resultado=mysqli_query($conexao,$comando);



while($dados = mysqli_fetch_assoc($resultado)){
    echo "<p>". $dados["titulo"] . "<p>"."<p>". $dados["descricao"] . "<p>"."<p>". $dados["preco"] . "<p>"."<br>";
    
}
