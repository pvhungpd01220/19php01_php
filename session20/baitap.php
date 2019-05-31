<link rel="stylesheet" type="text/css" href="style.css">
<?php
	for ($i = 200; $i <= 250; $i++) {
		if ($i % 3 == 0) {
			echo "$i chia het cho 3";
			echo "<br>";
		}
	}
?>
<br>
      
<table width="300px" border="1px">  
<?php  
      for($i = 1; $i <= 8; $i++) { 
          echo "<tr>";  
          for($j = 1; $j <= 8; $j++) {  
            $h = $i + $j;  
            if($h % 2 == 0) {  
              echo "<td height=50px width=50px bgcolor=#FFFFFF></td>";  
            } else {  
              echo "<td height=50px width=50px bgcolor=#000000></td>";  
            }  
          }  
          echo "</tr>";  
      }   
?>
</talble>
<br>
<?php
        for($x=1; $x <= 5; $x++) {  
		   for ($y=1; $y <= $x; $y++) {  
			echo "*";
			}
		}
       ?>