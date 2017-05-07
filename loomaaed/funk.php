<?php


function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

function logi(){
	// siia on vaja funktsionaalsust (13. nädalal)

	include_once('views/login.html');
}

function logout(){
	$_SESSION=array();
	session_destroy();
	header("Location: ?");
}

function kuva_puurid(){
	$puurid = array();
	$puurinr = array();
	$nimed = array(); //pole vaja
	global $connection;
	$sql="SELECT DISTINCT(puur), nimi FROM 10163348_loomaaed ORDER BY puur";
	$tulemus=mysqli_query($connection, $sql) or die("Tekkis viga!");
    while ($row = mysqli_fetch_assoc($tulemus)){
        $puurid[$row['puur']] = $puurinr; //loon array, mille igaks elemendiks on tühi array
        $nimed[$row['puur']] = $puurinr;

}
    $sql = "SELECT puur, nimi, liik FROM 10163348_loomaaed"; //nimi pole vaja
    $tulemus=mysqli_query($connection, $sql) or die("Tekkis viga!");
    while ($row = mysqli_fetch_assoc($tulemus)) {
        array_push($puurid[$row['puur']], $row['liik']); //täidan eelmises tsüklis loodud array elemendid nimedega
        array_push($nimed[$row['puur']], $row['nimi']);

}
/*
    echo "<pre>";
    print_r($nimed);
    echo"</pre>";
*/
	include_once('views/puurid.html');
	
}

function lisa(){
	// siia on vaja funktsionaalsust (13. nädalal)
	
	include_once('views/loomavorm.html');
	
}

function upload($name){
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$allowedTypes = array("image/gif", "image/jpeg", "image/png","image/pjpeg");
	$extension = end(explode(".", $_FILES[$name]["name"]));

	if ( in_array($_FILES[$name]["type"], $allowedTypes)
		&& ($_FILES[$name]["size"] < 100000)
		&& in_array($extension, $allowedExts)) {
    // fail õiget tüüpi ja suurusega
		if ($_FILES[$name]["error"] > 0) {
			$_SESSION['notices'][]= "Return Code: " . $_FILES[$name]["error"];
			return "";
		} else {
      // vigu ei ole
			if (file_exists("pildid/" . $_FILES[$name]["name"])) {
        // fail olemas ära uuesti lae, tagasta failinimi
				$_SESSION['notices'][]= $_FILES[$name]["name"] . " juba eksisteerib. ";
				return "pildid/" .$_FILES[$name]["name"];
			} else {
        // kõik ok, aseta pilt
				move_uploaded_file($_FILES[$name]["tmp_name"], "pildid/" . $_FILES[$name]["name"]);
				return "pildid/" .$_FILES[$name]["name"];
			}
		}
	} else {
		return "";
	}
}

?>