<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
.inptxt{
    width:400px;
    height: 50px;
    
}
.inptxt:hover{
    box-shadow: red  4px 4px;
    
}
table{
    border:3px red;
}
</style>
<form action="" method="POST">
    <input class="inptxt" type="text" name="nom" placeholder="nom" >
    <input class="inptxt" type="text" name="prenom"  placeholder="prenom" >
    <input class="inptxt" type="text" name="adress" placeholder="adress">
    <input class="inptxt" type="text" name="ville" placeholder="nom ville">
    <input class="inptxt" type="text" name="postal" placeholder="code postal">
    <input type="submit" name="sbtvoir" value="voir">
</form>

<?php
    if (isset($_POST["sbtvoir"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["adress"]) && isset($_POST["ville"]) && isset($_POST["postal"])){

        $no = $_POST["nom"];
        $pren = $_POST["prenom"];
        $adrs = $_POST["adress"];
        $vil = $_POST["ville"];
        $post = $_POST["postal"];
        $sbmt = $_POST["sbtvoir"];
        if ($no==NULL && $pren==NULL && $adrs==NULL && $vil==NULL && $post==NULL) {
            echo "<script>alert('azerty')</script>";
        }
           
        }
      
    
    
?>
<table>
  <tr>
    <th>nom</th>
    <th>prenom</th> 
    <th>adress</th>
    <th>ville</th>
    <th>code postal</th>
  </tr>
  <tr>
    <td>
        <?php if(isset($_POST["nom"])){
            echo $no;
            
        } ?>
    </td>
    <td>
        <?php
            if (isset($_POST["prenom"])) {
                echo $pren;
            }
        ?>
    </td>
    <td>
        <?php
            if(isset($_POST["adress"])){
                echo $adrs;
            }
        ?>
    </td>
    <td>
        <?php
            if(isset($_POST["ville"])){
                echo $vil;
            }
        ?>
    </td>
    <td>
        <?php
            if(isset($_POST["postal"])){
                echo $post;
            }
        ?>
    </td>
  </tr>
</table>
            <script>
               
            </script>
</body>
</html>