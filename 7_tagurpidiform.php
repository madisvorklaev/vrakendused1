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
$text = $_POST["text"];
mb_internal_encoding( "UTF-8" );
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");
$textLength = strlen($text);
$revText = "";
    for ($i=strlen($text); $i>0; $i--){
        $revText .= $text[$i-1];
    };
echo 'Sisestatud tekst: '.$text;
echo '<br> </br>';
echo 'Tagurpidi tekst: '.$revText
?>
</body>
</html>
