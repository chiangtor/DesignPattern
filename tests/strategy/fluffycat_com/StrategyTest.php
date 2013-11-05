<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Strategy\Book;
use FluffycatCom\Strategy\StrategyContext;

/**
 * 
 **/
class StrategyTest extends  \PHPUnit_Framework_TestCase
{
    public function testA()
    {
        $book = new Book('PHP for Cats','Larry Truett');
        $strategyContextC = new StrategyContext('C');
        $this->assertEquals('PHP FOR CATS', $strategyContextC->showBookTitle($book));
    }

    public function testB()
    {
        $book = new Book('PHP for Cats','Larry Truett');
        $strategyContextE = new StrategyContext('E');
        $this->assertEquals('PHP!for!Cats', $strategyContextE->showBookTitle($book));

    }

    public function testC()
    {
        $book = new Book('PHP for Cats','Larry Truett');
        $strategyContextS = new StrategyContext('S');
        $this->assertEquals('PHP*for*Cats', $strategyContextS->showBookTitle($book));
    }
}
?>
