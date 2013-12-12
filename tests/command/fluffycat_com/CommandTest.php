<?php
include_once (__DIR__.'/../../../vendor/autoload.php');


use FluffycatCom\Command\BookCommandee;

class CommandTest extends \PHPUnit_Framework_TestCase
{

    public function testA()
    {

        $book = new BookCommandee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissdes');
    }
}
?>
