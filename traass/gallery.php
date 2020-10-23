<?php 
if(!isset($_GET['day'])){header('Location: index.php');die();}


?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
#$servername = "172.16.0.38";
#$username = "jashn";
#$password = "jashnjashn1234";
#dbname = "jashn";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jashn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset('utf8');
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
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


        
        <style type="text/css">
     @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,600);

html,
body {
  height: 100%;
  /* Bikram please add padding acording to what maam has sugested- it is for the whole screen */
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
	margin-top:75px;

}
@media (max-width:975px) {
  .slider{
      height:15em;
  }
  .lead {
	  text-align:justify;
}

@media screen and (max-device-width: 768px) {
  .dropdown-menu{
		display:none;
  }
  

}
        </style>
		<link rel="stylesheet" href="bootstrap/css/colorbox.css" />
		<script src="bootstrap/js/jquery.colorbox.js"></script>

		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

        <script>
		if(window.innerWidth < 788){
			
			
			$('.dropdown-menu').removeAttr('dropdown-menu');
				
				
			
			}
        </script>
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
          <li><a href="index.php"><b>
							<i style='color:black' class='glyphicon glyphicon-arrow-left'>
							</i>
						</b></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
    
</div><!--/.navbar -->


</header>
	<div style="padding:0;padding-top: 20px;" id="wrap">



    

  


<div class="divider" id="section3"></div>
   
<div class="row">
			<div align='left' class="col-sm-10 col-sm-offset-1">
				<a href='index.php'>
				<h3>
						<b>
							<i style='color:black' class='glyphicon glyphicon-arrow-left'>
							</i>
						</b>
					</h3>
				</a>
			</div>
  	<div class="col-sm-10 col-sm-offset-1">
      <h2>Images for Day <?php echo $_GET['day'] ?></h2>
      
      <hr>
     
    
    	<div class="row">
        
        <!--<div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="image"><img src="//placehold.it/600x400/444/F8F8F8" class="img-responsive"></a></div>
        </div><!--/panel
      </div> -->
      
      <?php
	  	  $times = 0;

	   $sql = "SELECT * FROM gallery WHERE `day`=".$_GET['day']." ORDER BY id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  	echo '<div class="row">';
    while($row = $result->fetch_assoc()) {
		if ($times % 2 == 0)
    {
         
        
        echo'</div><div class="row">';
		
    }
        echo '<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a onClick="location.href= \'images/'.$row['imgsrc'].'\'" href="images/'.$row['imgsrc'].'" title="'.$row['about'].'"><img src="images/'.$row['imgsrc'].'" class="img-thumbnail img-responsive" width="100%"></a></div>
          <div class="panel-body">
            <p>'.$row['about'].'</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> ';
	   $times ++;
    }
} else {
    echo '<h1>We Couldn\'t Find any image for the day '.$_GET['day'].' Error code: #DG64N84N</h1>';
}
?>
      
	</div><!--/row-->

      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->

  
  


  
  

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted" style="color:#670F10">Website designed by- Jashn Website Team </p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


</div><!--/wrap-->


        
        <script type='text/javascript'>
        
        $(document).ready(function() {
			$('.dropdown-toggle.one').hover(function() {
			$('.dropdown-menu.one').toggle();
		});
		$('.dropdown-toggle.two').hover(function() {
			$('.dropdown-menu.two').toggle();
		});
		$('.arrow-next').click(function(){
			var currentSlide = $('.active-slide');
			var nextSlide = currentSlide.next();
			var currentDot = $('.active-dot');
			var nextDot = currentDot.next();
			
			if (nextSlide.length === 0) {
				var nextSlide = $('.slide').first();
				var nextDot = $('.dot').first();
			}
			currentSlide.fadeOut(50).removeClass('active-slide');
			nextSlide.fadeIn(50).addClass('active-slide');
			currentDot.removeClass('active-dot');
			nextDot.addClass('active-dot');
		});
		$('.arrow-prev').click(function(){
			var currentSlide = $('.active-slide');
			var prevSlide = currentSlide.prev();
			var currentDot = $('.active-dot');
			var prevDot = currentDot.prev();
			
			if (prevSlide.length === 0) {
				var prevSlide = $('.slide').last();
				var prevDot = $('.dot').last();
			}
			currentSlide.fadeOut(200).removeClass('active-slide');
			prevSlide.fadeIn(200).addClass('active-slide');
			currentDot.removeClass('active-dot');
			prevDot.addClass('active-dot');
		});
        
            $('.carousel').carousel({interval:false});

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

/* copy loaded thumbnails into carousel */
$('.panel .img-responsive').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
  	var item = $('<div class="item"></div>');
    var itemDiv = $(this).parent('a');
    var title = $(this).parent('a').attr("title");
    
    item.attr("title",title);
  	$(itemDiv.html()).appendTo(item);
  	item.appendTo('#modalCarousel .carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});

/* copy loaded thumbnails into carousel */
$('.panel .img-responsive').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
  	var item = $('<div class="item"></div>');
    var itemDiv = $(this).parent('a');
    var title = $(this).parent('a').attr("title");
    
    item.attr("title",title);
  	$(itemDiv.html()).appendTo(item);
  	item.appendTo('#modalCarousel .carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});

/* para usar el carousel */
$('#modalCarousel').carousel({interval:false});

/* title de los slide  */
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/*  thumbnail */
$('.panel-thumbnail>a').click(function(e){
  
    e.preventDefault();
    var idx = $(this).parents('.panel').parent().index();
  	var id = parseInt(idx);
  	
  	$('#myModal').modal('show'); // show the modal
    $('#modalCarousel').carousel(id); // slide carousel to selected
  	return false;
});




		});
	</script>
    </body>
</html>
<?php /*
<link rel="stylesheet" href="script/popup/css/colorbox.css" />
		<script src="script/popup/js/jquery.min.js"></script>
		<script src="script/popup/js/jquery.colorbox.js"></script>
        
               
		<script>
			$(document).ready(function(){
				$(".group4").colorbox({rel:'group4', slideshow:true});
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
		
		
		<a class="group4" href="/stepsysnew/elogs/uploads/1a1_full.jpg" title="ALIYA CHOPRA V-E.
MIX MEDIUM ON PAPER.">
<img src="/stepsysnew/elogs/uploads/1a1_mid.jpg" border="0" class="img_gal_format1" width="255" height="170" />
</a>

<p align=center><font class='tdTitle'><span style="font-weight:bold; font-size:12px;">ALIYA CHOPRA V-E.
MIX MEDIUM ON PAPER.</span><br>

</font>
</p>*/ ?>