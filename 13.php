<?php
final class ParentBuku {

    public static $nama = "Dika";
    public static $judul_buku = "Belajar PHP dari Dasar";
    public static $tahun_terbit = 2022;
  
    final public static function text(){
        echo "Ini adalah Final Property dan Final Method Class";
    }

    final public static function kalimat(){
        echo self::$nama." menerbitkan buku berjudul \"".self::$judul_buku."\" di tahun ".self::$tahun_terbit.".";
    }

}

// class ChildBuku extends ParentBuku{

//     public static function kalimat(){
//         echo self::$nama." menerbitkan buku berjudul \"".self::$judul_buku."\" di tahun ".self::$tahun_terbit.".";
//     }
// }


$buku = new ParentBuku();
$buku::text();
echo "\n";
$buku::kalimat();

?>
