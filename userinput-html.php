</!DOCTYPE html>
<html>
<head>
	<title>date-check</title>
</head>
<body>
<form name="Filter" method="POST">
    <!-- From:
     --><input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
    <br/>
    <!-- To:
    <input type="date" name="dateTo" value="<?php echo date('Y-m-d'); ?>" />
     --><input type="submit" name="submit" value="Login"/>
</form>
</body>
</html>