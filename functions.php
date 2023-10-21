<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    function yaz()
    {
        echo "Oluşturulan fonksiyonun çıktısı.";
    }
    yaz();
    echo "<hr>";

    function topla($sayi1, $sayi2)
    {
        echo $sayi1 + $sayi2;
    }
    topla(2, 3);
    echo "<hr>";

    // return ile
    function topla2($sayi3, $sayi4)
    {
        return $sayi3 + $sayi4;
    }
    echo topla2(1, 1);
    echo "<hr>";
    ?>

    <?php
    // global fonksiyon 
    // fonksiyonlar dışardan gelen değeri sevmez, global olduğunu belirtmelisin

    $b = 10;

    function ekle($a)
    {
        global $b;
        return $a + $b;
    }
    echo ekle(20);
    echo "<hr>";


    function yazdir($ad, $soyad)
    {
        return $ad . " " . $soyad;
    }
    echo yazdir("aslıhan", "ikiel");
    echo "<hr>";

    // recursive kendini tekrar eden fonksiyon
    $sabit = 1;
    function faktoriyel($a)
    {
        global $sabit;
        if ($a > 1) {
            $sabit = $sabit * $a;
            $a--;
            faktoriyel($a);
        }
        return $sabit;
    }
    echo faktoriyel(4);
    echo "<hr>";


    //var mı yok mu 
    function yaz2($a)
    {
        echo $a;
    }

    if (function_exists("yaz2")) {
        echo "fonksiyon var";
    } else {
        echo "fonksiyon yok";
    }
    ?>


</body>

</html>