<?php
class Buku {

    public $judul_buku;
  
    public function text(){
        echo "Ini adalah class buku";
    }
}

$buku = new Buku();
$buku -> judul_buku = "Belajar PHP dari Dasar";

echo $buku->text();
echo "\n";
echo $buku->judul_buku;

?>