<?php

require_once("api.php");
$item = vaata_API($_GET["key"]);

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
  <h4>TELLIMUSE MUUTMINE</h4>
  <form role="form" action="form.php" method="post"><br><br>
    
	<div class="form-group">
      <label for="name">ID</label>
      <input name="id" type="text" class="form-control" id="id" value=<?=$item["id"]?> readonly>
    </div>
	
	<div class="form-group">
      <label for="name">Kliendi nimi</label>
      <input name="arg1" type="text" class="form-control" id="arg1" value="<?=$item["arg1"]?>">
    </div>
    
	<div class="form-group">
      <label for="comment">Kliendi aadress</label>
       <textarea name="arg2" class="form-control" rows="5" id="arg2"><?=$item["arg2"]?></textarea>
    </div>
     
	 <div class="form-group">
  <label for="sel1">Toode:</label>
  <select name="arg3" class="form-control" id="arg3">
    <option>Trühvlitort</option>
    <option>Belgia kohupiimatort</option>
    <option>Vaarika tartalet</option>
    <option>Cannoli</option>
  </select>
</div>
    
	<div class="radio">
		<strong>Makseviis:</strong><br>
  <label><input type="radio" name="arg4" value="arg4" checked>Krediitkaart</label>
  <label><input type="radio" name="arg4" value="arg4">Sularaha</label>
   </div><br>
   
   <p><b>Muud võimalused:</b>
    <div class="checkbox">
	<label><input type="hidden" id="arg5" name="arg5" value="ei"></label>
    <label><input type="checkbox" id="arg5" name="arg5" value="jah">Ekspresskuller</label>
    </div><br>
	
	<input type="hidden" id="tuvasta" name="tuvasta" value=1> 
    
	<button type="submit" class="btn btn-default">Kinnita</button>
  </form>
</div>
</body>
</html>
