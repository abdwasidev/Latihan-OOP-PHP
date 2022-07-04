<?php
class Buku {

    public $nama;
    public $judul_buku;
    public $tahun_terbit;
  
    public function text(){
        echo "Ini adalah Constructor";
    }

    public function __construct($nama,$judul_buku,$tahun_terbit){
        $this->nama=$nama;
        $this->judul_buku=$judul_buku;
        $this->tahun_terbit=$tahun_terbit;
    }

    public function kalimat(){
        echo $this->nama." menerbitkan buku berjudul \"".$this->judul_buku."\" di tahun ".$this->tahun_terbit.".";
    }

    public function __destruct(){
        echo "Destruct data ke " . $this->nama . "\n";
    }

}


$buku1 = new Buku("Dika", "Belajar PHP dari Dasar", 2022);
$buku1 -> text();
echo "\n";
$buku1 -> kalimat();

echo "\n";
$buku2 = new Buku("Sinta", "Become Expert MySQL", 2021);
$buku2 -> kalimat();

?>


