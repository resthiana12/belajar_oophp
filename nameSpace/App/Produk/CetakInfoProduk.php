<?php 

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