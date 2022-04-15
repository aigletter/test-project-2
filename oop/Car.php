<?php

class Car
{
    protected $model;

    protected $brand;

    private $year;

    protected $something;

    protected static $county;

    protected $engine;

    public const COUNTRY_USA = 'USA';

    public const COUNTRY_CANADA = 'CANADA';

    public const COUNTRY_MEXICO = 'MEXICO';

    public static function getCountry()
    {
        return self::$county;
    }

    public static function setCountry(string $country)
    {
        if (!in_array($country, [
            self::COUNTRY_USA,
            self::COUNTRY_CANADA,
        ])) {
            die('Данная страна не поддерживается');
        }
        self::$county = $country;
    }

    public function __construct(Engine $engine, $brand, $model = null, $year = null)
    {
        echo self::COUNTRY_USA . PHP_EOL;
        $this->something = 'Hello world';
        echo self::getCountry() . PHP_EOL;
        //echo $brand . ' ' . $model . ' ' . $year . PHP_EOL;
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;

        //$this->engine = new Engine();
    }

    final public function getModel()
    {
        return $this->model;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setBrand($brand)
    {
        $this->model = $brand;
    }

    public function __destruct()
    {
        //echo 'I am descructor' . PHP_EOL;
    }

    public function sayHello()
    {
        echo 'I am a car ' . $this->brand . ' ' . $this->model . '. Year ' . $this->year . PHP_EOL;
    }

    /*public function __get($name)
    {
        echo 'Обратились к несущесвующему свойству ' . $name . PHP_EOL;
    }

    public function __set($name, $value)
    {
        echo 'Запись в несущесвующее свойство ' . $name . ' значение ' . $value . PHP_EOL;
    }

    public function __call($name, $arguments)
    {
        echo $name . ' - ' . json_encode($arguments);
    }*/

    public function move($to, $cargo)
    {
        $this->engine->start();
        $this->startEngine();
        $this->changePeredacha();
        echo 'I am moving to ' . $to . ' cary ' . $cargo . PHP_EOL;
        /// TODO
    }

    protected function startEngine()
    {

    }

    protected function changePeredacha()
    {

    }
}