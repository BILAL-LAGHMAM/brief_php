<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form class="container" action="" METHOD="POST">
  <div class="row">
    <div class="col">
      <input type="text" name="number" class="form-control" placeholder="number">
    </div>
    <div class="col">
      <input type="text" name="lignes" class="form-control" placeholder="lignes">
    </div>
  </div>
  <button type="submit" name="btn_affiche" class="btn btn-primary">affiche</button>
</form>

<?php
if (isset($_POST["btn_affiche"]) && isset($_POST["number"]) && isset($_POST["lignes"])){
    $nbrs = $_POST["number"];
    $lgns = $_POST["lignes"];
    for ($x = 1; $x <= $lgns; $x++) {
     $calcul = $nbrs * $x;
     echo $nbrs." * ".$x." = ".$calcul."<br>";
  }
}






?>
</body>
</html>
