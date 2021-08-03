<?php

if(isset($_POST['submit'])){
	$limit=$_POST['number'];

	$n1=1;
	$n2=1;

	$x=1;
	
	for($i=1;$i<$limit;$i++){
		$n1=$n1+$n2;
		$n2=$x;
		$x=$n1;
	}
}
?>

<form method="post">
	<input type="text" name="number" required/>
	<input type="submit" name="submit"/>
</form>