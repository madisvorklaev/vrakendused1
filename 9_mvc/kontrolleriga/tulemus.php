<div id="wrap">
	<h3>Valiku tulemus</h3>
<?php
    if (empty($_POST['pilt'])) exit ("Sa ei teinud valikut!"); //midagi ei valitud;
    $pics = array("nameless1.jpg","nameless2.jpg","nameless3.jpg","nameless4.jpg","nameless5.jpg","nameless6.jpg",); // targem oleks vote.php-st array pikkus saata
    $checkkey = count($pics); //array pikkus, et kontrollida, kas pilt eksisteerib
    if(isset($_POST['pilt'])&& $_POST['pilt'] <= $checkkey && is_numeric($_POST['pilt'])) $checkkey = $_POST['pilt']-1; //kas GET väärtus on reaalne?
    else exit('Nii palju pilte ei ole galeriis!'); //ei olnud reaalne
    if(isset($_POST['pilt'])) echo 'Valisid pildi number '.$_POST['pilt'].' nimega '.$pics[$checkkey]; //oli reaalne


?>
</div>
