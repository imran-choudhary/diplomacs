<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-3726964409522162",
          enable_page_level_ads: true
     });
</script>
</head>
<body>

<div class="khalid">
	<h2 style="width:90%;">Home Page</h2>
</div>
<div class="imran">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    <h1><u>My Portal</u></h1>
    <ul style="font-size:30px;">&nbsp;&nbsp;Content</ul>
    <li><a href="http://diplomacs.com/Registration/details.php">1. Enter Student Details</a></li>
    <li><a href="http://diplomacs.com/Registration/showdetails.php">2. Retreive Details</a></li>
    <li><a href="http://diplomacs.com/Registration/register.php">3. Add New User</a></li>

    <br><br><br><br>
    <h6>Portal Developed by IMRAN KHALID</h6>
</div>
		
		
</body>
</html>