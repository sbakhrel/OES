<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_exam";
$feedno=$_POST['feedno'];
echo $feedno;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM `feedback` WHERE `feedback`.`feedno` = $feedno";

if (mysqli_query($conn, $sql)) {
     header("Location: feedback.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);


}
?>