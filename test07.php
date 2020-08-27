<button type=button><a href="index.php">回首頁</a></button>
<button type=button><a href="test07.php?height=1.74&weight=80">小明BMI</a></button>
<button type=button><a href="test07.php?height=1.65&weight=45">小華BMI</a></button>
<button type=button><a href="test07.php?height=1.92&weight=90">小陳的BMI</a></button>
<hr>

<?php
	$height = $_GET["height"];
	$weight = $_GET["weight"];

	if ($height!=NULL and $weight!=NULL) { //確定兩個值都不是空的
		//條件成立之後才會執行的部分
		echo "身高：", $height, "公尺<br>";
		echo "體重：". $weight. "公斤<br>";

		$bmi = $weight / $height ** 2;
		echo "BMI：" . $bmi . "<br>";
		if ($bmi>24) {
			echo "你的體重有些太重囉！";
		} else if ($bmi>=18.5) {
			echo "你的體重很標準耶！";
		} else {
			echo "你的體重有些太輕了！";
		}
	} else { //如果有任何一個值是空的
		echo "你要在網址列填寫正確的資料才能計算！<br>";
		echo "使用例：http://localhost/mysite/nkust-0827/test07.php?height=你的身高&weight=你的體重";
	}

?>

