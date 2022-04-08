<?php
class lingkaran {
    public $r;
    public $d;
    const PHI = 3.14;

    function __construct($r) {
        $this-> r = $r;
    }

    public function getluas() {
        return self::PHI * $this->r * $this->r;
    }

    public function getkeliling() {
        return 2 * self::PHI * $this->r;
    }
}
?>