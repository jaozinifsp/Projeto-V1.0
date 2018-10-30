<?php 
session_start();

if(!isset($_SESSION['nome_login'])){
	header('Location: /Projeto-V1.0/index.php');
}
?>
