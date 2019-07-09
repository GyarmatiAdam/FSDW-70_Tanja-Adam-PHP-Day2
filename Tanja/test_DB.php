<?php

$servername = 'localhost';
$username = "root";
$password = "";
$dbname = "test_DB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} echo "Connected successfully \n";



// EXERCISE 4 - CREATE DATABASE
// ===========================================

// $sql = "CREATE DATABASE $dbname";

// if (mysqli_query($conn, $sql)){
// 	echo "Database $dbname created successfully";
// } else {
// 	echo ("Failed to create database." . mysqli_error());	
// } 


// EXERCISE 5 - CREATE TABLE
// ===========================================

// $sql = "CREATE TABLE Customers (
// user_id int(6) not null auto_increment PRIMARY KEY,
// firstName char(20) not null,
// lastName char(20) not null,
// age smallint not null,
// city char(30),
// registration TIMESTAMP)";

// if(mysqli_query($conn, $sql)){
// 	echo "Table created successfully!";
// } else {
// 	echo "Failed to create table" . mysqli_error($conn);
// }


// $sql = "CREATE TABLE books(
// bood_id int(6) auto_increment PRIMARY KEY,
// title char(30) not null,
// ISBN int(10) not null
// )";

// if(mysqli_query($conn, $sql)){
// 	echo "Table created successfully!";
// } else {
// 	echo "Failed" . mysqli_error($conn);
// }


// $sql = "CREATE TABLE rental(
// rental_id int(5) not null auto_increment PRIMARY KEY,
// customer_id int(6) not null,
// book_id int(6) not null,
// FOREIGN KEY (customer_id) REFERENCES Customers(user_id),
// FOREIGN KEY (book_id) REFERENCES books(bood_id)
// )";

// if(mysqli_query($conn, $sql)){
// 	echo "Success";
// } else {
// 	echo "Failed" . mysqli_error($conn);
// }


// EXERCISE 7 - CREATE FORM FOR INPUT
// ===========================================

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$city = mysqli_real_escape_string($conn, $_POST['city']);

$sql = "INSERT INTO Customers (firstName, lastName, age, city)
VALUES ('$firstname', '$lastname', '$age', '$city')";

if(mysqli_query($conn, $sql)){
	echo "<div> Successfull </div>";
} else {
	echo "<div> For </div>". $sql . " error " . mysqli_error($conn);
}







mysqli_close($conn);
?>