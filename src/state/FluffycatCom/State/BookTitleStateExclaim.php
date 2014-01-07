<?php
namespace FluffycatCom\State;

/**
 * 
 **/
class BookTitleStateExclaim implements BookTitleStateInterface
{
    private $titleCount=0;
    public function showTitle($context_in)
    {
        $title = $context_in->getBook()->getTitle();
        $this->titleCount++;

        if( 1< $this->titleCount){
            $context_in->setTitleState(new BookTitleStateStars);
        }
        return str_replace(' ' , '!', $title);
    }
}

