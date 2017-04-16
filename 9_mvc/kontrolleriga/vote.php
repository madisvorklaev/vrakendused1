<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="?page=tulemus" method="POST">
        <?php
        $pics = array("nameless1.jpg","nameless2.jpg","nameless3.jpg","nameless4.jpg","nameless5.jpg","nameless6.jpg",);
            foreach ($pics as $key => $picname) {
                $key+=1;
                echo '<p>
			    <label for="p'.$key.'">
				    <img src="pildid/'.$picname.'" alt="nimetu '.$key.'" height="100" />
			    </label>
			    <input type="radio" value="'.$key.'" id="p'.$key.'" name="pilt"/>
		        </p>';
            }
        ?>
	<br>
	    <input type="submit" value="Valin!"/>
	</form>
</div>
