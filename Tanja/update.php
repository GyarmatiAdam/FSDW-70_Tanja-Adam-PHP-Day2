<?php
$servername = 'localhost';
$username = "root";
$password = "";
$dbname = "test_DB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} echo "Connected successfully \n";



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update, Delete Table Content</title>
	<!-------- Font Awesome -------->
  	<script src="https://kit.fontawesome.com/649b84c193.js"></script>

  	<!-- Bootstrap -->
  	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<caption class="mb-5">Customers</caption>
  	<table class="table mt-5 pt-5">  		
  		<thead class="thead-dark">
  			<tr>
  				<th>customer_id</th>
  				<th>firstname</th>
  				<th>lastname</th>
  				<th>age</th>
  				<th>city</th>
  				<th></th>
  			</tr>
  		</thead>
  		<tbody>
  			<?php
  			$sql = "SELECT user_id, firstname, lastname, age, city FROM Customers";
  			$content = mysqli_query($conn, $sql);

  			while($row = mysqli_fetch_assoc($content)){
  				printf("<tr> <td>ID=%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td><button class='btn btn-info edit'><i class='fas fa-pencil-alt'></i></button> <button class='btn btn-info delete'><i class='fas fa-times'></i></button></td></tr> ", $row['user_id'], $row['firstname'], $row['lastname'], $row['age'], $row['city']);
  			} echo  "Fetched data successfully\n";
			
			mysqli_free_result($content);

			mysqli_close($conn);
  			?>  			
  		</tbody>
  	</table>

</body>
</html>