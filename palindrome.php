<?php
$word = $_GET['Name'];

isPalindrome($word);

function isPalindrome($word){
  $rev = strrev($word);
  if($rev == $word){
    echo "Is Palindrome";
  }else{
    echo "Not Palindrome";
  }
}

?>