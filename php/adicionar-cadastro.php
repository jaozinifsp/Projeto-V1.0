<?php
session_start();
$nome = $_POST['nome_cad'];
$senha = sha1($_POST['senha_cad']);
$email = $_POST['email_cad'];

require 'conexao.php';
try{
	$stmt = $conn->prepare(
	"INSERT INTO cadastro ( nome, senha, email) 
    VALUES ( :nome, :senha, :email)"
    );
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':email', $email);

	$stmt->execute();
	$retorno['deucerto'] = true;
	$retorno['mensagem'] = "Parabéns! Cadastrou!";
	echo json_encode($retorno);
	
} catch(PDOException $e){
	$retorno['deucerto'] = false;
	$retorno['mensagem'] = "Opss! Algo deu errado!";
	$retorno['error'] = $e->getMessage();
	echo json_encode($retorno);
}
?>