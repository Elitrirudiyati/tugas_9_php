<!DOCTYPE html>
<html>

<h3>Tugas 9 PHP </h3>

<?php

echo "1. Buatlah Deret Bilangan Fibanocci 0 sampai 20 : <br><br>";
//membuat dua angka awal
$angka1=0;
$angka2=1;
echo "$angka1 $angka2"; //tampilkan dua angka awal
for ($i=0; $i<20; $i++){ //hitung angka yang akan di tampilkan
  $output=$angka2+$angka1; 

    $angka1=$angka2; //angka untuk perhitungan berikut
    $angka2=$output;
    echo $output," ";
  }
echo "<br><br>====================================================================<br>";

echo "<br>2. Buatlah Deret Bilangan Prima 0 sampai 200 <br><br>";

for ($i=1; $i<=200; $i++){
	$a=0;
	for($j=1; $j<=$i; $j++){
		if($i%$j == 0){
			$a++;
		}
	}
	if ($a==2){
		echo $i,",";
	}
};



?>
</html>