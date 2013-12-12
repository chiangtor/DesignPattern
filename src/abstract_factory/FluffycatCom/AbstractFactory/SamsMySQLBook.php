<?php

namespace  FluffycatCom\AbstractFactory;

/**
 * 
 **/
class SamsMySQLBook extends AbstractMySQLBook
{
    private $author;
    private $title;
    function __construct()
    {
        $this->author = 'George Reese, Randy Jay Yarger, and Tim King';

        $this->title = 'Managing and Using MySQL';
        
    }

    function getAuthor() {return $this->author; }
    function getTitle() {return $this->title; }

}
