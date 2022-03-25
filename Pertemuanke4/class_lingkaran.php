<?php
// membuat class lingkaran
class Lingkaran{
    // buat property
    private $jari;
    const PHI = 3.14;

    // method
    function __construct($r)
    {
        $this->jari = $r;
    }

    // buat method getLuas untuk menghitung luas lingkaran
    function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }

    // buat method getKeliling untuk menghitung keliling lingkaran
    function getKeliling(){
        return 2 * self::PHI *$this->jari;
    }
}
// tutup class
?>