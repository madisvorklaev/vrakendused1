<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
    <!DOCTYPE html>
    <head>
        <style type="text/css">
        </style>
        <link type="text/css"  rel="stylesheet" href="stiilifail.css" />
        <meta charset="UTF-8">
        <title>7.nädala harjutused</title>
    </head>
    <body>
<?php
// prints e.g. 'Current PHP version: 4.1.1'
echo 'Current PHP version: ' . phpversion();

// prints e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion('tidy');

?>

    <h2>Include</h2>

<?php
$kassid= array(
    array('nimi'=>'Miisu', 'vanus'=>2, 'karv'=>'kirju', 'omanik'=>'Fred'),
    array('nimi'=>'Tom', 'vanus'=>1, 'karv'=>'punane', 'omanik'=>'Juss')
);
foreach ($kassid as $kass){
    include 'kass.html';
}
?>