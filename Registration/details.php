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

<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Students Details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-3726964409522162",
          enable_page_level_ads: true
     });
</script>
</head>
<body background="header.jpg">
    <h1 style="margin:10px;"><center>IMRAN KHALID</center></h1>
  <div class="header">
  	<h2>Save Details</h2>
  </div>
  <form method="post" action="details.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
    <div class="input-group">
  	  <label>Mobile No.</label>
  	  <input type="text" name="mobile" value="<?php echo $mobile; ?>">
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="save_user">Save</button>
  	</div>
  	
    <p style="color:pink;font-size:20px;">&#x24B8; www.imrankhalid.in</p>
  </form>
</body>
</html>