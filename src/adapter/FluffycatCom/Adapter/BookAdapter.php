<?php
namespace   FluffycatCom\Adapter;

/**
 * 
 **/
class BookAdapter
{
    
    private $book;
    function __construct(SimpleBook $book_in)
    {
        $this->book = $book_in;
    }
    public function getAuthorAndTitle()
    {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}
?>
