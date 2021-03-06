<?php
class Request{
    private $method;
    private $protocol;
    private $host;
    private $path;
    private $queryString;
    private $body;
    
    public function constructor($method, $protocol, $host, $path=null,$queryString= null,$body=null){
        
        $this -> method = $method;
        $this -> protocol = $protocol;
        $this -> host = $host;
        
        
    }
    
    public function getMethod()
    {
        return $this->method;
    }
    
    
    public function getProtocol()
    {
        return $this->protocol;
    }
    
    
    public function getHost()
    {
        return $this->host;
    }
    
    
    public function getPath()
    {
        return $this->path;
    }
    
    
    public function getQueryString()
    {
        return $this->queryString;
    }
    
    
    public function getBody()
    {
        return $this->body;
    }
    
    public function setMethod($method)
    {
        $this->method = $method;
    }
    
    
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }
    
   
    public function setHost($host)
    {
        $this->host = $host;
    }
    
    public function setPath($path)
    {
        $this->path = $path;
    }
    
    
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;
    }
    
   
    public function setBody($body)
    {
        $this->body = $body;
    }
    
    
    
    
    
}
