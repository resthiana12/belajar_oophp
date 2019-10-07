<?php 

class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalaman,
	       $waktuMain,
	       $tipe;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function __construct($judul  = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe"){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function infoLengkap(){
		$str = "{$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";
		if($this->tipe=="Komik"){
			$str .= " - $this->jmlHalaman Halaman";
			$str = "Komik : " . $str; 
		} else{
			$str .= " ~ $this->waktuMain. Jam";
			$str = "Game : " . $str;
		}
		return $str;
	}
}


class Cetak{
	public function menyetak(Produk $produk){
		$str = " {$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masashi Kshimoto", "Shonen Jump", 30000, 100, 0,"Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");
echo $produk1->infoLengkap();
echo"<br>";
echo $produk2->infoLengkap();




