<?php
abstract class Buku{
    abstract protected function kategori_buku();
}

class Kimia extends Buku{
    public function kategori_buku(){
        echo "Buku ini termasuk buku Kimia";
    }
}
  
class Fisika extends Buku{
    public function kategori_buku(){
        echo "Buku ini termasuk buku Fisika";
    }
}

class Biologi extends Buku{
    public function kategori_buku(){
        echo "Buku ini termasuk buku Biologi";
    }
}

$buku_kimia = new Kimia();
$buku_fisika = new Fisika();
$buku_biologi = new Biologi();

function cek_kategori_buku($kategori_buku){
    return $kategori_buku->kategori_buku();
}


function text(){
    echo "Ini adalah Polimorfisme Method Class";
}

text();
echo "\n";
cek_kategori_buku($buku_kimia);
echo "\n";
cek_kategori_buku($buku_fisika);
echo "\n";
cek_kategori_buku($buku_biologi);
echo "\n";
?>