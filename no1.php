<form method = "POST">
<input type  = "number" name="num"/>
<input type = "submit" name "submit"/>
</form>

<?php

if (isset($_POST['submit'])) $input = $_POST['num'];
else $input=1;

  
 
	echo " input $input : ";
	Display($input);
	

  
	function Display($data) {
	$angka_sebelum= 0;
	$angka_setelah =1;
	$total = 0;
		for ($i=0; $i<$data; $i++)
	{
  
	// display data yang ingin dihitung
	
  	$output = $angka_setelah + $angka_sebelum;
 	$total += $output; 
	
		//hitung 
	$angka_sebelum = $angka_setelah;
	$angka_setelah = $output;
	
	}
	
	echo "$total"; 
	echo "<br>";
	}
?>