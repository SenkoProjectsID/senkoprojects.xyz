<?php
$host="senkoprojects.xyz";
$user="root";
$password="";
$db="database"

$kon = mysqli_connect($host,$user,$password);
if ($kon){
	echo "Connection succses";
  } else {
  echo "Connection missing"
  }
$sellect=mysqli_select_db($kon,$db);
if ($sellect) {
  echo "Sellected Database $db "
} else {
  echo "Something Worng"
}
?>