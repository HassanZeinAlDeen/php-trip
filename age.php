<?php

$birth = $_POST["birth_date"];


$birth = new DateTime($birth);
$current = new DateTime();
$year = $current->diff($birth);
$age = $year->y;
$result = "";

isPrime($age);


function isPrime($age){

  if($age <= 1){
    return false;
  }

  for($i=2; $i<= sqrt($age);$i++){
    if($age % $i == 0){
      echo "not prime";
      break;
    }else{
      echo "prime";
    }
  }
}
?>
