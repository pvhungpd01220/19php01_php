<?php  
	$month = 36;
	$money = 20000000;
	for ($i = 1; $i <= $month ; $i++) {
		$money = $money + $money*(0.6/100);
	}
	echo "Số tiền nhận được sau 36 tháng là: ";
	echo number_format($money, 0,',','.');
?>