<?php 
function validate_signup()
{
	$errors = array();
	if(empty($_POST['name']))
	{
		$errors['name']="Please Enter Name";
	}
	if(empty($_POST['email']))
	{
		$errors['email']="Please Enter email";
	}
	if(empty($_POST['password']))
	{
		$errors['password']="Please Enter password";
	}
	if(empty($_POST['cpassword']))
	{
		$errors['cpassword']="Please Enter password";
	}
	if(empty($_POST['unam']))
	{
		$errors['uname']="Please Enter User Name";
	}
	return $errors;
}
function validate_addguest()
{
	$errors = array();
	if(empty($_POST['name']))
	{
		$errors['name']="Please Enter Name";
	}
	if(empty($_POST['email']))
	{
		$errors['email']="Please Enter email";
	}
	if(empty($_POST['address']))
	{
		$errors['address']="Please Enter address";
	}
	if(empty($_POST['phone']))
	{
		$errors['phone']="Please Enter Phone";
	}
	if(empty($_POST['gender']))
	{
		$errors['gender']="Please Enter gender";
	}
	if(empty($_FILES['avatar']['name']))
	{
		$errors['avatar']="Please Select Avatar";
	}
	if(empty($_POST['hobbies']))
	{
		$errors['hobbies']="Please Select Hobbies";
	}
	
	//$types = array('image/jpeg','image/jpg','image/gif');
	
	
	return $errors;
}

?>