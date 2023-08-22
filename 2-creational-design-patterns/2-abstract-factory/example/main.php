<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

require_once "FactoryProducer.php";

$shapeFactory = FactoryProducer::getFactory('SHAPE');
$shape1 = $shapeFactory->getShape('CIRCLE');
$shape1->draw();

$shape2 = $shapeFactory->getShape('RECTANGLE');
$shape2->draw();

$shape2 = $shapeFactory->getShape('SQUARE');
$shape2->draw();


//////////////////////////

$colorFactory = FactoryProducer::getFactory('COLOR');

$color1 = $colorFactory->getColor('RED');
$color1->fill();

$color1 = $colorFactory->getColor('GREEN');
$color1->fill();

$color1 = $colorFactory->getColor('BLUE');
$color1->fill();