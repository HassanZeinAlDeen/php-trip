<?php
$email = $_POST['Email'];
$password = $_POST['Password'];

if(validEmail($email)){
  if(validPassword($password)){
    echo "valid email and password";
  }else{
    echo "invalid password";
  }
}else{
   echo "email not valid";
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
      return true;
  } else {
      return false;
  }
}

?>