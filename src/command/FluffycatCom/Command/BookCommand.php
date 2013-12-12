<?php
namespace FluffycatCom\Command;

/**
 * 
 **/
class BookCommand
{

    protected $bookCommandee;
    function __construct($bookCommandee_in )
    {
        $this->bookCommandee = $bookCommandee_in;
    }
}
?>
