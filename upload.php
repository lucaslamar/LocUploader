<?php
include_once("validacao.php");
$email = $_SESSION['email'];


    if(isset($_FILES["arquivo"])){

 

        $arquivo = $_FILES["arquivo"];
        
         
        
        $pasta_dir = "/opt/lampp/htdocs/Nosso_projeto/arquivos/";//diretorio dos arquivos
        
        //se nao existir a pasta ele cria uma
        
        if(!file_exists($pasta_dir)){
        
        mkdir($pasta_dir);
        
        }
        
         
        
        $arquivo_nome = $pasta_dir.$arquivo["name"];
        
         
        
        // Faz o upload da imagem
        
        move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
         
        
        //aqui salva no banco o path da foto
$nome_servidor = "127.0.0.1";
$nome_usuario = "root";
$senha = "";
$nome_banco = "locuploader";
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
if ($conecta->connect_error)
die("Ocorreu uma falha na conexão". $conecta->connect_error."<br>");
mysqli_query($conecta,"INSERT INTO foto (nome_de_caminho,email) VALUES ('$arquivo_nome','$email')");



    } 

        
?>
