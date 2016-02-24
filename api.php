<?php
date_default_timezone_set("Europe/Tallinn");
  
function salvesta_API($item) {
    $kliendi_nimi = $item["kliendi_nimi"];
    $aadress = $item["aadress"];
    $toode = $item["toode"];
    $makseviis = $item["makseviis"];
    $kuller = $item["kuller"];

    $id = file_get_contents("id.txt");
	$aeg = time();
	// date("d.m.Y h:i:s");

	$data = json_decode(file_get_contents("data.json"), 2);

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

function vaata_API() {

	$item = json_decode(file_get_contents("data.json"), true);
	$item = $item[$_GET["key"]];
	
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
	$aeg = time();
	// date("d.m.Y h:i:s");

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

	$array1 = json_decode(file_get_contents("data.json"), true);
	$array2 = $array1[$_GET["key"]];
	$id_nr = intval($array2["id"]);
	unset($array1[$id_nr]);
	file_put_contents("data.json", json_encode($array1));
	
}

function tellimused_API() {

	$items = json_decode(file_get_contents("data.json"), 2);
	if(is_array($items)) {
		foreach($items as $key => $item)
		
	return $items;
	}
}
	
?>