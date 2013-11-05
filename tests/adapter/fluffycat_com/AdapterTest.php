<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Adapter\SimpleBook;
use FluffycatCom\Adapter\BookAdapter;


/**
 * 
 */
class AdapterTest extends \PHPUnit_Framework_TestCase {

    public function testA() {

        $book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides",
            "Design Patterns");

        $bookAdapter = new BookAdapter($book);

        $this->assertEquals( 'Design Patterns by Gamma, Helm, Johnson, and Vlissides', $bookAdapter->getAuthorAndTitle() );

    }
}
