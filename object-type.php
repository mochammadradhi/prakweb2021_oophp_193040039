<?php 
class Produk{
 public $judul,
        $penulis,
        $penerbit,
        $harga;

public function __construct($judul = "judul",$penulis = "penulis",$penerbit =  "penerbit",$harga = 0){
    $this->judul = $judul;    
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
}

 public function getLabel(){
     return "$this->penulis , $this->penerbit";
 }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
      $str =  "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
      return $str;
    }
}
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Unknown";
// $produk2->tambahProperty = "check";
// var_dump($produk2);

$produk3 = new Produk("Lord Of The Rings","J.R.R Tolkien","Allen & Unwin",30000);

$produk4 = new Produk("Star Wars","George Lucas","Lucasfilm Ltd",30000);


echo "Novel : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

$infoProduk1 = new CetakInfoProduk();

echo "<br>";

echo $infoProduk1->cetak($produk3);
?>