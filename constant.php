<?php
// class Coba{
//     const NAMA = 'Darth Vader';
// }
// echo Coba::NAMA;

echo __LINE__ . "<br>";
echo __FILE__ . "<br>";

 function test(){
    return __FUNCTION__ . "<br>";
}

echo test();

class Objek{
    public $class = __CLASS__;
}
$obj = new Objek();
echo $obj->class;
?>