<?php

require_once("api.php");

$tuvasta = $_POST["tuvasta"];

if ($tuvasta == 0){
	$item = array(
	"arg1" => $_POST["arg1"],
	"arg2" => $_POST["arg2"],
	"arg3" => $_POST["arg3"],
	"arg4" => $_POST["arg4"],
	"arg5" => $_POST["arg5"],
	"tuvasta" => $_POST["tuvasta"]);
	
	salvesta_API($item);
	}
else {
	$item = array(
	"id" => $_POST["id"],
	"arg1" => $_POST["arg1"],
	"arg2" => $_POST["arg2"],
	"arg3" => $_POST["arg3"],
	"arg4" => $_POST["arg4"],
	"arg5" => $_POST["arg5"],
	"tuvasta" => $_POST["tuvasta"]);
	
	muuda_API($item);
	}

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

<?php
if ($tuvasta == 0) {
  print '<div class="container">
           <h2>E-PAGAR</h2>
           <form role="form" action="form.html" method="get"><br><br>
             <p><b>Täname! Teie arve saabub peatselt!</b></p>
             <button type="submit" class="btn btn-default">Tagasi</button>
           </form>
           </div>';
}
else {
  print '<div class="container">
           <h2>E-PAGAR</h2>
           <form role="form" action="index.php" method="get"><br><br>
             <p><b>Tellimus on muudetud!</b></p>
             <button type="submit" class="btn btn-default">Tagasi</button>
           </form>
         </div>';
}
?>
