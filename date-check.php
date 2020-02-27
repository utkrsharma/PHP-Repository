</!DOCTYPE html>
<html>
<head>
	<title>date-check</title>
</head>
<body>
<form  method="POST" action="date-check.php">
    <input type="date" name="dateFrom" />
    <br/>
    
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
echo date('Y-m-d',strtotime($_POST['dateFrom']));
?>
</body>
</html>                                                                                                                                                                     