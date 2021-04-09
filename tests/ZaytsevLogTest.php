<?php


use zaytsev\ZaytsevLog;
use PHPUnit\Framework\TestCase;

class ZaytsevLogTest extends TestCase
{
    public function testInstance():void{
        $this->assertInstanceOf(ZaytsevLog::class,ZaytsevLog::Instance());
    }

    public function testLog():void {
        $this->expectOutputString("Test\r\n");
        ZaytsevLog::log("Test");
        ZaytsevLog::write();
    }
}
