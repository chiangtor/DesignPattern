<?php
include __DIR__.'/../../../vendor/autoload.php';

use FluffycatCom\Facade\Book;

$book = 
    new Book("Design Patterns",
        "Gamma, Helm, Johnson, and Vlissides");

echo "Original book title: ".$book->getTitle();
echo PHP_EOL;


#$bookTitleReversed = 
#    CaseReverseFacade::reverseStringCase($book->getTitle());  
#echo "Reversed book title: ".$bookTitleReversed;
#echo PHP_EOL;






