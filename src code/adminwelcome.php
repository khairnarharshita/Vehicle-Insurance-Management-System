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

    <title>admin welcome</title>
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
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"></a>
      </li>
  </ul>
  </div>
  </div>
</nav>

<body>
<div class="big-box">
  <div class="count-box">
<?php
$query1 = "SELECT COUNT(*) FROM policy";
$r2 = mysqli_query($db, $query1);
$row = mysqli_fetch_array($r2);
echo "TOTAL POLICIES   ".$row[0];
?>
  </div>
  <div class="count-box">
<?php
$query1 = "SELECT COUNT(*) FROM claim where claim_Status='Approved'";
$r2 = mysqli_query($db, $query1);
$row = mysqli_fetch_array($r2);
echo "TOTAL APPROVED CLAIM   ".$row[0];
?>
  </div>
  <div class="count-box">

  <?php
$query1 = "SELECT COUNT(*) FROM users_1";
$r2 = mysqli_query($db, $query1);
$row = mysqli_fetch_array($r2);
echo "TOTAL CUSTOMER   ".$row[0];
?>
  </div>
</div>


<style>.big-box {
  background-color: #f1f1f1;
  /* background-color: #4CAF50; */

  border-radius: 20px;
  padding: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.count-box {
  background-color: #4CAF50;
  border :10px;
  border-radius: 5px;
  padding: 10px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.count {

  font-weight: bold;
  font-size: 48px;
  color: #333;
  margin-right: 10px;
}

.label {
  font-size: 24px;
  color: #666;
}
</style>



  <!-- policy -->

<div class="main">
<div class="card1">
    <div class="image">
        <a href="admin_policy.php">
            <img src="data:image/png;base64,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">
         </a>
       
    </div>
<div class="title">
 <h1>
policies</h1>
</div>
</div>
<!-- claim -->
<div class="card2">
    <div class="image">
        <a href="admin_claim.php">
            <img src="https://www.i-scoop.eu/wp-content/uploads/2015/01/Insurance-claim-concept.jpg">
         </a>
       
    </div>
    <div class="title">
     <h1>
        claim Status</h1>
    </div>
    </div>


<!-- customer -->
    <div class="card3">
        <div class="image">
            <a href="all_customer.php">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcWSJGLFZNh2l1PqSR42Gjq6yTQyXTPIbSmQ&usqp=CAU">
             </a>
           
        </div>
        <div class="title">
         <h1>
       All customer details</h1>
        </div>
        </div>
    <div class="card4">
        <div class="image">
            <a href="Update_details.php">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb7Hj3_Il8v0JYSE3fq5eDgS1qHZ5d529bhQ&usqp=CAU">
             </a>
        </div>
        <div class="title">
         <h1>
        Update details</h1>
        </div>
        </div>
</div>

<div class="container mt-4">
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

<style type="text/css">
*{
 margin:0px;
 padding: 0px;
}
body{
 font-family: arial;
 
}
.card1{
     width: 20%;
     display: inline-block;
     margin-left:340px;
     margin-top: 20px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
    
    }
    .card4{
     width: 20%;
     display: inline-block;
     margin-left:450px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
     margin-top: 20px;
    }
     .card5{
     width: 20%;
     margin-top: 20px;
     display: inline-block;
     margin-left:15px;
     
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
    
    }
    .card2{
     width: 20%;
     margin-top: 20px;
     display: inline-block;
     margin-left:15px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
    
    }
    .card3{
     width: 20%;
     margin-top: 20px;
     display: inline-block;
     margin-left:20px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
    
    }
.image img{
  width: 90%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  height:230px;
 
 }
.title{
 
  text-align: center;
  padding: 10px;
  
 }
h1{
  font-size: 20px;
 }
.main{
    margin-top:40px;
}
.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
.nav {
  background-color: #000428;
  overflow: hidden;
}
/* Style the links inside the navigation bar */
.nav a{
 
  display:inline-block;
  color: #f2f2f2;
  text-align: center;
  margin-left: 450px;
  padding: 25px ;
  text-decoration: none;
  font-size: 20px;
}
.nav h1{
    display:inline-block;
    font-size: 35px;
    color:white;
    margin-left: 650px;
}
</style>
</html>

