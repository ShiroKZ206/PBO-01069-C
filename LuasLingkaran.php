<?php
class LuasLingkaran {
  public const phi = 3.14;
  public int $jari;

  public function tampil($nama = 'bola') {
    $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
    echo "Lingkaran {$nama} hasilnya adalah : {$rumus}";
  }

  public static function testting() {
    echo "<br/>";
    echo "ini dari static";
  }
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 12;
$lingkaran->tampil('roda');

LuasLingkaran::testting();