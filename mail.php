<?php
extract($_POST);
$to = "krutangdesai69@gmail.com";
$subject = "My subject";
$txt = "Hi i am $Name, my email id is $Email";
$headers = "From: admin@silverwingtechnologies.com";

mail($to,$subject,$txt,$headers);
header("location:index.html")
?>
