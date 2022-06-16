<?php

include 'function.php';

if (isset($_GET['login']) && isset($_GET['password'])) {
    auth($_GET['login'], $_GET['password']);
    header('Location: /security/csrf');
    exit();
}
