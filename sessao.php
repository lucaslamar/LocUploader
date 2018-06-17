<?php 
include_once("validacao.php");

if(empty($_SESSION))
{
$url='login.html';
header("Location: $url");
}
?>
