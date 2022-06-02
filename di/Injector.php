<?php

namespace Di;

class Injector
{
    public function makeObject(string $class): object
    {
        $reflectionClass = new \ReflectionClass($class);

        $dependencies = $this->resolveDependencies($class, '__construct');
        $instance = $reflectionClass->newInstanceArgs($dependencies);

        return $instance;
    }

    public function resolveDependencies($class, $method)
    {
        $reflectionClass = new \ReflectionClass($class);
        $dependencies = [];
        if ($reflectionClass->hasMethod($method)) {
            $method = $reflectionClass->getMethod($method);
            foreach ($method->getParameters() as $parameter) {
                $name = $parameter->getName();
                $type = $parameter->getType();
                if ($type && !$type->isBuiltin()) {
                    $dependencies[$name] = $this->makeObject($type->getName());
                }
            }
        }

        return $dependencies;
    }
}