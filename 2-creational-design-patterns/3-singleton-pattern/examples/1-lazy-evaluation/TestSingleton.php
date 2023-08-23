<?php

declare(strict_types=1);

namespace Creational\Singleton\Lazy;

require_once "Singleton.php";

$s = Singleton::getInstance();
$s->setData(55);

var_dump($s);
echo PHP_EOL;
echo $s->getData() . PHP_EOL;

$s = null;
$s = Singleton::getInstance();

var_dump($s);
echo PHP_EOL;
echo $s->getData() . PHP_EOL;
