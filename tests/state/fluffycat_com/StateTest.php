<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\State\Book;
use FluffycatCom\State\BookContext;

/**
 * 
 **/
class StateTest extends \PHPUnit_Framework_TestCase 
{

    function testA()
    {

        $book = new Book('PHP for Cats','Larry Truett');;

        $context = new BookContext($book);

        $this->assertEquals('PHP*for*Cats', $context->getBookTitle());
        $this->assertEquals('PHP!for!Cats', $context->getBookTitle());
        $this->assertEquals('PHP!for!Cats', $context->getBookTitle());
        $this->assertEquals('PHP*for*Cats', $context->getBookTitle());
        $this->assertEquals('PHP!for!Cats', $context->getBookTitle());
        $this->assertEquals('PHP!for!Cats', $context->getBookTitle());
        $this->assertEquals('PHP*for*Cats', $context->getBookTitle());
        $this->assertEquals('PHP!for!Cats', $context->getBookTitle());
        $this->assertEquals('PHP!for!Cats', $context->getBookTitle());
    } 
}


