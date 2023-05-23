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

    <title>welcome page!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Vehicle Insurance Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    </ul>
</nav>

<?php
if (!isset($_GET['cust_id'])) {
  // header("Location : admin_after_update.php");
  exit();
}
$cust_id = $_GET['cust_id'];
$query = "SELECT * FROM users_1 WHERE customer_id='$cust_id'";
$r1 = mysqli_query($db, $query);
?>

<table>
  <?php while( $row = $r1->fetch_object() ): ?>
    <tr>
     <td>CUSTOMER ID :</td>
      <td><?php echo $row->customer_id ?></td>
      <td><?php echo "-----------" ?></td>
    </tr>
    <tr>
    <td>NAME :</td>
      <td><?php echo $row->Full_name ?></td>
      <td>
     <form method="post">
    <input type="text" class="form-control" id="pan" name="fullname" placeholder="NAME">
  <input type="submit" id="ok-button"name="edit1" value="Edit">
</form>
<td>
<?php

if (isset($_POST['edit1'])) {
  // Update claim status to A
  $fullname = $_POST['fullname'];
$sql = "UPDATE users_1 SET Full_name = '$fullname' WHERE customer_id='$cust_id'";
$results = mysqli_query($db, $sql);
}
?>
    </tr>
    <tr>
    <td>EMAIL :</td>
      <td><?php echo $row->email ?></td>
      <td><?php echo "-----------" ?></td>

    </tr>
    <tr>
    <td>ADDRESS :</td>
      <td><?php echo $row->Address ?></td>
      <td>
     <form method="post">
    <input type="text" class="form-control" id="pan" name="ADD" placeholder="ADDRESS">
  <input type="submit" id="ok-button"name="edit2" value="Edit">
</form>
<td>
<?php

if (isset($_POST['edit2'])) {
  // Update claim status to A
  $ADD = $_POST['ADD'];
$sql = "UPDATE users_1 SET Address = '$ADD' WHERE customer_id='$cust_id'";
$results = mysqli_query($db, $sql);
}
?>
    </tr>
    <tr>
    <td>CONTACT NUMBER :</td>
      <td><?php echo $row->contact_number ?></td>
      <td>
     <form method="post">
    <input type="tel" class="form-control" id="pan" name="con_num" placeholder="contact number">
    <!-- <button  type="submit" name="edit">EDIT</button> -->

  <input type="submit" id="ok-button"name="edit3" value="Edit">
</form>
<td>
<?php

if (isset($_POST['edit3'])) {
  // Update claim status to A
  $con_num = $_POST['con_num'];
$sql = "UPDATE users_1 SET contact_number = '$con_num' WHERE customer_id='$cust_id'";
$results = mysqli_query($db, $sql);
}
?>

    </tr>
    <tr>
    <td>BIRTHDATE :</td>
      <td><?php echo $row->Birthdate ?></td>
      <td>
     <form method="post">
    <input type="date" class="form-control" id="pan" name="birthdate" placeholder="date">
    <!-- <button  type="submit" name="edit">EDIT</button> -->

  <input type="submit" id="ok-button"name="edit4" value="Edit">
</form>
<td>
<?php

if (isset($_POST['edit4'])) {
  // Update claim status to A
  $birthdate = $_POST['birthdate'];
$sql = "UPDATE users_1 SET Birthdate = '$birthdate' WHERE customer_id='$cust_id'";
$results = mysqli_query($db, $sql);
}
?>

    </tr>
    <tr>
    <td>GENDER :</td>
      <td><?php echo $row->Gender ?></td>
      <td><?php echo "-----------" ?></td>
</tr>
    <tr>
    <td>AADHAAR NUMBER :</td>
      <td><?php echo $row->Aadhaar_number ?></td>
      <td><?php echo "-----------" ?></td>

    </tr>
    <tr>
    <td>PAN NUMBER :</td>
      <td><?php echo $row->PAN_number ?></td>
      <td><?php echo "-----------" ?></td>
</tr>
    <tr>
    <td>OCCUPATION :</td>
      <td><?php echo $row->Occupation ?></td>
      <td>
     <form method="post">
    <input type="text" class="form-control" id="pan" name="occ" placeholder="Occupation">
    <!-- <button  type="submit" name="edit">EDIT</button> -->

  <input type="submit" id="ok-button"name="edit5" value="Edit">
</form>
<td>
<?php

if (isset($_POST['edit5'])) {
  // Update claim status to A
$occ = $_POST['occ'];
$sql = "UPDATE users_1 SET Occupation = '$occ' WHERE customer_id='$cust_id'";
$results = mysqli_query($db, $sql);
}
?>

    </tr>
  <?php endwhile; ?>
</table>
<br>


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





<button id="btn">BACK</button>

<script>
  var okButton = document.getElementById("btn");
  
  okButton.addEventListener("click", function() {
    window.location.href = "adminwelcome.php";
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

  <style>

    button {
  background-color: #4CAF50; /* Green background */
  border: none; /* Remove border */
  color: white; /* White text */
  padding: 12px 24px; /* Add some padding */
  text-align: center; /* Center text */
  text-decoration: none; /* Remove underline */
  display: inline-block; /* Make it inline */
  font-size: 16px; /* Set font size */
  cursor: pointer; /* Add cursor pointer */
}

/* Style the "Approve" button */
button[name="approve"] {
  background-color: #4CAF50; /* Green background */
}

/* Style the "Disapprove" button */
button[name="disapprove"] {
  background-color: #f44336; /* Red background */
}



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

