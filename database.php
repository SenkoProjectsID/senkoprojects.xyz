<?php
$host="senkoprojects.xyz";
$user="root";
$password="root";
$db="database";

$von = mysqli_connect($host,$user,$password);
if ($von){
	echo "Connection succses"
  } else {
  echo "Connection missing"
  };
$sellect=mysqli_select_db($kon,$db);
if ($sellect) {
  echo "Sellected Database $db "
} else {
  echo "Something Wrong"
};
?>