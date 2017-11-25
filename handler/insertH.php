<?php

	require "dbH.php";
	

	$db = new db();
	$db->connect("host", "user", "pw", "db");

	$network_name = $_GET['network_name'];
	$network_url = $_GET['network_url'];
	$data = "";
	$android = "";
	$ios = "";
	$relations = $_GET['relations'];
	$imprint_url = $_GET['imprint_url'];
	$tos_url = $_GET['tos_url'];


	if (isset($_GET['data_photos'])) {
		$data .= "photos,";
	}
	if(isset($_GET['data_names'])){
		$data .= "names,";
	}
	if(isset($_GET['data_contacts'])){
		$data .= "contacts,";
	}


	if(isset($_GET['android_gps'])){
		$android .= "gps,";
	}
	if(isset($_GET['android_photos'])){
		$android .= "photos,";
	}
	if(isset($_GET['android_camera'])){
		$android .= "camera,";
	}
	if(isset($_GET['android_contacts'])){
		$android .= "contacts,";
	}


	if(isset($_GET['ios_gps'])){
		$ios .= "gps,";
	}
	if(isset($_GET['ios_photos'])){
		$ios .= "photos,";
	}
	if(isset($_GET['ios_camera'])){
		$ios .= "camera,";
	}
	if(isset($_GET['ios_contacts'])){
		$ios .= "contacts,";
	}

	/*
	echo("Name: " . $network_name . "<br>");
	echo("URL: " . $network_url . "<br>");
	echo("data: " . $data . "<br>");
	echo("android: " . $android . "<br>");
	echo("ios: " . $ios . "<br>");
	echo("relations: " . $relations . "<br>");
	echo("imprint_url: " . $imprint_url . "<br>");
	echo("tos_url: " . $tos_url . "<br>");
	*/

	$db->sendQuery("INSERT INTO `network` (`name`, `url`, `tos_url`, `data`, `ios`, `android`, `relations`) VALUES ('$network_name', '$network_url', '$tos_url', '$data', '$ios', '$android', '$relations')");

	header('Location: ../insert.php');


?>