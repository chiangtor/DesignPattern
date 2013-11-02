<?php
namespace PhpTheRightWay\Strategy;

class JsonStringOutput implements OutputInterface
{
    public function load() 
    {
        return json_decode($arrayOfData);
    }
}
