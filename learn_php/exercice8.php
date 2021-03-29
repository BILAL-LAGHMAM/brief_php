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
    <input type="submit" value="Vendre" name="vend">
    <input type="submit" value="Acheter" name="acht">
    <input type="submit" value="Louer" name="loue">
    
    </form>
    <?php
    if (isset($_POST["vend"])) {
        header("Location: pgVendre.php");
    }
    if (isset($_POST["acht"])) {
        header("Location: pgacheter.php");
    }
    if (isset($_POST["loue"])) {
        header("Location: pgLouer.php");
    }
    
    
    
    ?>
</body>
</html>