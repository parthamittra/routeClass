<?php

namespace App\Classes;
use App\Interfaces\RequestInterface;

class Request implements RequestInterface {

	public $url;
	public	$method;
	public $body;
	function __construct($method,$url,$body=[]){
		$this->url=$url;
		$this->method=$method;
		$this->body=json_encode($body);

	}

	public function getBody(){
		return $this->body;
	}

	public function getURL(){
		return $this->url;
	}

	public function getHttpMethod(){
		return $this->method;

	}

}


?>
