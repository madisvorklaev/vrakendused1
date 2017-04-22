<!-- Intelligentne inimene teeks enamikku sellest lehest tsüklitega... aga seekord sedasi !-->
<!DOCTYPE html>
<?php
$cookie1 = 'cookie_text';
setcookie($cookie1, "Some text here", time() + 3600, "/");
$cookie2 = 'cookie_bg_col';
setcookie($cookie2, "navy", time() + 3600, "/");
$cookie3 = 'cookie_fcolor';
setcookie($cookie3, "red", time() + 3600, "/");
$cookie4 = 'cookie_bcolor';
setcookie($cookie4, "5", time() + 3600, "/");
$cookie5 = 'cookie_bwidth';
setcookie($cookie5, "5", time() + 3600, "/");
$cookie6 = 'cookie_bradius';
setcookie($cookie6, "10", time() + 3600, "/");
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>10.nädal - COOKIES!</title>
    <?php
    if(!isset($cookie1)) {
    $text= "Some text here";}
    else { $text = $_COOKIE[$cookie1];}
    if (isset($_POST['text']) && $_POST['text']!="") {
        $text=htmlspecialchars($_POST['text']);
        setcookie($cookie1, $text, time() + 3600, "/");
    }
    if (isset($cookie2)){
        $bg_col=$_COOKIE[$cookie2];
        if (isset($_POST['bg_color']) && $_POST['bg_color']!="") {
            $bg_col=htmlspecialchars($_POST['bg_color']);
            setcookie($cookie2, $bg_col, time() + 3600, "/");
    }}
    if (isset($cookie3)){
    $fcolor=$_COOKIE[$cookie3];
    if (isset($_POST['fcolor']) && $_POST['fcolor']!="") {
        $fcolor=htmlspecialchars($_POST['fcolor']);
        setcookie($cookie3, $fcolor, time() + 3600, "/");
    }}
    if (isset($cookie4)){
    $bcolor=$_COOKIE[$cookie4];
    if (isset($_POST['bcolor']) && $_POST['bcolor']!="") {
        $bcolor=htmlspecialchars($_POST['bcolor']);
        setcookie($cookie4, $bcolor, time() + 3600, "/");
    }}
    if (isset($cookie5)){
    $bwidth=$_COOKIE[$cookie5];
    if (isset($_POST['bwidth']) && $_POST['bwidth']!="") {
        $bwidth=htmlspecialchars($_POST['bwidth']);
        setcookie($cookie5, $bwidth, time() + 3600, "/");
    }}
    if (isset($cookie6)){
    $bradius=$_COOKIE[$cookie6];
    if (isset($_POST['bradius']) && $_POST['bradius']!="") {
        $bradius=htmlspecialchars($_POST['bradius']);
        setcookie($cookie6, $bradius, time() + 3600, "/");
    }}
    ?>

    <style type="text/css">
        .form {
            border-radius: 30px;
            background: yellowgreen;
            padding: 20px;
            margin: 10px;
            width: 300px;
        }
        .feedback {
            border-radius: <?php echo $bradius; ?>px;
            background: <?php echo $bg_col; ?>;
            color: <?php echo $fcolor; ?>;
            padding: 20px;
            margin: 10px;
            width: 220px;
            border-style: double;
            border-color: <?php echo $bcolor; ?>;
            border-width: <?php echo $bwidth; ?>px;

        }
    </style>

</head>
<body>
<h1>8. nädal</h1>
<div class="feedback">
    <?php echo $text; ?>
</div>
<div class="form">
    <form action="10_cookieform.php" method="POST">
        Näidatav tekst:<br />
        <textarea type="text" name="text"><?php echo $text ?></textarea><br />
        <input type="color" name="bg_color" value=<?php echo '"'.$bg_col.'"'?>> Tausta värvus<br />
        <input type="color" name="fcolor" value=<?php echo '"'.$fcolor.'"'?>> Teksti värvus<br />
        <input type="color" name="bcolor" value=<?php echo '"'.$bcolor.'"'?>> Piirjoone värvus<br />
        <input type="number" name="bwidth" min="0" max="20" value=<?php echo '"'.$bwidth.'"'?>> Piirjoone laius<br />
        <input type="number" name="bradius" min="0" max="100" value=<?php echo '"'.$bradius.'"'?>> Piirjoone nurga raadius<br />
        <input type="submit" value="sisesta"/>
    </form>

</div>
</body>
</html>
