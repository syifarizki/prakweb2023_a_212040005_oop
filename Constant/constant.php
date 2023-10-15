<?php
// define('NAME', 'value');
// define disimpan diluar class
// define('NAMA', 'Syifa Rizki Mutia');
// echo NAMA;

// echo "<br>";
// const bisa disimpan di dalam class
// const UMUR = 20;
// echo UMUR;


// class Coba {
//     const NAMA ='Syifa';
// }

// echo Coba::NAMA;

// Magic Constant
// echo __FILE__;




// function coba() {
//     return __FUNCTION__;
// }

// echo coba();


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>