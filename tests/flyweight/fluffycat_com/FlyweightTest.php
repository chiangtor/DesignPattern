<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Flyweight\FlyweightFactory;
use FluffycatCom\Flyweight\FlyweightBookShelf;


class FlyweightTest extends \PHPUnit_Framework_TestCase {
    public function testA()
    {


        $flyweightFactory = new FlyweightFactory();
        $flyweightBookShelf1 =  new FlyweightBookShelf();

        $flyweightBook1 = $flyweightFactory->getBook(1);

        $flyweightBookShelf1->addBook($flyweightBook1);

        $flyweightBook2 = $flyweightFactory->getBook(1);

        $flyweightBookShelf1->addBook($flyweightBook2);

        $this->assertEquals( $flyweightBook1, $flyweightBook2);
        $expcted = 'title: Larry Truett author: PHP For Catstitle: Larry Truett author: PHP For Cats';
        $this->assertEquals($expcted,  $flyweightBookShelf1->showBooks());


         $flyweightBookShelf2 =  new FlyweightBookShelf(); 
         $flyweightBook1 = $flyweightFactory->getBook(2);  

         $flyweightBookShelf2->addBook($flyweightBook1);

         $flyweightBookShelf1->addBook($flyweightBook1);
         $expcted_2 ='title: Larry Truett author: PHP For Catstitle: Larry Truett author: PHP For Catstitle: Larry Truett author: PHP For Dogs';
        $this->assertEquals($expcted_2,  $flyweightBookShelf1->showBooks());

         $expcted_3 ='title: Larry Truett author: PHP For Dogs';

        $this->assertEquals($expcted_3,  $flyweightBookShelf2->showBooks());


    }


}
