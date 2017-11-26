<?php

	require "dbH.php";

	$network_name = $_GET['network_name'];
	$network_url = $_GET['network_url'];
	$data = "";
	$android = "";
	$ios = "";
	$relations = $_GET['relations'];
	$imprint_url = $_GET['imprint_url'];
	$tos_url = $_GET['tos_url'];
	$rel_ids = "";
	$net_id = "";


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



	$rels = explode(",", $relations);

	foreach ($rels as $net_names) {
   		
		$result = $db->sendQuery("SELECT `network_id` FROM `network` WHERE `name` = '$net_names'");

		while($row = $result->fetch_object()) {
		  	$rel_ids .= $row->network_id . ",";
		}

	}

	$db->sendQuery("INSERT INTO `network` (`name`, `url`, `tos_url`, `data`, `ios`, `android`, `relations`) VALUES ('$network_name', '$network_url', '$tos_url', '$data', '$ios', '$android', '$rel_ids')");

	if(isset($_GET['theft_trigger'])){

		$theft_desc = $_GET['theft_desc'];
		$theft_url = $_GET['theft_url'];
		$theft_date = $_GET['theft_date'];

		$result2 = $db->sendQuery("SELECT `network_id` FROM `network` WHERE `name` = '$network_name' LIMIT 1");

		while($row2 = $result2->fetch_object()) {

			$net_id = $row2->network_id;	

		}

		$db->sendQuery("INSERT INTO `data_theft` (`network_id`, `description`, `theft_source`, `theft_time`) VALUES ('$net_id', '$theft_desc', '$theft_url', '$theft_date')");

	}

	/*
	echo("Name: " . $network_name . "<br>");
	echo("URL: " . $network_url . "<br>");
	echo("data: " . $data . "<br>");
	echo("android: " . $android . "<br>");
	echo("ios: " . $ios . "<br>");
	echo("relations: " . $rel_ids . "<br>");
	echo("imprint_url: " . $imprint_url . "<br>");
	echo("tos_url: " . $tos_url . "<br>");
	*/
	

	header('Location: ../index.php?search=' . $network_name);


?>