<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Proxy\ProxyBookList;
use FluffycatCom\Proxy\Book;

/**
 * 
 **/
class ProxyTest extends \PHPUnit_Framework_TestCase 
{
    
    function testA()
    {
        $proxyBookList = new ProxyBookList();

        $inBook = new Book('PHP for Cats','Larry Truett');

        $proxyBookList->addBook($inBook);
        $this->assertEquals(1, $proxyBookList->getBookCount());


        $outBook = $proxyBookList->getBook(1);

        
       // $this->assertEquals('PHP for Cats by Larry Truett',$outBook->getAuthorAndTitle());
          $proxyBookList->removeBook($outBook);

        $this->assertEquals(0, $proxyBookList->getBookCount());
    } 
}


