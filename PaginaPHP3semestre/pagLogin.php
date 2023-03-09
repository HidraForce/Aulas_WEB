<?php require "paginas_Back\header.php" ?>

<div class="item4">
    <!-- Formulario  de cadastro-->
    <div id="paidLog"><!-- div para oorganizar a pagina -->
        <div id="it4_1"><!-- div para o dormulario de  cadastro-->
            <form action="paginas_Back\receberCad.php" method="POST">
                <label for="userName">Nome do usuario</label>
                <input type="text" class="input2" name="userName"><br>

                <label for="e-mail">E-mail</label>
                <input type="email" class="input2" name="email" onblur="validacaoEmail(f1.email)"  maxlength="60" size='65'><br>
            
            
                <!-- Password field -->
                <script src="StyleJS.js"></script>
                <label for="nomeProduto">Senha</label>
                <input type="password" class="input2" name="passwd" id="myInput">
                <!-- An element to toggle between password visibility -->
                <label for="showpasswd">Mostara senha</label>
                <input type="checkbox" onclick="myFunction()" name="showpasswd"><br>


                <label for="cpf">CPF</label>
                <input type="text" class="input2" name="cpf" oninput="mascara(this)"><br>

                <label for="datNac">Data de nascimento</label>
                <input type="date" class="input2" name="datNac"><br>

                <fieldset>
                    <legend>Sexo</legend>
                    <label for="sxMasc">Masculino</label>
                    <input type="radio" class="radbox" name="sx" value="M">
                    <label for="sxFem">Feminino</label>
                    <input type="radio" class="radbox" name="sx" value="F">
                </fieldset>

                 
                <label>Telefone</label>
                <input type="text" class="form-control" placeholder="Telefone" id="telefone" name="#telefone" ><br>
                <label>Celular</label>
                <input type="text" class="form-control" placeholder="Celular" id="celular" name="#celular" ><br>
        
                

        
                <input type="submit" name="enviare" value="Concluir">


           

        </form>

    </div>
    


    <div id="it4_2">
            <!-- FOrmulario de Login -->
            <form action="paginas_Back\receberLogin.php" method="POST">

                <!-- email-->
                <label for="">E-mail</label><br>
                <input type="email" class="input3" name="emailVerify" onblur="validacaoEmail(f1.email)"  maxlength="60" size='65'><br>
                <!-- Senha-->
                <label for="">Senha</label><br>
                <input type="password" class="input3" name="passwdVerify" id="myInput2"><br>
                <label for="showpasswd">Mostara senha</label>
                <input type="checkbox" onclick="myFunctionx()" name="showpasswd" ><br>

                <!-- Forgot passwd-->
                <a href="#">Esqueci minha Senha</a><br>
                <a href="paginas_Back\logout.php">deslogar</a><br><br>

                <!-- Submit-->
                <input type="submit" class="input3SUB" name="input3Submit" value="Login">
                <a id="goBack" href="Index.php">voltar a pagina inicial</a> 


                <!-- Login with either googleacc or facebookacc-->
                <!--<input type="" class="" name="">

                <input type="" class="" name="">-->
            </form>

        </div>
        

    </div>
</div>



<?php require "F:\DWBII\PaginaPHP3semestre\paginas_Back\\footer.php" ?>