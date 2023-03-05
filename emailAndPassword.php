<?php
$user_id= $_POST['Id'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$query = $mysqli->prepare('SELECT `Email`, `Password` FROM user where Id=?');
$query->bind_param('i', $user_id);
$query->execute();
$query->store_result();

$response ="";

if(validEmail($email)){
  if(validPassword($password)){
    $response = "valid email and password";
  }else{
    $response = "invalid password";
  }
}else{
  $response="email not valid";
}

function validEmail($email) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  } else {
    return false;
  }
}

function validPassword($password){

  if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).{8,}$/", $password)) {
      echo "Password format is valid";
  } else {
      echo "Password format is invalid";
  }
}


echo json_encode($response);
?>