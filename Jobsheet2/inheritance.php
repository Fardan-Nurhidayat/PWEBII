<?php 
  class Manusia {
    public $nama_saya;
    public function panggil_nama(){
      return "Nama saya adalah " . $this->nama_saya;
    }
  }

  class Mahasiswa extends Manusia{
    public $nama_mahasiswa;
    public function panggil_nama(){
      return "Nama Mahasiswa adalah " . $this->nama_mahasiswa;
    }
  }

$nanda = New Manusia();
$nanda->nama_saya = "Nanda";
echo $nanda->panggil_nama() . PHP_EOL;

$fardan = New Mahasiswa();
$fardan->nama_mahasiswa = "Fardan";
echo $fardan->panggil_nama() . PHP_EOL;
