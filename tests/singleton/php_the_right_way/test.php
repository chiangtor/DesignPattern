<?php

require __DIR__.'/../../../vendor/autoload.php';//

use PhpTheRightWay\Singleton\Singleton;
use PhpTheRightWay\Singleton\SingletonChild;

$obj = Singleton::getInstance();
var_dump($obj === Singleton::getInstance());             // bool(true)

$anotherObj = SingletonChild::getInstance();

var_dump($anotherObj);
var_dump(Singleton::getInstance());

var_dump($anotherObj === Singleton::getInstance());      // bool(false)


var_dump($anotherObj === SingletonChild::getInstance()); // bool(true)
