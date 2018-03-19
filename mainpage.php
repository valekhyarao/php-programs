<html>
<head>
<title>Registration Form</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
    session_start();
    ?>
	<div id ="header">
<center><img src="shop.jpg" height="75" width="75"></img> &nbsp;letsshop</center>
</div>
<div id="content1">
	<h1><center>
<?php
 echo "Welcome ";
 echo $_SESSION['name'];
 ?></center></h1>
 <h2><center>Details of <?php echo $_SESSION['name']?></center></h2>
 <table align="center" cellspacing="20">
 <tr><td><b>Name:</b></td>
 <td> <?php echo $_SESSION['name']?></td></tr>
 <tr><td></td></tr>
 <tr><td><b>Username:</b></td>
 <td> <?php echo $_SESSION['uname']?></td></tr>
 <tr><td></td></tr>
 <tr><td><b>Date Of Birth:</b></td>
 <td> <?php echo $_SESSION['dob']?></td></tr>
 <tr><td></td></tr>
 <tr><td><b>Email-Id</b></td>
 <td> <?php echo $_SESSION['mail']?></td></tr>
 <tr><td></td></tr>
 <tr><td><b>Mobile Number:</b></td>
 <td> <?php echo $_SESSION['mn']?></td></tr>
 <tr><td></td></tr>
 <tr><td><b>Telephone Number:</b></td>
 <td> <?php echo $_SESSION['cn']?></td></tr>
 <tr><td></td></tr>
 <tr><td><b>Gender:</b></td>
 <td> <?php echo $_SESSION['gender']?></td></tr>
 <tr><td></td></tr>
 <tr><td><b>Language Choosen:</b></td>
 <td> <?php echo $_SESSION['lang']?></td></tr>
</table>
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
