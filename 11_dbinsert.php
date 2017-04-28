<?php
$nimi = htmlspecialchars($_POST['nimi']);
$vanus = htmlspecialchars($_POST['vanus']);
$liik = htmlspecialchars($_POST['liik']);
$puur = htmlspecialchars($_POST['puur']);

header("Location: http://enos.itcollege.ee/~mvorklae/11_mysql.php");
$host = "localhost";
$user = "test";
$pass = "t3st3r123";
$db = "test";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO 10163348_loomaaed (nimi, vanus, liik, puur)
    VALUES ('$nimi', '$vanus', '$liik', '$puur')";
print_r($sql);
if (mysqli_query($conn, $sql)) {
    echo "Uus loom registreeritud!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<script>
    function validateForm() {
        alert("The form was submitted");
    }
</script>