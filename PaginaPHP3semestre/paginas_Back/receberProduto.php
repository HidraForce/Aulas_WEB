<?php require "connection.php";


//variaveis de desscrição do produto
$nome=$_POST["nomeProduto"];
$desc=$_POST["desc"];
$cat=$_POST["cat"];
$preco=$_POST["preco"];
$nome_graf=$_POST["nome_graf"];
$date=$_POST["data_publ"];
$auth=$_POST["auth"];
$img=$_FILES["img_rep"];
$statusMsg ="";


//INSERIR INFFORMAÇÕES NA TABELA GRÁFICA
$comando2= "INSERT INTO grafica(nomeGrafica,nomeAutor,dataPublicacao) VALUES('$nome_graf', '$auth','$date')";

$resultado2=mysqli_query($conexao, $comando2);

$idgraf= mysqli_insert_id($conexao);

if($resultado2==true){
    //INSERIR IMAGEM E INFORMAÇ~ES NA TABELA PRODUTO
    $comando1= "INSERT INTO produto(nomeProduto, descricao,categoriaProduto, precoProduto, idGrafica) VALUES('$nome','$desc','$cat','$preco','$idgraf')";
            
    //SIDA DA QUERY
    $resultado1=mysqli_query($conexao, $comando1);

    $IDforFKIMG= mysqli_insert_id($conexao);
}else{
    echo "erro de database";
}


if($resultado2==true){
    
    //TIPOS DE ARQUIVOS PERMITIDOS
    $permitidos = array('jpg','png','jpeg');
    
    //VERIFICAR SE FORMA INSERIDOS ARQUIVOS
    if(isset($_POST["submitForm"])){
        //CONTADOR DE ARQUIVOS INSERIDOS
        $total = count($_FILES['img_rep']['name']);
        //LOOP PARA INSERIR MULTIPLOS ARQUIVOS
        for($i=0;$i<$total;$i++){
            
            
            //DESTINO DO ARQUIVO
            $destinoArq = '../IMG/produtos/';
            //O ARQUIVO DE ACCORDO COM A POSIÇÃO DO LOOP
            //
            //NOME TEMPORARIO DO ARQUIVO
            $arquivo=$_FILES['img_rep']['tmp_name'][$i];        

            //NOME BASE DO ARQUIVO
            $fileName = basename($_FILES["img_rep"]["name"][$i]);
            
            //NOME PARA EVITAR CONFLITO
            $novoNome = rand(1,5000000) ."-" . $fileName;

            //ARMAZRENAR EM VARIAVEL O NOME O CAMINHO DO ARQUIVO
            $caminho = $destinoArq . $novoNome;
            
            //TIPO DO ARQUIVO
            $extensao = pathinfo($caminho,PATHINFO_EXTENSION);


            

            //VERIFICAR TIPO DOS ARQUIVOS PARA COMPARAÇÃO FUTURA
            if(in_array($extensao,$permitidos)){
                //VERFIFICAR SE O ARQUIVO FOI MOVIDO
                if(move_uploaded_file($arquivo, $destinoArq.$novoNome)){
                    $SQL="INSERT INTO imagens(idProduto,img_rep) VALUES('$IDforFKIMG','$caminho')";

                    $resultado3=mysqli_query($conexao,$SQL);

                    if($resultado3==true){
                        header("Location:../pagCRUDProd.php?Arquivo_Inserido_com_sucesso");
                        
                    }else{
                        header("location:../pagCadProd.php?Data_base_erro");
                    }


                }else{
                     echo "incapaz de mover arquivo";
                }

            }else{
                echo "fora do formato permitido";
            }
        }



    }else{
        echo "Não foi inserido nada";
    }


    }else{
        echo "erro na tabela produto";
    }
//--------------------------------