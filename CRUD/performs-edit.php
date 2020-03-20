<?php
$mysqli = mysqli_connect("localhost","root","","user");
if (isset($_POST['update'])) {
	# code...
	$id=$_POST['id'];
	$chng_name=$_POST['name'];
	$chng_contact=$_POST['contact'];
	$chng_email=$_POST['email'];
	
	$update_query="UPDATE users SET id='$id',name='$chng_name',contact_number='$chng_contact',email='$chng_email' WHERE id='$id'";
	$data_update=mysqli_query($mysqli,$update_query);
	if ($data_update) {
		# code...
		header("location:database-data.php");
		exit("Record Updated Successfully");

	}
	else {
		echo "Error Updating Record";
	}
}
?>