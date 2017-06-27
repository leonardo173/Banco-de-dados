<?php 

//conexao com banco de dados
$conecta = new PDO("mysql:host=localhost;dbname=id2082853_teste_com_formulario;" , "id2082853_envia" , "Leonardohit123..");

//dados obtidos pelo formulario

$nome   = $_POST['nome'];
$email  = $_POST['email'];
$telefone  = $_POST['telefone'];
$comentario = $_POST['comentario'];

//inserir na tabela "cadastro"

$sql = 'insert into cadastro (id,nome,email,telefone,comentario) values(null, "'.$nome.'",  "'.$email.'" , "'.$telefone.'" , "'.$comentario.'")';

$insere = $conecta-> prepare($sql);
$insere->execute();

//imprimindo msg de sucesso
echo("Enviado com sucesso!");
 ?>