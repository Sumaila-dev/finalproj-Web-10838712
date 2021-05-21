<?php 
	include_once 'dbconnect.php';

	$Region = $_POST['Region'];
	$Town = $_POST['Town'];
	$GPS= $_POST['GPS'];
	$Date = $_POST['date'];
	$number = $_POST['phonenumber'];
	$complain = $_POST['complain'];
	

	$sql = "INSERT INTO public(Region, Town, GPSCODE, Date, Phone, Complain) VALUES('$Region','$Town','$GPS','$Date','$number','$complain');";


	$min = mysqli_query($conn,$sql);

	if ($min) {
		echo "<script type= 'text/javascript' style ='text-align'>alert('Your Rerport has been Submitted Successfully.')</script>";
	}else{
		echo "<script type= 'text/javascript'>alert('Data Already Exists')</script>";
	}

	include_once 'comp_entry.html';
	
?>
