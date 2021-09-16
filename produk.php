<?php 
class Produk{
 public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

 public function getLabel(){
     return "$this->penulis , $this->penerbit";
 }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Unknown";
// $produk2->tambahProperty = "check";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Lord Of The Rings";
$produk3->penulis = "J.R.R Tolkien";
$produk3->penerbit = "Allen & Unwin";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Star Wars";
$produk4->penulis = "George Lucas";
$produk4->penerbit = "Lucasfilm Ltd";
$produk4->harga = 30000;

echo "Novel : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
?>