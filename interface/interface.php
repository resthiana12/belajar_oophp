<?php 

Interface InfoPro{
	public function getInfoPro();
}

abstract class Produk {
	protected  $judul,
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

	abstract public function getInfo();

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

class Komik extends Produk implements InfoPro{
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){
		parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);
		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoPro(){
		$str = "Komik :".$this->getInfo()." - $this->jmlHalaman Halaman.";
		return $str;
	}

	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";
		return $str;
	}
}

class Game extends Produk implements InfoPro{
	public $waktuMain;

	public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){
		parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
		$this->waktuMain= $waktuMain;
	}
	
	public function getInfoPro(){
		$str = "Game : ".$this->getInfo()."~ $this->waktuMain Jam.";
		return $str;
	}

	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";
		return $str;
	}
}


class CetakInfoProduk{
	public $daftarPro = array();

	public function tambahProduk(Produk $produk){
		$this->daftarPro[] = $produk;
	}

	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";
		foreach ($this->daftarPro as $p) {
			$str .= "- {$p->getInfoPro()}<br>";
		}
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kshimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000,50);

$cetak = new CetakInfoProduk();
$cetak->tambahProduk($produk1);
$cetak->tambahProduk($produk2);
echo $cetak->cetak();

