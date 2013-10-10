<?php
require __DIR__.'/../../../vendor/autoload.php';//
#echo __DIR__.'/../../../vendor/autoload.php',PHP_EOL;//

use FluffycatCom\ChainOfResponsibility\BookTopic;  
use FluffycatCom\ChainOfResponsibility\BookSubTopic;  
use FluffycatCom\ChainOfResponsibility\BookSubSubTopic;  


$bookTopic = new BookTopic('PHP 5');

echo PHP_EOL,'Before set title: ',PHP_EOL;

echo 'topic:', $bookTopic->getTopic(),PHP_EOL;
echo 'title:', $bookTopic->getTitle(),PHP_EOL;

$bookTopic->setTitle("PHP 5 Recipes by Babin, Good, Kroman, and Stephens");

  writeln("bookTopic after title is set: ");
  writeln("topic: " . $bookTopic->getTopic());
    writeln("title: " . $bookTopic->getTitle());

  writeln("---");

$bookSubTopic = new BookSubTopic("PHP 5 Patterns",$bookTopic);
  writeln("bookSubTopic before title is set: ");
  writeln("topic: " . $bookSubTopic->getTopic());
  writeln("title: " . $bookSubTopic->getTitle());
  writeln("");

  $bookSubTopic->setTitle(
    "PHP 5 Objects Patterns and Practice by Zandstra");
  writeln("bookSubTopic after title is set: ");
  writeln("topic: ". $bookSubTopic->getTopic());
  writeln("title: ". $bookSubTopic->getTitle());
  writeln("---");
  $bookSubSubTopic = new BookSubSubTopic("PHP 5 Patterns for Cats",
    $bookSubTopic);
  writeln("bookSubSubTopic with no title set: ");
  writeln("topic: " . $bookSubSubTopic->getTopic());
  writeln("title: " . $bookSubSubTopic->getTitle());
  writeln("");
  $bookSubTopic->setTitle(NULL);
  writeln(
    "bookSubSubTopic with no title for set for bookSubTopic either:");
  writeln("topic: " . $bookSubSubTopic->getTopic());
  writeln("title: " . $bookSubSubTopic->getTitle());
  writeln("");


  writeln("END TESTING CHAIN OF RESPONSIBILITY PATTERN");

  
  function writeln( $s) {
      echo $s, PHP_EOL;
  }

