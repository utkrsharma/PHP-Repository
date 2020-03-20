<?php
	# code...
    $mysqli = mysqli_connect("localhost","root","","user");
//    $data_del=mysqli_query($mysqli,$select_query);
//	$row = mysqli_fetch_assoc($data_del);
	$edit = $_GET['edit'];
	$select_query="SELECT * FROM `users` WHERE id='$edit'";
	$row=mysqli_query($mysqli,$select_query);
	$fetch=mysqli_fetch_assoc($row);

	$id=$fetch['id'];
    $name=$fetch['name'];
    $contact=$fetch['contact_number'];
    $email=$fetch['email'];
?>

<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
<title>DB_connect</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!--popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--bootstrap javascript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <form method="post" action="performs-edit.php">
        <div class="form-group">

<label for="id">Id</label>
<p><input type="text" name="id" value="<?php echo"$id";?>" class="form-control" readonly></p>
<label for="name">Name</label>
<p><input type="text" name="name" value="<?php echo"$name";?>"class="form-control"></p>
<label for="contact number">Contact Number</label>
<p><input type="text" name="contact" value="<?php echo"$contact";?>"class="form-control"></p>
<label for="email">Email</label>
<p><input type="email" name="email" value="<?php echo"$email";?>" class="form-control">
<p></p>

        </div>
    <button type="submit" name="update" value="update" class="btn btn-success">Update</button><?php echo "&nbsp;"?>
    <button type="reset" name="reset" value="reset" class="btn btn-danger">Reset</button><?php echo "&nbsp;"?>
    <a href="http://localhost/php/database-data.php" class="btn btn-info">Show Data</a>

    </form>

</div>
