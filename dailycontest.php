<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php 
session_start();
session_destroy();
?>
<?php include("include.php"); session_start();?>
<?php if(isset($_POST['uid']) and isset($_POST['db'])){
	
$uid = $_POST['uid'];
$pass= $_POST['db'];

	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str ,$conn) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($conn,$str);
	}
	$breakingpass = explode('-',$pass);
	$year = $breakingpass[0];
	$day = $breakingpass[2];
	$month = $breakingpass[1];
	
	//Sanitize the POST values
	$login = mysqli_real_escape_string($conn, clean($uid ,$conn));
	$pass_year = mysqli_real_escape_string ($conn, clean($year,$conn));
	
	$pass_day = mysqli_real_escape_string ($conn, clean($day,$conn));
	
	$pass_month = mysqli_real_escape_string ($conn, clean($month,$conn));
	
	
	
	$pass = $pass_year.$pass_month.$pass_day ;
//If there are input validations, redirect back to the login form
	if($errflag) {
		header("location: dailycontest.php?".$errmsg_arr);
		exit();
	}
	
	$ip = $_SERVER['REMOTE_ADDR'];
	
	

	
	$url = "http://www.stepsys.org/auth/auth.cfm";

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://stepsys.org/auth/auth.cfm?uid='.$login.'&pw='.$pass,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);


$array = explode("|", $resp);
$yesono = $array[0];
$name = $array[1];
$class = $array[2];
$classsec = $array[3];
$house = $array[4];
if($house == 1){
	$house = "Surya";
}if($house == 2){
	$house = "Tejas";
}if($house == 3){
	$house = "Bhanu";
}if($house == 4){
	$house = "Bhaskar";
}
$classi = $class.$classsec;
if($yesono == 0){header('Location: dailycontest.php?False_Login');

die();
}
//session _s et if they find session below then it will go to question_10.php
$time_give = 1123;
$time_didthething = time();
$_SESSION['SESS_ID']=  str_replace('4','-',md5(sha1(md5((($time_give * $pass)+$time_didthething)))));
$_SESSION['SESS_ID_TIME_HASH'] = $time_give;
$_SESSION['HOUSE'] = $house;
$_SESSION['ADMISSION_NUMBER'] = $login ;
$_SESSION['CLASS_NUMBER'] = $class ;
$_SESSION['CLASS_SECTION'] = $classsec;
$_SESSION['STU_NAME'] = $name;
$_SESSION['STU_DOB'] = $pass;
$_SESSION['TIME_HASH'] = $time_didthething;
$_SESSION['START_QUIZ'] = 'YES';

header('Location: question_10.php');
die();
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Jashn SBS '15</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="datepicker/bootstrap-datepicker3.css">
  <script src="datepicker/bootstrap-datepicker.js"></script>
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


        
        <style type="text/css">
     @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,600);

html,
body {
  height: 100%;
  -webkit-font-smoothing: antialiased;
  font-family: 'Open Sans', sans-serif;
}
	iframe {
		margin-top: 1em;
		width: 100%;
	}
			#wrap > .container {
				padding-top: 10px 15px 5px;
			}

.row {
  margin-left:0px;
  margin-right:0px;
}
body{
	  background-image:url('bg1.jpg');
	    background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: center;

}
#wrap {
	min-height: 100%;
  height: auto !important;
  min-height: 100%;
  height: 100%;
  margin: 0 auto -60px;
  margin-right:2%;
  margin-left:2%;
  border-left:1px solid black;
  border-right:1px solid black;
  background-color:#fff;
  padding-top: 20px;
    
}

#footer {
  height: 60px;
  background-color: #f5f5f5;
  margin-top:50px;
  padding-top:20px;
  padding-bottom:20px;
}

.navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
}



#wrap > .container {
  padding: 10px 15px 0;
}
.container .credit {
  margin: 20px 0;
}

#footer {
  background-color:#FDDEA4;
  color:#960305;
}

#footer a {
  color:#efefef;
}

header {
  background: #333;
  color:#555;
}

header .dropdown-menu {
  top:74px;
  background: #ffcc33;
  border-width:0;
}

h1 {
  font-size:50px;
}

.logo {
  font-size:40px;
  position:absolute;
  z-index:1200;
  color:#333;
  top:70px;
  text-align:center;
  width:100%;
}

#nav {
  width: 100%;
  position:static;
  top:-32px;
}

#nav.affix {
   position: fixed;
   top: 0;
   z-index:100;
   -webkit-transition: all .6s ease-in-out;
}

