<?php
    if(isset($_GET["affiche"]) && isset($_GET["check1"])){
        $nom = $_GET["no"];
        $pre = $_GET["pren"];
        $affichage = "hello   ".$nom."  ".$pre;
        echo $affichage;
    }
    elseif(isset($_GET["affiche"])) {
        $nom = $_GET["no"];
        $pre = $_GET["pren"];
        $noaffichage = "not hello";
        echo $noaffichage."  ".$pre."  ".$nom;
    }

?>