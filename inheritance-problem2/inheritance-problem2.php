<?php 

class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalaman,
	       $waktuMain;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function __construct($judul  = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}

	public function getInfoPro(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Produk{
	public function getInfoPro(){
		$str = "Komik : {$this->judul} | {$this->getLabel()}(Rp.{this->harga}) - $this->jmlHalaman Halaman.";
		return $str;
	}
}

class Game extends Produk{
	public function getInfoPro(){
		$str = "Game : {$this->judul} | {$this->getLabel()}(Rp. {this->harga}) - $this->waktuMain Jam.";
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kshimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);
echo $produk1->getInfoPro();
echo"<br>";
echo $produk2->getInfoPro();




