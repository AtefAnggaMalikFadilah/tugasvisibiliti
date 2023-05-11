<?php
class planet{
	public $nama = 'matahari';
	private $urutan = '1';
	function CetakProperti(){
		echo "Akses dari dalam class <br>";
		echo "Nama : ".$this->nama."<br>";
		echo "Urutan : ".$this->urutan."<br>";
	}
}
    $objek = new planet();
    $objek->CetakProperti();
    echo "<br> Pengaksesan dari luar class <br>";
    echo "Nama : ".$objek->nama."<br>";
    echo "Urutan : ".$objek->urutan."<br>";
?>