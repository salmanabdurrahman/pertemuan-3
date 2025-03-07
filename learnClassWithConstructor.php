<?php

class People
{
    public $name;
    public $age;
    public $address;

    // membuat construct
    public function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function sayHello()
    {
        return "Halo nama saya $this->name, saya berumur $this->age tahun. Saat ini saya tinggal di $this->address";
    }
}

$people1 = new People('Agus', 20, 'Jogja');
$people2 = new People('Heru', 21, 'Bali');

echo $people1->sayHello();
echo "<br>";
echo $people2->sayHello();
