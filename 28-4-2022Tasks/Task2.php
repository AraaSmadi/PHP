
<?php

$num1= $_POST['num1'];
$num2 = $_POST['num2'];

if(isset($_POST['sum'])) {
    if(!empty($_POST['num1']) && !empty($_POST['num2'])) {
        echo "$num1 + $num2 =  ". ($num1 + $num2 ) ;
    } else 
    {
        echo "please enter your numbers";
    }
}
if(isset($_POST['sub'])) {
    if(!empty($_POST['num1']) && !empty($_POST['num2'])) {
        echo "$num1 - $num2 =  ".($num1- $num2) ;
    } else 
    {
        echo "please enter your numbers";
    }
}
if(isset($_POST['div'])) {
    if(!empty($_POST['num1']) && !empty($_POST['num2'])) {
        echo "$num1 / $num2 =  ".$num1 /$num2 ;
    } else 
    {
        echo "please enter your numbers";
    }
}
if(isset($_POST['multi'])) {
    if(!empty($_POST['num1']) && !empty($_POST['num2'])) {
        echo "$num1 / $num2 =  ".$num1 * $num2 ;
    } else 
    {
        echo "please enter your numbers";
    }
}

?>