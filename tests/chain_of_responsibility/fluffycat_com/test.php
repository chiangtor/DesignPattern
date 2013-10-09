<?php
require __DIR__.'/../../../vendor/autoload.php';//
#echo __DIR__.'/../../../vendor/autoload.php',PHP_EOL;//

use FluffycatCom\ChainOfResponsibility\BookTopic;  


$bookTopic = new BookTopic('PHP 5');

echo PHP_EOL,'Before set title: ',PHP_EOL;
echo 'topic:', $bookTopic->getTopic(),PHP_EOL;
echo 'title:', $bookTopic->getTitle(),PHP_EOL;


