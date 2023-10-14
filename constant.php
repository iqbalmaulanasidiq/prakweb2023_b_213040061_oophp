<?php 
// define('NAMA', 'Iqbal Maulana Sidiq');
// echo NAMA;

// echo "<hr>";

// const UMUR = 21;
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Iqbal';
// }

// echo Coba::NAMA;

// echo __FILE__;


// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();
class Coba
    {
        public $kelas = __CLASS__;
    }

$obj = new Coba;
echo $obj->kelas;

?>