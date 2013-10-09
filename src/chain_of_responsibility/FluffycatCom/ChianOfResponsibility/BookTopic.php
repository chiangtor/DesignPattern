<?php
namespace FluffycatCom\ChainOfResponsibility;

class BookTopic extends AbstractBookTopic {

    private $topic;
    private $title;

    function __construct($topic_in) {
        $this->topic = $topic_in;
        $this->title = NULL;
    }

    function getTopic() {
        return $this->topic;
    }

    function setTitle($title_in) {
        $this->title = $title_in;
    }

    // this is the end of the chain - 
    function getTitle() {
        if (NULL != $this->title) {
            return $this->title;
        } else {
            return 'The title is empty';
        }
    }
}
