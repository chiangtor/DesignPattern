<?php
require __DIR__. '/../../../vendor/autoload.php';

use FluffycatCom\Bridge\BridgeBookAuthorTitle;

 $book = 
    new BridgeBookAuthorTitle('Larry Truett','PHP for Cats','CAPS');
  echo $book->showAuthorTitle();
