<?php
  class Database {
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db = "akademik";
    public $conn ;
    public function __construct() {
      $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
      return $this->conn=$conn;
    }

    public function tampil_mahasiswa() {
      $data = mysqli_query($this->conn, "SELECT * FROM mahasiswa");
      return $data;
      while ($d = mysqli_fecth_array($data)) {
        $hasil[] = $d;
      }
      return $hasil;
    }

    public function tambah_mhs($Nim, $Program_Studi, $Nama) {
      $data = mysqli_query($this->conn, "INSERT INTO mahasiswa(Nim , Program_Studi, Nama) VALUES ('$Nim', '$Program_Studi', '$Nama')");
      return $data;
    }

    public function edit($Nim){
      $data = mysqli_query($this->conn, "SELECT * FROM mahasiswa WHERE Nim = $Nim");
      return $data;
      while ($d = mysqli_fecth_array($data)) {
        $hasil[] = $d;
      }
      return $hasil;
    }

    public function update( $Nim, $Program_Studi, $nama){
      $data = mysqli_query($this->conn, "UPDATE mahasiswa SET Nim = '$Nim', Program_Studi = '$Program_Studi', Nama = '$nama' WHERE Nim = $Nim");
      return $data;
    }
    public function hapus($Nim){ 
      mysqli_query($this->conn, "DELETE FROM mahasiswa WHERE Nim = $Nim");

    }
  }

