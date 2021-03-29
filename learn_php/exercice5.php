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
    <input type="email" name="email" placeholder="Email">
    <input type="submit" name="sub" value="afficher">
    </form>
    <?php 
    if(isset($_POST["sub"])){
        $email = $_POST["email"];
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')!==FALSE)
        $nom = "Internet explorer";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident')!== FALSE)
        $nom = "Internet explorer";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')!== FALSE)
        $nom = "Mozilla Firefox";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')!== FALSE)
        $nom = "Google chrome";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini')!== FALSE)
        $nom = "Opera Mini";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')!== FALSE)
        $nom = "Opera";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari')!== FALSE)
        $nom = "Safari";
        else
        $nom = 'Something else';
    
        echo "your email is $email and your browser name is " .$nom;
    }
        
   

    ?>
</body>
</html>