

<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con){
    die("Connection Failed".mysqli_connect_error());
}

echo("Successfully linked with the database");

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$reg = $_POST['regno'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['addresss'];
$dob = $_POST['dob'];
$course = $_POST['course'];

$sql = "INSERT INTO students(fname, lname, regno, email, phone, addresss, dob, course) values ('$first_name','$last_name','$reg','$email','$phone','$address','$dob','$course')";
$rs  = mysqli_query($con, $sql);

if(!$rs){
    echo("Data entry was unscuess");
}

mysqli_close($con);

?>