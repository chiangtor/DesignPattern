<?php
namespace FluffyCatCom\Interpreter;

class BookList {
    private $books = array();
    private $bookCount = 0;
public function __construct() {}
public function geBookCount () {
    return $this->bookCount;
}
private function setBookCount($newCount) {
    $this->bookCount = $newCount;
}
public function getBook ($bookNumberToGet) {

    if( is_numeric($bookNumberToGet) && ($bookNumberToGet <= $this->getBookCount() ) ) {
        return $this->books[$bookNumberToGet];
    } else {
        return null;
    }
}

}
