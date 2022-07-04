<?php
class Buku {

    const NAMA = "Sinta";
    const JUDUL_BUKU = "Become Expert MySQL";
    const TAHUN_TERBIT = 2021;
  
    public static function text(){
        echo "Ini adalah Konstanta Class.";
    }

    public static function kalimat(){
        echo self::NAMA." menerbitkan buku berjudul \"".self::JUDUL_BUKU."\" di tahun ".self::TAHUN_TERBIT.".";
    }

}


$buku = new Buku();
$buku::text();
echo "\n";
$buku::kalimat();

?>
