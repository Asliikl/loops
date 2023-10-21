<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    for ($i = 0; $i <= 10; $i++) {
        echo $i;
        echo "<br>";
    }
    ?>

    <!-- selectboxta plakalar -->
    <select name="" id="">
        <?php
        for ($y = 1; $y <= 85; $y++) { ?>
            <option value="<?php echo $y ?>"><?php echo $y ?></option>
        <?php }
        ?>
    </select>

    <!-- for döngüsü içerisinde if kullanmak -->
    <?php
    for ($x = 1; $x <= 60; $x++) {
        echo $x . " ";
        if ($x == 50) {
            echo "<br>";
            echo $x . " sayıya ulaşıldı";
            echo "<br>";
        }
    }
    ?>
    <br>

    <!-- for döngüsü ile 100'e kadar tek ve çift sayıları bulma -->
    <?php
    $cift = 0;
    $tek = 0;

    for ($i = 1; $i <= 100; $i++) {
        echo "$i .sayı :" . $i;

        if ($i % 2 == 0) {
            echo " bu sayı çift";
            $cift++;
        } else {
            echo " bu sayı tek";
            $tek++;
        }
        echo "<br>" . " ";
    }
    echo "<hr>";
    echo "çift sayı $cift adet var";
    echo "tek sayı $tek adet var";
    ?>
    <br>
    <!-- while döngüsü -->
    <?php
    $say = 1;
    while ($say <= 10) {
        $say++;
        echo $say;
        echo "<br>";
    }
    ?>
    <br>
    <!-- for döngüsüyle dizi -->
    <?php
    $dizi = array("elma", "armut", "üzüm", "kavun");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    echo "<hr>";

    $say = count($dizi);
    for ($i = 0; $i < $say; $i++) {
        echo $dizi[$i];
        echo " ";
    }
    echo "<br>";
    echo "<hr>";

    // foreach
    echo "foreach ile : ";
    foreach ($dizi as $meyve) {
        echo $meyve . " ";
    }
    ?>
</body>

</html>