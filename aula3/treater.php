<?php
require_once 'requestValidator.php';
$validatorSummon= new requestValidator;
class Treater{
 public function JsonSender($methodToCheck, $protocolToCheck){
     if (){
    $Objerror -> codeName = "Code: ";
    $Objerror -> code = "405 <br>";
    $Objerror -> messageName = "Message: ";
    $Objerror -> message = "Metodo nao permitido ";
    
   echo json_encode($Objerror);
}
else if ($valida){ // PEGA A RESPOSTA DA FUNCAO DO VALIDADOR E COMPARA COM FALSE.. N CONSIGO RODAR
       $Objerror -> codeName = "Code: ";
       $Objerror -> code = "405 <br>";
       $Objerror -> messageName = "Message: ";
       $Objerror -> message = "Metodo nao permitido ";
       
       echo json_encode($Objerror);
}
 }
 
 }
