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

<h2>Tagurpidilugeja</h2>

<?php
mb_internal_encoding( "UTF-8" );
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");
$text = "the quick brown fox jumps over the lazy dog";
$textLength = strlen($text);
$revText = "";
for ($i=strlen($text); $i>0; $i--){
    $revText .= $text[$i-1];


};
echo $text;
echo '<br> </br>';
echo $revText
?>
<div class="kassid">
<p>See kõik tuleks loomulikult teha tekstisisestuse ja funktsiooniga...</p>
</div>
</body>