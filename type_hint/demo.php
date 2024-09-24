<?php
include './I (interface).php';
include './C (class).php';
include './A (class).php';
include './B(class).php';
class demo{
    //A
    public function typeIReturnA() : I 
{
    echo __FUNCTION__."</br>";
    return new A();
}
    public function typeAReturnA(): A
{
echo __FUNCTION__ . "</br>";
return new A();
}
public function typeBReturnA() : B 
{
    echo __FUNCTION__."</br>";
    return new A();
}

public function typeCReturnA() : C 
{
    echo __FUNCTION__."</br>";
    return new A();
}
public function typeNullReturnA() : null 
{
    echo __FUNCTION__."</br>";
    return new A();
}
//B
public function typeIReturnB() : I 
{
    echo __FUNCTION__."</br>";
    return new B();
}
public function typeAReturnB() : A 
{
    echo __FUNCTION__."</br>";
    return new B();
}

public function typeBReturnB() : B 
{
    echo __FUNCTION__."</br>";
    return new B();
}

public function typeCReturnB() : C 
{
    echo __FUNCTION__."</br>";
    return new B();
}
public function typeNullReturnB() : null 
{
    echo __FUNCTION__."</br>";
    return new B();
}
}
$demo = new demo();
$demo ->typeIReturnA();
$demo ->typeAReturnA();
$demo ->typeBReturnA();
$demo ->typeCReturnA();
$demo ->typeNullReturnA();
$demo ->typeIReturnB();
$demo ->typeAReturnB();
$demo ->typeBReturnB();
$demo ->typeCReturnB();
$demo ->typeNullReturnB();
?>
