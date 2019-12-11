<?php
$usd=$_POST['us3'];
$em=$_POST['em2'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oof";
$j=1;
$yes=1;
// Δημιουργία σύνδεσης
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Έλεγχος σύνδεσης
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($conn, "utf8");

$sql="SELECT * FROM `oof` WHERE `USERNAME` LIKE '$usd' ORDER BY `USERNAME` ASC";
$result = $conn->query($sql);
$sql2="SELECT * FROM `oof` WHERE `EMAIL` LIKE '$em' ORDER BY `EMAIL` ";
$result2 = $conn->query($sql2);
$row = $result->fetch_assoc();
$row2 = $result2->fetch_assoc();
if (($result->num_rows > 0) AND ($result2->num_rows > 0)){
if ($row["EMAIL"]!=$row2["EMAIL"] OR $row["USERNAME"]!=$row2["USERNAME"]){
echo 'To email και το username ανηκουν σε διαφορετικους χρηστες!';
$j=0;}}
if (!($result->num_rows > 0) AND !($result2->num_rows > 0)){
echo'ΔΕΝ ΒΡΕΘΗΚΕ Ο ΧΡΗΣΤΗΣ!';
$yes=0;}
if (!($result->num_rows > 0)){
$row=$row2;}
if($j==1 AND $yes==1){
    echo "<style>
table, th, td {
    border: 1px solid black;
}
</style><table ><tr ><th >ΟΝΟΜΑ</th><th>ΕΠΩΝΥΜΟ</th><th><b>USERNAME</b></th><th>PASSWORD</th><th><b>EMAIL</b></th><th>ΗΛΙΚΙΑ</th><th>ΗΜΕΡΟΜΗΝΙΑ ΓΕΝΝΗΣΗΣ</th><th>ΔΙΕΥΘΥΝΣΗ</th><th>ΤΡΟΠΟΣ ΠΛΗΡΩΜΗΣ</th><th>ΣΧΟΛΙΑ</th></tr>";
    // output data of each row
    
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["lastname"]. "   "."</td><td> " . $row["USERNAME"]. "</td><td> " . $row["PASSWORD"]."</td><td> " . $row["EMAIL"]."</td><td> " . $row["age"]."</td><td> " . $row["birthday"]."</td><td> " . $row["address"]."</td><td> " . $row["payment"]."</td><td> " . $row["comments"]."</td></tr>";
    
echo "</table>";}

?>