<?php

class A
{
    public $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
}

class B extends A
{

    private $b;

    public function __construct($b)
    {
        parent::__construct($a);
        $this->b = $b;
    }
}

class С extends B
{

    parent::__construct($b);  
      
}

$b1 = new B();
$a2 = new A();
$a3 = new B($b1);
$b4 = new B($a3);
$a5 = new A($a2, $b4, $b1);

?>