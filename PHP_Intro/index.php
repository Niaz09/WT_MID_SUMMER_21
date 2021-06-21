<html>
	<head></head>
	<body>
		<h1>This is from plain html</h1>
		<h1><?php echo "This is from php<br>";?></h1>
		<h1><?php print_hello();?></h1>
		<h1><?php $s = sum(10,25);
				echo $s;?></h1>
	</body>
</html>


<?php
	$x = 10;
	$y = 12;
	$z = $x + $y;
	
	function print_hello(){
		echo "<b><i>Niaz ekta bokachoda</i></b>";
	}
	function sum($x, $y){
		return $x + $y;
	}
	echo "Hello World<br>";
	echo 'Hello World<br>';
	echo '<h1>Hello World</h1>';
	
	echo "The addition is $z<br>";
	
	$name = "Tanvir Tanvir";
	echo "The name of $name is " .strlen($name);
	
	$pos = strpos($name,"i");
	echo "<br>  Position of i is in $pos";
	
	$pos2 = strpos($name,"i",$pos+1);
	echo "<br> Postion of is in $pos2";
	
	
	
?>