<?php

register_shutdown_function(function () {
    $error = error_get_last();
    if ($error AND $error['type'] & ( E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) {
        echo 'Произошла фатальная ошибка: ' . $error['message'];
    }
    echo 'End script in shutdown function' . PHP_EOL;
});

/*set_error_handler(function ($errNo, $errMsg, $errFile, $errLine, $errContext = []) {
    echo 'No: ' . $errNo . ', msg: ' . $errMsg . ', file: ' . $errFile . ', line: ' . $errLine . PHP_EOL;
});*/

ini_set('display_errors', '1');

error_reporting(E_ALL);

trigger_error('Test notice', E_USER_DEPRECATED);

//echo $e;

/*try {
    throw new DivisionByZeroError();
    //throw new Exception();
    //echo foo();
} catch (Throwable $error) {
    echo $error->getMessage() . PHP_EOL;
    echo $error->getLine() . PHP_EOL;
}*/

function doSomething($param)
{
    echo $param . PHP_EOL;
    if ($param === 5) {
        throw new Exception('Some eception');
    }
}

for($i = 0; $i < 10; $i++) {
    try {
        doSomething($i);
    } catch (Throwable $exception) {
        echo $exception->getMessage() . PHP_EOL;
        throw $exception;
    }
}



exit('End script' . PHP_EOL);