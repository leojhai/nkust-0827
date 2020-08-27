<?php
	echo "<table width=300>";
	echo "<tr bgcolor=#cccccc><td>i</td><td>i**2</td><td>i**3</td></tr>";
	for($i=1; $i<=9; $i++) {
		if ($i%2)
			echo "<tr bgcolor=#ccffff>";
		else
			echo "<tr bgcolor=#ffffcc>";
		echo "<td>$i</td><td>" . $i**2 . "</td><td>" . $i**3 . "</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
<hr>
<?php
	echo "<table width=300>";
	echo "<tr bgcolor=#cccccc><td>i</td><td>i**2</td><td>i**3</td></tr>";
	for($i=1; $i<=9; $i++) {
		echo "<tr bgcolor=#ccffff>";
		echo "<td>$i</td>";
		echo "<td>" . $i**2 . "</td>";
		echo "<td>" . $i**3 . "</td>";
		echo "</tr>";
	}
	echo "</table>";
?>