<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Comments from SQL // Madis Võrklaev</title>
</head>
<body>
<form name="newcomment" action="" method="post">
    Sinu kommentaar:</br>

    <input type="text" name="name" placeholder="Nimi" maxlength="30" required /> Nimi</br>
    <input type="text" name="comment" placeholder="Sinu kommentaar" maxlength="256" required /> Kommentaar (max 256 tähemärki)</br>
    <input type="submit" name="querySubmit" value="Saada päring" />
</form>

<?php
require_once ('functions.php');
connect_db();
global $connection;

if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
    $comment = mysqli_real_escape_string($connection, htmlspecialchars($_POST['comment']));


$sqlinsert = "INSERT INTO 10163348_comments (name, comment) VALUES ('$name', '$comment')";
if (mysqli_query($connection, $sqlinsert)) { //$connection on global, defineeritud functions.php
    echo "Andmete sisestamine õnnestus!";
} else {
    echo "Error: " . $sqlinsert . "<br>" . mysqli_error($connection);
}
}
$sqlquery = "SELECT name, comment FROM 10163348_comments ORDER BY time";
$exec = mysqli_query($connection,$sqlquery);
while($row = mysqli_fetch_assoc($exec)) {
    echo "<p>".$row['name']. " - ".$row['comment'];
   }

   getCount();
?>

</body>
</html>