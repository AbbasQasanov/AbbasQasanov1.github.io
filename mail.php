

<?php 
$reception="C:\Users\Абас\open server\OSPanel\userdata\temp\email";
$sitename="Matall-lidd";

$name=trim($_POST ["name"]);
$tel=trim($_POST ["tel"]);
$message="Имя: $name \n Telefon: $tel "; 

$pagetitle= "Lid-Forum \" $sitename \"";
    mail($reception, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $reception");
?>                                                                              