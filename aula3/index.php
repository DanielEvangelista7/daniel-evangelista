<?php
require_once 'request.php';
require_once 'Treater.php';

echo $_SERVER['REQUEST_METHOD'];
echo "<br>";

echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo "<br>";

echo  "Path:".$_SERVER['PATH'];
echo "<br>";
echo "<br>";

echo "Query String:".$_SERVER['QUERY_STRING'];
echo "<br>";

$treaterSummon= new Treater();
$treaterSummon->JsonSender($_SERVER['REQUEST_METHOD'],$_SERVER['SERVER_PROTOCOL']); 

$request = new Request($_SERVER['REQUEST_METHOD'],$_SERVER['SERVER_PROTOCOL'],$_SERVER['HTTP_HOST'],$_SERVER['PATH'],$_SERVER['QUERY_STRING']);
