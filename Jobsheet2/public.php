<?php

class Mahasiswa{
  public $nama;
  private $nim = "123456";
  public function tampilkan_nama(){
    return "Nama Saya $this->nama";
  }

  private function setNim(){
    return "NIM Saya " . $this->nim;
  }
  public function getNim(){
    return $this->setNim();
  }

 
}

class TI extends Mahasiswa {
  public function tampilkan_nim(){
    return "NIM Saya " . $this->nim;
  }
}

$Abdau = New Mahasiswa();
$Abdau->nama = "Abda'u";
echo $Abdau->tampilkan_nama() . PHP_EOL;

$fardan = new Mahasiswa();
echo $fardan->getNim() . " Di akses oleh diri sendiri " .PHP_EOL ;

// Oleh Turunanya
$farhan = new TI();
echo $farhan->tampilkan_nim()  . PHP_EOL;

