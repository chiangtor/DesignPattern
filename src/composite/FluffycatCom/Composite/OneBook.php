<?php
namespace FluffycatCom\Composite;

/**
 * 
 **/
class OneBook extends OnTheBookShelf
{
    private $title;
    private $author;

    function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    function getBookInfo($bookToGet) {
        if( 1 === $bookToGet) {

            return $this->title . ' by ' . $this->author;
        } else {
            return FALSE;
        }
    }
    public function getBookCount()
    {
        return 1;
    }
    public function setBookCount( $newCount)
    {
        return FALSE;
    }
    public function addBook($oneBook)
    {
        return FALSE;
    }
    public function removeBook($oneBook)
    {
        return FALSE;
    }
}
