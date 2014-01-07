<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Mediator\BookMediator;


class MediatorTest extends \PHPUnit_Framework_TestCase {

    public function testA()
    {

        $mediator = new BookMediator('Gamma, Helm, Johnson, and Vlissides','Design Patterns');

        $author = $mediator->getAuthor();
        $title = $mediator->getTitle();

        print('Original Author and Title: ');
        $this->assertEquals('Design Patterns' , $title->getTitle());
        $this->assertEquals('Gamma, Helm, Johnson, and Vlissides' , $author->getAuthor());

        $author->setAuthorLowerCase();
        $this->assertEquals('design patterns' , $title->getTitle());
        $this->assertEquals('gamma, helm, johnson, and vlissides' , $author->getAuthor());

        $title->setTitleUpperCase();
        $this->assertEquals('DESIGN PATTERNS' , $title->getTitle());
        $this->assertEquals('GAMMA, HELM, JOHNSON, AND VLISSIDES' , $author->getAuthor());

    }
}
