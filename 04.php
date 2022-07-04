<?php
class Buku {

    public $nama;
    public $judul_buku;
    public $tahun_terbit;
  
    public function text(){
        echo "Ini adalah variabel \$this";
    }

    public function judul_buku(){
        return "$this->nama menerbitkan buku berjudul \"$this->judul_buku\" di tahun $this->tahun_terbit.";
    }
}

$buku = new Buku();
$buku -> nama = "Dika";
$buku -> judul_buku = "Belajar PHP dari Dasar";
$buku -> tahun_terbit = 2022;

echo $buku->text();
echo "\n";
echo $buku->judul_buku();

?>