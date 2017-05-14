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
    global $connection;
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header("Location: ?page=loomad");
    }
    $req = $_SERVER['REQUEST_METHOD']; //https://www.w3schools.com/php/php_superglobals.asp
    if ($req == 'GET'){echo "Sisesta kasutajanimi ja parool! (GET - tulid teiselt lehelt)";}
    if ($req == 'POST'){echo "Sisestasid vale kasutaja või parooli! (POST - oled juba vormi kasutanud)";}
    if (isset($_POST['user']) && isset($_POST['pass'])){
        $user = htmlspecialchars($_POST['user']);
        $user = mysqli_real_escape_string($connection, $user);
        $pass = htmlspecialchars($_POST['pass']);
        $pass = mysqli_real_escape_string($connection, $pass);
        $sql="SELECT id FROM 10163348_kylastajad WHERE username = '$user' AND passw = SHA1('$pass')";
        $tulemus=mysqli_query($connection, $sql) or die("Tekkis viga!");
        $vasteid = mysqli_num_rows($tulemus);
        if ($vasteid > 0){
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $user;
            header("Location: ?page=loomad");
    }}
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
	$nimed = array(); //nimede jaoks
	global $connection;
	$sql="SELECT DISTINCT(puur), nimi FROM 10163348_loomaaed ORDER BY puur";
	$tulemus=mysqli_query($connection, $sql) or die("Tekkis viga!");
    while ($row = mysqli_fetch_assoc($tulemus)){
        $puurid[$row['puur']] = $puurinr; //loon array, mille igaks elemendiks on tühi array
        $nimed[$row['puur']] = $puurinr; //nimede jaoks

}
    $sql = "SELECT puur, nimi, liik FROM 10163348_loomaaed"; //nimi nimede jaoks
    $tulemus=mysqli_query($connection, $sql) or die("Tekkis viga!");
    while ($row = mysqli_fetch_assoc($tulemus)) {
        array_push($puurid[$row['puur']], $row['liik']); //täidan eelmises tsüklis loodud array elemendid nimedega
        array_push($nimed[$row['puur']], $row['nimi']); //nimede jaoks
}
/*  echo "<pre>";
    print_r($nimed);
    echo"</pre>"; */
	include_once('views/puurid.html');
	
}

function lisa(){
	// siia on vaja funktsionaalsust (13. nädalal)
    global $connection;
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("Location: ?page=login");
    }
    $req = $_SERVER['REQUEST_METHOD']; //https://www.w3schools.com/php/php_superglobals.asp
    if ($req == 'GET'){echo "Sisesta uue looma andmed! (GET - tulid teiselt lehelt)";}
    if ($req == 'POST'){echo "Midagi jäi sisestamata! (POST - oled juba vormi kasutanud)";}
    if (isset($_POST['nimi']) && isset($_POST['puur'])){
        $nimi = htmlspecialchars($_POST['nimi']);
        $nimi = mysqli_real_escape_string($connection,$nimi);
        $puur = htmlspecialchars($_POST['puur']);
        $puur = mysqli_real_escape_string($connection,$puur);
        $liik = "pildid/".htmlspecialchars($_FILES["liik"]["name"]);
        $liik = mysqli_real_escape_string($connection,$liik);

        $uploadfile = upload($_FILES["liik"]["name"]);

        echo "Upload ".$uploadfile;

        $sql = "INSERT INTO `10163348_loomaaed`(`nimi`, `puur`, `liik`) VALUES ('$nimi', '$puur', '$liik') ";
        $tulemus = mysqli_query($connection, $sql);
        $vastus = mysqli_insert_id($connection);
        echo "<br>mysqli_insert_id = ".$vastus;



}
    include_once('views/loomavorm.html');
}


function upload($name){
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$allowedTypes = array("image/gif", "image/jpeg", "image/png","image/pjpeg");
	//$extension = end((explode(".", $_FILES[$name]["name"])));
    $tmp = explode('.', $_FILES[$name]["name"]);
    $extension = end($tmp);

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
		return "paha";
	}
}

?>