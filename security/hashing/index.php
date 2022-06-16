<?php

$salt = 'Db435asdf8749asdKsm4mLsNd5';

function register($name, $password)
{
    global $salt;

    $pdo = new PDO('mysql:dbname=test_project;host=127.0.0.1', 'root', '1q2w3e');
    //$password = md5($_POST['password'] . $salt);
    $password = password_hash($password, PASSWORD_BCRYPT, [
        'salt' => $salt
    ]);
    $pdo->query("INSERT INTO users (name, password) VALUES ('$name', '$password')");
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}

function login($name, $password)
{
    $pdo = new PDO('mysql:dbname=test_project;host=127.0.0.1', 'root', '1q2w3e');
    $statement = $pdo->query("SELECT * FROM users WHERE name = '$name'");
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        return false;
    }

    return password_verify($_POST['password'], $user['password']);
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    register($_POST['name'], $_POST['password']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    if (login($_POST['name'], $_POST['password'])) {
        echo 'Logged';
    } else {
        echo 'Not logger';
    }
}

?>

<h4>Регистрация</h4>
<form method="post">
    <input name="name">
    <br><br>
    <input name="password">
    <br><br>
    <input type="submit" name="register">
</form>

<br>
<hr>
<br>

<h4>Логин</h4>
<form method="post">
    <input name="name">
    <br><br>
    <input name="password">
    <br><br>
    <input type="submit" name="login">
</form>
