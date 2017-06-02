<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Counter TXT</title>
</head>
<body>
<?php
if (!file_exists('data.txt') || filesize('data.txt')==0){
    $datafile = fopen("data.txt", "w+") or die("Unable to open file!");
    $counter = 0;
    echo "Hakkan otsast peale";
    $date = date('d-m-Y H:i:s');
    fclose($datafile);
}
else{
    $data = file('data.txt'); //file arraysse
    $counter = $data[0];
    $date = $data[1];
}
$counter = $counter +1;
$newdate = date('d-m-Y H:i:s');
$datafile = fopen("data.txt", "w+") or die("Unable to open file!");
fwrite($datafile, $counter. PHP_EOL. $newdate);
rewind($datafile);
   echo 'Oled '.$data[0].'külastaja.';
   echo '<p>Viimane külastus oli '.$date;
fclose($datafile);
?>
</body>
</html>
