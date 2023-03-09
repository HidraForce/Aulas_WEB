<?php require "header.php"?>
  <div class="header">
    <h1>Log de endereços</h1>

  </div>
  <div class="container">
    <form action="Log.php" method="post">
      <input type="text" name="adress" placeholder="Rua">
      <input type="number" name="numero" placeholder="Numero">
      <input type="text" name="complemeto" placeholder="Complemento"><br>
      <input type="text" name="bairro" placeholder="Bairro"><br>
      <input type="number" name="cep" placeholder="CEP"><br>
      <input type="text" name="cidade" placeholder="Cidade"><br>
      <input type="text" name="estado" placeholder="Estado"><br>
      <input type="text" name="pais" placeholder="Pais"><br>
      <button>Terminar</button>
    </form> 
    <div class="links">
      <a href="Select.php">Mostrar endereços</a>
       

    </div>
  </div>
<?php require "footer.php" ?>