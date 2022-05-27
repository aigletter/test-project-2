<?php

declare(strict_types=1);

putenv('name=ivan');
putenv('age=22');

include __DIR__ . '/../vendor/autoload.php';
$className = 'Reflection\Controller';
$method = 'test1';
//$method = 'test2';

////////////////////////////////

//$object = new $className();

$reflectionClass = new ReflectionClass($className);
$constructor = $reflectionClass->getConstructor();
foreach ($constructor->getParameters() as $parameter) {
    $name = $parameter->getName();
    $type = $parameter->getType();
    if ($type && !$type->isBuiltin()) {
        $className = $type->getName();
        $value = new $className();
    } else {
        $value = getenv($name);
        if ($type && $type->getName() !== gettype($value)) {
            settype($value, $type->getName());
        }
    }
    $arguments[$name] = $value;
}

$instance = $reflectionClass->newInstanceArgs($arguments);







foreach ($reflectionClass->getProperties() as $property) {
    $name = $property->getName();
    $modifier = $property->getModifiers();
    if ($property->hasType()) {
        $type = $property->getType()->getName();
    }
}

$reflectionMethod = new ReflectionMethod($object, $method);
$parameters = $reflectionMethod->getParameters();
foreach ($parameters as $parameter) {
    $name = $parameter->getName();
    $defaultValue = $parameter->getDefaultValue();
    $type = $parameter->getType();
    $typeName = $type->getName();
}

exit();