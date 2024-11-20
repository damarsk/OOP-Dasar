<?php
// Membuat Class Tanpa Constructor
class manusia {
    // Property
    public $nama;
    public $warna;

    // Method untuk menampilkan nama
    function tampilkan_nama() {
        return "Nama saya " . $this->nama . "<br/>";
    }

    // Method untuk menampilkan warna kulit
    function warna_kulit() {
        return "Warna kulit saya " . $this->warna . "<br/>";
    }
}

// Instansiasi kelas manusia
$manusia = new manusia();

// Menyimpan data ke property tanpa menggunakan __construct
$manusia->nama = "Damar"; // Mengisi property nama
$manusia->warna = "Sawo Matang"; // Mengisi property warna

// Memanggil method untuk menampilkan informasi
echo $manusia->tampilkan_nama();
echo $manusia->warna_kulit();