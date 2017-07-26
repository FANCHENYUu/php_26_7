<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>banco</title>
	<link rel="stylesheet" href="css/banco.css">
</head>
<body>
	<div class="banco">
		<?php
		for($x=1;$x<=8;$x++)
			for($y=1;$y<=8;$y++)
			{
				if(($y+$x)%2==0)
				{
					echo '<div class="o_co_trang"></div>';
				}
				else{
					echo '<div class="o_co_den"></div>';
				}
			}
		
		?>
	</div>
	</div>
</body>
</html>