<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "qwertyqazwsxhack1234";
$dbname = "jashn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Jashn SBS 2015 AYAN-TEMP1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
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

.row {
  margin-left:0px;
  margin-right:0px;
}

#wrap {
  min-height: 100%;
  height: auto !important;
  height: 100%;
  margin: 0 auto -60px;
  padding: 0 0 60px;
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

#myCarousel  .item {
  height: 600px;
  background-color:#bbb;
}
#myCarousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 600px;
}


#wrap > .container {
  padding: 60px 15px 0;
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
   z-index:10;
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
	background-color:#F7E8AB;
	margin-top:100px;
	margin-bottom:100px;
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

.bg-1 {
	background: url('http://www.bootply.com/assets/example/bg_suburb.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}

.bg-2 {
	background: url('http://www.bootply.com/assets/example/bg_suburb.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}

.bg-3 {
	background: url('http://www.bootply.com/assets/example/bg_blueplane.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}

.bg-4 {
	padding-top:30px;
    background-color:#e6e6e6;
}

.panel .img-responsive {
	min-height:270px;
    max-height:270px;
}
.divider-hidden{

	height:50px;
	background-color:transparent;
	margin-top:100px;
	margin-bottom:100px;

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
        
<div id="wrap">

 
<header class="masthead">

<div class="row">
    <div class=" col-md-6 logos-head">
    	<img class=" main-logo img-responsive img-thumbnail" width="160px" src="http://sbs-school.org/img/works/sbs_noida_logo.jpg" />
        <img class="img j-logo img-responsive img-thumbnail" width="150px"  src="images/jashan_sbs_2015_logo.jpg"/>
    </div>
    <div class="col-md-6 countdown-head">
    <h1 style="color:#fff">CountDOwn</h1>
    	<!-- PLease insert countdown here -->
        <h3 style="color:#fff">*Insert countdown</h3>
         
     </div>
    <div class="col-md-6 pictureotday-head">
    	<div class="pictureotday" >
        	<div class="text-heading">
            	<h3 class=" panel-heading text-muted">Picture of the Day</h3>
             </div>
        </div>
    </div>
    <div class="col-md-6 sched-head">
    	<h1>Schedule</h1>
        <p>
        	<ul>
            	<li>Practices</li>
                <li>final Show</li>
            	<li>Practices</li>
                <li>final Show</li>
            	<li>Practices</li>
                <li>final Show</li>
            	<li>Practices</li>
                <li>final Show</li>
            	<li>Practices</li>
                <!-- all the data will be fetched from the server  -->
            </ul>
        </p>
    </div>
    <a href="#section1"><h1 style="margin-top:10%" class="alert-info">Go down <i class="glyphicon glyphicon-arrow-down"></i></h1></a>
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

          <li class="dropdown sec4cont">
            <a class="dropdown-toggle sec4" data-toggle="dropdown-menu">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu" >
              <li><a href="#section4a">section4a</a></li>
              <li><a href="#section4b">section4b</a></li>
              <li><a href="#section4c">section4c</a></li>
              <li><a href="#section4d">section4d</a></li>
              <li><a href="#section4e">section4e</a></li>
              <li><a href="#section4f">section4f</a></li>
            </ul>
          </li>
          <li><a href="#section5">Two 2</a></li>
          <li><a href="#section6">Three 3</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  
<!-- Begin page content -->
<div class=" divider-hidden" id="section1"></div>
  
<div class="container">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header text-center">
      <h1>Home</h1>
    </div>
    
    <p class="lead text-center"> 
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 
    
    <hr>
    
    
    
  </div>
</div>
    

  
<div class="divider" id="section2"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>News</h1>
      
      <hr>
     
    <p class="lead text-center"> 
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 
      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->

<div class="divider" id="section3"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Gallery</h1>
      
      <hr>
     
    <p class="lead text-center"> 
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 
    
    	<div class="row">
    <?php
$sql = "SELECT * FROM `jashn_1_images`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="IMAGE'.$row['id'].'"><img src="'.$row['img_url'].'" class="img-responsive"></a></div>
          <div class="panel-body">
            <p></p>
            
          </div>
        </div><!--/panel--> 
      </div><!--/col-->';
      
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
$conn->close();
?>

      
	</div><!--/row-->

      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->


  
  
<div class="divider" id="section4"></div>

<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Dropdown</h1>
      
      <hr>
      
     
    <p class="lead text-center divider-hidden" id="section4a">
     	<h2>Section 4'a </h2>
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 
        <p class="lead text-center divider-hidden" id="section4b">
     	<h2>Section 4'b </h2>
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 

    <p class="lead text-center divider-hidden" id="section4c">
     	<h2>Section 4'c </h2>
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 
    <p class="lead text-center divider-hidden" id="section4d">
     	<h2>Section 4'd </h2>
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 
    <p class="lead text-center divider-hidden" id="section4e">
     	<h2>Section 4'e </h2>
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 
    <p class="lead text-center divider-hidden" id="section4f">
     	<h2>Section 4'f </h2>
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 

      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->


  
<div class="divider" id="section5"></div>  

<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>PART2</h1>
      
      <hr>
     
    <p class="lead text-center"> 
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 
      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->



<div class="divider" id="section6"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>PART3</h1>
      
      <hr>
     
    <p class="lead text-center"> 
      This is all about US reoiunboew  orewijg oernke ekrs vejrgnviekrgn skjr dsej dbivebdgvjekr dv hebghjebvj ejhrbgjhg ejh jh h  gh gejhr gejhr g [Fill in things about what you want to ]
    </p> 
      
      <hr>
      
      
      
  	</div><!--/col-->
</div><!--/container-->



  
  
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted" style="color:#670F10">Made by - </p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>




        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
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