<?php
namespace  FluffycatCom\AbstractFactory;

/**
 * 
 **/
abstract class AbstractBookFactory
{
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}
?>
