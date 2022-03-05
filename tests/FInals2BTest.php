<?php 
require_once __DIR__ . '/../src/Finals2B.php';

class FInals2BTest extends \PHPUnit\Framework\TestCase
{
    public function testname()
    {
        $finals2B1 = new Finals2B('Mico', 21, 'Black');
        $finals2B1->Err('Mico', 21, 'Black');
        $this->expectException(InvalidArgumentException::class);
        


    }

    public function testage()
    {
        $finals2B2 = new Finals2B('Mico', 75, 'Black');
        $finals2B2->Err('Mico', 21, 'Black');
        $this->assertGreaterThan($finals2B2->age, 70);
        
        
    }

    public function testcolor()
    {
        $finals2B3 = new Finals2B('Mico', 21, 'Black');
        $finals2B3->Err('Mico', 21, 'Black');
        //$this->assertEquals($finals2B3->ColorErr(), 'Black');
        $this->expectException(InvalidArgumentException::class);
    }


    public function testname2()
    {
        $finals2B4 = new Finals2B('222', 21, 'Black');
        $finals2B4->Err('222', 21, 'Black');
        //$this->assertEquals($finals2B4->AgeErr(), '222');
        $this->expectException(InvalidArgumentException::class);
    
    }

    public function testage2()
    {
        $finals2B5 = new Finals2B('Mico', 21, 'Black');
        $finals2B5->Err('Mico', 21, 'Black');
        //$this->assertEquals($finals2B1->NameErr, '72');
        // $this->assertGreaterThan($finals2B2->AgeErr(), 21);
        $this->expectException(InvalidArgumentException::class);
    
    }

}