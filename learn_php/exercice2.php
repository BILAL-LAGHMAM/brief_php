<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form action="suivantex2.php" METHOD="GET" class="container">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" name="no" class="form-control" id="inputEmail3" placeholder="nom">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" name="pren" class="form-control" id="inputPassword3" placeholder="prenom">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="check1" id="gridRadios1" value="option1">
          <label class="form-check-label" for="gridRadios1">
            hello
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="check2" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            not
          </label>
        
      </div>
      <button type="submit" name="affiche" class="btn btn-primary">Primary</button>
    </div>
  </fieldset>

  

</form>
</body>
</html>
