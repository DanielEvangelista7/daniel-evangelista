<?php
class requestValidator{
    
    
public  function protocolChecker ($protocol){
    if ($protocol != HTTP || HTTPS){
    
    return false;
    }
    
        return true;
}    
 
public function methodChecker ($method){
   if ($method != GET || POST ||PUT || DELETE){
       return false;
   } 
    return true;
}
}
