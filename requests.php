<?php 

$classe = ucfirst($_GET["classe"]).'Controller';
require_once("control/$classe.php");
$acao = $_GET["acao"];
$classe::$acao();

?>