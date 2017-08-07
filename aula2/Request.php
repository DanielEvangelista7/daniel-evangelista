<?php 

 class Request{
	private $method;
	private $protocol;
	private $host;
	private $path; 
	private $query;
	
	 function __construct($method, $protocol, $host, $path, $query){
	 $this->method=$method;
	 $this->protocol=$protocol;
	 $this->host=$host;
	 $this->path=$path;
	 $this->query=$query;
	}

	public function getMethod(){
		return $this->method;
	}

	public function setMethod($method){
		$this->method = $method;
	}

	public function getProtocol(){
		return $this->protocol;
	}

	public function setProtocol($protocol){
		$this->protocol = $protocol;
	}

	public function getHost(){
		return $this->host;
	}

	public function setHost($host){
		$this->host = $host;
	}

	public function getPath(){
		return $this->path;
	}

	public function setPath($path){
		$this->path = $path;
	}

	public function getQuery(){
		return $this->query;
	}

	public function setQuery($query){
		$this->query = $query;
	}

}
