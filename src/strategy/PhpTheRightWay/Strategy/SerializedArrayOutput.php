<?php
namespace PhpTheRightWay\Strategy;

class SerializedArrayOutput implements OutputInterface
{
    public function load() 
    {
        return serialize($arrayOfData);
    }
}
