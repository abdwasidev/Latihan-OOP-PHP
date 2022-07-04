<?php
class ParentBuku {

    public $nama;
    public $judul_buku;
    public $tahun_terbit;
  
    public function text(){
        echo "Ini adalah Constructor dan Destructor di Parent-Child Class";
    }

    public function __construct(){
        $this->nama = "Dika";
        $this->judul_buku = "Belajar PHP dari Dasar";
        $this->tahun_terbit = 2022;
    }

    public function kalimat(){
        echo $this->nama." menerbitkan buku berjudul \"".$this->judul_buku."\" di tahun ".$this->tahun_terbit.".";
    }

    public function __destruct(){
        echo "Destruct data ke " . $this->nama . "\n";
    }

}

class ChildBuku extends ParentBuku{

    public function __construct(){
        parent::__construct();
        $this->nama = "Sinta";
        $this->judul_buku = "Become Expert MySQL";
        $this->tahun_terbit = 2021;
    }

}


$buku = new ParentBuku();
$buku -> text();
echo "\n";
$buku -> kalimat();

echo "\n";
$buku = new ChildBuku();
$buku -> kalimat();

?>

