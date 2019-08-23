<?php
        $n = 4;   
		$count = 1;  
		for ($i = 4; $i > 0; $i--)   
		{  
		   for ($j = $i; $j < $i + 1; $j++)   
		   {  
			 printf("%4s", $count);  
			 $count++;  
		   }   
		   echo "<br>";
		}
       ?>
<?php
	$n = 1;
	for ($i = 4; $i > 0; $i--){
		for ($j = $i; $j < $i + 1; $j++){
			
			 printf("%4s", $n);
			 $n++; 
		}
		echo $i;
		echo "<br>";
	}
?>