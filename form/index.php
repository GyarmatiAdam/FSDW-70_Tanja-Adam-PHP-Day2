
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
    <h1>This FORM will accept paramerets from MYSQL Database</h1>
    <h3>Update, Delete, Add datas to Customer Table</h3>
    <div class="container">
    <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-5">
    <form action="connection.php" method="POST">
        <div class="form-group">
            <label for="cust_id">Customer ID</label>
            <input type="number" class="form-control" name="cust_id" placeholder="Customer ID">
        </div>
        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Frist Name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="c_email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="dob">Date of Borth</label>
            <input type="date" class="form-control" name="dob" placeholder="Frist Name">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="delete" name="delete" class="btn btn-danger">Delete</button>
        <button type="update" name="update" class="btn btn-success">Update</button>
    </form>



    </div>
    <div class="col-sm-6">
      <p><?php require "datas.php";?></p>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>