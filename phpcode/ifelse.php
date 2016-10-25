<!DOCTYPE html>
<html><head><title>ifelse</title>

<style>

.r1 { background-color: #66FFFF;
		color: #0000ff;
	}
	
.r2 { background-color:#0000ff;
		color: #66ffff;
	}
</style>
</head>
<body>
	<center>
<h1>
AM Cyber Security
</h1>
<h1><?php
echo "<h1>";
	for ($i = 0; $i < 100; $i++){
		if($i % 2 == 0 ){
				echo"<div class=\"r1\" >";
			}else{
			echo"<div class=\"r2\" >";
		}
	
		echo "* * * * * * * * * * * * * * * * *<br />";
		echo "</div>";

	}
?>
</h1>
</center>
</body>
</html>
