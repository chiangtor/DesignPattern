<?php

namespace FluffycatCom\Bridge;

  class BridgeBookAuthorTitle extends BridgeBook {    
  
    function showAuthorTitle() {
      return $this->showAuthor() . "'s " . $this->showTitle();
    }
  
  }
