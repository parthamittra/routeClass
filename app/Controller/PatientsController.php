<?php
namespace App\Controller;

class PatientsController{

	public function index(){
		$responseObj=new \stdClass(); 
		$responseObj->status_code=200;
		$responseObj->body="in Patient Index call";
		 
		return 	json_encode($responseObj);
	}

	public function get($patientId=0){
		$responseObj=new \stdClass(); 
		$responseObj->status_code=200;
		$responseObj->body="In Patient Get call,patient id is $patientId";
		 
		return json_encode($responseObj);

	}


	public function create($body=[]){
		$responseObj=new \stdClass(); 
		$responseObj->status_code=200;
		$responseObj=(object)$responseObj; 
		$responseObj->body="In Patient create call,body is $body";
		 

		return json_encode($responseObj);
	}

	public function update($patientId){
		$responseObj=new \stdClass(); 
		$responseObj->status_code=200;
		$responseObj->body="In Patient update call,patient id is $patientId";
		 
		return json_encode($responseObj);

	}


	public function delete($patientId){
		$responseObj=new \stdClass(); 
		$responseObj->status_code=200;
		$responseObj->body="In Patient Delete call,patient id is $patientId";
		 
		return json_encode($responseObj);

	}
}


?>
