<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["avatar"])) {
    $fileName = $_SERVER["DOCUMENT_ROOT"] . "/security/files/images/" . $_FILES["avatar"]["name"];
    $allowed = [
        'images/jpeg',
        'images/png',
    ];
    /*if (!in_array($_FILES['avatar']['type'], $allowed)) {
        throw new Exception('Не разрешенный MIME тип файла');
    }
    if (strpos($_FILES['avatar']['name'], '.php') !== false) {
        throw new Exception('Файлы php не разрешены');
    }*/
    $mime = mime_content_type($_FILES['avatar']['tmp_name']);
    if (!move_uploaded_file($_FILES["avatar"]["tmp_name"], $fileName)) {
        throw new Exception('Can not upload file');
    }
}

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="avatar">
    <br><br>
    <input type="submit">
</form>
