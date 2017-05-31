<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Counter SQL</title>
</head>
<body>
<?php
$host="localhost";
$user="test";
$pass="t3st3r123";
$db="test";
$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());

$ip = $_SERVER['REMOTE_ADDR'];
$add = "INSERT INTO 10163348_counter (ip) VALUE ('$ip')";
mysqli_query($connection, $add) or die("Ei saanud baasiga ühendust - ".mysqli_error($connection));

$query = "SELECT id, ip FROM 10163348_counter ORDER BY id DESC LIMIT 1";
$exec = mysqli_query($connection, $query) or die("Ei saanud baasiga ühendust - ".mysqli_error($connection));
$result = mysqli_fetch_assoc($exec);
echo "Oled ".$result['id'].". külastaja ning sinu IP-aadress on ".$result['ip'];

$lastid = $result['id'];
$cleanup = "DELETE FROM 10163348_counter WHERE id < $lastid";
$exec = mysqli_query($connection, $cleanup) or die("Ei saanud baasiga ühendust - ".mysqli_error($connection));
?>
</body>
</html>
