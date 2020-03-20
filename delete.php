<?php
	# code...
    $mysqli = mysqli_connect("localhost","root","","user");
//    $select_query="SELECT * FROM `users`";
//    $data_del=mysqli_query($mysqli,$select_query);
//	$row = mysqli_fetch_assoc($data_del);
	$del = $_GET['del'];
	$del_query = "DELETE FROM `users` WHERE id = $del";
	if (mysqli_query($mysqli,$del_query)) {
		# code...
		header("location:database-data.php");
		exit("Record Deleted Successfully");

	}
	else {
		echo "Error deleting record";
	}
	
	

?>

