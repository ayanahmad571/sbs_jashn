<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
$servername = "172.16.0.38";
$username = "jashn";
$password = "jashnjashn1234";
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




.tdaycont {
	
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

  <link rel="stylesheet" href="css/needs.css">
        
    </head>
    
    
    <body onLoad="setInterval(myCounter, 1000)"  >

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
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">News</a></li>
          <li><a href="#section3">Gallery</a></li>
          <li><a href="#sectionpotd">Q' of the Day</a></li>

          <li class="dropdown sec4cont">
            <a href='#section4' class="dropdown-toggle sec4" data-toggle="dropdown-menu">Guest Artists<b class="caret"></b></a>
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
          <li><a href="#section6">Schedule</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
    
</div><!--/.navbar -->


</header>
	<div style="padding:0;padding-top: 20px;" id="wrap">


<!-- Begin page content -->
<div class=" div" id="section1"></div>
  
<div class="container">
  
<div class="row">

			<div class=" col-md-7">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<?php                      $dir = "images/pot/*.{jpg,JPG}";

	// Open a known directory, and proceed to read its contents
	$x = 0;
	foreach(glob($dir,GLOB_BRACE) as $file) 
	{
		if($x!=0){
		echo '			<li data-target="#myCarousel" data-slide-to="'.$x.'"></li>
';
						$x++;
		}else{ echo'
			<li data-target="#myCarousel" data-slide-to="'.$x.'" class="active"></li>';
						$x++;
			
			}
	}
?>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<?php                      $dir = "images/pot/*.{jpg,JPG}";

	// Open a known directory, and proceed to read its contents
	$x = 1;
	foreach(glob($dir,GLOB_BRACE) as $file) 
	{
		if($x!=1){
		echo '<div class="item ">
						  <img src="'.$file.'" alt="Pic'.$x.'">
						   <div class="carousel-caption">
							<h3>Picture of the day</h3>
							<p style="text-align:center">Day '.$x.'</p>
						  </div>
						</div>';
						$x++;
		}else{ echo'
			<div class="item active ">
						  <img src="'.$file.'" alt="Pic'.$x.'">
						  <div class="carousel-caption">
							<h3>Picture of the day</h3>
							<p style="text-align:center">Day '.$x.'</p>
						  </div>
						</div>';
						$x++;
			
			}
	}
?>


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
			            <h2 ><strong>A Byte of the Day</strong></h2>
									<p>
										
											 <?php
								   $sql = "SELECT * FROM botd ORDER BY `id` DESC LIMIT 2";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
											echo '<div>
											<h4><u>'.$row['head'].'</u></h4>
											
											<p align="justify">
										   '.$row['content'].'
											</p><h6 ><i>-'.$row['byname'].'</i></h6>
										  </div>'
									;
								}
							} else {
								echo "Well, no Bytes are available at this moment";
							}
							?> 
											
										
							  </p>
					</div>
					</div>

    
    
    
    
  </div>
   <div class='row'>
  <div class="col-sm-12">
    <script>
		var back = [<?php
		$filenames = array();
    foreach(glob('codes/*.txt') as $file)   
    {  
	
	    $file = str_replace(".txt",'',$file);
		$code = str_replace("codes/",'',$file);
       
	    $exploded = explode(',',$code);     
		$filenames[] = '"#'.$exploded[0].'"';
		
    }  
	echo implode(",",$filenames);
?>];


		setInterval(myCounter, 1000)
		
	
function myCounter() {
	
	var rand = back[Math.floor(Math.random() * back.length)];
        $(".threedaycontent").delay(100).css("color", rand);
   
}

	
	 </script>
    <p class="lead text-center"> 
     <h2 ><strong class="threedaycontent">WIN! WIN! WIN! <BR>Three Day Contest</strong></h2><BR>
	 
<p>


</p>
<P align="justify"> Well, folks there is a chance that you might get a free parikrama pass from the school. But you must take part in the contest in order to win a parikrama pass.<br>
Procedure:-
<div class="row">

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">1.</div><div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">Winners will be announced daily and the winner may collect his/her pass from the reception. Each day one winner will be announced based on the previous day's results. </div>

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">2.</div><div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">You will be given any random question from Jashn'15's Website.</div>


<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">3.</div><div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">You will to choose the answer from the from a time based 10 question portal. </div>


<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">4.</div><div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">The first one to score a 10 or 9 will get a free parikrama pass or on demand two also. </div>

 
 </div><br>

    Best of luck. Click below to answer a few question.

 </P>

