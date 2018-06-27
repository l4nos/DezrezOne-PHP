<?php

class drOne {

	public $apikey;
	public $agencyID;

	public function __construct($apiKey, $agencyID){
			$this->apikey = $apiKey;
			$this->agencyID = $agencyID;
	}

	public function propertySearch($criteria){

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://www.dezrez.com/DRApp/DotNetSites/WebEngine/property/Default.aspx?xslt=-1&apiKey=".$this->apikey."&eaid=" . $this->agencyID,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $criteria,
			CURLOPT_HTTPHEADER => array(
				"Cache-Control: no-cache",
				"Content-Type: application/x-www-form-urlencoded")
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo simplexml_load_string($response);
		}

	}

	public function propertyDetails($id){

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://www.dezrez.com/DRApp/DotNetSites/WebEngine/property/Property.aspx?xslt=-1&apiKey=".$this->apikey."&eaid=" . $this->agencyID."&pid=" . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Cache-Control: no-cache",
				"Content-Type: application/x-www-form-urlencoded")
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo simplexml_load_string($response);
		}

	}

	public function featuredProperties($number = 4, $rentalPeriod = 4, $branchList = false){

		$curl = curl_init();

		if($branchList){
			$branchString = "&branchList=";
			foreach($branchList as $branch){
				$branchString .= $branch . ",";
			}
		}
		else{
			$branchString = "";
		}

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://www.dezrez.com/DRAPP/DotNetSites/WebEngine/Property/featuredproperties.aspx?xslt=-1&apiKey=".$this->apikey."&eaid=" . $this->agencyID."&rentalPeriod=" . $rentalPeriod . $branchString,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Cache-Control: no-cache",
				"Content-Type: application/x-www-form-urlencoded")
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo simplexml_load_string($response);
		}

	}

	public function latestProperties($number = 4, $rentalPeriod = 4, $branchList = false){

		$curl = curl_init();

		if($branchList){
			$branchString = "&branchList=";
			foreach($branchList as $branch){
				$branchString .= $branch . ",";
			}
		}
		else{
			$branchString = "";
		}

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://www.dezrez.com/DRAPP/DotNetSites/WebEngine/Property/featuredproperties.aspx?xslt=-1&apiKey=".$this->apikey."&eaid=" . $this->agencyID."&rentalPeriod=" . $rentalPeriod . $branchString,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Cache-Control: no-cache",
				"Content-Type: application/x-www-form-urlencoded")
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo simplexml_load_string($response);
		}

	}


}