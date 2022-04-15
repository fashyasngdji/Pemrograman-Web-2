<?php
class NilaiMahasiswa {
    public $nilai;
    public $nama;
    public $nim;
    public $prodi;
    public $thn_angkatan;

    function __construct($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function grade() {
        if ($this->nilai < 35) {
            return "E";
        } else if ($this->nilai >= 36 && $this->nilai < 55) {
            return "D";
        } else if ($this->nilai >= 56 && $this->nilai < 69) {
            return "C";
        } else if ($this->nilai >= 70 && $this->nilai < 84) {
            return "B";
        } else if ($this->nilai >= 85) {
            return "A";
        }
    }
}