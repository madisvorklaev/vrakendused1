<?php
//$pics = array("nameless1.jpg","nameless2.jpg","nameless3.jpg","nameless4.jpg","nameless5.jpg","nameless6.jpg",);

require_once('head.html');

if (isset($_GET["page"])) $parameter = $_GET["page"];
if (!empty($parameter))
switch ($parameter) {
    case 'galerii':
        include 'galerii.php';
        break;
    case 'vote':
        include 'vote.php';
        break;
    case 'tulemus':
        include 'tulemus.php';
        break;
    default:
        include 'pealeht.php';
}
else include 'pealeht.php';
require_once('foot.html');
?>

