<?php
  include '../classes/database.php';
  $db = new Database();

  $act = $_GET['aksi'];
  if($act == "tambah"){
    $db->tambah_mhs($_POST['Nim'], $_POST['Program_Studi'], $_POST['Nama']);
    header("location:../index.php");
  }elseif($act=="update"){
    $db->update($_GET['nim'], $_POST['Nim'], $_POST['Program_Studi'], $_POST['Nama']);
    header("location:../index.php");
  }elseif($act=="hapus"){
    $db->hapus($_GET['nim']);
    header("location:../index.php");
  } 

  ?>