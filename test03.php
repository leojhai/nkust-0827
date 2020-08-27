<h2>超神準大樂透預測王</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/3mnaVN5KL9k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>
<?php
	$count = 0; //目前取得的數字個數
	while ($count < 6) {
		$t = rand(1, 49); //先取得一個候選的隨機數
		if (in_array($t, $lotto)) continue;
		$lotto[] = $t;
		$count ++;
	}
	sort($lotto);
	foreach($lotto as $no) {
			echo $no . ", ";
		}

	echo "<br>特別號：";

	$spec = rand(1, 49);
	while (in_array($spec, $lotto))
		$spec = rand(1, 49);
	echo $spec;
?>
<hr>
測試用<br>
<?php
//想測試抽6次不重複數是用for寫
	for ($i=0; $i<6; $i++) {
		$t = rand(1, 49);
		if (in_array($t, $lotto)) continue;
		$lotto[] = $t;
	}
	sort($lotto);
	foreach($lotto as $no) {
			echo $no . ", ";
		}

	echo "<br>特別號：". rand(1, 49);
?>
<br>
<br>
特別號永遠會最大<br>
<?php
	$count = 0; 
	while ($count < 7) { //直接取7個
		$t = rand(1, 49); 
		if (in_array($t, $lotto)) continue;
		$lotto[] = $t;
		$count ++;
	}
	sort($lotto);
	foreach($lotto as $no) {
			echo $no . ", ";
		}

	echo "<br>特別號：". $lotto[6]; //特別號會最大
?>