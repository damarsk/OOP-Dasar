<?php

// Jualan Produk
// Komik
// Game

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;
    
    //    Constructor dipanggil saat sebuah instance dari kelas dibuat.
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()}";

        return $str;
    }
}

class Komik extends Produk {
    public $halaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $halaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->halaman = $halaman;
    }

    public function getInfoProduk() {
        // Contoh Overriding
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->halaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
// Komik : Naruto |  Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.