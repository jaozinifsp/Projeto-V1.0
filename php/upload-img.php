<?php
$origem = $_FILES["foto"]["tmp_name"];
$caminho = '../uf/';

$resultado = explode('.',$_FILES["foto"]["name"]);
$ext = end($resultado);
$nomearquivo = uniqid().'.'.$ext;
$destino = $caminho.$nomearquivo;

if($_FILES["foto"]["size"] < 1048576){
	if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif'){		
		move_uploaded_file($origem, $destino);
		echo "Arquivo enviado com sucesso!";
	}else{
		echo "Formato Inválido!";
	}
}else{
	echo "Arquivo muito grande!";
}
?>