<?php
namespace FluffycatCom\Template;

 class TemplateExclaim extends TemplateAbstract {
    
    function processTitle($title) {
      return Str_replace(' ','!!!',$title); 
    }
    
    function processAuthor($author) {
      return Str_replace(' ','!!!',$author);
    }
  }
