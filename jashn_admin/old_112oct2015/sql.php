  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/needs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php 
include('conn.php');
?>
<div class="row">
	<div class="col-md-12">
    	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        	 <input type="text" name="tablename" placeholder="tablename" /><br>
             <textarea name="query" placeholder="Enter FULL SELECT Query" cols="210" rows="15"></textarea><br>
             <input type="submit" name="submit" />
		</form>
	</div>
</div>
<?php 
if(!isset($_POST['query'])){die();}
if(!isset($_POST['tablename'])){die();}
if(isset($_POST['query'])){
	
	
	if(!strpos($_POST['query'],$_POST['tablename'])){
		die("The Query You entered Doesn't have the Table name or vice versa");
		}
	
	$tablename= $_POST['tablename'];
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
							$columns = count($col);

						}
						echo '</tr>';
					} else {
						echo "0 results";
					}

$sql = $_POST['query'];
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							sqlfetch($columns,$col,$row);
						}
						echo'</tbody></table>'; 
					} else {
						echo "0 results";
					}
	
	
	
	
	
	
	
	
	
	
	
	} ?>



