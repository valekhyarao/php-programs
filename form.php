<html>
</html>
<head>
<title>Registration Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    session_start();
    ?>
<?php
$a="";
$b="";
$na=$nb="";
$c=0;
if(isset($_POST['submit']))
{
   if (empty($_POST["uname1"]))
	  {
	$a="Name is required";
	
      } 
	else
	  {
		  $a="";
		  $na=$_POST["uname1"];
		  $c=$c+1;
	  }
   if(empty($_POST["ps1"])) 
	{
	$b="Password is required";
	} 
	else
	  {
		  $nb=$_POST["ps1"];
		  $b="";
		  $c=$c+1;
	  }
	if($c==2)
	{
	if($_POST["uname1"]==$_SESSION['uname'])
	{
		if($_POST["ps1"]==$_SESSION['ps'])
		{
		header("Location:main.php");
    exit;
		}
		else
		{
		$b="enter valid username and password";
		}
	
	}
		else
		{
		$b="enter valid username and password";
		}
	
	}
}
?>
<div id ="header">
<center><img src="shop.jpg" height="75" width="75"></img> &nbsp;letsshop</center>
</div>
<div id="content1">
<center><h2>LOGIN PAGE</h2></center>
<form method="post" action="form.php">
<table id="table2" cellspacing="15" align="center"><b>
<tr>
<td><b>Username:</b></td><td><input type="text" name="uname1" value="<?php echo $na ?>"/></br></td>
</tr>
<tr> <td colspan="2"><span class="error"><?php echo $a;?></span></td></tr>
<tr>
<td><b>Password:</b></td><td><input type="password" name="ps1" value="<?php echo $nb ?>"/></br></td>
</tr>
<tr> <td colspan="2"><span class="error"><?php echo $b;?></span></td></tr>
<tr> <td colspan="2"></td></tr>
<tr>
<td colspan="2"><center>
<input type="submit" value="SUBMIT" name="submit" />
</center></td></tr>
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
</html>
