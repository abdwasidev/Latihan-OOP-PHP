<?php
class Buku {

    public $nama;
    public $judul_buku;
    public $tahun_terbit;
  
    public function text(){
        echo "Ini adalah Pseudo-variabel \$this";
    }

    public function kalimat1(){
        return "$this->nama menerbitkan buku berjudul \"$this->judul_buku\" di tahun $this->tahun_terbit.";
    }

    public function kalimat2(){
        return "Pada tahun $this->tahun_terbit, $this->nama menerbitkan buku berjudul \"$this->judul_buku\".";
    }

    public function kalimat3(){
        $kalimat1 = $this->kalimat1();
        $kalimat2 = $this->kalimat2();
        $kalimat3 = $kalimat1."\n".$kalimat2;
        return $kalimat3;
    }

}

$buku = new Buku();
$buku -> nama = "Dika";
$buku -> judul_buku = "Belajar PHP dari Dasar";
$buku -> tahun_terbit = 2022;

echo $buku->text();
echo "\n";
echo $buku->kalimat1();
echo "\n";
echo $buku->kalimat2();
echo "\n\n";
echo $buku->kalimat3();



?>