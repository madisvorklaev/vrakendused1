<?php
include '11_sqlanswer.php'; //sinna kirjutatakse muutuja $tabledata, millest saab vastuste tabel
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Loomaaia registratuur</title>
</head>
<body>
<br>
<?php if (isset($error)){ echo $error;} ?>

<form name="setloomad" action="11_dbinsert.php" method="post" onsubmit="return validateForm()">
    <table>
        <tr><td>Nimi</td><td><input type="text" name="nimi" id="nimi" required></input></td></tr>
        <tr><td>Vanus</td><td><input type="number" name="vanus" id="vanus" required></textarea></td></tr>
        <tr><td>Liik</td><td><input type="text" name="liik" id="liik" required></textarea></td></tr>
        <tr><td>Puuri nr</td><td><input type="number" name="puur" id="puur" required></textarea></td></tr>
    </table>
    <input type="submit" name="dataSubmit" value="Saada">
</form>
<br>
<form name="getloomad" action="11_dbget.php" method="post">
    Päringud</br>
    <input type="radio" name="loomad" value="kindel_puur" />Küsi kõigi mingis ühes kindlas puuris elavate loomade nimi ja puuri number</br>
    <input type="radio" name="loomad" value="vanim_ja_noorim" />Küsi vanima ja noorima looma vanused</br>
    <input type="radio" name="loomad" value="puuri_nr" />Küsi puuri number koos selles elavate loomade arvuga (vihjeks: group by ja count )</br>
    <input type="radio" name="loomad" value="suurenda_vanust" />Suurendada kõiki tabelis olevaid vanuseid 1 aasta võrra</br>
    <input type="submit" name="querySubmit" value="Saada päring" />
</form>
<br>
<?php echo $tabledata;  //huvitav, kas see on potenisaalne ohukoht, kuna välisest failist loetakse html?
?>
</body>
</html>