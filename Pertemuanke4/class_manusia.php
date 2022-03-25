<?php
// Membuat class manusia
class Manusia{
    // Buat Property
    var $nama;
    var $warna;

    // buatlah method atau function
    function tampilkan_nama(){
        return '<br/>Nama saya adalah Cut Aliya Fauziya';
    }

    function __construct(){
        return '<br/>Kulit saya berwarna coklat';
    }
}
// buat object
$manusia = new Manusia();

echo $manusia -> __construct();
echo $manusia -> tampilkan_nama();
?>