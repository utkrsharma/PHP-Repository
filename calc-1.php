<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<body>
<form method="post" >
<p>First Value:<br/>
<input type="number" id="first" name="first"></p>
<p>Second Value:<br/>
<input type="number" id="second" name="second"></p>
<input type="radio" name="group1" id="add" value="add">+&nbsp;&nbsp;&nbsp;
<input type="radio" name="group1" id="subtract" value="subtract">-&nbsp;&nbsp;&nbsp;
<input type="radio" name="group1" id="times" value="times">*&nbsp;&nbsp;&nbsp;
<input type="radio" name="group1" id="divide" value="divide">/&nbsp;&nbsp;&nbsp;
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Calculate</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$first=$_POST['first'];
$second=$_POST['second'];
if($_POST['group1'] == 'add') {
echo "$first+$second=",$first + $second;
}
else if($_POST['group1'] == 'subtract') {
echo "$first-$second=",$first - $second;
}
else if($_POST['group1'] == 'times') {
echo "$first*$second=",$first * $second;
}
else if($_POST['group1'] == 'divide'){
echo "$first/$second=",$first / $second;
}

}
?>
</body>
</html>
