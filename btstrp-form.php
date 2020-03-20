<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap-Form</title>
	<!--bootstrap css framework-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--jquery cdn-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<!--popper-->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<!--bootstrap javascript-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
     <!--form-->
     <div class="container">
     <form method="post">

     	<div class="form-group">

     		<label for="email">Email</label>
     		<input type="email" name="email" placeholder="email" required class="form-control">
            <p></p>
     		<label for="username">Username</label>
     		<input type="text" name="username" placeholder="username" required class="form-control">
            <p></p>
     		<label for="password1">Password</label>
     		<input type="password" name="password1" placeholder="password" required class="form-control">
            <p></p>  
     		<label for="password2">Confirm Password</label>
     		<input type="password" name="password2" placeholder="confirm password" required class="form-control">
            <p></p>
            <label>Upload File</label>
            <p><input type="file" name="file" ></p>
     	</div>

        <input type="submit" class="btn btn-success" name="submit"></input>
     </form>
     </div>
<?php
$mysqli = mysqli_connect("localhost","root","","user");
if (isset($_POST['submit']) and $_POST['password1']==$_POST['password2']) {
	$email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password1'];
    $file=$_POST['file'];
    $query="INSERT INTO user_passwd (email, username, password,file) VALUES ('$email','$username','$password','$file')";
    $data_save=mysqli_query($mysqli,$query);
    if($data_save) {
	# code...
        echo "<br>";
	    echo "data saved";
    }
    else {
	    echo "<br>";
	    echo "error";
    }
}
elseif (isset($_POST['submit']) and $_POST['password1']!=$_POST['password2']) {
	# code...
//	echo "<br>";
//	echo "Password Error";
    header("Location: http://localhost/php/form_paswd_error.php");
    exit;
}

?>
</body>
</html>