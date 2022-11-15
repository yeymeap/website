<?php
  error_reporting(0);
	include "config.php";
	
	$user =  $_POST['user'];
	$email = $_POST['email'];
	$pwd =  $_POST['pwd'];
	$pwdrepeat = $_POST['pwdrepeat'];
	
	
	if (isset( $_POST['user'])) {
		if (($pwd == $pwdrepeat) && (strlen($pwd) >= 3) && (strlen($email) >= 4) && (strlen($user) >= 4) && ($pwd != $user) 
      && !filter_var($email, FILTER-VALIDATE-EMAIL)) {
			$pwd = Sha1($pwd);
			$sql = "INSERT INTO userdata(id, username, password, email) VALUES (NULL, '$user', '$pwd', '$email');";
			mysqli_query($conn, $sql);
		} else {
			echo "Incorrect data submitted";
		}

	}
?>