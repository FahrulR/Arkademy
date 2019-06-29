<!DOCTYPE html>
<html>
<body>
<?php
function is_username_valid($username){
if(!preg_match("/^[a-z]{5,9}$/",$username)){
	$username= false;
} else {
	$username= true;
}
	echo $username ? 'true' : 'false';
}
function is_password_valid($password){
if(!preg_match("/^(?=.*?[#])(?=.*?[^a-zA-Z0-9 ]).{8,}$/", $password)){
	$password= false;
} else {
	$password= true;
}
	echo $password ? 'true' : 'false';
}
function is_email_valid($email){
if (!preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", trim($email))){
	$email= false;
} else {
	$email= true;
}
	echo $email ? 'true' : 'false';
}
function is_phone_valid($phone){
if (!preg_match("/^((?:\+62))[0-9]{8,15}$/",$phone)){
	$phone= false;
} else {
	$phone= true;
}
	echo $phone ? 'true' : 'false';
}
is_username_valid("zeronull");
echo "<br>";
is_username_valid("userOke");
echo "<br>";
is_password_valid("p@ssW0rd#");
echo "<br>";
is_password_valid("C0d3YourFuture!@");
echo "<br>";
is_phone_valid("+6281234567890");
echo "<br>";
is_email_valid("iqbal@gmail.c");

?>
</body>
</html>