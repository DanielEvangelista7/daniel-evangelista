<?php 
include_once "Request.php";

$servidor = new Request($_SERVER["REQUEST_METHOD"],$_SERVER["SERVER_PROTOCOL"],$_SERVER["HTTP_HOST"], $_SERVER["REQUEST_URI"],$_SERVER ["DOCUMENT_ROOT"]);

var_dump($servidor);
