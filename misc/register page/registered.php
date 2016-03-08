<html>

<head>
	<title>You've been registered!</title>
</head>

<body>
<?php
$con = mysqli_connect("localhost","1098069", "sami0313", "1098069");
extract($_POST);
if(!con){
	print("Problem connecting to database.");
	die();
}
$query = "INSERT INTO \`User\`(\`user_id\`, \`name\`, \`password\`, \`email\`) VALUES (0,\'".$username."\',\'".$password."\',\'".$email."\')"
print($query);

if(mysql_query($con,$query)){
	print("user registered");
}else{
	print("Error");
}

mysqli_close();
?>
</body>

</html>