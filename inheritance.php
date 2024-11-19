<?php

// Jualan Produk
// Komik
// Game

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $halaman,
           $waktuMain;
    
    //    Constructor dipanggil saat sebuah instance dari kelas dibuat.
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        return "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
    }
}

class Komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik : {$this->getLabel()} - {$this->halaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game : {$this->getLabel()} ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
// Komik : Naruto |  Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.