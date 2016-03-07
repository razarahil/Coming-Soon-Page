<?php

include 'config.php';


$email=$_POST['email'];
$email=filter_var($email,FILTER_SANITIZE_EMAIL);

$insert=$ql->prepare("INSERT INTO subscribers(email) VALUES(:email)");

$insert->bindParam(':email',$email);

if($insert->execute()){

echo "Thanks for Signup";
} else {

echo "Error Occured while trying to Save, Please Try again later";
}


?>