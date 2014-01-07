<?php
require __DIR__. '/../../../vendor/autoload.php';

class FactoryMethodTest extends \PHPUnit_Framework_TestCase {

    public function testA() {
        $a = 1;
        $this->assertEquals( 1,$a);
    }
}
