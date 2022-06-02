<?php

include __DIR__ . '/../vendor/autoload.php';

/*$storage = new \Di\Storage();
$items = $storage->getItemsDirect();
foreach ($items as $key => $item) {
    $user = new \Di\User();
    $user->setId($item['id']);
    $user->setName($item['name']);
    $user->setAge($item['age']);
    $items[$key] = $user;
}

$items2 = $storage->getItemsCallback(function ($item) {
    $user = new \Di\User();
    $user->setId($item['id']);
    $user->setName($item['name']);
    $user->setAge($item['age']);
    return $user;
});*/


// Отправить груз с точки A в точку B
function transport($a, $b, $cargo)
{
    /*$something = new \Di\Something();
    $klapan = new \Di\Klapan($something);
    $porshen = new \Di\Porshen($klapan);
    $engine = new \Di\Engine($porshen);

    $anything = new \Di\Anything();
    $transmission = new \Di\Transmission($anything);

    $car = new \Di\Car($engine, $transmission);*/

    $injector = new \Di\Injector();
    $car = $injector->makeObject(\Di\Car::class);

    //$trailer = new \Di\Trailer();
    $dependencies = $injector->resolveDependencies($car, 'carryCargo');
    $dependencies = array_merge($dependencies, [
        'a' => $a,
        'b' => $b,
        'cargo' => $cargo
    ]);
    call_user_func_array([$car, 'carryCargo'], $dependencies);
}

transport('1.22', '2.33', 'phone');



exit();