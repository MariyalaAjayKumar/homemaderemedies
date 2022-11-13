<?php
$name =$_POST["name"];
$number=$_POST["number"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$newpassword =$_POST["newpassword"];
$conformpassword=$_POST["conformpassword"];

// Create connection
$conn = new mysqli('localhost','root','','spoify');
if ($conn->connect_error) {
   die('Connection Failed :'.$conn->connect_error);
} else {
  $stmt=$conn->prepare("insert into register(name,number,age,gender,newpassword,conformpassword)values(?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("siisss", $name, $number, $age, $gender, $newpassword, $conformpassword);
  $stmt->execute();
  echo "registration successfully...";
  $stmt->close();
  $conn->close();
}
?>