<?php
	include("config.php");
	echo "it is server.php<br>";
	if(isset($_POST['submit']))
	{
		$name=$_POST['testName'];
		$mail=$_POST['testMail'];
		$url=$_POST['testUrl'];
		$comment=$_POST['testCom'];
		$gender=$_POST['testSex'];

		$nameErr=0;
		$mailErr=0;
		$urlsErr=0;

		// validation will be here...
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = 1;
        }
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          $mailErr = 1;
        }
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
          $urlsErr = 1;
        }

		if($nameErr==1 || $mailErr==1 || $urlsErr==1)
		{
			header("Location: index.php?n=".$nameErr."&e=".$mailErr."&u=".$urlsErr);
		}
		else
		{
			$sql1 = "INSERT INTO rgo (Rname,Rmail,Rurl,Rcomment,Rgender) VALUES ('$name','$mail','$url','$comment','$gender')";
			mysql_query( $sql1,$con);
			echo "insert successfully....";
		}
		// end of validation....

	}
	else
	{
		echo "back to home";
	}


?>
