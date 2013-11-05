<?php
namespace FluffycatCom\Strategy;

class StrategyCaps implements StrategyInterface {

    public function showTitle( $book_in)
    {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return strtoupper($title);
    }

}
