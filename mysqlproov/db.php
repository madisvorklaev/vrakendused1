<?php
  //  header("Location: http://enos.itcollege.ee/~rpurge/mrproject/pealeht.php");

 //   print_r($_POST);

    $thumb = $_POST['thumb'];
    $pilt = $_POST['pilt'];
    $punktid = $_POST['punktid'];

    // Valideerimine
    if (empty($punktid)) {
        $error = "Punktid on määramata!";
        include 'pealeht.php';
        die();
        }
     else {
     header("Location: http://enos.itcollege.ee/~rpurge/mrproject/pealeht.php");

    }

    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $conn = mysqli_connect($host, $user, $pass, $db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO madisvorklaev (thumb, pilt, punktid)
    VALUES ('$thumb', '$pilt', '$punktid')";

    print_r($sql);

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $getvalues = "SELECT * FROM madisvorklaev WHERE 1";
    $result = $conn->query($getvalues);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<caption>Lemmikfilmid</caption>
                   <tr><th>id</th><th>Pildi nimi</th><th>pilt</th><th>hinne</th></tr>
                   <tr><td>". $row["id"]. "</td><td> ". $row["thumb"]. "</td><td>" . $row["pilt"] ."</td><td>" . $row["punktid"] . "</td></tr>

           //  <br> id: ". $row["id"]. " - Thumb: ". $row["thumb"]. " PILT" . $row["pilt"] ." Punktid" . $row["punktid"] . "<br>";
         }
    } else {
         echo "0 results";
    }

    mysqli_close($conn);
?>
</body>
</html>