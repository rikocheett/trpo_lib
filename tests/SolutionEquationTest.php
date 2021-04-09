<?php


use zaytsev\SolutionEquation;
use PHPUnit\Framework\TestCase;

class SolutionEquationTest extends TestCase
{
    public function testFoo()   {
        $Sol = new SolutionEquation();

        $this->assertEquals([-1],$Sol->foo(2, 2));

        $this->assertEquals([-0.25],$Sol->foo(4, 1));

        $this->expectException(\zaytsev\ZaytsevException::class);
        $Sol->foo(0,0);
    }
}
