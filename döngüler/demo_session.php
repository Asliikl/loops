<!--SESSİON  kullanıcının hatırlanması ,sunucu tarafından gelir -->
<?php 

session_start();

$_SESSION["favcolor"]="green";
$_SESSION["adsoyad"]="aslıhan ikiel";

echo "oturum değişkenleri ayarlandı.";
print_r($_SESSION);


?>