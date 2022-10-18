<?php
	$sehirler=["Balıkesir","Bursa","Kocaeli","Kütahya","Ankara"];
	
	echo "<b>For Döngüsü İle</b><br><br>";
	
	for ($i=0; $i<count($sehirler);$i++)
	{
		echo $sehirler[$i];
		echo "<br>";
	}
	echo "<br>";
	echo "<b>While</b><br>";
	echo "<br>";
	$j=0;
	 while($j<count($sehirler)){
			
		 	echo $sehirler[$j];
			echo "<br>";
			$j++;
	 }
	echo "<br>";
	echo "<b>Foreach</b><br>";
	echo "<br>";
	foreach($sehirler as $sehir){
		echo $sehir;
		echo "<br>";
	}
	
	echo "<br>";
	echo "<b>Do-While</b><br>";
	echo "<br>";
	$k=0;
	do{
		echo $sehirler[$k];
		echo "<br>";
		$k++;
	}while($k<count($sehirler))
	
	
?>