<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="" method="POST"> 
    <input type="text" name="ht" placeholder="inserer HT">
    <input type="text" name="ttva" placeholder="inserer TTVA">
    <input type="submit" name="sub" value="calculer">
    </form>
    <?php
    if (isset($_POST["ht"]) && isset($_POST["ttva"])) {
        $ht = $_POST["ht"];
        $ttva = $_POST["ttva"];
        $tva = $ht*($ttva/100);
        $ttc = $ht + $tva;
        echo "hadi tva".$tva." hadi ttc ".$ttc;
    }
    
    ?>
</body>
</html>