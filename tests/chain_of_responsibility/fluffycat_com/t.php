<?php

include __DIR__.'./../../../src/chain_of_responsibility/FluffycatCom/ChianOfResponsibility/AbstractBookTopic.php';
include __DIR__.'./../../../src/chain_of_responsibility/FluffycatCom/ChianOfResponsibility/BookTopic.php';

use FluffycatCom\ChainOfResponsibility\BookTopic;

$b  = new BookTopic('a');
echo $b->getTopic(), PHP_EOL;

