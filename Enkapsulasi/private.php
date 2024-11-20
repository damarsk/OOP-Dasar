<!-- Hak akses kedua yang akan kita bahas adalah private.
private adalah hak akses yang melarang method atau property
yang menggunakan nya di larang di akses dari luar class. -->
<?php
//class manusia
class manusia{
    //menentukan property dengan private
    private $nama = "Damar";    

    //method public
    public function tampilkan_nama(){
        return "Nama saya " .$this->nama;
    }
}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method public tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();