<?php
$nome = $_POST['jogo'];
$descricao = $_POST['descricao'];
$origem = $_FILES["imagem"]["tmp_name"];
$caminho = '../uf/';

$resultado = explode('.',$_FILES["imagem"]["name"]);
$ext = end($resultado);
$nomearquivo = uniqid().'.'.$ext;
$destino = $caminho.$nomearquivo;

if($_FILES["imagem"]["size"] < 1048576){
	if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif'){		
		move_uploaded_file($origem, $destino);
        
        require 'conexao.php';
        try{
            $stmt = $conn->prepare(
                "INSERT INTO upload (nome, descricao, imagem) 
                VALUES ( :nome, :descricao, :imagem)"
            );
    
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':imagem', $nomearquivo);

            $stmt->execute();
            $retorno['deucerto'] = true;
            $retorno['mensagem'] = "Parabéns! Cadastrou o jogo!";
            $retorno['msg'] = 'Arquivo enviado com sucesso!';
            echo json_encode($retorno);
        } catch(PDOException $e){
           $retorno['deucerto'] = false;
            $retorno['msg'] = 'Formato Inválido!';
            $retorno['error'] = $e->getMessage();
            echo json_encode($retorno);
        }
	}
}else{
	$retorno['deucerto'] = false;
	$retorno['msg'] = 'Arquivo muito grande!';
	echo json_encode($retorno);
}
?>