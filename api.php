<?php
date_default_timezone_set("Europe/Tallinn");
  
function salvesta_API($item) {
	$kliendi_nimi = $item["kliendi_nimi"];
	$aadress = $item["aadress"];
	$toode = $item["toode"];
	$makseviis = $item["makseviis"];
	$kuller = $item["kuller"];

	$id = file_get_contents("id.txt");
	$aeg = strftime("%d.%m.%Y %X");

	$data = json_decode(file_get_contents("data.json"), true);

	$data[] = array(
		"id" => $id,
		"kliendi_nimi" => $kliendi_nimi,
		"aadress" => $aadress,
		"toode" => $toode,
		"makseviis" => $makseviis,
		"kuller" => $kuller,
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
	$kliendi_nimi = $item["kliendi_nimi"];
	$aadress = $item["aadress"];
	$toode = $item["toode"];
	$makseviis = $item["makseviis"];
	$kuller = $item["kuller"];

	$id = intval($id);
	$aeg = strftime("%d.%m.%Y %X");

	$data = json_decode(file_get_contents("data.json"), true);

	$data[$id] = array(
		"id" => $id,
		"kliendi_nimi" => $kliendi_nimi,
		"aadress" => $aadress,
		"toode" => $toode,
		"makseviis" => $makseviis,
		"kuller" => $kuller,
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