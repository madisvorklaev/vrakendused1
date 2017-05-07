<?php

    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $conn = mysqli_connect($host, $user, $pass, $db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $getvalues = "SELECT * FROM madisvorklaev WHERE 1";
    $result = $conn->query($getvalues);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<br> id: ". $row["id"]. " - Thumb: ". $row["thumb"]. " PILT" . $row["pilt"] ." Punktid" . $row["punktid"] . "<br>";
}
} else {
echo "0 results";
}

mysqli_close($conn);
?>

