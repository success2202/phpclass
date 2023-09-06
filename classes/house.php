<?php

//scope resolution operator


class FIrstClass{
    //property
    const EXAMPLE = "you cant change this";
    //method
    public static function test(){
        $testing = "this is a test";
        return $testing;
    }


}

$a = FirstClass::test();
echo $a;
echo FirstClass::EXAMPLE;

echo "<br>";

//parant and self is used to access a class properties inherited from another class
class SecondClass extends FirstClass{
    public static $staticProperty = "this is a Static property";

    //method
    public static function AnotherTest(){
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    
    }
}

$b = SecondClass::AnotherTest();
echo $b;

