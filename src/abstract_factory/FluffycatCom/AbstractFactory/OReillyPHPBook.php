<?php
namespace  FluffycatCom\AbstractFactory;
/**
 * 
 **/
class OReillyPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;
    private static $oddOrEven = 'odd';

    function __construct()
    {
        // alter between 2 books
        if( 'odd' == self::$oddOrEven) {
            $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
            $this->title = 'Programming PHP';

            self::$oddOrEven = 'even';
        } else {
            $this->author = 'David Sklar and Adam Trachtenberg';
            $this->title ='PHP Cookbook';

            self::$oddOrEven = 'odd';
        }
    }

    function getAuthor() {
        return $this->author;
    }
    public function getTitle()
    {
        return $this->title;
    }

}
?>
