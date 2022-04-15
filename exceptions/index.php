<?php

include 'DivisionByZeroException.php';

function divide($a, $b)
{
    if ($b === 0) {
        throw new Exception('На ноль делить нельзя', 1280);
        //throw new DivisionByZeroException($a, $b, 'Hello world');
    }
    if ($b < 1) {
        //echo 'Введите значение больше 0';
        //return 'Введите значение больше 0';
        //die('Введите значение больше 0');
    }
    return $a / $b;
}

function run($a, $b)
{
    return divide($a, $b);
}


//////////////////////////////////////////


$a = 10;
$b = 0;

try {
    $file = fopen('/tmp/hello', 'w+');

    $result = run($a, $b);
    $array = ['hello', 'world'];
    if (in_array('hello', $array)) {

    }

} catch (DivisionByZeroException|RuntimeException $exception) {
    echo 'A: ' . $exception->getA() . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
    echo $exception->getCode() . PHP_EOL;
    echo $exception->getFile() . PHP_EOL;
    echo $exception->getLine() . PHP_EOL;
    print_r($exception->getTrace());
    echo $exception->getTraceAsString() . PHP_EOL;
    $b = 2;
    $result = divide($a, $b);
} finally {
    fclose($file);
}


echo $result . PHP_EOL;

// Формировать HTML
// <html>
// <body>

die('End script') . PHP_EOL;