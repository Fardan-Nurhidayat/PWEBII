<?php

class Mahasiswa {
  public $nim,$nama,$alamat;

  // Fungsi Constructor
  public function __construct(){
    echo "Saya adalah mahasiswa Teknik Informatika" . PHP_EOL;
  }
  // Fungsi Destructor
  public function __destruct(){
    echo "Politeknik Negeri Cilacap" . PHP_EOL;
  }


  public function tampil_mahasiswa(){
    echo "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah " ;
  }
  public function tampil_nama(){ // Fungsi tampil nama
    return $this->nama;
  }

  public function tampil_alamat(){ // Fungsi tampil alamat
    return $this->alamat;
  }
}

$fardan = new Mahasiswa();
$fardan->nim = 123456;
$fardan->nama = "Fardan";
$fardan->alamat = "Bandung";


echo $fardan->tampil_alamat() . PHP_EOL;
echo $fardan->tampil_nama() . PHP_EOL;

// unset($fardan);
echo "Objek Telah Dihancurkan" . PHP_EOL;