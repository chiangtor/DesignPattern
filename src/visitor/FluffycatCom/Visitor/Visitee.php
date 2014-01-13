<?php

namespace FluffycatCom\Visitor;


abstract class Visitee {
    abstract function accept ( Visitor $visitorIn);
}
?>
