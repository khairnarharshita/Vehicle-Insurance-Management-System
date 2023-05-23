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

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Vehicle insurance company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

    </ul>
  </div>
</nav>
<div class="container mt-4">
<h2>Admin registration</h2>
<hr>
<form action="admin_register.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="admin_username" id="inputEmail4" placeholder="username">
    </div>
    <?php
	if (isset($_POST['username'])) {
		$policy_No = $_POST['username'];
		$url = "welcome.php?username=" . $username;
		header('Location: ' . $url);
		exit() ;
	}
?>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="text" class="form-control" name ="admin_email" id="inputEmail" placeholder="Email">
  </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="admin_password" id="inputPassword4" placeholder="Password">
   
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="admin_inputPassword" id="inputPassword" placeholder="Confirm Password">
    </div>
</div>
  <button type="submit" class="btn btn-primary"name="admin_reg">Register</button>

  </div>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <!-- background-image:url("https://img.freepik.com/premium-vector/indian-agriculture-working-farmer-harvesting-field-asia-vector-background-cartoon-style_1396-598.jpg?w=1060"); -->

  <style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'poppins',sans-serif;
}
    body{
    margin: 0;
    padding: 0;
    font-size: 16px;
  line-height: 1.5;
font-family: 'Poppins',sans-serif;
box-sizing: border-box;
background-image:url("https://png.pngtree.com/thumb_back/fh260/back_our/20190614/ourmid/pngtree-insurance-service-agency-atmosphere-blue-poster-background-image_122161.jpg");

/* background-image:url("https://insurance-b2c-assets.s3.ap-south-1.amazonaws.com/uploads/news/image/Top%20car%20insurance%20companies%20in%20terms%20of%20claim%20settlement.jpg"); */
width: 100%;
    height: 100%;
    background-size:cover;
background-position:center;
background-attachment: fixed;
}
.container{
    width: 100%;
    height: 100%;
    background: #ffff;
    background: transparent;
    backdrop-filter: blur(5px);
    background-position: center;
    background-size: cover;
    position: relative;
}

 </style>
</html>
