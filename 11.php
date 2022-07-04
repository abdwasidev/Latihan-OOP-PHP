<?php
class Buku {

    public static $nama = "Dika";
    public static $judul_buku = "Belajar PHP dari Dasar";
    public static $tahun_terbit = 2022;
  
    public static function text(){
        echo "Ini adalah cara mengakses Static Property dan Static Method Class";
    }

    public static function kalimat(){
        echo self::$nama." menerbitkan buku berjudul \"".self::$judul_buku."\" di tahun ".self::$tahun_terbit.".";
    }

}


$buku = new Buku();
$buku::text();
echo "\n";
$buku::kalimat();

?>
