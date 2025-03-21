<?php
// File: class_lingkaran.php
class Lingkaran {
    private $jari;
    const PHI = 3.14;

    public function __construct($r) {
        $this->jari = $r;
    }

    public function getLuas() {
        return self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling() {
        return 2 * self::PHI * $this->jari;
    }
}

// File: main.php (file yang akan dijalankan)
require_once "class_lingkaran.php";

echo "NILAI PHI: " . Lingkaran::PHI;

$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);

echo "<br/>Luas Lingkaran I: " . $lingkar1->getLuas();
echo "<br/>Luas Lingkaran II: " . $lingkar2->getLuas();

echo "<br/>Keliling Lingkaran I: " . $lingkar1->getKeliling();
echo "<br/>Keliling Lingkaran II: " . $lingkar2->getKeliling();
?>