<?php
namespace Samsung;
class Laptop
{
    public function index()
    {
        return 'Samsung';
    }
}

namespace Toshiba;
class Laptop
{
    public function index()
    {
        return 'Toshiba';
    }
}

namespace Acer;
class Laptop
{
    public function index()
    {
        return 'Acer';
    }
}

namespace Asus;
class Laptop
{
    public function index()
    {
        return 'Asus';
    }
}

namespace HP;
class Laptop
{
    public function index()
    {
        return 'HP';
    }
}

use \Samsung\laptop as Samsung;
use \Toshiba\laptop as Toshiba;
use \Acer\laptop as Acer;
use \Asus\laptop as Asus;
use \HP\laptop as HP;

$samsung = new Samsung;
echo $samsung->index();
$toshiba = new Toshiba;
echo $toshiba->index();
$acer = new Acer;
echo $acer->index();
$asus = new Asus;
echo $asus->index();
$hp = new HP;
echo $hp->index();