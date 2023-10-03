<?php

// Menampilkan bilangan genap dengan for 
echo "Bilangan Genap" . PHP_EOL;
for($a=0;$a<=10;$a++){
  if($a % 2 == 0){
    echo $a . PHP_EOL;
  }
}

// Menampilkan bilangan ganjil dengan while
$b=0;

echo "Bilangan Ganjil" . PHP_EOL;
while($b<=10){
  if($b % 2 == 1){
    echo $b . PHP_EOL;
  }
  $b++;
}