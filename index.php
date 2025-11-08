<?php

require_once ('./LuasLingkaran.php');

use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(11);
// $lingkaran->jari = 12;
$lingkaran->tampil('roda');

LuasLingkaran::testting();