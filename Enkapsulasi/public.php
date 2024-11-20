<!-- Jika sebuah method dan property menggunakan public,
maka method dan property tersebut dapat di akses dari luar
atau dari dalam class tersebut. -->
<?php
//class manusia
class manusia{
    //prop
    public $nama;
    public $warna;
    
    //method manusia
    function tampilkan_nama(){
        return "Nama saya Damar <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();