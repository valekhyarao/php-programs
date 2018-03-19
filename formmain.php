<html>
<head>
<title>Registration Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
 session_start();
    ?>
<?php
$e1=$e2=$e3=$e4=$e5=$e6=$e7=$e8=$f=$name=$uname=$ps=$cp=$mn=$cn=$mail=$e9=$dob="";
$c=0;
if(isset($_POST['submit']))
{
	if(empty($_POST['name']))
	{
		$e1="name is required";
	}
	
	else
	{
		if(preg_match("/^[a-z A-Z \s \.]{1,}[\. a-z A-Z \s]{1,26}$/",$_POST['name']))
		{
			$c=$c+1;
			$_SESSION['name']=$_POST['name'];
			$e1="";
			$name=$_POST['name'];
		}
		else
		{
			$e1="Please enter valid name";
			$name=$_POST['name'];
		}
	}
	if(empty($_POST['uname']))
	{
		$e2=" user name is required";
	}
	else
	{
		if(preg_match("/^[^0-9][a-z,0-9,.\s]{4,}$/i",$_POST['uname']))
		{
			$c=$c+1;
			$_SESSION['uname']=$_POST['uname'];
			$e2="";
			$uname=$_POST['uname'];
		}
		else
		{
			$e2="Please enter valid username ";
			$uname=$_POST['uname'];
		}
		
	}
	if(empty($_POST['ps']))
	{
		$e3="password is required";
		
	}
	else
	{
	if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{6,15}$/",$_POST['ps']))
		{
			$c=$c+1;
			$_SESSION['ps']=$_POST['ps'];
			$e3="";
			$ps=$_POST['ps'];
		}
		else
		{
			$e3="Please enter valid password ";
			$ps=$_POST['ps'];
		}	
	}
	if(empty($_POST['mn']))
	{
	$e5="mobile number is required";	
	}
	else
	{
		if(preg_match("/^[0-9]{8,12}$/i",$_POST['mn']))
		{
			$c=$c+1;
			$_SESSION['mn']=$_POST['mn'];
			$e5="";
			$mn=$_POST['mn'];
		}
		else
		{
			$e5="Please enter valid mobile number";
			$mn=$_POST['mn'];
		}
	}
	if(empty($_POST['cn']))
	{
		$e6=" telephone number is required";
		
	}
	else
	{
	if(preg_match("/^[0-9]{3,4}-[0-9]{8}$/i",$_POST['cn']))
		{
			$c=$c+1;
			$_SESSION['cn']=$_POST['cn'];
			$e6="";
			$cn=$_POST['cn'];
		}
		else
		{
			$e6="Please enter valid telephone number";
			$cn=$_POST['cn'];
		}	
	}
	if(empty($_POST['mail']))
	{
		$e4="emailId is required";
	}
	else
	{
	if(preg_match("/^[^0-9][a-z]{2,}[0-9]{0,}@[a-z]{4,6}\.[a-z]{2,3}$/i",$_POST['mail']))
		{
			$c=$c+1;
			$_SESSION['mail']=$_POST['mail'];
			$e4="";
			$mail=$_POST['mail'];
		}
		else
		{
			$e4="Please enter valid email id";
			$mail=$_POST['mail'];
		}	
	}
	if(empty($_POST['dob']))
	{
		$e9="Date of Birth is required";
	}
	else
	{
	
			$c=$c+1;
			$_SESSION['dob']=$_POST['dob'];
			$e9="";
			$dob=$_POST['dob'];
		
	}
	
	$_SESSION['gender']=$_POST['gender'];
	$_SESSION['lang']=$_POST['lang'];

if(empty($_POST['cp']))
{
	$f="Please confirm your password";
}
else
{
	if($_POST['ps']==$_POST['cp'])
	{
		$c=$c+1;
		$f="";
		$cp=$_POST['cp'];
	}
	else
	{
		$f="Please recheck your password";
		$cp=$_POST['cp'];
	}
}
if($c==8)
	{
		header("Location:form.php");
    exit;
	}
	
	}

?>
<div id ="header">
<center><img src="shop.jpg" height="75" width="75"></img> &nbsp;letsshop</center>
</div>
<div id="content1">
<center><h2>SIGN UP HERE</h2></center>
<form action="two.php" method="post">
<table id="table2" cellspacing="15" align="center">
<tr>
<td><b>Name:</b></td><td><input type="text" name="name" value="<?php echo $name?>" ></br></td>
</tr>
<tr> <td colspan="2"><span class="error"><?php echo $e1;?></span></td></tr>
<tr>
<td><b>Username:</b></td><td><input type="text" name="uname" value="<?php echo $uname?>"></br></td>
</tr>
<tr> <td colspan="2"><span class="error"><?php echo $e2;?></span></td></tr>
<tr>
<td><b>Date Of Birth:</b></td><td><input type="date" name="dob" value="<?php echo $dob?>"></br></td>
</tr> <td colspan="2"><span class="error"><?php echo $e9;?></span></td></tr>

<tr>
<td><b>Password:</b></td><td><input type="password" name="ps" value="<?php echo $ps?>"></br></td>
</tr>
<tr> <td colspan="2"><span class="error"><?php echo $e3;?></span></td></tr>
<tr>
<td><b>Confirm password:</b></td><td><input type="password" name="cp" value="<?php echo $cp?>"></br></td>
</tr>
<tr> <td colspan="2"><span class="error"><?php echo $f;?></span></td></tr>
<tr>
<td><b>Email-Id:</b></td><td><input type="text" name="mail" value="<?php echo $mail?>"></br></td>
</tr>
<tr> <td colspan="2"><span class="error"><?php echo $e4;?></span></td></tr>
<tr>
<td><b>Mobile Number:</b></td><td><input type="text" name="mn" value="<?php echo $mn?>"></br></td>
</tr>
<tr> <td colspan="2"><span class="error"><?php echo $e5;?></span></td></tr>
<tr>
<td><b>Telephone Number:</b></td><td><input type="text" name="cn" value="<?php echo $cn?>"></br></td>
</tr>
<tr> <td colspan="2"><span class="error"><?php echo $e6;?></span></td></tr>
<tr>
<td><b>Gender:</b></td><td><input type="radio" name="gender" id="gen1" value="Female" checked="checked">Female&nbsp &nbsp
<input type="radio" name="gender" id="gen2" value="Male">Male</br></td>
</tr><tr><td></td><td></td></tr>
<tr>
<td><b>Language:</b></td><td>
<select name="lang" id="lan">
    <option value="Telugu">Telugu</option>
    <option value="Hindi">Hindi</option>
    <option value="English">English</option>
    <option value="Marathi">Marathi</option>
	<option value="Tamil">Tamil</option>
	<option value="Kannada">Kannada</option>
  </select></br></td>
</tr>
<tr><tr><td></td><td></td></tr>
<center>
<td colspan="2"><center><input type="submit" value="submit" name="submit" /></center>

</td>
</tr>
</table>
</form>
</div>
<div id="content2">

</div>
<div id="lefttop">
</div>
<div id="left">
 </div>
<div id="content2">
</div>
<div id="left1">
</div>
</body>