#footer > .container {
  
}

@media (min-width: 767px) {
  .navbar-nav.nav-justified > li{
      float:none;
  }
  
  
  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; // remove the gap so it doesn't close
 }

}
  
.navbar-nav {
  margin: 1px 1px; 
}  
  
/* customize nav style */
.navbar-custom {
    background-color: #65041B;
	font-weight:700;
    text-transform:uppercase;
    border-width:0;
}
.navbar-custom  .navbar-nav>li>a {
	color: #ddd;
}
.navbar-custom  .dropdown-menu li>a:hover {
	color: #eee;
}
.navbar-custom  .navbar-nav li>a:hover, .navbar-nav li .open, .navbar-custom .navbar-nav .active a  {
	background-color: #F1CA90;
}
.navbar-custom .navbar-nav>.dropdown>a .caret {
	border-top-color: #999;
	border-bottom-color: #999;
}

.navbar-collapse.in { /*3.0.2 bug workaround*/
    overflow-y: visible;
}

.navbar-toggle {
	outline:0;
}

.divider {
	height:50px;
}
.divider-hidden-gui {
	height:15px;
}


.panel {
	border-width:0;
}

@media (max-width: 768px) {
	header {
	
	}
	.dropdown-menu {
		position:inherit;
		top:inherit;
		float:inherit;
		min-width:160px;
		padding:5px 0;
		margin:2px 0 0;
		font-size:14px;
		text-align:left;
		list-style:none;
		background-color:rgba(249,248,248,1.00);
		-webkit-background-clip:padding-box;
		background-clip:padding-box;
		border:1px solid #ccc;
		border:1px solid rgba(0,0,0,.15);
		border-radius:4px;
		-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);
		box-shadow:0 6px 12px rgba(0,0,0,.175);
    display: block;}

}

#map-canvas {
  	width: 100%; 
  	height: 300px;
	margin: 0;
	padding: 15px;
}

.scroll-top {
   position:fixed;
   bottom:0;
   right:6%;
   z-index:100;
   background: #f2f3f2;
   font-size:24px;
   border-top-left-radius:3px;
   border-top-right-radius:3px;
}
.scroll-top a:link,.scroll-top a:visited {
  color:#222;
} 
 

section {
  color: #ffffff;
  min-height: 400px;
  height: auto !important;
  height: 100%;
  padding-top:100px;
}


.panel .img-responsive {
}
.divider-hidden{

	height:50px;
	background-color:transparent;
	

}
p{
	text-align:justify;

}
@media (max-width:975px) {
  .lead {
	  text-align:justify;	
}
.dropdown-menu {
	display:none;
}


@media (min-width: 767px) {
  .dropdown-menu {
    display:;
  }
}
       </style>
  <link rel="stylesheet" href="css/needs.css">
        
    </head>
    
    
    <body  >

<header class="masthead">
<div class="row logos-head">
    <div class=" col-md-6 logos-head-100">
        <a href='index.php'><img class="img j-logo img-responsive img-thumbnail" width="150px"  src="images/jashan_sbs_2015_logo.png"/></a>
    </div>
</div>
  

        

 

<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li><a href="index.php">Home</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
    
</div><!--/.navbar -->


</header>
	<div style="padding:0;padding-top: 20px;" id="wrap">



  
  <div class="divider" id="formaction"></div>
  <div class=\'row\'>
  	<div class="col-sm-10 col-sm-offset-1">
    
    <p class="lead text-center"> 
      <h4><strong>Daily Quiz</strong></h4>

<P align="justify"> 
<div class="row">

Best of Luck !
 
 </div><br>

 </P>
<br></p>
</div>
  </div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">

 <form role="form" action="<?php  $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="form-group">
    <label for="email">Admission_Number:</label>
    <input name="uid" type="number" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Date of birth: (yyyy-mm-dd)</label>
            <input name="db" type='text' class="form-control datpicker-main-element" />  </div>
            
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>

<script>

    $('.datpicker-main-element').datepicker({
        format: "yyyy-mm-dd",
        startView: 1,
        defaultViewDate: { year: 2000, month: 01, day: 01 }
    });




			</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div id="footer">
  <div class="container">
    <p class="text-muted" style="color:#670F10">Website designed by- Jashn website Team </p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


</div><!--/wrap-->


        
        <script type='text/javascript'>
        
        $(document).ready(function() {
			
/* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
});	

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top;
  $('body,html').animate({scrollTop:posi},700);
});





		});
	</script>
    </body>
</html>
