<?php
 echo"<table border = \"1\" style = 'border-collapse: collapse'>";
	for($row = 0; $row<=100;$row++)
	{	
		echo "<tr>\n";
		if($row == 0)
		{
			echo "<td><td>";
		}
		else{
			echo "<td>$row<td>";
		}
		for($col = 0; $col <=100; $col++)
		{	
			if($row > 0 && $col > 0){
				$multiply = $row*$col;
				echo "<td> $multiply<td>\n";	
			}
			else{
				if($col == 0)
				{
					
				}
				else{
					echo "<td>$col<td>";
				}
			}
		}
		 "</tr>";
	}
echo"</table>";
?>

