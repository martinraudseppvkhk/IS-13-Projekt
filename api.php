<?php
date_default_timezone_set("Europe/Tallinn");
  
function salvesta_API($item) {
	$arg1 = $item["arg1"];
	$arg2 = $item["arg2"];
	$arg3 = $item["arg3"];
	$arg4 = $item["arg4"];
	$arg5 = $item["arg5"];

	$id = file_get_contents("id.txt");
	$aeg = strftime("%d.%m.%Y %X");

	$data = json_decode(file_get_contents("data.json"), true);

	$data[] = array(
		"id" => $id,
		"arg1" => $arg1,
		"arg2" => $arg2,
		"arg3" => $arg3,
		"arg4" => $arg4,
		"arg5" => $arg5,
		"aeg" => $aeg,);

	file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));

	$id = $id+1;
	file_put_contents("id.txt", $id);
	 
	return true;
}

function vaata_API($key) {

	$item = json_decode(file_get_contents("data.json"), true);
	$item = $item[$key];    
	return $item; 
	
}

function muuda_API($item) {
	$id = $item["id"];
	$arg1 = $item["arg1"];
	$arg2 = $item["arg2"];
	$arg3 = $item["arg3"];
	$arg4 = $item["arg4"];
	$arg5 = $item["arg5"];

	$id = intval($id);
	$aeg = strftime("%d.%m.%Y %X");

	$data = json_decode(file_get_contents("data.json"), true);

	$data[$id] = array(
		"id" => $id,
		"arg1" => $arg1,
		"arg2" => $arg2,
		"arg3" => $arg3,
		"arg4" => $arg4,
		"arg5" => $arg5,
		"aeg" => $aeg,);

	file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));

	return true;
}

function kustuta_API($id) {

	$item = json_decode(file_get_contents("data.json"), true);
	$id = $id["id"];
	$item[$id] = [];
	
	file_put_contents("data.json", json_encode($item, JSON_PRETTY_PRINT));
	
	return true;
}

function list_API() {

	$items = json_decode(file_get_contents("data.json"), true);
	
	return $items;	
}
?>