<?php
session_start();
$nome = $_POST['nome-jogo'];
$descricao = $_POST['descricao']);
$imagem = $_POST['imagem'];

require 'conexao.php';
try{
	$stmt = $conn->prepare(
	"INSERT INTO upload ( nome, descricao, imagem) 
    VALUES ( :nome, :descricao, :imagem)"
    );
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':imagem', $imagem;

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