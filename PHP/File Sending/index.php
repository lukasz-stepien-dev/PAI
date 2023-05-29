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

<?php
$file_error = $_FILES['file']['error'];
if (isset($file_error))
{
    switch ($file_error)
    {
        case 0:
            $file_type = $_FILES['file']['type'];
            if (
                $file_type == "image/png" ||
                $file_type == "image/jpeg" ||
                $file_type == "image/gif")
            {
                move_uploaded_file(
                    $_FILES['file']['tmp_name'],
                    "images/".md5(rand()*rand()+rand()).$_FILES['file']['name']);
                echo "Plik został przesłany";
            }
            break;
        case 1:
            echo "Za duży plik (php.ini)";
            break;
        case 2:
            echo "Za duży plik";
            break;
        case 3:
            echo "Nie pełny plik";
            break;
        case 4:
            echo "Nie wybrano pliku";
            break;
        default:
            echo "Błąd którego nie przewidziano prosimy o kontakt";
    }
}
?>
</body>
</html>