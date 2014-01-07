<?php
namespace FluffycatCom\Template;

 class TemplateStars extends TemplateAbstract {
    
    function processTitle($title) {
      return Str_replace(' ','***',$title); 
    }
    
  }
