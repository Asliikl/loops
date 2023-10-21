
<?php 
$jsonFile = 'cities.json';
$data=file_get_contents($jsonFile);
$sehirler = json_decode($data,true);

?> 
<select name="sehir" id="sehir">
    <?php foreach ($sehirler as $sehir) { ?>
        <option value="<?php echo $sehir['id']; ?>"><?php echo $sehir['name']; ?></option>
    <?php } ?>
</select>

