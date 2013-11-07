<?php
namespace FluffycatCom\Flyweight;

class FlyweightBookShelf {
    private $books = array();
    function addBook($book) {

        $this->books[] = $book;

    }

    function showBooks()
    {
        $return_string = null;
        foreach ($this->books as $book) {
            $return_string .= 'title: ' . $book->getAuthor() .' author: '.$book->getTitle();
        }
        return $return_string;
    }
}
