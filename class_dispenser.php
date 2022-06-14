<?php
class Dispenser
{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    function __construct($brand, $hargaSegelas, $volumeGelas, $vol)
    {
        $this->namaMinuman = $brand;
        $this->volume = $vol;
        $this->hargaSegelas = $hargaSegelas;
        $this->volumeGelas = $volumeGelas;
    }
    public function beli($jumlah)
    {
        echo "Pengguna Membeli Minuman " . $this->namaMinuman . " Sejumlah " . $jumlah . " Gelas";
        echo "<br>";
        $this->volume = $this->volume - ($this->volumeGelas * $jumlah);
        echo "Total Harganya adalah Rp " . ($this->hargaSegelas * $jumlah) . ",-";
        echo "<br>";
        return;
    }
    public function print()
    {
        echo "Merek Minuman = " . $this->namaMinuman;
        echo "<br>";
        echo "Isi wadah = " . $this->volume . " ml";
        echo "<br>";
        echo "Harga Pergelas = Rp " . $this->hargaSegelas . ",-";
        echo "<br>";
        echo "Ukuran Pergelas = " . $this->volumeGelas . " ml";
        echo "<hr>";
    }
    public function isiUlang()
    {
        $this->volume = $this->volume + 10000;
    }
};

$minuman = new Dispenser("Sprite", 2000, 250, 10000);
$minuman->print();
$minuman->beli(4);
$minuman->print();
$minuman->isiUlang();
$minuman->print();
