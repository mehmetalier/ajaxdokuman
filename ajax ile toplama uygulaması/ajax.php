<?php

	$s1 = $_POST['s1'];
	$s2 = $_POST['s2'];
	
	if ((!($s1==""))or(!($s2==""))) {
		$sonuc = $s1 + $s2;
		echo $sonuc;
	}	
?>




