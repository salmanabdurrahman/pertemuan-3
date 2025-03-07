<?php

// membuat class
class People
{
    // membuat property
    var $name;
    var $age;
    var $address;

    // membuat method
    function sayHello()
    {
        return "Halo nama saya $this->name, saya berumur $this->age tahun. Saat ini saya tinggal di $this->address";
    }
}

// membuat object baru
$people = new People();

$people->name = 'Agus';
$people->age = '20';
$people->address = 'Jogja';

echo $people->sayHello();
