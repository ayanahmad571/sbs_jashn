
<?php 
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jashn Admin-AYAN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/needs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
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
<?php
$sql = "SHOW TABLES FROM jashn";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a href='?table=".$row['Tables_in_jashn']."'><button class='button-href'>".$row['Tables_in_jashn']."</button></a>";
    }
} else {
    echo "0 results";
}
?> <a href='sql.php'><button class='button-href'>Run query</button></a><a href='insert.php'><button class='button-href'>Insert </button></a>
          
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
    
</div><!--/.navbar -->
<div class="container">
	<div class="row">
    	<?php if(isset($_GET['table'])){
		if($_GET['table'] == 'botd'){
												$sqlcol = "SHOW COLUMNS FROM `botd`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						echo '<table class="table table-bordered"><tbody>';
						echo '<tr>
						
						';
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							echo  "<th>".$rowcol['Field']."</th>";
							$col[] = $rowcol['Field'];
						}
						echo '</tr>';
					} else {
						echo "0 results";
					}

$sql = "SELECT * FROM botd";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							sqlfetch($columns,$col,$row);
						}
						echo'</tbody></table>'; 
					} else {
						echo "0 results";
					}
					
											}
		if($_GET['table'] == 'gallery'){


												$tablename= 'gallery';
$columns = "5";
$sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						echo '<table class="table table-bordered"><tbody>';
						echo '<tr>
						
						';
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							echo  "<th>".$rowcol['Field']."</th>";
							$col[] = $rowcol['Field'];
						}
						echo '</tr>';
					} else {
						echo "0 results";
					}

$sql = "SELECT * FROM ".$tablename."";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							sqlfetch($columns,$col,$row);
						}
						echo'</tbody></table>'; 
					} else {
						echo "0 results";
					}
											}
		if($_GET['table'] == 'guestart'){




												$tablename= 'guestart';
$columns = "4";
$sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						echo '<table class="table table-bordered"><tbody>';
						echo '<tr>
						
						';
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							echo  "<th>".$rowcol['Field']."</th>";
							$col[] = $rowcol['Field'];
						}
						echo '</tr>';
					} else {
						echo "0 results";
					}

$sql = "SELECT * FROM ".$tablename."";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							sqlfetch($columns,$col,$row);
						}
						echo'</tbody></table>'; 
					} else {
						echo "0 results";
					}
											}
		if($_GET['table'] == 'news'){




												$tablename= 'news';
$columns = "4";
$sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						echo '<table class="table table-bordered"><tbody>';
						echo '<tr>
						
						';
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							echo  "<th>".$rowcol['Field']."</th>";
							$col[] = $rowcol['Field'];
						}
						echo '</tr>';
					} else {
						echo "0 results";
					}

$sql = "SELECT * FROM ".$tablename."";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							sqlfetch($columns,$col,$row);
						}
						echo'</tbody></table>'; 
					} else {
						echo "0 results";
					}
											}

if($_GET['table'] == 'qotd'){


$tablename= 'qotd';
$columns = "4";
$sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						echo '<table class="table table-bordered"><tbody>';
						echo '<tr>
						
						';
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							echo  "<th>".$rowcol['Field']."</th>";
							$col[] = $rowcol['Field'];
						}
						echo '</tr>';
					} else {
						echo "0 results";
					}

$sql = "SELECT * FROM ".$tablename."";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							sqlfetch($columns,$col,$row);
						}
						echo'</tbody></table>'; 
					} else {
						echo "0 results";
					}
											}


	} ?>
    </div>
</div>

</body>
</html>
