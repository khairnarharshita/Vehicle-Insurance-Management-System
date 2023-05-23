<?php require_once "connect.php";?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>After claim</title>
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


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "policy details "?></h3>

<?php
if (!isset($_GET['policy_No'])) {
  header("Location: welcome.php");
  exit();
}
$policy_No = $_GET['policy_No'];
$query = "SELECT * FROM policy WHERE policy_no='$policy_No'";
$r1 = mysqli_query($db, $query);

?>
<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th, td {
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  #ok-button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  #ok-button:hover {
    background-color: #3e8e41;
  }
</style>

<table>
  <?php while( $row = $r1->fetch_object() ): ?>
    <tr>
     <td><h5>POLICY NO :</h5> </td>
      <td><?php echo $row->policy_no ?></td>
    </tr>
   
    <tr>
    <td>VEHICLE NUMBER :</td>
      <td><?php echo $row->veh_no ?></td>
    </tr>
    <tr>
    <td>REGISTRATION NUMBER :</td>
      <td><?php echo $row->reg_no ?></td>
    </tr>
    <tr>
    <td>END DATE :</td>
      <td><?php echo $row->end_date ?></td>
    </tr>
    <tr>
    <td>PAYMENT AMOUNT :</td>
      <td><?php echo $row->amount ?></td>
      <?php
// $query1 = "SELECT amount FROM policy WHERE policy_no='$policy_No'";
// $r2 = mysqli_query($db, $query1);
// $query = "INSERT INTO payment (policy_no,amount) 
// VALUES('$policy_No','$row->amount')";
// mysqli_query($db, $query);

?>


    </tr>
   
  <?php endwhile; ?>
</table>
<br>
<button id="ok-button">Make Payment</button>
<?php
$query1 = "SELECT amount FROM policy WHERE policy_no='$policy_No'";
$r2 = mysqli_query($db, $query1);
$row = mysqli_fetch_assoc($r2);
$am = $row['amount'];
$query = "INSERT INTO payment (policy_no,amount) 
VALUES('$policy_No','$am')";
mysqli_query($db, $query);
?>
<script>
  var okButton = document.getElementById("ok-button");
  
  okButton.addEventListener("click", function() {
    window.location.href = "welcome.php";
  });
</script>

<style>
  #ok-button {
    background-color: green;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }
</style>
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

main {
  margin: 20px;
}

h2 {
  font-size: 24px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

table th, table td {
  padding: 10px;
  text-align: left;
}

table th {
  background-color: #333;
  color: #fff;
}

</style>
</html>

