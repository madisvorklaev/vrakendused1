<?php
header("Location: http://enos.itcollege.ee/~mvorklae/11_mysql.php");
$dataQuery = '';
if (isset($_POST['loomad'])) $dataQuery = $_POST['loomad'];

    switch ($dataQuery) {
        case 'kindel_puur':
            $getvalues = "SELECT liik, puur FROM 10163348_loomaaed GROUP BY puur HAVING COUNT(*) >1";
        break;
        case 'vanim_ja_noorim':
            $getvalues = "SELECT MIN(vanus), MAX(vanus) FROM 10163348_loomaaed";
        break;
        case 'puuri_nr':
            $getvalues = "SELECT puur, COUNT(nimi) FROM 10163348_loomaaed GROUP BY puur";
        break;
        case 'suurenda_vanust':
            $getvalues = "UPDATE 10163348_loomaaed SET vanus = vanus + 1";
        break;
        default:
            $getvalues = "SELECT * FROM 10163348_loomaaed WHERE 1";
    }

$host = "localhost";
$user = "test";
$pass = "t3st3r123";
$db = "test";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn,$getvalues);
echo file_put_contents("11_sqlstatement.txt", "<table>"); //loon tekstifaili, et sellest lugeda lõpuks tabeli tekitamiseks HTML. Nii saan includeda tabeli index lehele
while($row = mysqli_fetch_array($result)){
    $current = file_get_contents("11_sqlstatement.txt");
    $current .= "<tr>";
    echo file_put_contents("11_sqlstatement.txt", $current);
    for ($i = 0; $i <= count($row)/2-1; $i++) {
        $current = file_get_contents("11_sqlstatement.txt");
        $current .= "<td>$row[$i]</td>";
        echo file_put_contents("11_sqlstatement.txt",$current);
    }
    $current = file_get_contents("11_sqlstatement.txt");
    $current .= "</tr>";
    echo file_put_contents("11_sqlstatement.txt", $current);
    }
$current = file_get_contents("11_sqlstatement.txt");
$current .= "</table>";
echo file_put_contents("11_sqlstatement.txt", $current);
mysqli_close($conn);
?>
