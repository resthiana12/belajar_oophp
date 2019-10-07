<?php 

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