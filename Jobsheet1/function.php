<?php

function hitungLuasLingkaran(int $jari){
  return 3.14 * $jari * $jari;
}

function hitungLuasPersegi(int $panjang){
  return $panjang * $panjang;
}

function hitungLuasSegitiga(int $alas,int $tinggi):int{
  return $alas * $tinggi / 2;
}

function hitungLuasPersegiPanjang(int $panjang,int $lebar):int{
  return $panjang * $lebar;
}