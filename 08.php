<?php
class ParentBuku {
  
    public function text(){
        echo "Ini adalah Parent-Child Class";
    }

    public function kalimat(){
        echo "Sains adalah Pengetahuan";
    }

    public function parent_text(){
        echo "text ini berada pada method di Parent Class";
    }

}

class ChildBuku extends ParentBuku{

    public function child_text(){
        echo "text ini berada pada method di Child Class";
    }
}

$buku = new ParentBuku();
$buku -> text();
echo "\n";

$buku = new ChildBuku();
$buku ->parent_text();
echo "\n";
$buku ->child_text();

?>
