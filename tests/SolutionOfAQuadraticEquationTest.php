<?php


use zaytsev\SolutionOfAQuadraticEquation;
use PHPUnit\Framework\TestCase;

class SolutionOfAQuadraticEquationTest extends TestCase
{
    public function testSolve() {
        $Sol = new SolutionOfAQuadraticEquation();

        $this->assertEquals([0,-2],$Sol->solve(2,4,0));

        $this->assertEquals([-1],$Sol->solve(0,2,2));

        $this->expectException(\zaytsev\ZaytsevException::class);
        $Sol->solve(12,2, 3);

        $this->expectException(\zaytsev\ZaytsevException::class);
        $Sol->solve(0,0, 0);
    }
}
