      <?php session_start() ?>
	  <?php if(!isset($_SESSION['ID'])){ header('Location: logout.php');} ?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>

	  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jashn";
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
							<td><textarea name="0" placeholder="'.$col[0].'" ></textarea></td>
							<td><textarea name="1" placeholder="'.$col[1].'" ></textarea></td>
							<td><textarea name="2" placeholder="'.$col[2].'" ></textarea></td>
							<td><textarea name="3" placeholder="'.$col[3].'" ></textarea></td>
							<td><textarea name="4" placeholder="'.$col[4].'" ></textarea></td>
							</tr>';
							}
							if($columnumber == 6){
							echo  '<tr>
							<td><textarea name="0" placeholder="'.$col[0].'" ></textarea></td>
							<td><textarea name="1" placeholder="'.$col[1].'" ></textarea></td>
							<td><textarea name="2" placeholder="'.$col[2].'" ></textarea></td>
							<td><textarea name="3" placeholder="'.$col[3].'" ></textarea></td>
							<td><textarea name="4" placeholder="'.$col[4].'" ></textarea></td>
							<td><textarea name="5" placeholder="'.$col[5].'" ></textarea></td>
							</tr>';
							}
							if($columnumber == 4){
								echo  '<tr>
							<td><textarea name="0" placeholder="'.$col[0].'" ></textarea></td>
							<td><textarea name="1" placeholder="'.$col[1].'" ></textarea></td>
							<td><textarea name="2" placeholder="'.$col[2].'" ></textarea></td>
							<td><textarea name="3" placeholder="'.$col[3].'" ></textarea></td>
							</tr>';
							}
							if($columnumber == 3){
								echo  '<tr>
							<td><textarea name="0" placeholder="'.$col[0].'" ></textarea></td>
							<td><textarea name="1" placeholder="'.$col[1].'" ></textarea></td>
							<td><textarea name="2" placeholder="'.$col[2].'" ></textarea></td>
							</tr>';
							
							}
							
							if($columnumber == 2){
								echo  '<tr>
							<td><textarea name="0" placeholder="'.$col[0].'" ></textarea></td>
							<td><textarea name="1" placeholder="'.$col[1].'" /></td>
							</tr>';
							
							}
							if($columnumber == 1){
								echo  '<tr>
							<td><textarea name="0" placeholder="'.$col[0].'" ></textarea></td>
							</tr>';
							
							}
							
	}

	function sqlfetchselect($columnumber,$col,$tablename,$conn){
		$sql = "SELECT * FROM ".$tablename;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
		
					if($columnumber == 5){
							while($row = mysqli_fetch_row($result)) {
				echo  '<form action="update-exec.php" method="post">
							<tr>
							<td><textarea name="0" placeholder="'.$col[0].'">'.$row[0].'</textarea></td>
							
							<td><textarea name="1" placeholder="'.$col[1].'">'.$row[1].'</textarea></td>
							<td><textarea name="2" placeholder="'.$col[2].'">'.$row[2].'</textarea></td>
							<td><textarea name="3" placeholder="'.$col[3].'">'.$row[3].'</textarea></td>
							<td><textarea name="4" placeholder="'.$col[4].'">'.$row[4].'</textarea>
							<input name="'.$col[0].'" value="'.$row[0].'" type="hidden" /><input type="hidden" name="'.$tablename.'" value="" /><input type="submit" name="submit" /></td>
							</tr>
							</form>';
			}
			
							}
							if($columnumber == 6){
							while($row = mysqli_fetch_row($result)) {
				echo  '<form action="update-exec.php" method="post">
							<tr>
							<td><textarea name="0" placeholder="'.$col[0].'">'.$row[0].'</textarea></td>
							<td><textarea name="1" placeholder="'.$col[1].'">'.$row[1].'</textarea></td>
							<td><textarea name="2" placeholder="'.$col[2].'">'.$row[2].'</textarea></td>
							<td><textarea name="3" placeholder="'.$col[3].'">'.$row[3].'</textarea></td>
							<td><textarea name="4" placeholder="'.$col[4].'">'.$row[4].'</textarea></td>
							<td><textarea name="5" placeholder="'.$col[5].'">'.$row[5].'</textarea>
							<input name="'.$col[0].'" value="'.$row[0].'" type="hidden" /><input type="hidden" name="'.$tablename.'" value="" /><input type="submit" name="submit" /></td>
							</tr>
							</form>';
			}
							}
							if($columnumber == 4){
							while($row = mysqli_fetch_row($result)) {
				echo  '<form action="update-exec.php" method="post">
							<tr>
							<td><textarea name="0" placeholder="'.$col[0].'">'.$row[0].'</textarea></td>
							<td><textarea name="1" placeholder="'.$col[1].'">'.$row[1].'</textarea></td>
							<td><textarea name="2" placeholder="'.$col[2].'">'.$row[2].'</textarea></td>
							<td><textarea name="3" placeholder="'.$col[3].'">'.$row[3].'</textarea>
							<input name="'.$col[0].'" value="'.$row[0].'" type="hidden" /><input type="hidden" name="'.$tablename.'" value="" /><input type="submit" name="submit" /></td>
							</tr>
							</form>';
			}
							}
							if($columnumber == 3){
							while($row = mysqli_fetch_row($result)) {
				echo  '<form action="update-exec.php" method="post">
							<tr>
							<td><textarea name="0" placeholder="'.$col[0].'">'.$row[0].'</textarea></td>
							<td><textarea name="1" placeholder="'.$col[1].'">'.$row[1].'</textarea></td>
							<td><textarea name="2" placeholder="'.$col[2].'">'.$row[2].'</textarea>
							<input name="'.$col[0].'" value="'.$row[0].'" type="hidden" /><input type="hidden" name="'.$tablename.'" value="" /><input type="submit" name="submit" /></td>
							</tr>
							</form>';
			}
							
							}
							
							if($columnumber == 2){
							while($row = mysqli_fetch_row($result)) {
				echo  '<form action="update-exec.php" method="post">
							<tr>
							<td><textarea name="0" placeholder="'.$col[0].'">'.$row[0].'</textarea></td>
							<td><textarea name="1" placeholder="'.$col[1].'">'.$row[1].'</textarea>
							<input name="'.$col[0].'" value="'.$row[0].'" type="hidden" /><input type="hidden" name="'.$tablename.'" value="" /><input type="submit" name="submit" /></td>
							</tr>
							</form>';
			}
							}
							if($columnumber == 1){
							while($row = mysqli_fetch_row($result)) {
				echo  '<form action="update-exec.php" method="post">
							<tr>
							<td><textarea name="0" placeholder="'.$col[0].'">'.$row[0].'</textarea>
							<input name="'.$col[0].'" value="'.$row[0].'" type="hidden" /><input type="hidden" name="'.$tablename.'" value="" /><input type="submit" name="submit" /></td>
							</tr>
							</form>';
			}
							
							}
							
							} else {
			echo "0 results";
		}	
							
	}


 function getnames($tablename,$conn){
	 
	 $sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							
								
							
							$col[] = $rowcol['Field'];
							$columns = count($col);
							 
						}
						$implodedcolumnnames = implode(',',$col);
						return $implodedcolumnnames;
					} else {
						echo "0 results";
					}

 }
 
 function getcolfirst($tablename,$conn){
	 
	 $sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							
								
							
							$col[] = $rowcol['Field'];
							$columns = count($col);
							 
						}
						$implodedcolumnnames = $col[0];
						return $implodedcolumnnames;
					} else {
						echo "0 results";
					}

 }

 function getcolrest($tablename,$conn,$posted){
	 
	 $sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						
						$finalcol = array();
						$x=0;
						while($rowcol = $resultcol->fetch_assoc()) {
							
								
							
							$finalcol[] = "`".$rowcol['Field']."`='".htmlspecialchars($posted[$x])."'";
							$x++;
							 
						}
						
						
						#$finalcol = array();
						#foreach($col as $colll){
						#	echo $finalcol[] = "`".$colll."`='".$posted[$colll]."'";
						#}
						$implodedfinalcol = implode(',',$finalcol);
						return $implodedfinalcol;
					} else {
						echo "0 results";
					}

 }
 

 function givepost($tablename,$conn,$posti){
	 
	 $sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						
						
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							
								
							
							$col[] = $rowcol['Field'];
							$columns = count($col);
							 
						}
						$postarray = array();
						for ($x = 0; $x < $columns; $x++) {
								 $postarray[] =   '\''.$conn->escape_string($posti[$x]).'\'' ;
							}
							$implodedposts = implode(',',$postarray);

						return $implodedposts;
					} else {
						echo "0 results";
					}

 }
 function dbug($sql){
	 #echo $sql;
	 #die();
	 	
 }
?>
