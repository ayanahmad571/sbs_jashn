<?php 
session_start();
?>
<?php
function login($uid, $pass) {
	if($uid == 'admin' and $pass == 'jashn1123'){
		$_SESSION['ID'] = (time() + rand('123456789,987654321432') + rand('11100,9999999999'));
		$_SESSION['LOGIN'] = 'TRUE';
		header('Location: home.php');
	}
	
}
 ?>
<?php if(isset($_GET['submit'])){ login($_GET['uid'],$_GET['pass']); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jashn admin-login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row"><div class="col-md-12 col-xs-12 col-lg-12 col-sm-12"><h2 align="center">Jashn-admin Login</h2></div></div>
  <div style="margin-left:auto;margin-right:auto;"  class='row'>
  
  <div class="col-md-3 col-xs-3 col-lg-3 col-sm-3">
  	<img align='center' src="../jashan_sbs_2015_logo.png" class="img-responsive" />
  </div>
  </div>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" role="form">
    <div class="form-group">
      <label for="uid">Username:</label>
      <input name="uid" type="text" class="form-control" id="uid" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input name="pass" type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
