<?php 

class produk {
	public $judul, 
	       $penulis,
	       $penerbit,
	       $harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}       

	public function getlabel() {
		return "$this->judul, $this->penulis";
	}

}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Sonen jump", "50000");
$produk2 = new Produk("Uncharted", "Neil Druckmen", "Sony Computer", "255000");
$produk3 = new Produk("Bully Indonesia");

echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);