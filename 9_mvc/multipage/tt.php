<div id="wrap">
	<h3>Valiku tulemus</h3>
<?php

$parameter=$_POST['pilt'];
echo $parameter;
    $pics = array("nameless1.jpg","nameless2.jpg","nameless3.jpg","nameless4.jpg","nameless5.jpg","nameless6.jpg",); // targem oleks vote.php-st array pikkus saata
    $checkkey = count($pics); //array pikkus, et kontrollida, kas pilt eksisteerib
   // if(isset($parameter)&& $parameter <= $checkkey && is_numeric($parameter)) $checkkey = $parameter-1; //kas GET väärtus on reaalne?
   // else exit('Nii palju pilte ei ole galeriis!'); //ei olnud reaalne
    if(isset($parameter)) echo 'Valisid pildi number '.$parameter.' nimega '.$pics[$checkkey]; //oli reaalne
    else echo "Sa ei teinud valikut!"; //midagi ei valitud

?>
</div>
