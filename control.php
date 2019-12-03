<form method="Post">
	Which Table:<input type="number" name="number1">
	<br>
	Range Number:<input type="number" name="number2">
	<br>
	<input type="submit" name="submit" value="show Table">
</form>

<?php 
if (isset ($_POST['submit'])) {

	$a=$_POST['number1'];
	$b=$_POST['number2'];
	for ($i=1; $i<=$b ; $i++) {
	echo	$a . "*" . $i ."=" . $a*$i;
	echo "<br>";

	}
}

?>
<?php 
die();
$x = '*';
$y = 5;
while ($y<=5) {
	for ($i=0; $i < $y; $i++) { 
		echo "$x";
	}
	echo"<br>";
	$y--;
}
die();
function writemessage(){
	echo "you are a nice Person";
}
$x=11;
do{
	writemessage();
	echo "<br>";
	$x++;	
}
while ($x<10);



die();
$x=6;
while ($x < 5) {
	writemessage();
	echo "<br>";
	$x++;
}
die();
for ($i=0; $i <10 ; $i++) { 
	writemessage();
	echo "<br>";
}



 ?>