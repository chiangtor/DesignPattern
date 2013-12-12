<?php

namespace  FluffycatCom\AbstractFactory;
//namespace  FluffycatCom\AbstractFactory\OReillyBookFactory;

/**
 * 
 **/
class OReillyBookFactory extends AbstractBookFactory
{
    
    private $context = 'OReilly';
    function makePHPBook () {
        return new OReillyPHPBook;
    }

    function makeMySQLBook() {
        return new SamsMySQLBook;
    }
}
?>
