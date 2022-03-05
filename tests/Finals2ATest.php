<?php 
require_once __DIR__ . '/../src/Finals2A.php';

class Finals2ATest extends \PHPUnit\Framework\TestCase
{
    public function testmod()
    {
        $finalsA1 = new Finals2A(25,2);
        $result = $finalsA1->fmod(25,2);

        $this->assertEquals(1, $result);
    
    }
    public function testmodWithException1()
    {
        $finalsA2 = new Finals2A(2,25);
        $result = $finalsA2->fmod(2,25);
        $this->expectException(InvalidArgumentException::class);
        
    }
    public function testmodWithException2()
    {
        $finalsA3 = new Finals2A('m','2');
        $result = $finalsA3->fmod('m', '2');
        $this->expectException(InvalidArgumentException::class);
    
    }

    public function testmod2()
    {
        $finalsA4 = new Finals2A(31,25);
        $result = $finalsA4->fmod(31,25);

        $this->assertEquals(6, $result);
    
    }

    public function testmod3()
    {
        $finalsA5 = new Finals2A(22,2);
        $result = $finalsA5->fmod(22,2);

        $this->assertEquals(0, $result);
    
    }

}
