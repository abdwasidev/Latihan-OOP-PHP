<?php
interface Books{
    const NAMA = "SINTA";
    const JUDUL_BUKU = "Become Expert MySQL";
    const TAHUN_TERBIT = 2021;
    
    public function text();
    public function title_book();
    public function reference_book();
}

class Buku implements Books{
  
    public function text(){
        echo "Ini adalah Interface PHP";
    }

    public function title_book(){
        echo Books::JUDUL_BUKU;
    }

    public function reference_book(){
        echo Books::NAMA.". ".Books::TAHUN_TERBIT.". ".Books::JUDUL_BUKU.".";
    }
}

$buku = new Buku;

$buku->text();
echo "\n";
$buku->title_book();
echo "\n";
$buku->reference_book();

?>