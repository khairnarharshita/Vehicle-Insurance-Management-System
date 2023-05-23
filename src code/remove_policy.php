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
<h3><?php echo "Welcome "?></h3>
<div class="container mt-4">

<form action="remove_policy.php" method="post">
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="">policy number</label>
    <input type="text" class="form-control" name ="policy_no" require>
  </div>
 <?php
    
	if (isset($_POST['policy_no'])) {
		$policy_no = $_POST['policy_no'];

    $sql = "DELETE FROM policy WHERE policy_no='$policy_no'";
    $results = mysqli_query($db, $sql);

	}
 
?>

</form>
<br>
<button type="submit" class="btn"id="ok-button"name="payment">REMOVE</button>

</div>
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
<table style="width:100%;"  class="table table-bordered " >
  <?php
  echo "<tr> <th>policy number</th> <th>Amount</th><th>Vehicle Number</th> <th>Registration Number</th><th>Type</th><th>Company</th><th>Date of purches</th><th>Start date</th><th>End date</th></tr>";
  ?>
<?php
$sql = "SELECT * FROM policy";
$result = $db->query($sql);

?>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->policy_no?></td>
     <td><?php echo $row->amount?></td>
     <td><?php echo $row->veh_no?></td>
     <td><?php echo $row->reg_no ?></td>
     <td><?php echo $row->type?></td>
     <td><?php echo $row->company?></td>
     <td><?php echo $row->dop?></td>
     <td><?php echo $row->Start_date?></td>
     <td><?php echo $row->end_date?></td>

  </tr>
  <?php endwhile; ?>
</table> 
<button type="button"id="print" onclick="window.print()">Print</button>
<style>
  #print {
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

