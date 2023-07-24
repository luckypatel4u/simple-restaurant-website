<?php
$server ="localhost";
$name ="root";
$password ="";
$database ="booking";

$conn = mysqli_connect($server,$name,$password,$database);
if(!$conn){
  //  echo "scc";
//}else{
    die("error". mysqli_connect_error());
}

?>