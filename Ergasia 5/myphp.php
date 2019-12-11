<!DOCTYPE html>
<html>
<style>
.op {color:black;height:30px;font-size:20px;width:30px;}
.hey {height:30px;width:30px;}
</style>
<head>
<title>Εφαρμογή 1 PHP</title>
<meta charset="UTF-8">
</head>
<body>
<?php echo '<script>var person = prompt("Εισάγετε έναν χαρακτήρα");</script>';
echo '<h1  >Ο παρακάτω πίνακας χρησιμοποιεί βρόχους επανάληψης</h1>';
echo '<table style="border:solid blue;width:300px;height:300px;">';
for ($i=0;$i<10;$i++){
	if ($i%2==1){
 echo '<tr style="border:solid white;background-color:green;"><td class="hey"></td><td class="hey"></td><td class="hey"></td><td class="hey"></td><td class="hey"></td><td class="hey"></td><td class="hey"></td><td class="hey"></td><td class="hey"></td><td class="hey"></td></tr>';
	}else {
	echo '<tr style="border:solid white;background-color:red;"id=0><p><td class="op" ></td></p><td class="op"></td><td class="op"></td><td class="op"></td><td class="op"></td><td class="op"></td><td class="op"></td><td class="op"></td><td class="op"></td><td class="op"></td></tr>';	
	
}
}
echo '</table>';
#echo '<script>var person = prompt("Εισάγετε έναν χαρακτήρα");</script>';
#for ($j=0;$j<10;$j++){
	#echo '<script>for ($j=0;$j<10;$j++){var x=$j.toString();
	#document.getElementById( x).innerHTML = person;}</script>';
	#echo ' <script>document.getElementById(0).innerHTML=person;</script>';
echo'<script>	for ($j=0;$j<50;$j++){
document.getElementsByClassName("op")[$j].innerHTML=person;}</script>';
?>

</body>
</html>