<form action="dailycontest.php" method="post"><p align="justify">
<input type="hidden" name="start_quiz" value="<?php echo md5(time()); ?>" />
<button type="submit" class="btn btn-default">Proceed<span class="glyphicon glyphicon-chevron-right"></span></button>
</p></form> <br>
</p>
</div>
  </div>
  
  <div class='row'>
  <div class="col-sm-12">
    
    <p class="lead text-center"> 
      <h2><strong>About Jashn</strong></h2>

<P align="justify"><b>Jashn SBS 2015</b>- a first for our school, celebrates the performing arts - dance, music and drama. It brings together the creative voices of our students, showcasing some of their original works and invites professional artists in the field to inspire our students to create, perform and celebrate.</P>

<p align="justify">This festival is organized to  provide a platform for our students to show case their talent. It will also help us raise funds for our initiative <b>SBS Sahyog</b> - for transformative learning through community work. Students of SBS are helping to rehabilitate some villages in Uttarakhand and have started with their first project 'Dairy Farming'. </p> <br>
</p>
</div>
  </div>
  
  </div>
<hr>

    

  
<div class="divider" id="section2"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h2><strong>News</strong></h2>

      <hr>
     
    <p class="lead text-center"> 



      <?php
	  	   $sql = "SELECT * FROM news ORDER BY id desc";
$result = $conn->query($sql);

	  if ($result->num_rows > 0) {
    // output data of each row
	echo '<div class="panel-group" id="accordionnews">
';
    while($row = $result->fetch_assoc()) {
        echo /*<div class="one-half column news-article">
      	<h3 align="center">'.$row['head'].'</h3>
        <h6 align="center"><i>'.$row['byname'].'</i></h6>
        <p align="justify">
       '.$row['content'].'
        </p>
      </div>
	  */'
	  <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordionnews" href="#collapsenews'.$row['id'].'">
	  <div style="text-align:left; text-decoration:none;color:black; background-color:#CCCCCC;" class=" panel-heading">
        <h3 class="panel-title">
		<strong>
          '.$row['head'].'
		  </strong>
        </h3>
		        <h6 align="left"><i>'.$row['byname'].'</i></h6>

      </div>
	  </a>
      <div id="collapsenews'.$row['id'].'" class="panel-collapse collapse">
        <div class=""><p class="" align="justify">
       '.$row['content'].'<br>
        </p></div>
      </div>
    </div>';
    }
} else {
    echo "0 results";
}

?>




      <?php
	   #$sqlcomtent = "SELECT byname, heading_name, sname, content FROM headings h, interview i WHERE h.ID = i.heading_id ";
	   $sql = "SELECT * FROM headings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '
		<div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordionnews" href="#collapseinterview'.$row['ID'].'">
	  <div style="text-align:left; text-decoration:none;color:black;background-color:#CCCCCC;" class=" panel-heading">
		<h3 class="panel-title" align="left"><strong>'.$row['heading_name'].'</strong></h3>
        <h6 align="left"><i>'.$row['byname'].'</i></h6></div>
	  </a><div id="collapseinterview'.$row['ID'].'" class="panel-collapse collapse">
        <div class=""><p align="justify">';
		
									$sqlint = "SELECT * FROM interview WHERE heading_id='".$row['ID']."'";
									$resultint = $conn->query($sqlint);

									if ($resultint->num_rows > 0) {
										// output data of each row
										while($rowint = $resultint->fetch_assoc()) {
											echo '<div class="row">
																		<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
																		<strong>'.$rowint['sname'].'</strong>
																		</div>
																		
																		
																		<div align="center" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
																		<strong>:</strong>
																		</div>
																		
																		
																		<div align="justify" class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
																		'.$rowint['content'].'
																		</div>

																		</div>	  
																	  ';
										}
									} else {
										echo "0 results";
									}    
									
					echo'<br></p></div>
      </div>
    </div>';}

	echo "</div>";
} else {
    echo "0 results";
}
?>

      
    </p> 
      
     
      
      
      
  	</div><!--/col-->
</div><!--/container-->
 <hr>
