<?php
class Person{
    public $age;
    public function __construct($initialAge){
        if($initialAge < 0) {
            echo "Age is not valid, setting age to 0.";
            echo "\n";
            $initialAge = 0;
        }
        $this->age = $initialAge;
    }
    public  function amIOld(){
        if($this->age < 13){
            echo "You are young.";
            echo "\n";
        } else if(13 <= $this->age && $this->age < 18){
            echo "You are a teenager.";
            echo "\n";
        } else {
            echo "You are old.";
            echo "\n";
        }

    }
    public  function yearPasses(){
        $this->age += 1;
    }

}

$T = intval(fgets(STDIN));
for($i=0;$i<$T;$i++){
    $age=intval(fgets(STDIN));
    $p=new Person($age);
    $p->amIOld();
    for($j=0;$j<3;$j++){
        $p->yearPasses();
    }
    $p->amIOld();
    echo "\n";

}