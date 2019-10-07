<?php 

class Produk {
	private  $judul,
	       	 $penulis,
	      	 $penerbit,
	      	 $harga,
			 $diskon = 0;

	public function getDiskon(){
		return $this->diskon;
	}

	public function getHarga(){
		return $this->harga - ($this->diskon * $this->harga /100);
	}


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

	public function getJudul(){
		return $this->judul;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	 public function getPenerbit(){
	 	return $this->penerbit;
	 }

	public function setJudul($judul){
		// if( !is_string($judul)){
		// 	throw new Exception("Judul harus string");
		// }
		$this->judul = $judul;
	}

	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}

	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}

	public function setHarga($harga){
		$this->harga = $harga;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo"<hr>";

// $produk3 = new Produk("Barang Baru");
// echo $produk3->judul;
$produk1->setPenulis("Resthiana");
echo $produk1->getPenulis();