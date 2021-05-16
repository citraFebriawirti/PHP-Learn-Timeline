<?php 
$jeniskamar="deluxe"; # 6 chara

if ($jeniskamar== "deluxe")
{ 
	$harga = 100000; 
}

elseif ($jeniskamar == "economy")
{
  $harga =50000;
}

elseif ($jeniskamar=="president suite")
{
	$harga = 150000;
}
	
else {
	echo "maaf,kamar tidak tersedia";
}
echo "jenis kamar:".$jeniskamar."<br>";

echo  "harga kamar : ".$harga;
 ?>

