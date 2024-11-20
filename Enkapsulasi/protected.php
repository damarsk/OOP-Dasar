<!-- property dan method di tetapkan dengan protected,
berarti property dan method tersebut tidak bisa di akses dari luar class.
tetapi bisa di akses dari dalam class itu sendiri. -->
<?php
//class manusia
class manusia
{
    //menentukan property dengan protected
    protected $nama = "Damar";
    //method protected
    protected function nama()
    {
        return "Nama saya " . $this->nama;
    }
    public function tampilkan_nama()
    {
        return $this->nama();
    }
}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method public tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
