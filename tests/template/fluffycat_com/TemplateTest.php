<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Template\Book;
use FluffycatCom\Template\TemplateExclaim;
use FluffycatCom\Template\TemplateStars;

/**
 * 
 **/
class TemplateTest extends  \PHPUnit_Framework_TestCase
{
    public function testA()
    {

        $book = new Book('PHP for Cats','Larry Truett');

        $exclaimTemplate = new TemplateExclaim();  
        $starsTemplate = new TemplateStars();

        $this->assertEquals('PHP!!!for!!!Cats by Larry!!!Truett',$exclaimTemplate->showBookTitleInfo($book) );
        $this->assertEquals('PHP***for***Cats' ,$starsTemplate->showBookTitleInfo($book) );

    }
}

