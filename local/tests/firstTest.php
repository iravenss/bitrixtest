<?php
require_once("bootstrap.php");
class FirstTest extends  \PHPUnit\Framework\TestCase
{
    public function testCmodule()
    {
        $this->assertTrue(CModule::IncludeModule('iblock'));
        $this->assertFalse(CModule::IncludeModule('module.not.exists'));
    }


}