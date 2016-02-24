<?php

require_once('api.php');

$tuvasta = $_POST['tuvasta'];

if ($tuvasta == 0){
	$item = array(
	"kliendi_nimi" => $_POST['kliendi_nimi'],
	"aadress" => $_POST['aadress'],
	"toode" => $_POST['toode'],
	"makseviis" => $_POST['makseviis'],
	"kuller" => $_POST['kuller'],
	"tuvasta" => $_POST['tuvasta']);
	
	salvesta_API($item);
	}
else {
	$item = array(
	"id" => $_POST['id'],
	"kliendi_nimi" => $_POST['kliendi_nimi'],
	"aadress" => $_POST['aadress'],
	"toode" => $_POST['toode'],
	"makseviis" => $_POST['makseviis'],
	"kuller" => $_POST['kuller'],
	"tuvasta" => $_POST['tuvasta']);
	
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

if ($tuvasta == 0){?>
<div class="container">
  <h2>E-PAGAR</h2>
  <form role="form" action="form.html" method="get"><br><br>
  
  <p><b>Täname! Teie arve saabub peatselt!</b></p>
  
  <button type="submit" class="btn btn-default">Tagasi</button>
  </form>
</div>
</body>
</html>
<?php
}
else {?>
<div class="container">
  <h2>E-PAGAR</h2>
  <form role="form" action="index.php" method="get"><br><br>
  
  <p><b>Tellimus on muudetud!</b></p>
  
  <button type="submit" class="btn btn-default">Tagasi</button>
  </form>
</div>
</body>
</html>
<?php
}
?>
