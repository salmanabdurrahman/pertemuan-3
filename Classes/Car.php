<?php

// penggunaan namespace
namespace Classes;

class Car
{
    // visibilitas
    public $brand;
    public $model;
    public $color;
    public static $count;

    public function __construct($brand, $model, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        // penggunaan self::
        self::$count++;
    }

    public function getBrandInfo()
    {
        return "Brand Car: {$this->brand}";
    }

    public static function getCount()
    {
        return "Jumlah mobil saat ini " . self::$count;
    }
}
