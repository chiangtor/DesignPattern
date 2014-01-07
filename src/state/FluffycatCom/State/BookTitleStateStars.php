<?php
namespace FluffycatCom\State;

/**
 * 
 **/
class BookTitleStateStars implements BookTitleStateInterface
{
    private $titleCount = 0;

    public function showTitle($context_in)
    {
        $title = $context_in->getBook()->getTitle();
        $this->titleCount++;

        $context_in->setTitleState(new BookTitleStateExclaim());;
        return str_replace(  ' ', '*', $title);
    }
}
?>
