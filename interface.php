<?php

interface infoProduk {
    public function getInfoProduk();
}

abstract class Produk {
    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;
    
    //    Constructor dipanggil saat sebuah instance dari kelas dibuat.
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    // Setter
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    // Getter
    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    abstract public function getInfo();

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class Komik extends Produk implements infoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulisa", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk() {
        // Contoh Overriding
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk implements infoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulisa", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        foreach($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();