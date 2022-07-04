<?php
class ParentBuku {

    public static $nama = "Dika";
    public static $judul_buku = "Belajar PHP dari Dasar";
    public static $tahun_terbit = 2022;
  
    public function text(){
        echo "Ini adalah cara mengakses Property dan Method Parent Class";
    }

    public function kalimat(){
        echo "Dika menerbitkan buku berjudul \"Belajar PHP dari Dasar\" di tahun 2022.";
    }

}

class ChildBuku extends ParentBuku{

    public static $nama = "Sinta";
    public static $judul_buku = "Become Expert MySQL";
    public static $tahun_terbit = 2021;

    public function buku_method() {
        echo parent::kalimat();
    }

    public function buku_property() {
        echo self::$nama;
        echo self::$judul_buku;
        echo self::$tahun_terbit;
    }
}

$buku = new ChildBuku();
$buku -> text();
echo "\n";
$buku ->buku_method();
echo "\n";
$buku ->buku_property();

?>
