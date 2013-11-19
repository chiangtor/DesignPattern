<?php
namespace FluffycatCom\Builder;
/**
 * 
 **/
class HTMLPage
{
    
    private $page = NULL;
    private $page_title = NULL;
    private $page_heading = NULL;
    private $page_next = NULL;

    function __construct()
    {
    }

    public function showPage()
    {
        return $this->page;
    }
    public function setTitle($title_in)
    {
        $this->page_title = $title_in;
    }
    public function setHeading($heading_in)
    {
        $this->page_heading = $heading_in;
    }
    public function setText($text_in)
    {
        $this->page_text .= $text_in;
    }
    public function formatPage()
    {
        $this->page = '<html>';
        $this->page .= '<head><title>'.$this->page_title.'</title></head>';
        ;
        $this->page .= '<body>';
        $this->page .= $this->page_text;
        $this->page .= '</body>';

        $this->page .= '</html>';

    }
}
?>
