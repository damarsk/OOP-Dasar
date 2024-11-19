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
           $waktuMain,
           $tipe;
    
    //    Constructor dipanggil saat sebuah instance dari kelas dibuat.
    public function __construct($tipe, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Method untuk menampilkan info lengkap dari produk {inheritance problem}
    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik" ) {
            $str .= " - {$this->halaman} Halaman.";
        } else if( $this->tipe == "Game" ) {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

$produk1 = new Produk("Komik", "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Produk("Game", "Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
// Komik : Naruto |  Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.