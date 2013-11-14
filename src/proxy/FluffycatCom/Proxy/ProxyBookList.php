<?php
namespace FluffycatCom\Proxy;

/**
 * 
 **/
class ProxyBookList {
    private $bookList = null;

    function __construct()
    {
    }

    public function getBookCount()
    {
        if( NULL == $this->bookList){
            $this->makeBookList();
        }
        return $this->bookList->getBookCount();
    }

    public function addBook($book)
    {
        if( NULL == $this->bookList){
            $this->makeBookList();
        }
        return $this->bookList->addBook($book);
    }



    public function getBook($book)
    {
        if( NULL == $this->bookList){
            $this->makeBookList();
        }
        return $this->bookList->getBook($book);
    }


    public function removeBook($book)
    {
        if( NULL == $this->bookList){
            $this->makeBookList();
        }
        return $this->bookList->removeBook($book);
    }
    //create 
    public function makeBookList()
    {
        $this->bookList = new BookList();
    }

}
?>
