<?php
header('Location: index.php');
if (isset($_POST['q'])){
setcookie("count", "", time() - 3600);
}