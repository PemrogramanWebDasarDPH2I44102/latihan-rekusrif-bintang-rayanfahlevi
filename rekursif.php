 <?php
 $batas = 5;
	function rekursif($i=1){
	global $batas;
  echo "*";
  $i++;
  	if($i<=$batas){
    	rekursif($i);
	}
	else{
		echo "<br>";
		$batas--;
		if ($batas!=0) {
			rekursif();
		}
	}
}
rekursif();
?>

///////////////////////////////////

<?php
function rekursif2($a = 1){
	global $bts2;
	echo "$a";
	$a++;
	if ($a<=$bts2) {
	rekursif2($a);
	}
	else{
		echo "<br>";
		$bts2++;
		if ($bts2 <= 5) {
			rekursif2();
		}
	}
}
rekursif2();
?>
