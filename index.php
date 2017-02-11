<!DOCTYPE html>
<head>
<style type="text/css">
  body { background: green; }
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
    
<h1>Tere mina olen Madis</h1>
<p> See on minu koduleht</p>
    
    
<p>  <img src="https://lh3.googleusercontent.com/yUpqwYmDEZfw2HOpzXUjF2Fw9WDsFVZtDCnmWbNJDwgJljLDO3qUth3AVnRhVZDVLF68Z-hq9A=w1920-h1080-rw-no" alt="Madise pilt"/></p>
    
<?php 
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
?>	


<p><a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 </a>
</p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
</a>

  </body>
</html>
