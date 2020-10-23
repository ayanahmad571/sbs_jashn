      <?php session_start() ?>
	  <?php if(!isset($_SESSION['ID'])){ header('Location: logout.php');} ?>
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
<?php 
function sqlfetch($columnumber,$col,$row){
					if($columnumber == 5){
							echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							<td>'. $row["$col[1]"].'</td>
							<td>'. $row["$col[2]"]. '</td>
							<td>'.$row["$col[3]"].'</td>
							<td>'.$row["$col[4]"].'</td>
							</tr>';
							}
							if($columnumber == 6){
							echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							<td>'. $row["$col[1]"].'</td>
							<td>'. $row["$col[2]"]. '</td>
							<td>'.$row["$col[3]"].'</td>
							<td>'.$row["$col[4]"].'</td>
							<td>'.$row["$col[5]"].'</td>
							</tr>';
							}
							if($columnumber == 4){
								echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							<td>'. $row["$col[1]"].'</td>
							<td>'. $row["$col[2]"]. '</td>
							<td>'.$row["$col[3]"].'</td>
							</tr>';
							}
							if($columnumber == 3){
								echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							<td>'. $row["$col[1]"].'</td>
							<td>'. $row["$col[2]"]. '</td>
							</tr>';
							
							}
							
							if($columnumber == 2){
								echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							<td>'. $row["$col[1]"].'</td>
							</tr>';
							
							}
							if($columnumber == 1){
								echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							</tr>';
							
							}
							
	}
	
	
	function sqlfetchinsert($columnumber,$col){
					if($columnumber == 5){
							echo  '<tr>
							<td><input name="0" placeholder="'.$col[0].'" /></td>
							<td><input name="1" placeholder="'.$col[1].'" /></td>
							<td><input name="2" placeholder="'.$col[2].'" /></td>
							<td><input name="3" placeholder="'.$col[3].'" /></td>
							<td><input name="4" placeholder="'.$col[4].'" /></td>
							</tr>';
							}
							if($columnumber == 6){
							echo  '<tr>
							<td><input name="0" placeholder="'.$col[0].'" /></td>
							<td><input name="1" placeholder="'.$col[1].'" /></td>
							<td><input name="2" placeholder="'.$col[2].'" /></td>
							<td><input name="3" placeholder="'.$col[3].'" /></td>
							<td><input name="4" placeholder="'.$col[4].'" /></td>
							<td><input name="5" placeholder="'.$col[5].'" /></td>
							</tr>';
							}
							if($columnumber == 4){
								echo  '<tr>
							<td><input name="0" placeholder="'.$col[0].'" /></td>
							<td><input name="1" placeholder="'.$col[1].'" /></td>
							<td><input name="2" placeholder="'.$col[2].'" /></td>
							<td><input name="3" placeholder="'.$col[3].'" /></td>
							</tr>';
							}
							if($columnumber == 3){
								echo  '<tr>
							<td><input name="0" placeholder="'.$col[0].'" /></td>
							<td><input name="1" placeholder="'.$col[1].'" /></td>
							<td><input name="2" placeholder="'.$col[2].'" /></td>
							</tr>';
							
							}
							
							if($columnumber == 2){
								echo  '<tr>
							<td><input name="0" placeholder="'.$col[0].'" /></td>
							<td><input name="1" placeholder="'.$col[1].'" /></td>
							</tr>';
							
							}
							if($columnumber == 1){
								echo  '<tr>
							<td><input name="0" placeholder="'.$col[0].'" /></td>
							</tr>';
							
							}
							
	}

 function getnames($tablename,$conn){
	 
	 $sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							echo ','.$rowcol['Field'];
							$col[] = $rowcol['Field'];
							$columns = count($col);
							 

						}
					} else {
						echo "0 results";
					}

 }
?>
