<?php 
class Produk{
 public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlh_halaman,
        $waktu_main,
        $tipe;

public function __construct($judul = "judul",$penulis = "penulis",$penerbit =  "penerbit",$harga = 0, $jmlh_halaman = 0,$waktu_main =0){
    $this->judul = $judul;    
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlh_halaman = $jmlh_halaman;
    $this->waktu_main = $waktu_main;
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
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} 
     ) - {$this->jmlh_halaman} Halaman.";
     return $str;
    }
 }

 class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} 
     ) - {$this->waktu_main} Jam.";
     return $str;
    }
 }

class CetakInfoProduk{
    public function cetak(Produk $produk){
      $str =  "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
      return $str;
    }
}


$produk1 = new Komik("Lord Of The Rings","J.R.R Tolkien","Allen & Unwin",30000, 100,0,"Komik");

$produk2 = new Game("Star Wars","George Lucas","Lucasfilm Ltd",30000,0,50,"Game");


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>