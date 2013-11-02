<?php
namespace FluffycatCom\ChainOfResponsibility;
:wa

abstract class AbstractBookTopic {

    abstract function getTopic();
    abstract function getTitle();
    abstract function setTitle($title_in);
}
