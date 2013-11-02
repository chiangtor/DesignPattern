<?php
namespace PhpTheRightWay\Strategy;

class ArrayOutput implements OutputInterface
{
    public function load()
    {
        return $arrayOfData;
    }
}
