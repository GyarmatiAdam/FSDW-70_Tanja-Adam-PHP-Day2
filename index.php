<?php
      /*Form data post and display*/
      function check($par){
        if(isset($par)){
          echo $par;
        }else {
          $par ="";
        }
      }
      $os_message="";
      $lname_message="";
      $fname_message="";
      $first_message="";
      $name_message="";

      if(isset($_POST['submit']))
      {
        $fName = $_POST["first_name"];
        $lName = $_POST["last_name"];
        if(empty($fName) && empty($lName)){
          echo "Please fill up the form";
        }
        elseif( empty($fName))
        {
          $fname_message= "Please write your First Name<br>";
        
        }
        elseif( empty($lName)){
          $lname_message= "Please write your Last Name<br>";
        }
        else{
          $name_message= "Welcome ". $_POST[ 'first_name']. " " . $_POST['last_name']. "<br>";
        }
      }
        if(isset($_POST["first_name"])){
          $fName = $_POST["first_name"];
        }else {
          $fName = "";
        }
        if(isset($_POST["last_name"])){
          $lName = $_POST["last_name"];
        }else {
          $lName = "";
        }
        $fname_message="";

      
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Added CSS files-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="chrome.css">
    <link rel="stylesheet" href="mozilla.css ">
    <title>PHP Day 2</title>
  </head>
  <body>
    <h1>PHP exercises</h1>
    <!-- browser types-->
    <?php
        $viewer = getenv( "HTTP_USER_AGENT" );
        $browser = "An unidentified browser";
        if( preg_match( "/MSIE/i", "$viewer" ) )
        {
        $browser = "Internet Explorer" ;
        }
        else if( preg_match( "/Netscape/i", "$viewer"  ) )
        {
        $browser = "Netscape";
        }
        elseif(preg_match('/Chrome/i' , "$viewer"))
        {
        $browser = 'Google Chrome'; 
        }
        else  if( preg_match( "/Mozilla/i", "$viewer" ))
        {
        $browser = "Mozilla" ;
        }
        elseif(preg_match('/Safari/i',"$viewer"))
        {
        $browser = 'Apple Safari';
        }
        $platform = "An unidentified OS!";
        if( preg_match( "/Windows/i", "$viewer" ) )
        {
        $platform = "Windows!";
        }
        else if ( preg_match( "/Linux/i", "$viewer"  ) )
        {
        $platform = "Linux!";
        }
        else if  ( preg_match( "/Mac/i", "$viewer" ) )
        {
        $platform = "Mac!";
        }
        $os_message ="You are using $browser on $platform <br>";

    ?>

    <!--Bootstrap form-->
    <form method="POST">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" value='<?= $fName ?>' placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" value='<?= $lName ?>' placeholder="Last Name">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
<?php

check($os_message);
check($fname_message);
check($lname_message);
check($name_message);
check($first_message);


        /* function takes two integer and display them on the screen */
        function thirdExercise(){
          $a= 6256;
          $b= 82;
          $c= $a / $b;
        
          echo "The result is: $c <br>";
        }
        thirdExercise();

        /* 4th exercise Create Database*/
        $servername = "localhost";
        $username = "root"; 
        $password = "" ; 
        $dbname = "adam_test_db";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
           die("Connection failed: "  . mysqli_connect_error());
        }

        // Create database
        $sql = "CREATE DATABASE $dbname";
        if  (mysqli_query($conn, $sql)) {
           echo "Database $dbname created successfully! \n";
        } else {
           echo "Error creating database $dbname: " . mysqli_error($conn). "<br>";
        }

        // sql to create table
        $sql = "CREATE TABLE Users (
          user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          firstname VARCHAR(20) NOT NULL,
          lastname VARCHAR(20) NOT NULL,
          email VARCHAR(50),
          reg_date TIMESTAMP
          )" ;
          if (mysqli_query($conn, $sql)) {
            echo "Table Users created successfully"  . "\n";
          } else {
            echo  "Error creating table: " . mysqli_error($conn) . "\n <br>";
          }
        //Insert data into database
        $sql = "INSERT INTO Users (firstname, lastname, email)
          VALUES ('Someone', 'V', 'someone@doe.com')";
          if (mysqli_query($conn, $sql)) {
              echo "New record created.\n";
          } else {
            echo  "Record creation error for: " . $sql . "\n <br>" . mysqli_error($conn);
          }

        //Retrive data from db
        $sql = "SELECT user_id, lastname, firstname FROM Users";
        $result = mysqli_query($conn, $sql);
        // fetch the next row (as long as there are any) into $row 
        while($row = mysqli_fetch_assoc($result)) {
               printf("ID=%s %s (%s)<br>",
                             $row[ "user_id"], $row["lastname"],$row["firstname"]);
        }
        echo  "Fetched data successfully\n";
        // Free result set
        mysqli_free_result($result);

      //close connesction
    mysqli_close($conn);
?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>