<div class="divider" id="section3"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h2><strong>Gallery</strong></h2>
      
    <hr>
     
    
    	<div class="row">
        
        <!--<div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="image"><img src="//placehold.it/600x400/444/F8F8F8" class="img-responsive"></a></div>
        </div><!--/panel
      </div> -->
      
      <?php
	  $times = 0;
	   $sql = "SELECT * FROM `gallery` GROUP BY `day` 	HAVING `id`= MIN(`id`)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    // output data of each row
	echo '<div class="row">';
    while($row = $result->fetch_assoc()) {
		$filename= 'images/d'.$row['day'] ;
		if (file_exists($filename)) {
			
		
		if ($times % 3 == 0)
    {
         
        
        echo'</div><div class="row">';
		
    }
        echo '
		<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a onClick="location.href= \'gallery.php?day='.$row['day'].'\'" href="images/'.$row['imgsrc'].'" title="'.$row['day'].'"><img src="images/'.$row['imgsrc'].'" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Day '.$row['day'].'</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> ';
	  $times ++;
	  } else {
			
			 $times ++;
		}
    }
	echo '</div>';
} else {
    echo '<h1>There is some Error. Error Code #68D4354JDE</h1>';
}
?>
      
	</div><!--/row-->

      
      
      
      
      
  	</div><!--/col-->
</div><!--/container-->
<hr>
  
  <div class="divider" id="sectionpotd"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h2><strong>Question of the Day</strong></h2>
      
     
    <p class="lead text-center"> 
    <p class="text-info">
    Click on the Question to reveal the Answer
    </p>
          <?php
	   $sql = "SELECT * FROM qotd ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo '<div class="panel-group" id="accordionqotd">';
    while($row = $result->fetch_assoc()) {
        echo /*<p>
            <button class="questionotdbtn" role="button" data-toggle="collapse" href="#collapse'.$row['id'].'" aria-controls="collapseExample">
             '.$row['question'].'
            </button>
            <div class="collapse" id="collapse'.$row['id'].'">
              <div class="well">
                '.$row['ans'].'
              </div>
            </div>
         </p>*/
		 
		 
		 
	'
    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordionqotd" href="#collapseqotd'.$row['id'].'">
	  <div style="text-align:center" class="panel-heading questionotdbtn">
        <h4 class="panel-title">
          '.$row['question'].'
        </h4>
      </div>
	  </a>
      <div id="collapseqotd'.$row['id'].'" class="panel-collapse collapse">
        <div class="panel-body">'.$row['ans'].'</div>
      </div>
    </div>

		 
		 
		 
		 
		 ';
    }
	echo '</div>';
} else {
    echo '';
}

?>
      


    </p> 
      
      
      
      
      
  	</div><!--/col-->
</div><!--/container-->
<hr>
<div class="divider" id="section4"></div>

<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h2><strong>Guest Artists</strong></h2>
      
      <HR>
     
    
<?php
	   $sql = "SELECT * FROM guestart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<p class="lead text-center divider-hidden-gui" id="guestartist'.$row['id'].'">
     	<h2>'.ucwords(strtolower($row['guart_head'])).'</h2>
      '.$row['guart_cont'].'
    </p> ';
    }
} else {
    echo "0 results";
}
?>
      
     
      
      
      
  	</div><!--/col-->
</div><!--/container-->
 <hr>

  
<div class="divider" id="section5"></div>  

<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h2><strong>Sponsors</strong></h2>
      
      <hr>
     
    <p class="lead text-center"> 
      <div class='row'>
	  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	  1.
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  Shreyash Nigam
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  Rs.10,000
	  </div>
	  </div>
	  
	  
	  <div class='row'>
	  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	  2.
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  Himmaj Soni
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  Rs.10,000
	  </div>
	  </div>
	  
	  <div class='row'>
	  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	  3.
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  Diva Dutta
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  Rs.10,000
	  </div>
	  </div>
	  
	  <div class='row'>
	  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	  4.
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  Aanish Sachdev 
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  Rs.10,000
	  </div>
	  </div>
    </p> 
      
      
      
      
      
  	</div><!--/col-->
</div><!--/container-->
<hr>


<div class="divider" id="section6"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h2><strong>Schedule</strong></h2>
      
      <hr>
     
    <p class="lead text-center"> 
	<p style="float:left"><a href="images/day1_sc.png"><img style='width:100%' class='img-responsive' src="images/day1_sc.png" /></a></p>
	<p style="float:left"><a href="images/day2_sc.png"><img style='width:100%' class='img-responsive' src="images/day2_sc.png" /></a></p>
    </p> 
      
     
      
      
      
  	</div><!--/col-->
</div><!--/container-->


  
  

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
			
			$('#myCarousel').carousel({
  interval: 3000,
  cycle: true
}); 

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