<?php
class Person{
    private $name;
    function sayHi(){
        print("Hi, I'm {$this->name}.");
    }
    public function setName($_name){
       
        $this->ifEmptyDie($_name);
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }
    private function ifEmptyDie($value){
        if(empty($_name)){
            die('I need name');
        }

    }

}
$egoing = new Person;
//$egoing->name = 'egoing';
$egoing->setName('eging');
$egoing->sayHi();
$egoing->ifEmptyDie('asdfadsf');
print($egoing->getName());

?>
