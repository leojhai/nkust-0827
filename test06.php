<?php
	for($i=0; $i<10; $i++) {
		echo $i . "<br>";
	}
?>
<hr>
<?php
	for($i=0; $i<10; $i++) {
		echo $i . "<br>";
		if ($i==7) break;
	}
?>
<hr>
<?php
	for($i=0; $i<10; $i++) {
		echo $i . "<br>";
		if ($i==7) continue;
	}
?>
<hr>
<?php
	//跳過7
	for($i=0; $i<10; $i++) {
		if ($i==7) continue;
		echo $i . "<br>";
	}
?>
<hr>
<?php
	//只顯示偶數
	for($i=0; $i<10; $i++) {
		if ($i%2) continue;
		echo $i . "<br>";
	}
?>