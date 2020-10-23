<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
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
        <title>Jashn SBS 2015 AYAN-TEMP1</title>
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
	  background-image:no-repeat;

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


.carousel-caption {
  z-index: 10;
}

#myCarousel {
	border:1px solid black;
}

#myCarousel  .item {
  height: 600px;
  background-color:#bbb;
}
#myCarousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
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
	margin-top:75px;
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
        <script>
		if(window.innerWidth < 788){
			
			
			$('.dropdown-menu').removeAttr('dropdown-menu');
				
				
			
			}
        </script>
  <link rel="stylesheet" href="css/needs.css">
        
    </head>
    
    
    <body  >
	<div style="padding:0" id="wrap">

    <header class="masthead">
<div class="row logos-head">
    <div class=" col-md-6 logos-head-100">
        <img class="img j-logo img-responsive img-thumbnail" width="150px"  src="images/jashan_sbs_2015_logo.png"/>
    </div>
</div>
  
</header>
        

 

  
  
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
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">News</a></li>
          <li><a href="#section3">Gallery</a></li>
          <li><a href="#sectionpotd">Q' of the Day</a></li>

          <li class="dropdown sec4cont">
            <a class="dropdown-toggle sec4" data-toggle="dropdown-menu">Guest Artists<b class="caret"></b></a>
            <ul class="dropdown-menu" >
            <?php
	   $sql = "SELECT * FROM guestart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<li><a href="#guestartist'.$row['id'].'">'.ucwords(strtolower($row['guart_head'])).'</a></li>';
    }
} else {
    echo "0 results";
}
?>
            </ul>
          </li>
          <li><a href="#section5">Sponsors</a></li>
          <li><a href="#section6">Contact Us</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
    
</div><!--/.navbar -->
  
<!-- Begin page content -->
<div class=" div" id="section1"></div>
  
<div class="container">
  <div class='row'>
  <div class="col-sm-12">
    <div class="page-header">
      <h1>Home</h1>
    </div>
    
    <p class="lead text-center"> 
      <h2>About Jashn</h2>

<P><b>Jashn SBS 2015</b>- a first for our school, celebrates the performing arts - dance, music and drama. It brings together the creative voices of our students, showcasing some of their original works and invites professional artists in the field to inspire our students to create, perform and celebrate.</P>

<p>This festival is organized to  provide a platform for our students to show case their talent. It will also help us raise funds for our initiative <b>SBS Sahyog</b> - for transformative learning through community work. Students of SBS are helping to rehabilitate some villages in Uttarakhand and have started with their first project 'Dairy Farming'. </p> <br>
</p>
</div>
  </div>
<div class="row">

			<div class=" col-md-7">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img src="images/pot/pic1.jpg" alt="Pic1">
						</div>

						<div class="item">
						  <img src="images/pot/pic2.jpg" alt="Pic2">
						  
						</div>

						<div class="item">
						  <img src="images/pot/pic3.jpg" alt="Pic3">
						  
						</div>

						<div class="item">
						  <img src="images/pot/pic2.jpg" alt="Pic2">
						  
					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
			</div>
				
    <hr>
  </div>
  
  <div class="col-md-5">
				<div class="countdown">
					<p>
					<iframe width="350" height="240" src="https://w2.countingdownto.com/1172538" scrolling="no" frameborder="0"></iframe></p>
				</div>
					
					
			
			<div class="schedule">
						<h1>Byte of the Day</h1>
									<p>
										<ul>
											<!-- <php
								   $sql = "SELECT * FROM shedule";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo '<li>'.$row['content'].'</li>';
								}
							} else {
								echo "Well, no Schedule is available at this moment";
							}
							?> -->
											<!-- all the data will be fetched from the server  -->
										</ul>
									</p>
					</div>
					</div>

    
    
    
    
  </div>
  </div>

    

  
<div class="divider" id="section2"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>News</h1>
      
      <hr>
     
    <p class="lead text-center"> 

      <?php
	   $sql = "SELECT * FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="one-half column news-article">
      	<h3 align="center">'.$row['head'].'</h3>
        <h6 align="center"><i>'.$row['byname'].'</i></h6>
        <p>
       '.$row['content'].'
        </p>
      </div>';
    }
} else {
    echo "0 results";
}
?>
      
      
    </p> 
      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->

<div class="divider" id="section3"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Gallery</h1>
      
      <hr>
     
    
    	<div class="row">
        
        <!--<div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="image"><img src="//placehold.it/600x400/444/F8F8F8" class="img-responsive"></a></div>
        </div><!--/panel
      </div> -->
      
      <?php
	   $sql = "SELECT * FROM gallery ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail" onClick="location.href=\''.$row['imgsrc'].'\'"><img src="images/'.$row['imgsrc'].'" class="img-responsive"></div>
          <div class="panel-body">
            <p>'.$row['about'].'</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> ';
    }
} else {
    echo '<div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Site Planning"><img src="//placehold.it/600x400/555/EEE" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Site Planning</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> ';
}
?>
      
      
	</div><!--/row-->

      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->


  
  <div class="divider" id="sectionpotd"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Question of the Day</h1>
      
     
    <p class="lead text-center"> 
          <?php
	   $sql = "SELECT * FROM qotd ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<p>
            <button class="questionotdbtn" role="button" data-toggle="collapse" href="#collapse'.$row['id'].'" aria-controls="collapseExample">
             '.$row['question'].'
            </button>
            <div class="collapse" id="collapse'.$row['id'].'">
              <div class="well">
                '.$row['ans'].'
              </div>
            </div>
         </p>';
    }
} else {
    echo '';
}
?>
      


    </p> 
      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->

<div class="divider" id="section4"></div>

<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Guest Artists</h1>
      
      <HR>
     
    
<?php
	   $sql = "SELECT * FROM guestart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<p class="lead text-center divider-hidden" id="guestartist'.$row['id'].'">
     	<h2>'.ucwords(strtolower($row['guart_head'])).'</h2>
      '.$row['guart_cont'].'
    </p> ';
    }
} else {
    echo "0 results";
}
?>
      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->


  
<div class="divider" id="section5"></div>  

<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Sponsors</h1>
      
      <hr>
     
    <p class="lead text-center"> 
      
    </p> 
      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->



<div class="divider" id="section6"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Schedule</h1>
      
      <hr>
     
    <p class="lead text-center"> 
	<p><img class='img-responsive' src="images/day1_sc.png" /></p>
	<p><img class='img-responsive' src="images/day2_sc.png" /></p>
    </p> 
      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->



  
  

<div id="footer">
  <div class="container">
    <p class="text-muted" style="color:#670F10">Made by - </p>
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