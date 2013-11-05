<?php
namespace FluffycatCom\Strategy;

class StrategyStars implements StrategyInterface {

    public function showTitle( $book_in)
    {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return str_replace(' ', '*', $title);
    }

}


