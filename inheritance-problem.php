<?php 

class produk {
	public $judul, 
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalaman,
	       $waktuMain,
	       $tipe;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}       
	
	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}
 
	public function getInfoLengkap() {
		// Komik : Naruto | Masashi Kishimoto, Shonen jump (Rp. 50000) - 100 Halaman
		$str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp.{$this->harga})";
		if( $this->tipe == "Komik" ) {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if( $this->tipe == "Game") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}
	 
		return $str;
	}
	
}


class CetakInfoProduk {
	public function cetak( $produk ){
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return "$str";
	}
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen jump", 50000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmen", "Sony Computer", 255000, 0, 50, "Game");



echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();