<?php

namespace App\Interfaces;

interface RequestInterface{

	public function getBody();
	public function getURL();
	public function getHttpMethod();
}

?>
