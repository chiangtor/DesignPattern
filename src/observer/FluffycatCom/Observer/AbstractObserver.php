<?php

namespace FluffycatCom\Observer;

class AbstractObserver {

    abstract function update(AbstractSubject $subject_in);

}
