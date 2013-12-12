<?php
require __DIR__. '/../../../vendor/autoload.php';

use  FluffycatCom\AbstractFactory\OReillyBookFactory;
use  FluffycatCom\AbstractFactory\SamsBookFactory;


/**
 * 
 */
class AbstractFactoryTest extends \PHPUnit_Framework_TestCase {

    public function testA() {

        $bookFactoryInstance = new OReillyBookFactory;

        $phpBookOne = $bookFactoryInstance->makePHPBook();

        //$this->assertEquals(17 , __LINE__);
        $this->assertEquals( 'Programming PHP', $phpBookOne->getTitle() );
        $this->assertEquals( 'Rasmus Lerdorf and Kevin Tatroe', $phpBookOne->getAuthor() );

        $phpBookTwo = $bookFactoryInstance->makePHPBook();
        $this->assertEquals( 'PHP Cookbook', $phpBookTwo->getTitle() );
        $this->assertEquals( 'David Sklar and Adam Trachtenberg', $phpBookTwo->getAuthor() );

        $phpBookThree = $bookFactoryInstance->makeMySQLBook();

        $this->assertEquals( 'Managing and Using MySQL', $phpBookThree->getTitle() );
        $this->assertEquals( 'George Reese, Randy Jay Yarger, and Tim King', $phpBookThree->getAuthor() );


    }
    public function testB() {

        $bookFactoryInstance = new SamsBookFactory;


        $phpBookOne = $bookFactoryInstance->makePHPBook();

        $phpBookTwo= $bookFactoryInstance->makePHPBook();

        $phpBookThree = $bookFactoryInstance->makeMySQLBook();

        $this->assertEquals( 'Programming PHP', $phpBookOne->getTitle() );
        $this->assertEquals( 'Rasmus Lerdorf and Kevin Tatroe', $phpBookOne->getAuthor() );

        $this->assertEquals( 'PHP Cookbook', $phpBookTwo->getTitle() );
        $this->assertEquals( 'David Sklar and Adam Trachtenberg', $phpBookTwo->getAuthor() );

        $this->assertEquals( 'Managing and Using MySQL', $phpBookThree->getTitle() );
        $this->assertEquals( 'George Reese, Randy Jay Yarger, and Tim King', $phpBookThree->getAuthor() );

    }
}
