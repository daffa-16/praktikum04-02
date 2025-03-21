<?php
    class Lingkaran { // buka class
        private $jari;
        const phi = 3.14;

        function __construct($r) {
            $this->jari = $r;
        }

        function getLuas() {
            return self::phi * $this->jari * $this->jari;
        }

        function getKeliling() {
            return 2 * self::phi * $this->jari;
        }
    } // tutup class
?>