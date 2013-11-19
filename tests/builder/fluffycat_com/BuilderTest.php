<?php
include_once(__DIR__.'/../../../vendor/autoload.php');

use FluffycatCom\Builder\HTMLPageBuilder;
use FluffycatCom\Builder\HTMLPageDirector; 

/**
 * 
 **/
class BuilderTest extends \PHPUnit_Framework_TestCase
{
    
    public function testA()
    {

        $pageBuilder = new HTMLPageBuilder();

        $pageDirector = new HTMLPageDirector($pageBuilder);

        $pageDirector->buildPage();
        $page = $pageDirector->GetPage();

        $echo ='<html><head><title>Testing the HTMLPage</title></head><body>Testing, testing, testing!Testing, testing, testing, or!Testing, testing, testing, more!</body></html>';
        $this->assertEquals( $echo, $page->showPage());

    }
}
?>
