<?php  
	$month = 36;
	$money = 150000000;
	$tienThang = 3000000;
	for ($i = 1; $i <= $month; $i++) {
		$money = $money + $money*(0.7/100);
		if ($i % 3 == 0) {
			$money = $money - ($tienThang + 1000000*($i/3 - 1));
		}
	}
	echo "Số tiền nhận được sau 36 tháng là: ";
	echo number_format($money, 0,',','.');
?>