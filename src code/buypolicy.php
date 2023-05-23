<?php
require_once "connect.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Buy policy</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Vehicle Insurance Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <nav>
      <ul>
</a></li><li><a href="welcome.php">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      </ul>
    </nav>
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
  </li>
  </ul>
  </div>
</nav>

<div class="container mt-4">

<div class="container mt-4">

<form action="buypolicy.php" method="post">
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="">Admin id</label>
    <input type="text" class="form-control" name ="admin_id" >
  </div>
  <div class="form-group col-md-6">
      <label for="">customer_id</label>
      <input type="text" class="form-control" name ="customer_id" >
    </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="">Date of purchase</label>
    <input type="date" class="form-control" name ="DOpurches"id="DOpurches" > </div>
    <div class="form-group col-md-6">
    <label for="years">Amount</label>
<select class="form-control" id="years" name="years">
  <option value="1,00,000">1,00,000</option>
  <option value="2,50,000">2,50,000</option>
  <option value="5,00,000">5,00,000</option>
</select>
</div>

    </div>


    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="">Vehicle number</label>
    <input type="text" class="form-control" name ="VehicleNo"id="VehicleNo" >
  </div>
  <!-- <div class="form-group col-md-6">
      <label for="">Registration number</label>
      <input type="text" class="form-control" name ="RegistrationNo" id="RegistrationNo" >
    </div>
</div> -->
<div class="form-group col-md-6">
    <label for="">Registration number</label>
    <input type="text" class="form-control" name ="RegistrationNo" id="RegistrationNo" >
</div>
</div>

<?php
if (isset($_POST['RegistrationNo'])) {
	$RegistrationNo = $_POST['RegistrationNo'];
	
	$query = "SELECT * FROM policy WHERE reg_no='$RegistrationNo'";
	$results = mysqli_query($db, $query);
	$user = mysqli_fetch_assoc($results);
  
	if ($user) {
		echo "<script>alert('Already exist');</script>";
	} else {
		$url = "afterbuy.php?RegistrationNo=" . $RegistrationNo;
		header('Location: ' . $url);
		exit() ;
	}
}
?>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="type"placeholder="type of vehicle ">Type</label>
<select class="form-control" name="TypeOfCar" >
<option value="-">select type of vehicle</option>

  <option value="Motorcycle">Motorcycle</option>
  <option value="Car">Car</option>
  <option value="Truck">Truck</option>
</select>  </div>
    <div class="form-group col-md-6">
    <label for="">Company</label>
<input type="text" class="form-control" name ="companyName" id="companyName">
 </div>
  </div>
  <button type="submit" class="btn btn-primary"name="create_policy">generate Policy</button>
</form>
</div>

    <footer>
      <p>&copy; 2023 Insurance Company. All rights reserved.</p>
    </footer>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

form {
	background-color: #fff;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0px 0px 10px #ccc;
	max-width: 500px;
	margin: 0 auto;
}
header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

nav {
  background-color: #ccc;
  padding: 10px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  color: #333;
  display: block;
  padding: 10px;
  text-decoration: none;
}
nav ul li a:hover {
  background-color: #333;
  color: #fff;
}

</style>
</html>

