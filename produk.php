<?php 

class produk {
	public $judul = "judul", 
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;

	public function getlabel() {
		return "$this->judul, $this->penulis";
	}

}

// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "One Piece";
// $produk2->status = "Ongoing";
// var_dump($produk2);

$produk3 = new produk();
// $produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmen";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 255000;

echo "komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();