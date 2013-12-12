<?php

namespace  FluffycatCom\AbstractFactory;

/**
 * 
 **/
class SamsBookFactory extends AbstractBookFactory
{
    private $context = 'Sams';
    function makePHPBook()
    {
        return new SamsPHPBook;
    }
    public function makeMySQLBook()
    {
        return new SamsMySQLBook;
    }
}
?>
