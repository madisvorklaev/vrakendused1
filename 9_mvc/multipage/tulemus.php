<?php
require_once('../head.html');
?>

<div id="wrap">
	<h3>Valiku tulemus</h3>
<?php
    if (empty($_GET['pilt']) || (!is_numeric($_GET['pilt']))) exit ("Sa ei teinud valikut!"); //midagi ei valitud;
    $pics = array("nameless1.jpg","nameless2.jpg","nameless3.jpg","nameless4.jpg","nameless5.jpg","nameless6.jpg",); // targem oleks vote.php-st array pikkus saata
    $checkkey = count($pics); //array pikkus, et kontrollida, kas pilt eksisteerib
    if(isset($_GET["pilt"])&& $_GET["pilt"] <= $checkkey && is_numeric($_GET["pilt"])) $checkkey = $_GET["pilt"]-1; //kas GET väärtus on reaalne?
    else exit('Nii palju pilte ei ole galeriis!'); //ei olnud reaalne
    if(isset($_GET["pilt"])) echo 'Valisid pildi number '.$_GET["pilt"].' nimega '.$pics[$checkkey]; //oli reaalne

?>
</div>
<?php
require_once('../foot.html');
?>