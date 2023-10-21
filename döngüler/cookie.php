<?php 

// $adsoyad="aslıhan ikiel";

// setcookie("adsoyad",$adsoyad);
// echo $_COOKIE["adsoyad"];

//süreli cookie
$adsoyad="aslıhan ikiel";

setcookie("adsoyad",$adsoyad,time()+3600); //1 saat
echo $_COOKIE["adsoyad"]."<br>";

//cookie süre arttırma 
/*
strtotime("+30 seconds") 30 saniye
strtotime("+1 hours") 1 saat
*/
$adsoyad="aslıhan ikiel";

setcookie("adsoyad",$adsoyad,strtotime("+1 week")); //1 saat
echo $_COOKIE["adsoyad"];

//cookie silme
setcookie("adsoyad","",strtotime("-1 week")); //1 saat
?>