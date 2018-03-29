<?php

	$angka_awal=0;
	$angka_akhir=1;
  

	echo "$angka_awal $angka_akhir";
		for ($i=0; $i<10; $i++)
	{
  
  	$output = $angka_awal + $angka_akhir;
 	echo " $output";
  
  
  	$angka_awal = $angka_akhir;
 	$angka_akhir = $output;
	}

?>