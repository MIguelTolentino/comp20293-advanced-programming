<?php
class Finals2B
{
    public string $name;
    public int $age;
    public string $color;
    
    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->fave = $color;
    }
    public function Name()
    {
        return $this->name;
    }
    
    public function Color()
    {
        return $this->color;
    }
    
    public function Age()
    {
        return $this->age;
    }

    
  function Err($name, $age, $color)
  {
        if(is_int($name))
        {
            throw new InvalidArgumentException('Only Accepts Alphabets!');
        }
        
        else if ($age > 70)
        {
            throw new InvalidArgumentException('Age must not exceed to 70!');
        }

        else if (is_numeric($age))
        {
            throw new InvalidArgumentException('Age must be a Number!');
        }

        else if (is_int($color))
        {
            throw new InvalidArgumentException('Only Accepts Alphabets!');
        }

       
    
  }

//     public function getInput()
//     {
//         return $this->name;
//         return $this->age;
//         return $this->color;
//     }
// }

    function returnValue()
    {
      echo $this->name + " " + $this->fave + " " + $this->age;
    }
  }
  
  
  
//     public function NameErr()
//     {
//         if(ctype_alpha($name))
//         {
//             throw new InvalidArgumentException('Only Accepts Alphabets!');
//         }
//         return $this->name;
//     }

//     public function ColorErr()
//     {
//         if (is_int($color))
//         {
//             throw new InvalidArgumentException('Only Accepts Alphabets!');
//         }
//         return $this->color;
    
//     }

//     public function AgeErr()
//     {
//         if ($age > 70)
//         {
//             throw new InvalidArgumentException('Age must not exceed to 70!');
//         }
//     }

//     public function AgeErr2()
//     {
//         if(!is_numeric($this->age))
//         {
//             throw new InvalidArgumentException('Age must be a Number!');
//         }
//     }
    
//     public function getInput()
//     {
//         return $this->name;
//         return $this->age;
//         return $this->color;
//     }

// }