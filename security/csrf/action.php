<?php

include 'function.php';

if (isset($_GET['to']) && isset($_GET['sum'])) {
    sendMoney($_GET['to'], $_GET['sum'], $_GET['token'] ?? null);
    exit();
}

echo 'Неправильные параметры';
