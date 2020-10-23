<?php ob_start(); ?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php 
date_default_timezone_set('Asia/Kolkata');

?>
<?php include("include.php"); session_start();?>
<?php 

if(!isset($_SESSION['SESS_ID'])){
	
	
	header('Location: dailycontest.php?logout&nosession-id');
	die('121232');
	}
	
	if(isset($_SESSION['SESS_ID'])){
		
		if(str_replace('4','-',md5(sha1(md5(((1123 * $_SESSION['STU_DOB'])+$_SESSION['TIME_HASH']))))) != $_SESSION['SESS_ID']){
			echo str_replace('4','-',md5(sha1(md5(((1123 * $_SESSION['STU_DOB'])+$_SESSION['TIME_HASH']))))).'<br>'.$_SESSION['SESS_ID'];
			
			header('Location: dailycontest.php?session_iddoesn\'match');die();
		}
		
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
    
    
    <body onLoad="setInterval(myCounter, 1000)" >

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

<div class="divider" id="sectionpotd"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1 removeondo">
      <h2><strong>Daily QUIZ</strong></h2>

      
     
    <p class="lead text-center"> 
    
          <?php
		  if(isset($_SESSION['START_QUIZ'])){
			# unset($_SESSION['START_QUIZ']);
			  $startday = 13;
				$day= (date('d')-$startday);
				
				
			
			  
	   $sql = "SELECT * FROM `questions` WHERE NOT `id` IN (SELECT `q_id` FROM `answers` WHERE `stu_id`=".$_SESSION['ADMISSION_NUMBER'].") AND `day` <=".$day." ORDER BY `id` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo '<div class="row">
  	<div>';
	$x = 1;
	echo '<div class="row">';
	$times = 0;
	
	
    while($row = $result->fetch_assoc()) {
		
		if ($times % 2 == 0) {
         
        
        echo'</div><div class="row">';
		
    }
        echo 	'
    
	
	<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6" style="">

      <h4 align="center"><strong>Q-'.$x.' Day-'.$row['day'].'</strong></h4>
	  
      
     
    <p class="lead text-center"> 
    <div id="container">
	<p style="color:#3333CC;">'.$row['question'].'</p>
 <div id="form'.$row['id'].'" class="result'.$row['id'].'">
     <form method="post" id="reg-form'.$row['id'].'">
        <input required type="hidden" name="sys_id" value="'.base64_encode($row['id']).'" />
		<input required type="hidden" name="sys_id_q_day" value="'.base64_encode($row['day']).'" />
<textarea style=" resize: none;" required name="stu_answer" placeholder="Enter your answer" class="form-control" rows="3"></textarea>

       <input style="border:0;	
	padding:1% 3% 1% 3%;
	background-color:#DEB887;
	color:black; margin-top:2px;" type="submit" value="Submit" />
        </form>
		
		<script type="text/javascript">
$(document).ready(function()
{
	$(\'#reg-form'.$row['id'].'\').submit(function(e) {
        
  

  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : \'POST\',
  url  : \'question_10_submit-exec.php\',
  data : data,
  success :  function(data)
       {
      $("#reg-form'.$row['id'].'").fadeOut(500).hide(function()
      {
       $(".result'.$row['id'].'").fadeIn(500).show(function()
       {
        $(".result'.$row['id'].'").html(data);
       });
      });
      
       }
  });
  return false;
 });
 
});
</script>
    </div>
</div>
    


    </p> 
      
      
      
      </div>
      
  	
		 
		
		 
		 
		 ';
		 $x++;
		 $times ++;
    }
	
	echo '</div></div><!--/col-->
</div><!--/container-->';
}

else {
    echo '<h3>We Don\'t have any questions at the moment. You could maybe try again some time after 11:59AM</h3>';
}

		  
		  
		  
		  }else{
		  echo "<script>
		  
		  window.location = 'dailycontest.php';
		  </script>";
		  
		  
		  }

?>
      


    </p> 
      
      
      
      
      
  	</div><!--/col-->
</div><!--/container-->
<hr><br>
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
<br>
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

<script>
		 
$(document).ready(function(e) {
    
	 
		setInterval(myCounter, 100)
		
	
function myCounter() {
	
	var form = $("form").length;

		 if(form == 0){
			 
			 $(".removeondo").html(" <h2><strong>Daily QUIZ</strong></h2><p class='lead text-justify'>It seems you are done for the day. Please wait until tomorrow for the next set of questions.</p><br><form action='index.php' method='post'><button type='submit' class='btn btn-default'>Back to Home<span class='glyphicon glyphicon-chevron-right'></span></button></form>");
			 }
   
}
});	
		 
		 </script>
        
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