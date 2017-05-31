<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comments from TXT</title>
</head>
<body>
<form name="newcomment" action="" method="post">
    Sinu kommentaar:</br>

    <input type="text" name="name" placeholder="Nimi" maxlength="30" required /> Nimi</br>
    <input type="text" name="comment" placeholder="Sinu kommentaar" maxlength="256" required /> Kommentaar (max 256 tähemärki)</br>
    <input type="submit" name="querySubmit" value="Saada päring" />
</form>

<?php
$datafile = fopen("data.txt", "a+") or die("Unable to open file!");// https://www.w3schools.com/php/php_file_open.asp
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $txt = "<p>" . $name . " - " . $comment;
    fwrite($datafile, $txt);
    rewind($datafile);
}
    while (!feof($datafile)) {
        echo fgets($datafile);
    }
    fclose($datafile);



?>
</body>
</html>