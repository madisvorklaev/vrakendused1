<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>File upload</title>
</head>
<body>
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="file" name="pilt" />
    <input type="submit" value="lae pilt" />
</form>

<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="file" name="pilt[]" multiple/>
    <input type="submit" value="lae mitu pilti" />
</form>

</body>
