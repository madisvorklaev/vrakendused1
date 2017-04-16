<?php
$text = htmlspecialchars($_POST['textarea']);
$bckgndcol = "#fff"; // vaikimisi valge
if (isset($_POST['$bckgndcol']) && $_POST['$bckgndcol']!="") {
    $bckgndcol=htmlspecialchars($_POST['$bckgndcol']);
}
$fontcol = "#000"; // vaikimisi must
if (isset($_POST['$fontcol']) && $_POST['$fontcol']!="") {
    $fontcol=htmlspecialchars($_POST['$fontcol']);
}
$bwidth = $_POST['bwidth'];
$bcolor = $_POST['bcolor'];
$bradius = $_POST['bradius'];

echo '<textarea class="box">'.htmlspecialchars($_POST['textarea']).'</textarea>';