<?php

function auth($login, $password)
{
    session_start();
    $_SESSION['auth'] = [
        'login' => $login,
        'password' => $password
    ];
}

function checkAuth()
{
    session_start();
    return isset($_SESSION['auth']);
}

function generateToken()
{
    session_start();
    $_SESSION['token'] = uniqid('token', true);
    return $_SESSION['token'];
}

function checkToken($token)
{
    return $_SESSION['token'] === $token;
}

function sendMoney($to, $sum, $token)
{
    if (checkAuth() && checkToken($token)) {
        echo $sum . " money was sent to " . $to . ' successfully';
    } else {
        echo 'Иди гуляй хакер!!!';
    }
}