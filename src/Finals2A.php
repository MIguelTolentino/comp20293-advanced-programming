<?php
class Finals2A
{
    private int $n1, $n2;

    public function __construct($n1, $n2)
    {
        $this->$n1 = $n1;
        $this->$n2 = $n2;
    }

    public function fmod($n1, $n2)
    {
        if($n1 < $n2)
        {
            throw new InvalidArgumentException('Divisor must be less than the dividend');
        }
        else if(!is_numeric($n1))
        {
            throw new \InvalidArgumentException("Oops! Please enter a number");
        }
        else if(!is_numeric($n2))
        {
            throw new \InvalidArgumentException("Oops! Please enter a number");
        }
        else
            echo 'Modulus = ';

             return $n1% $n2;
    }
}
?>
