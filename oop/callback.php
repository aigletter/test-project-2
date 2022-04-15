<?php

// 1
function simpleFunction($a)
{
    echo 'I am simpleFunction' . PHP_EOL;
    return $a + 1;
}
//simpleFunction();

// 2
class TestClass
{
    public function simpleMethod($a)
    {
        echo 'I am simpleMethod in TestClass' . PHP_EOL;
        return 10;
    }

    public static function staticMethod()
    {
        echo 'I am static method staticMethod in TestClass' . PHP_EOL;
    }
}
$obj = new TestClass();
//$obj->simpleMethod();
//TestClass::staticMethod();

// 3
$closure = function () {
    echo 'I am anonymous function' . PHP_EOL;
};
//$closure();

// 4
class InvokableObject
{
    public function __invoke()
    {
        echo 'I am invokable object' . PHP_EOL;
    }
}
$invokable = new InvokableObject();
//$invokable();


function run(int $a, callable $callback)
{
    // 100-500
    $a++;
    if ($a < 3) {
        $a = $callback($a);
    }
    // 100-500
    return $a;
}

$a = 1;
echo run($a, 'simpleFunction') . PHP_EOL;

echo run($a, [$obj, 'simpleMethod']) . PHP_EOL;
run($a, [TestClass::class, 'staticMethod']);
run($a, 'TestClass::staticMethod');
run($a, function () {
    echo 'I am anonymous function' . PHP_EOL;
});
run($a, $invokable);

$array = ['a', 'b'];
usort($array, function ($a, $b) {
    echo $a . PHP_EOL;
    echo $b . PHP_EOL;
});

