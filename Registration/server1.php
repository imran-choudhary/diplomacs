<?php
// initializing variables
$email    = "";
$name = "";
$mobile = "";
$str = "Data Saved Succesfully";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'id3017094_root', 'Imran@123', 'id3017094_registration');

// REGISTER USER
if (isset($_POST['save_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile is required"); }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM details WHERE Email='$email' OR Mobile='$mobile' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 
  if ($email) { // if user exists
    if ($user['Email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($user['Mobile'] === $mobile) {
      array_push($errors, "mobile already exists");
    }
  }
 


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO details (Name, Email, Mobile) 
  			  VALUES('$name','$email', '$mobile')";
  	mysqli_query($db, $query);
  }
  

}

?>