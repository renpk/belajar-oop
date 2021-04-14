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
		return "$this->penulis, $this->penerbit";
	}

}


class CetakInfoProduk {
	public function cetak( $produk ){
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return "$str";
	}
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen jump", "50000");
$produk2 = new Produk("Uncharted", "Neil Druckmen", "Sony Computer", "255000");

echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
$infoproduk1 = new CetakInfoProduk();
$infoproduk2 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);
echo "<br>";
echo $infoproduk2->cetak($produk2);