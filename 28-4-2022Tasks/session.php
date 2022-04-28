<?php 
session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
if(!empty($_POST['password'])) {
    echo " your password: ".$_SESSION['password']."<br>";

}
else{
    echo "please enter your password <br>";
}

if(!empty($_POST['email'])) {
    echo " your email: ".$_SESSION['email'];
}else{
    echo "<br> please enter your email";
}

?>