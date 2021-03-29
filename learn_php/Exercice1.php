<form action="" METHOD="POST">
    <input type="text" name="n1" placeholder="number1">
    <input type="text" name="n2" placeholder="number2">
    <select name="sel">
        <option >choisier l'operatore</option>
        <option   value="+">ADD</option>
        <option   value="*">MUL</option>
        <option   value="/">DIV</option>
        <option   value="-">SUB</option>
    </select>
    <input type="submit" name="submit" value="calcule">
</form>
<?php
   if (isset($_POST["submit"])){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $oper = $_POST["sel"];
        
       if($oper == "+"){
            $calc = $n1+$n2;
            echo  $calc;
       }
       elseif ($oper=="-") {
           $calc = $n1-$n2;
           echo $n1."-".$n2."=".$calc;
       }
       elseif ($oper == "*") {
        $calc = $n1*$n2;
        echo $calc;
       }
       elseif ($oper != "/") {
        $calc = $n1/$n2;
        echo $calc;
       }
       else {
           echo "number2 <=0";
       }
   }


?>
