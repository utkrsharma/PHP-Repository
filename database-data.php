<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
<title>Database</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!--popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--bootstrap javascript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
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
*//*if(isset($_POST['submit'])) {
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
*//*if(isset($_POST['show-data'])) {
    $name=$_POST['first'];
    $contact_nunber=$_POST['second'];
    $email=$_POST['third'];
    $date_time=date('Y-m-d H:i:s');
    */$query="SELECT * FROM `users`";
    $data_retrieve=mysqli_query($mysqli,$query);
    if (mysqli_num_rows($data_retrieve)>0) {
        # code...?>
        <div class="table-responsive mt-3">

            <table border="1" class="table table-striped">
            	<thead class="thead-dark">
            		
                <th>ID</th>
                <th>NAME</th>
                <th>CONTACT NUMBER</th>
                <th>EMAIL</th>
                <th>APPLY DATE</th>
                <th>EDIT</th>
                <th>DELETE</th>

            	</thead>
     <?php   while ($row=mysqli_fetch_assoc($data_retrieve)) { ?>
       
            
     
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['contact_number'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['creation_date'];?></td>
                <td>
                	<?php $rowid = $row['id']; 
                	echo "<form method='post' action='edit.php?edit=$rowid'><input type='submit' value='Edit' class='btn btn-primary'></input></form>"; ?>
                </td>
                <td>
                	<?php $rowid = $row['id']; 
                	echo "<form method='post' action='delete.php?del=$rowid'><input type='submit' value='Delete' class='btn btn-danger'></input></form>"; ?>
                </td>
             </tr>
     

<?php   
        }
?>
        </table>

    </div>
<?php
    }
?> 

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>	
<div class="col-sm-2" align="center" ><a href="http://localhost/php/roar.php" style="width:100px; height:45px;" class="btn btn-success btn-block">Add <i class="fa fa-plus-square"></i></a></div>   
</div>


</body>
</html>
