<?php

namespace App\Classes;
use App\Classes\Request;
use App\Controller\PatientsController;
use App\Controller\PatientsMetricsController;



class Route{
	public $method;
	public $url;
	public $body;
	function __construct(){

	}
	public static function resource(Request $req){
		$components=[];
		$call= new Route();
		$components=$call->parseURL($req->url);
		$pc=new PatientsController();
		$pmc=new PatientsMetricsController();
		switch(count($components)){
			case 1:
				if($req->method=="GET"){
					return $pc->index();
				} else if ($req->method=="POST"){
					return $pc->create($req->getBody());
				}else{
					throw new Exception("non permitted method, must be GET or POST");
				}
			break;
			case 2:
				switch($req->method){
					case 'GET':
						return $pc->get($components['resource_id']);
					break;
					case 'PATCH':
						return $pc->update($components['resource_id']);
					break;
					case 'DELETE':
						return $pc->delete($components['resource_id']);
					case 'POST':
						throw new Exception('POST not permitted when resource id is passed in');
					break;
				}
			break;
			case 3:
				if($req->method=="GET"){
					return $pmc->index($components['resource_id']);
				} else if ($req->method=="POST"){
					return $pc->create($components['resource_id']);
				}else{
					throw new Exception("non permitted method, must be GET or POST");
				}
			break;
			case 4:
				switch($req->method){
					case 'GET':
						return $pc->get($components['resource_id'],$components['subresource_id']);
					break;
					case 'PATCH':
						return $pc->update($components['resource_id'],$components['subresource_id']);
					break;
					case 'DELETE':
						return $pc->delete($components['resource_id'],$components['subresource_id']);
					break;
				}
			break;


		}	
	}
	private function parseURL($url): array {
		$resources=[];
		$results=[];
		$resources=explode('/',$url);
		if(count($resources)==0){
			throw new Exception('URL has no length, no call possible');
		}
		foreach($resources as $key=>$value){
			switch ($key) {
				case 1:
				array_push($results,['resource'=>$value]);
				break;
				case 2:
				  if(is_numeric($value)){
					  array_push($results,['resource_id'=>$value]);
				  } else {
					array_push($results,['subresource'=>$value]);
				  }
				break;
				case 3:
					array_push($results,['subresource'=>$value]);
				break;
				case 4:
					array_push($results,['subresource_id'=>$value]);
				break;
			}

		}
		return $this->flattenArray($results);

	}	

	private function flattenArray($array): array {

		$return = array();
    		foreach ($array as $key => $value) {
        		if (is_array($value)){
            			$return = array_merge($return, $this->flattenArray($value));
        		} else {
            			$return[$key] = $value;
        		}
    		}

    		return $return;
	}

}


?>
