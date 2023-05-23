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

<table style="width:100%;"  class="table table-bordered " >
  <?php
  echo "<tr> <th>Customer ID</th><th>Full Name</th><th>Username</th> <th>Email</th><th>Address</th> <th>Contact Number</th><th>Birthdate</th><th>Gender</th><th>Aaadhar number</th><th>PAN number</th><th>Occupation</th></tr>";
  ?>
<?php
$sql = "SELECT * FROM users_1 ORDER BY Full_name";
$result = $db->query($sql);

?>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->customer_id?></td>
     <td><?php echo $row->Full_name?></td>
     <td><?php echo $row->username?></td>
     <td><?php echo $row->email?></td>
     <td><?php echo $row->Address?></td>
     <td><?php echo $row->contact_number ?></td>
     <td><?php echo $row->Birthdate?></td>
     <td><?php echo $row->Gender?></td>
     <td><?php echo $row->Aadhaar_number?></td>
     <td><?php echo $row->PAN_number?></td>
     <td><?php echo $row->Occupation?></td>

  </tr>
  <?php endwhile; ?>
</table>
<button onclick="window.location.href='adminwelcome.php';"id="ok-button" >BACK</button>
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
