<?php
namespace   FluffycatCom\Adapter;

/**
 * 
 **/
class SimpleBook
{
   private $author; 
   private $title;
    function __construct($author_in , $title_in)
    {
        $this->author = $author_in;
        $this->title = $title_in;
    }
   public function getAuthor()
   {
       return $this->author;
   }
   public function getTitle()
   {
       return $this->title;
       // code...
   }
}
?>
