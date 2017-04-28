<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<head>
<style type="text/css">
</style>
<link type="text/css"  rel="stylesheet" href="stiilifail.css" />
<meta charset="UTF-8"> 
	<title>Madise koduleht</title>
  </head>  
  <body>
<?php
// prints e.g. 'Current PHP version: 4.1.1'
echo 'Current PHP version: ' . phpversion();

// prints e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion('tidy');

?>
    
<h1>Võrgurakenduste harjutused</h1>
    
<div class="container">    
<p><img src="picture.jpg" alt="Madise pilt"/></p>
</div>

<h2>Teise nädala harjutused</h2>
<h3><a href=2_tables.html>Tabelid</a></h3>
<h3><a href=2_iframe.html>Vormide harjutused</a></h3>
<h2>Kolmanda nädala harjutused</h2>
<h3><a href=3_cssbot.html>CSS_Bot</a></h3>
<h3><a href=3_stiilid.html>Stiilid</a></h3>
<h2>Neljanda nädala harjutused</h2>
<h3><a href=4_positioning.html>Duck hunt</a></h3>
<h3><a href=4_abakus.html>Arvelaud</a></h3>
<h2>Viienda nädala harjutused</h2>
<h3><a href=5_positioning.html>Duck hunt MOVING TARGET</a></h3>
<h3><a href=5_abakus.html>Arvelaud MOVING TARGET</a></h3>
<h2>Kuuenda nädala harjutused</h2>
<h3><a href=6_loop.html>jQuery</a></h3>
<h2>Seitsmenda nädala harjutused</h2>
<h3><a href=7_tagurpidilugeja.html>Tagurpidilugeja</a></h3>
<h3><a href=7_suuralgus.php>Suur algustäht</a></h3>
<h3><a href=7_include.php>Include</a></h3>
<h2>Kaheksanda nädala harjutused</h2>
<h3><a href=8_cssform.php>CSS form</a></h3>
<h3><a href=8_dirs.php>lsdir</a></h3>
<h2>Üheksanda nädala harjutused</h2>
<h3><a href=9_mvc/multipage/index.php>Multipage MVC</a></h3>
<h3><a href=9_mvc/kontrolleriga/index.php>Controller MVC</a></h3>
<h2>Kümnenda nädala harjutused</h2>
<h3><a href=10_cookieform.php>Form with COOKIES</a></h3>
<h2>Üheteistkümnenda nädala harjutused</h2>
<h3><a href=11_mysql.php>SQL queries</a></h3>

<h2>Countdown Clock</h2>
<div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>


<?php
/*
 
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");

	$books = array();	
	SELECT pealkiri FROM mvorklae_raamatud; 
	while($row = mvorklae_raamatud($query)) {
    		$books[] = $row['pealkiri'];   
}
	print_r($books)	
	mysqli_close($l);
	
*/
?>

<p><a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 </a>
</p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
</a>
<script type="text/javascript" src="clock.js"></script>

  </body>
</html>
