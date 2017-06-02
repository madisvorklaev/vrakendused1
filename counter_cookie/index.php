<?php
header('Content-Type: text/html; charset=utf-8');
if (!isset($_COOKIE['count']))
{
?>
    Oled lehel esimest korda.
    <?php
    $count = 1;
    setcookie("count", $count);
    setcookie("time", date('d-m-Y H:i:s'));
}
else
{
    $count = ++$_COOKIE['count'];
    setcookie("count", $count);
    echo '<p>Oled siin '.$_COOKIE['count'].' korda.';
    echo '<p>Viimati külastasid '.$_COOKIE['time'];
    echo '<p>Serveri kell on praegu '.date('d-m-Y H:i:s');
}
setcookie("time", date('d-m-Y H:i:s'));
?>

<form action="functions.php" method="post">
<p><input type="submit" value="Kustuta küpsis" name="q"></p>
</form>
<script> //https://stackoverflow.com/questions/2705067/how-can-i-get-the-users-local-time-instead-of-the-servers-time
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (seconds < 10) {
        seconds = "0" + seconds;
    }

    document.write("<b>Sinu arvuti kell on " + hours + ":" + minutes + ":" + seconds + " "+"</b>");
</script>
</body>
</html>