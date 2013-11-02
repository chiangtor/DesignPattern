<?php

namespace FluffycatCom\Observer;


class PatternObserver extends AbstractObserver {

    public function __construct() {
    }

    public  function update(AbstractSubject $subject_in) {

        echo PHP_EOL;
        echo PHP_EOL.'--in pattern observer';
        echo PHP_EOL, '--',$subject_in->getFavrites();
        echo PHP_EOL;
    }

}
