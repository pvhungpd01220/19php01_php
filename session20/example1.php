<?php
	echo "<h1>Hello world!</h1>"
?>
<p>Hi man!</p>
<?php
	$userName = 'admin';
	echo $userName;
	//document.write(userName);
	/*
		document.write(userName);
	*/
	$x = 7;
	$y = 8;
	echo "<br>";
	echo $x + $y;
	echo "<br>";
	echo $x - $y;
	echo "<br>";
	echo $x * $y;
	echo "<br>";
	echo $x / $y;

	/*
		* sumNumber function
		* Description: Sumcaru 2 number
		* created by CanhLH
		* created 2910-05-25
	*/
	function sumNumber($a, $b) {
		return $a + $b;
	}
	echo "<br>";
	echo sumNumber(22,98);

	echo "<br>";
	$i = 5;
	if ($i % 2) {
		echo "i la so le";
	} else {
		echo "i la so chan";
	}
	echo "<br>";
	for ($i = 1; $i <= 10; $i++) {
		echo $i;
		echo "<br>";
		}

	echo "<br>";
	$n = 5;
	while ($n < 10) {
		echo $n;
		$n++;
		echo "<br>";
	}

	echo "<br>";
	$m = 5;
	do {
		echo $m;
		$m++;
		echo "<br>";
	} while ($m <10);
?>