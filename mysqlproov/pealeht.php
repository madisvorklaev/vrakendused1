<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Vorm 2</title>
</head>
<body>
<?php if (isset($error)){ echo $error;} ?>
<?php include('getfromdb.php');
  //  include('db.php');
?>


<form name="meievorm" action="db.php" method="POST" onsubmit="return validateForm()">
    <table>
        <tr><td>thumb:</td><td><textarea rows="1" cols="30" name="thumb" id="thumb"></textarea></td></tr>
        <tr><td>pilt:</td><td><textarea rows="1" cols="30" name="pilt" id="pilt"></textarea></td></tr>
        <tr><td>punktid:</td><td><textarea rows="1" cols="30" name="punktid" id="punktid"></textarea></td></tr>
    </table>
    <input type="submit" value="Salvesta">

</form>
</body>
</html>