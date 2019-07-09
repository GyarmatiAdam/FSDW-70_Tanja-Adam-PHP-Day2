<?php
require "index.php";

if(isset($_POST['submit']))
{
  $fName = $_POST["first_name"];
  $lName = $_POST["last_name"];
  $email = $_POST["email"];
  $dob = $_POST["dob"];

   //Insert data into database
$sql = "INSERT INTO customers (first_name, last_name, email, dob)
VALUES (".$fname."".$lName."".$email."".$dob.")";
if (mysqli_query($conn, $sql)) {
    echo "New record added to the Database.\n";
} else {
    echo  "Record creation error for: " . $sql . "\n <br>" . mysqli_error($conn);
  }
}
?>