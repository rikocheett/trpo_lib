<?php


namespace zaytsev;


class SolutionEquation
{
    protected $X1;

    public function foo(float $a, float $b)
    {
        if ($a == 0) {
            throw new ZaytsevException("Determined that such an equation does not exist");
        }
        return $this->X1 = array (-($b / $a));
    }
}