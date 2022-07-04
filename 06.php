<?php
class Buku {

    public $nama;
    public $judul_buku;
    public $tahun_terbit;
  
    public function text(){
        echo "Ini adalah Pseudo-variabel \$this";
    }

    public function kalimat($nama = "Dika", $judul_buku = "Belajar PHP dari Dasar", $tahun_terbit = 2022){
        return "$nama menerbitkan buku berjudul \"$judul_buku\" di tahun $tahun_terbit.";
    }

}

$buku = new Buku();

echo $buku->text();
echo "\n";
echo $buku->kalimat();
echo "\n";
echo $buku->kalimat($nama = "Sinta", $judul_buku = "Become Expert MySQL", $tahun_terbit = 2021);

?>