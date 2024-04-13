<?php

// define('NAMA', 'Alfred G');
// echo NAMA;

// echo "<br>";

// const UMUR = 19;
// echo UMUR;


// class Coba{
// //    define('NAMA', 'Alfred G'); 

// const NAMA = 'Alfred G';

// }

// echo Coba::NAMA;

// echo __LINE__;
// echo "<br>";
// echo __FILE__;


// function coba(){
//     return __FUNCTION__;
// }
// echo coba();

class Coba {
    public $kelas = __CLASS__;

}
$obj = new Coba;
echo $obj->kelas;
?>