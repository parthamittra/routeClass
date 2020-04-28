<?php
namespace App\Controller;

class PatientsMetricsController{

	public function index($patientId){
		$responseObj=new \stdClass();
		$responseObj->status_code=200;
		$responseObj->body="In PatientsMetics Index with id: $patientId";
		return json_encode($responseObj);
	}

	public function get($patientId){
		$responseObj=new \stdClass();
		$responseObj->status_code=200;
		$responseObj->body="In PatientsMetics Get with id: $patientId";
		return json_encode($responseObj);
	}

	public function create($patientId){
		$responseObj=new \stdClass();
		$responseObj->status_code=200;
		$responseObj->body="In PatientsMetics Create with id: $patientId";
		return json_encode($responseObj);
	}

	public function update($patientId, $metricId){
		$responseObj=new \stdClass();
		$responseObj->status_code=200;
		$responseObj->body="In PatientsMetics Update with id: $patientId and metric is :$metricId";
		return json_encode($responseObj);


	}

	public function delete($patientId,$metricId){
		$responseObj=new \stdClass();
		$responseObj->status_code=200;
		$responseObj->body="In PatientsMetics Delete with id: $patientId and metric is :$metricId";
		return json_encode($responseObj);

	}
}


?>
