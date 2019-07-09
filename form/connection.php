<html>
  <?php require "index.php";?>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cr09_adam_gyarmati-carrental";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully \n";

  $fName = mysqli_real_escape_string($conn, $_POST["first_name"]);
  $lName = mysqli_real_escape_string($conn, $_POST["last_name"]);
  $email = mysqli_real_escape_string($conn, $_POST["c_email"]);
  $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
  $custID = mysqli_real_escape_string($conn, $_POST["cust_id"]);

  if( isset($_POST['submit']))
  {
   //Insert data into database
    $sql = "INSERT INTO customers (first_name, last_name, c_email, dob)
    VALUES ('$fName', '$lName', '$email', '$dob')";
    if (mysqli_query($conn, $sql)) {
        echo "New record added to the Database.\n";
    } else {
        echo  "Record creation error for: " . $sql . "\n <br>" . mysqli_error($conn);
    }
  }
  if( isset($_POST['delete']))
  {
    $sql = "DELETE FROM customers WHERE cust_id = $custID";
    if (mysqli_query($conn, $sql)) {
        echo "Data has been deleted.\n";
    } else {
        echo  "Error for: " . $sql . "\n <br>" . mysqli_error($conn);
    }
  }
  if( isset($_POST['update']))
  {
    $sql = "UPDATE customers SET first_name= '$fName', last_name= '$lName', c_email= '$email', dob= '$dob' WHERE cust_id = $custID";
    if (mysqli_query($conn, $sql)) {
        echo "Data has been updated.\n";
    } else {
        echo  "Error for: " . $sql . "\n <br>" . mysqli_error($conn);
    }
  }

// your code goes here
mysqli_close($conn);
?>
