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
    <form method="post" >
        <div class="form-group">

<label for="name">Name</label>
<p><input type="text" name="first" placeholder="Name" class="form-control"></p>
<label for="contact number">Contact Number</label>
<p><input type="text" name="second" placeholder="Contact Number" class="form-control"></p>
<label for="email">Email</label>
<p><input type="email" name="third" placeholder="Email id" class="form-control">
<p></p>

        </div>
    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button><?php echo "&nbsp;"?>
    <button type="reset" name="reset" value="reset" class="btn btn-danger">Reset</button><?php echo "&nbsp;"?>
    <a href="http://localhost/php/database-data.php" class="btn btn-info">Show Data</a>

    </form>

</div>

<?php
//$name=$_POST["first"];
//$contact_nunber=$_POST["second"];
//$email=$_POST["third"];
$mysqli = mysqli_connect("localhost","root","","user");
/*if($mysqli) {
	echo "Connection established";
}
else {
	echo "Error";
}
*/if(isset($_POST['submit'])) {
	$name=$_POST['first'];
    $contact_nunber=$_POST['second'];
    $email=$_POST['third'];
    $date_time=date('Y-m-d H:i:s');
    $query="INSERT INTO users (name, contact_number, email, creation_date) VALUES ('$name','$contact_nunber','$email','$date_time')";
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
//if(isset($_POST['show-data'])) {

//    $name=$_POST['first'];
//    $contact_nunber=$_POST['second'];
//    $email=$_POST['third'];
//    $date_time=date('Y-m-d H:i:s');
//    $query="SELECT * FROM `users`";
//    $data_retrieve=mysqli_query($mysqli,$query);
//    if (mysqli_num_rows($data_retrieve)>0) { 
//}
?>
</body>
</html>
