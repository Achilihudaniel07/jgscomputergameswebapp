<?php
$to = "zikkyychukwudulue@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: zikkychukwudulue@gmail.com" . "\r\n" ;

mail($to,$subject,$txt,$headers);
?>