<?php 

class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function __construct($judul  = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getInfoPro(){
		$str = "{$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Produk{
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){
		parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);
		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoPro(){
		$str = "Komik :".parent::getInfoPro()." - $this->jmlHalaman Halaman.";
		return $str;
	}
}

class Game extends Produk{
	public $waktuMain;

	public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){
		parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
		$this->waktuMain= $waktuMain;
	}

	public function getInfoPro(){
		$str = "Game : ".parent::getInfoPro()."~ $this->waktuMain Jam.";
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kshimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000,50);
echo $produk1->getInfoPro();
echo"<br>";
echo $produk2->getInfoPro();




