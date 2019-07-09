<table>
    <thead class="thead-dark">
        <tr>
            <th scope="col">Customer ID</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Eamil Address</th>
            <th scope="col">Date of Borth</th>
        </tr>
    </thead>
    <tbody>
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

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
//num_rows takes only the nuber of results
if ($result->num_rows > 0) {
    //Execute datas in each rows
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["cust_id"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>". $row["c_email"]."</td><td>". $row["dob"]."</td></tr><br>";
            }
        } else {
            echo "No results";
        }

?>
  </tbody>
</table>