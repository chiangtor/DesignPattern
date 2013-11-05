<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Facade\Book;
use FluffycatCom\Facade\CaseReverseFacade;


/**
 * 
 */
class FacadeTest extends \PHPUnit_Framework_TestCase {
    public function testA()
    {
        $book = 
            new Book("Design Patterns",
                "Gamma, Helm, Johnson, and Vlissides");

//        echo "Original book title: ".$book->getTitle();

        //$m = get_class_methods($this);
        //print_r($m); die();
        $this->assertEquals('Design Patterns', $book->getTitle() );

        $bookTitleReversed = 
            CaseReverseFacade::reverseStringCase($book->getTitle());  
        //echo "Reversed book title: ".$bookTitleReversed;
        $this->assertEquals('dESIGN pATTERNS', $bookTitleReversed);
    }

}

