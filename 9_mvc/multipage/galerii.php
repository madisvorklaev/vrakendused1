<?php
require_once('../head.html');
?>

<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
		<?php
			$pics = array("nameless1.jpg","nameless2.jpg","nameless3.jpg","nameless4.jpg","nameless5.jpg","nameless6.jpg",);
			foreach ($pics as $key => $picname) {
			    $key+=1;
    			echo '<img src="pildid/'.$picname.'" alt="nimetu '.$key.'" /> <br>';
    			echo $picname.' <br>';
                echo $key.' <br>';
		}
	?>

	</div>
</div>

<?php
require_once('../foot.html');
?>