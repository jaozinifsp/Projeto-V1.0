<?php 
$user = $_SESSION['nome_login'];
$pass = sha1($_POST['senha_login']);

require 'conexao.php';
try{
	$stmt = $conn->prepare(
	"SELECT * FROM cadastro WHERE nome = :nome AND senha = :senha;"
	);
    $stmt->bindParam(':nome', $user);
    $stmt->bindParam(':senha', $pass);

	$stmt->execute();
	
	if($stmt->rowCount() == 1){
		session_start();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['id'] = $result['id'];
		$_SESSION['nome_login'] = $result['nome'];
		
		
		$retorno['deucerto'] = true;
		$retorno['mensagem'] = "Parabéns! Logou!";
		echo json_encode($retorno);
	}else{
		$retorno['deucerto'] = false;
		$retorno['mensagem'] = "Usuário ou Senha Inválidos";
		echo json_encode($retorno);
	};
} catch(PDOException $e){
	$retorno['deucerto'] = false;
	$retorno['mensagem'] = "Opss! Algo deu errado!";
	$retorno['error'] = $e->getMessage();
	echo json_encode($retorno);
}
?>