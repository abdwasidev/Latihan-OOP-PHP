<?php
abstract class ParentBuku{
    abstract protected function text();
    
    abstract public function say();

    abstract protected function kalimat($nama, $judul_buku, $tahun_terbit);
}

class ChildBuku extends ParentBuku{
    public function text(){
        return "Ini adalah abstract Property dan abstract Method Class";
    }

    public function say(){
        return $this->text();
    }
    
    public function kalimat($nama, $judul_buku, $tahun_terbit){
        return $nama." menerbitkan buku berjudul \"".$judul_buku."\" di tahun ".$tahun_terbit.".";
    }
}

$buku = new ChildBuku;

echo $buku->say();
echo "\n";
echo $buku->kalimat("Sinta", "Become Expert MySQL", 2021);

?>