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
  <h4>TELLIMUSTE INDEKS</h4><br><br>

<table align="left" cellpadding="5" rowspan="5">
    <tr>
        <th>NIMI</th>
        <th>VAATA</th>
		<th>MUUDA</th>
		<th>KUSTUTA</th>
    </tr>
	<tr>
		<td width=200>
		<td width=60>
		<td width=60>
		<td width=60>
	</tr>
	
	<?php
	require_once('api.php');
	$items = tellimused_API();
	
	foreach ((array) $items as $key => $item) {
	?>
			<tr>
				<td><?=$item["kliendi_nimi"]?></td>
				<td><a href="vaata.php?key=<?=$key?>"><?="Vaata"?></a></td>
				<td><a href="muuda.php?key=<?=$key?>"><?="Muuda"?></a></td>
				<td><a href="kustuta.php?key=<?=$key?>"><?="Kustuta"?></a></td>
			</tr>
			<?php
		}
	?>
</table>
</div>
