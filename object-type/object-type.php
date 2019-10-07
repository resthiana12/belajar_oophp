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
}


class Cetak{
	public function menyetak(Produk $produk){
		$str = " {$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masashi Kshimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
$infoPrint = new Cetak();

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo $infoPrint->menyetak($produk1);
echo"<br>";
echo $infoPrint->menyetak($produk2);

