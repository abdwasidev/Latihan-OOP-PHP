<?php
class BukuPublic {

    public $judul_buku;
  
    public function text(){
        echo "Ini adalah public";
    }
  
    public function judul_buku(){
        return "Belajar PHP dari Dasar";
    }
}

$buku = new BukuPublic();

echo $buku->text();
echo "\n";
echo $buku->judul_buku();

?>

<?php
class BukuPrivate {

    private $judul_buku;
  
    public function text(){
        echo "Ini adalah private";
    }
  
    public function judul_buku(){
        return "Belajar PHP dari Dasar";
    }
}

$buku = new BukuPrivate();

echo $buku->text();
echo "\n";
echo $buku->judul_buku();

?>

<?php
class BukuProtected {

    protected $judul_buku;
  
    public function text(){
        echo "Ini adalah protected";
    }
  
    protected function judul_buku(){
        return "Belajar PHP dari Dasar";
    }

    public function view_judul_buku(){
        return $this->judul_buku();
    }

}

$buku = new BukuProtected();

echo $buku->text();
echo "\n";
echo $buku->view_judul_buku();

?>