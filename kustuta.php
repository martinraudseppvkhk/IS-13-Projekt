<?php

require_once('api.php');
$item = vaata_API($_GET["key"]);
kustuta_API($item);

?>

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
  <form role="form" action="index.php" method="get"><br><br>
  
  <p><b>Tellimus on kustutatud!</b></p>
  
  <button type="submit" class="btn btn-default">Tagasi</button>
  </form>
</div>
</body>
</html>