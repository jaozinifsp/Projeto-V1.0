<?php
session_start();
session_destroy();

header('Location: /Projeto-V1.0/index.php');
?>