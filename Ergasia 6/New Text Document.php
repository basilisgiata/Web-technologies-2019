
<?php

$username = $_POST['username'];
$password = $_POST['password'];
$onoma= $_POST['nam'];
$epitheto =$_POST['last'];
$email = $_POST['email'];
$age = $_POST['se'];
$birth = $_POST['birth'];
$ad = $_POST['ad'];
$pay = $_POST['pay'];
$com=$_POST['addr2'];
$servername = "localhost";
$username2 = "root";
$password2 = "";
$conn = mysqli_connect($servername, $username2, $password2);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($conn, "utf8");
$conn->close();
$dbname="oof";
$conn = mysqli_connect($servername, $username2, $password2,$dbname);
$sql = "INSERT INTO oof (`name`, `lastname`, `USERNAME`, `PASSWORD`, `EMAIL`, `age`, `birthday`, `address`, `payment`, `comments`) VALUES ('$onoma', '$epitheto', '$username', '$password', '$email', '$age', '$birth', '$ad', '$pay', '$com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
echo '<script>location.href="6η εργασια.php";</script>';
?>
	 