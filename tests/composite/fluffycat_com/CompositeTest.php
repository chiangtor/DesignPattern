<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Composite\OneBook;
use FluffycatCom\Composite\SeveralBooks;

class CompositeTest extends \PHPUnit_Framework_TestCase {
    public function testA()
    {
        $firstBook = 
            new OneBook("Core PHP Programming, Third Edition",
                "Atkinson and Suraski");

        $this->assertEquals( 'Core PHP Programming, Third Edition by Atkinson and Suraski', $firstBook->getBookInfo(1) );

        $secondBook = new OneBook("PHP Bible","Converse and Park");

        $this->assertEquals("PHP Bible by Converse and Park", $secondBook->getBookInfo(1));

         $thirdBook = new OneBook("Design Patterns","Gamma, Helm, Johnson, and Vlissides");
        $this->assertEquals("Design Patterns by Gamma, Helm, Johnson, and Vlissides", $thirdBook->getBookInfo(1));


        $books = new SeveralBooks();
        $booksCount = $books->addBook($firstBook);
        $this->assertEquals('Core PHP Programming, Third Edition by Atkinson and Suraski', $books->getBookInfo($booksCount));

        $booksCount = $books->addBook($secondBook);
        $this->assertEquals('PHP Bible by Converse and Park', $books->getBookInfo($booksCount));


        $booksCount = $books->addBook($thirdBook);

        $this->assertEquals("Design Patterns by Gamma, Helm, Johnson, and Vlissides", $books->getBookInfo($booksCount));

    }
    

}


