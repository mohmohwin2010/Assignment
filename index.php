<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Testing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 21px;
  padding: 7px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.breaker
{
	margin-bottom:6px;
}
.formeer
{
	border:solid 4px #212121;
	padding:20px;
	border-radius:20px;
	margin-top:10%;
	border-style:dashed;
}
.head-title
{
	margin:0;
	padding:0;
	margin:0px 10px 10px 10px;
	font-size:31px;
	text-shadow:2px 2px 0px gray;
	font-weight:bold;
}

.redMan
{
	color:red;
}
</style>
<script>

function namer() {
    var x = document.getElementById("fname");
    document.getElementById('printchatbox').innerHTML = x.value;
}
function mailer() {
    var x = document.getElementById("fmail");
    document.getElementById('printchatbox1').innerHTML = x.value;
}
function linker() {
    var x = document.getElementById("furl");
    document.getElementById('printchatbox2').innerHTML = x.value;
}

function comm() {
    var x = document.getElementById("fcom");
    document.getElementById('printchatbox3').innerHTML = x.value;
}


$(document).ready(function() {
    $("input[name$='testSex']").click(function() {
        var test = $(this).val();
		document.getElementById('printchatbox4').innerHTML = test;
    });
});

</script>
</head>
<body onload="funcheck();">
	<div class="container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="formeer">
			<h1 class="head-title">YOUR INFO</h1>
			<form action="server.php" method="post">
				Name:<input type="text" name="testName" class="form-control breaker" placeholder="TYPE YOUR NAME" id="fname" onkeyup="namer()" autocomplete="off" required>
				<?php
					if(isset($_GET['n']))
					{
						$nn=$_GET['n'];
						if($nn==1)
						{
							echo "<span  class='redMan'>* Only letters and white space allowed</span><br><br>";
						}
					}
				?>
				E-mail:<input type="text" name="testMail" class="form-control breaker" placeholder="TYPE YOUR MAIL" id="fmail" onkeyup="mailer()" autocomplete="off" required>
				<?php
					if(isset($_GET['e']))
					{
						$ee=$_GET['e'];
						if($ee==1)
						{
							echo "<span  class='redMan'>* Invalid email format</span><br><br>";
						}
					}
				?>
				Webiste:<input type="text" name="testUrl" class="form-control breaker" placeholder="TYPE URL" id="furl" onkeyup="linker()" autocomplete="off" required>
				<?php
					if(isset($_GET['u']))
					{
						$uu=$_GET['u'];
						if($uu==1)
						{
							echo "<span  class='redMan'>* Invalid URL</span><br><br>";
						}
					}
				?>
				Comment:<textarea name="testCom" class="form-control breaker" rows="4" placeholder="TYPE COMMENT" id="fcom" onkeyup="comm()"></textarea>
				Gender:<input type="radio" id="r1" name="testSex" value="Male" required> MALE
				<input type="radio" id="r2" name="testSex" value="Female" required> FEMALE
				<button class="button" type="submit" name="submit"><span>SUBMIT </span></button>
			</form>
			</div>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-12" style="margin-top:20px;">
			<div class="table-responsive">
			<table class="table table-condensed">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Website</th>
					<th>Comment</th>
					<th>Gender</th>
				</tr>
				<tr>
					<td><p id="printchatbox"></p></td>
					<td><p id="printchatbox1"></p></td>
					<td><p id="printchatbox2"></p></td>
					<td><p id="printchatbox3"></p></td>
					<td><p id="printchatbox4"></p></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
</body>
</html>
