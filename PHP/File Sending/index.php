<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div>
        <input type="hidden" name="MAX_FILE_SIZE" value="30720">
        <input type="file" name="file">
        <input type="submit" value="Dodaj plik">
    </div>
</form>
</body>
</html>