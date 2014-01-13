<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Visitor\BookVisitee,
    FluffycatCom\Visitor\PlainDescriptionVisitor,
    FluffycatCom\Visitor\FancyDescriptionVisitor,
    FluffycatCom\Visitor\SoftwareVisitee;


class TemplateTest extends  \PHPUnit_Framework_TestCase
{
    public function testA()
    {


        $book = 
            new BookVisitee("Design Patterns",
                "Gamma, Helm, Johnson, and Vlissides");

        $software = 
            new SoftwareVisitee("Zend Studio",
                "Zend Technologies",
                "www.Zend.com");

        $plainVisitor = new PlainDescriptionVisitor();

        $book->accept($plainVisitor);

        $this->assertEquals('Design Patterns'.PHP_EOL.
            '. written by Gamma, Helm, Johnson, and Vlissides',
            $plainVisitor->getDescription());

        $software->accept($plainVisitor);

        $this->assertEquals('Zend Studio'.PHP_EOL.
            '.  made by Zend Technologies'.PHP_EOL.
            '.  website at www.Zend.com',
            $plainVisitor->getDescription());

          $fancyVisitor = new FancyDescriptionVisitor();

        $book->accept($fancyVisitor );

        $this->assertEquals('Design Patterns'.PHP_EOL.
            '... !*@*! written !*! by !@!'.
            ' Gamma, Helm, Johnson, and Vlissides',
            $fancyVisitor->getDescription());

        $software->accept($fancyVisitor );

        $this->assertEquals('Zend Studio'.PHP_EOL.
            '...!!! make !*! by !@@! Zend Technologies'.PHP_EOL.
            '...www website !**! at http://www.Zend.com',
            $fancyVisitor->getDescription());

    }
/*

function acceptVisitor(Visitee $visitee_in, Visitor $visitor_in) {
    $visitee_in->accept($visitor_in);
  }
*/
}

