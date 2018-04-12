<?php
require $_SERVER["DOCUMENT_ROOT"].'/bootstrap/php/secrets.php';
require $_SERVER["DOCUMENT_ROOT"].'/lang/locals.php';

if($_POST['type'] = "generatecode"){
  if (isset($_COOKIE['promocode'])){
    $promocode = $_COOKIE['promocode'];
  }else{
    $con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("MySQL Error: " . mysqli_error());
    mysqli_select_db($con,$dbname) or die("MySQL Error: " . mysqli_error());
    $query = "SELECT * FROM `promocode` WHERE used IS NULL LIMIT 1";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result)==0){
      $promocode = $errors['promo']['empty'];
    }else{
      $promocode = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $id = $promocode['ID'];
      $promocode = $promocode['code'];
      $query = "UPDATE `promocode` SET used = NOW() WHERE ID = $id";
      $result = mysqli_query($con, $query);
      mysqli_close($con);
      setcookie("promocode", $promocode, 1525125600, "/");
    }
  }
  echo $promocode;
}

?>