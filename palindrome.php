<?php
$word = $_GET['Name'];

function isPalindrome($word){
  $rev = strrev($word);
  if($rev == $word){
    echo "Is Palindrome";
  }else{
    echo "Not Palindrome";
  }
}

?>