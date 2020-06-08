





<?php

$connect = mysqli_connect("localhost","root","","wbdb");

if(!$connect){
	echo "<script>alert('The database cannot be connected')</script>";
}

?>