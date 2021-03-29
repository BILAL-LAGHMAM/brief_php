<!DOCTYPE html>
<html>
<head>

    <title>Document</title>
</head>
<body>
<form action="exercice7" method="POST" enctype="multipart/form-data">

<input type="file" name="fichier">
<input type="submit" value="Send" name="upload">
</form>

<?php
if(isset($_POST["upload"])){
    if($_FILES["fichier"]["size"] < 1000000 && $_FILES["fichier"]["type"] == "application/x-zip-compressed" ){
        $target_dir = "newfile";
        $target_file = $target_dir . basename($_FILES["fichier"]["name"]);
        if (move_uploaded_file($_FILES['fichier']['tmp_name'], $target_file)) {
            echo "Le fichier a été téléchargé
                   avec succès.";
        } 
    }
    else {
        echo "no zip et size > 1000000";
    }
    }


?>

</body>
</html>