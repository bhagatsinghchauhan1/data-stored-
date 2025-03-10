<?php
$con=mysqli_connect("localhost", 'root', "", "data");
if(isset($_POST['Submit']))
{
$Full_Name=$_POST['name'];
$Email=$_POST['email'];
$Phone_Number=$_POST['phone'];
$DOB=$_POST['dob'];
$message=$_POST['message'];
$query="INSTERT INTO DATA (Full_Name, Email, Phone_Number, DOB, message) VALUES ('$name', '$email, 'phone', 'dob', 'message')";
$run=mysqli_query($con,$query);
}
?>
