<!DOCTYPE html>
<html lang="et">
<head>
  <title>E-Pagar</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<div class="collapse navbar-collapse" id="bs-navbar-collapse">
	<ul class="nav navbar-nav">
		<li><a href="form.html">Tellimine</a></li>
		<li><a href="index.php">Indeks</a></li>
	</ul>
</div>

<div class="container">
  <h2>E-PAGAR</h2>
  <h4>TELLIMUS</h4><br><br>

<?php

require_once("api.php");
$item = vaata_API($_GET["key"]);

?>

<table align="left" cellpadding="5" rowspan="5">
	<tr>
		<td width=150>
		<td width=150>
		<td width=150>
		<td width=150>
		<td width=150>
		<td width=150>
		<td width=150>
	</tr>
	
	<tr>
		<th>ID: </th><td><?=$item["id"]?></td>
	</tr>
	<tr>
		<th>Kliendi nimi: </th><td><?=$item["kliendi_nimi"]?></td>
	</tr>
	<tr>
		<th>Aadress: </th><td><?=$item["aadress"]?></td>
	</tr>
	<tr>
		<th>Toode: </th><td><?=$item["toode"]?></td>
	</tr>
	<tr>
		<th>Makseviis: </th><td><?=$item["makseviis"]?></td>
	</tr>
	<tr>
		<th>Ekspresskuller: </th><td><?=$item["kuller"]?></td>
	</tr>
	<tr>
		<th>Kirje lisamise aeg: </th><td><?=$item["aeg"]?></td>
	</tr>
	</table>
</div>

<div class="container">
  <form role="form" action="index.php" method="get"><br><br>
		<button type="submit" class="btn btn-default">Tagasi</button>
  </form>
</div>