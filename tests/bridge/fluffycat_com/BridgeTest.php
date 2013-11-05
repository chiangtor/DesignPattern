<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Bridge\BridgeBookAuthorTitle;
use FluffycatCom\Bridge\BridgeBookTitleAuthor;

class AdapterTest extends \PHPUnit_Framework_TestCase {

    public function testA() {
        $book = 
            new BridgeBookAuthorTitle('Larry Truett','PHP for Cats','CAPS');
        $this->assertEquals( 'LARRY TRUETT\'s PHP FOR CATS', $book->showAuthorTitle() );

        $book = new BridgeBookAuthorTitle('Larry Truett','PHP for Cats','STARS');

        $this->assertEquals('Larry*Truett\'s PHP*for*Cats' ,  $book->showAuthorTitle() );

        $book = 
            new BridgeBookTitleAuthor('Larry Truett','PHP for Cats','CAPS');
        $this->assertEquals('PHP FOR CATS by LARRY TRUETT', $book->showTitleAuthor() );

        $book = 
            new BridgeBookTitleAuthor('Larry Truett','PHP for Cats','STARS');
        $this->assertEquals('PHP*for*Cats by Larry*Truett' ,$book->showTitleAuthor());
    }
}
