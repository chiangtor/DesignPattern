<?php

namespace FluffycatCom\Observer;


class PatternSubject extends AbstractSubject {
    private $favoritePatterns = null;

    private $observers = array();


    function __construct() {
    }

    function attach(AbstractObserver $observer_in) {
        $this->observers[] = $observer_in;
    }

    function detach(AbstractObserver $observer_in) {
        foreach( $this->observers as $okey => $oval) {
            if ($oval = $observer_in) {
                unset($this->observers[$okey]);
            }
        }
    }
    function notify() {

        foreach( $this->observers as $obs ) {
            $obs->update($this);
        }
    }
}
