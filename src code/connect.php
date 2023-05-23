<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dbms435');
$customer_id="";
// REGISTER USER
if(isset($_POST['Email_alert'])){
    $error="user already exist";
}



if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);

  $password_2 = mysqli_real_escape_string($db, $_POST['inputPassword']);

  $inputAddress2 = mysqli_real_escape_string($db, $_POST['inputAddress2']);
  $inputContact = mysqli_real_escape_string($db, $_POST['inputContact']);
  $inputBirthDate = mysqli_real_escape_string($db, $_POST['inputBirthDate']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);

  $aadhaar = mysqli_real_escape_string($db, $_POST['aadhaar']);
  $pan = mysqli_real_escape_string($db, $_POST['pan']);
  $Occupation = mysqli_real_escape_string($db, $_POST['Occupation']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($password_2)) { array_push($errors, "Password is required"); }
  if (empty($inputAddress2)) { array_push($errors, "Address is required"); }
  if (empty($inputContact)) { array_push($errors, "contact number is required"); }  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($inputBirthDate)) { array_push($errors, "birthdate is required"); }
  
  if (empty($gender)) { array_push($errors, "gender is required"); }
  if (empty($aadhaar)) { array_push($errors, "Aadhaar number is required"); }  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($pan)) { array_push($errors, "pan number is required"); }
  if (empty($Occupation)) { array_push($errors, "occupation is required"); }
  
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users_1 WHERE username='$username' OR email='$email' LIMIT 1";
  $result1 = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result1);
  
  if ($user) { 
    // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
      header('location: register.php');

    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
      header('location: register.php');

    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users_1 (username,Full_name, email, password,Address,contact_number,Birthdate,Gender,Aadhaar_number,PAN_number,Occupation) 
  			  VALUES('$username', ' $fullname','$email', '$password','$inputAddress2' , '$inputContact' ,'$inputBirthDate','$gender','$aadhaar','$pan','$Occupation')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: welcome.php');
  }
}



if (isset($_POST['admin_reg'])) {
  // receive all input values from the form
  $admin_username = mysqli_real_escape_string($db, $_POST['admin_username']);
  $admin_email = mysqli_real_escape_string($db, $_POST['admin_email']);
  $admin_password_1 = mysqli_real_escape_string($db, $_POST['admin_password']);
  $admin_password_2 = mysqli_real_escape_string($db, $_POST['admin_inputPassword']);
  
  if ($admin_password_1 != $admin_password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE adminname='$admin_username' LIMIT 1";
  $result1 = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result1);
  
  if ($user) { 
    // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
      header('location: register.php');

    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
      header('location: register.php');

    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($admin_password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO admin (adminname	, ad_password) 
  			  VALUES('$admin_username', '$admin_password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	header('location: adminwelcome.php');
  }
}




// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users_1 WHERE username='$username' AND password='$password'";
  	$result2= mysqli_query($db, $query);


  	if (mysqli_num_rows($result2) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: welcome.php');
  	}
    else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
// Buy policy
if(isset($_POST['create_policy'])) {
  // receive all input values from the form
  $admin_id = mysqli_real_escape_string($db, $_POST['admin_id']);
  $customer_id = mysqli_real_escape_string($db, $_POST['customer_id']);

  $years = mysqli_real_escape_string($db, $_POST['years']);
  $VehicleNo = mysqli_real_escape_string($db, $_POST['VehicleNo']);
  $RegistrationNo = mysqli_real_escape_string($db, $_POST['RegistrationNo']);
 
  $TypeOfCar = mysqli_real_escape_string($db, $_POST['TypeOfCar']);

  $companyName = mysqli_real_escape_string($db, $_POST['companyName']);
  $DOpurches = mysqli_real_escape_string($db, $_POST['DOpurches']);

  $query1 = "INSERT INTO policy (admin_id,customer_id,amount,veh_no,reg_no,type,company,dop )
  			  VALUES('$admin_id','$customer_id', '$years', '$VehicleNo','$RegistrationNo' , '$TypeOfCar' ,'$companyName','$DOpurches') ";
  	mysqli_query($db, $query1);
    header('location: afterbuy.php');
    }

// claim 


if (isset($_POST['claim'])) {
  $policy_No = mysqli_real_escape_string($db, $_POST['policy_No']);
  $Acc_date = mysqli_real_escape_string($db, $_POST['Acc_date']);
  $Location = mysqli_real_escape_string($db, $_POST['Location']);
  $Exp_amt = mysqli_real_escape_string($db, $_POST['Exp_amt']);

  if (empty($policy_No)) {
  	array_push($errors, "policy_No is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM policy WHERE policy_no=$policy_No";
  	$result3 = mysqli_query($db, $query);
  	if (mysqli_num_rows($result3) == 1) {
      $query1 = "INSERT INTO claim (policy_no,Date_of_acc,Location,Expected_amt )
      VALUES('$policy_No','$Acc_date','$Location', '$Exp_amt') ";
      mysqli_query($db, $query1);
  	  header('location: afterclaim.php');
  	}
    else {

  	}
  }
}

?>