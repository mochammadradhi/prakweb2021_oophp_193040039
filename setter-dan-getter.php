<?php 
class Produk{
 private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon=0;

 

public function __construct($judul = "judul",$penulis = "penulis",$penerbit =  "penerbit",$harga = 0){
    $this->judul = $judul;    
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
   
}

public function setJudul($judul){
    $this->judul = $judul;
}

public function getJudul(){
    return $this->judul;
}

public function setPenulis($penulis){
    $this->penulis = $penulis;
}

public function getPenulis(){
    return $this->penulis;
}

public function setPenerbit($penerbit){
    $this->penerbit = $penerbit;
}

public function getPenerbit(){
    return $this->penerbit;
}

public function setHarga($harga){
    $this->harga = $harga;
}

public function getHarga(){
    return $this->harga;
}

public function setDiskon($diskon){
    $this->diskon = $diskon;
 
}

 public function getDiskon(){
    return $this->harga - ( $this->harga * $this->diskon/100);
 }
 
 public function getLabel(){
     return "$this->penulis , $this->penerbit";
 }

 public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}";
    return $str;
 }
 
}

class Komik extends Produk{
    public $jmlh_halaman;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit =  "penerbit",$harga = 0,$jmlh_halaman = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlh_halaman = $jmlh_halaman;
    }

    public function getInfoProduk(){
        $str = "Komik : ". parent::getInfoProduk() .") - {$this->jmlh_halaman} Halaman.";
     return $str;
    }
 }

 class Game extends Produk{
    public $waktu_main;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit =  "penerbit",$harga = 0,$waktu_main = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktu_main = $waktu_main;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() .") ~ {$this->waktu_main} Jam.";
     return $str;
    }

    
    
 }

class CetakInfoProduk{
    public function cetak(Produk $produk){
      $str =  "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
      return $str;
    }
}


$produk1 = new Komik("Lord Of The Rings","J.R.R Tolkien","Allen & Unwin",30000, 100,"Komik");

$produk2 = new Game("Star Wars","George Lucas","Lucasfilm Ltd",30000,50,"Game");


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();    
echo "<hr>";

$produk2->setDiskon(25);
echo $produk2->getDiskon();
echo "<hr>";

$produk1->setJudul("The Hobbit");
echo $produk1->getJudul();
?>