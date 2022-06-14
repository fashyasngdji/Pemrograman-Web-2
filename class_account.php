<?php
class Account{
    public $nomor;
    protected $saldo;

    public function __construct($nomor,$saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($jumlah){
        $this->saldo = $this->saldo + $jumlah; 
    }
    public function withdraw($jumlah){
        $this->saldo = $this->saldo - $jumlah;
    }
    public function cetak(){
        echo "Nasabah dengan Rekening ".$this->nomor;
        echo "<br>";
        echo "Saat ini memiliki saldo sebesar ".$this->saldo;
        echo "<br>";
    }
}
?>