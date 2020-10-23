<?php 
include('conn.php');
?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/needs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<?php 
$tablename= 'qotd';
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

$sql = "SELECT * FROM ".$tablename."";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							if($columns == 5){
							echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							<td>'. $row["$col[1]"].'</td>
							<td>'. $row["$col[2]"]. '</td>
							<td>'.$row["$col[3]"].'</td>
							<td>'.$row["$col[4]"].'</td>
							</tr>';
							}
							if($columns == 6){
							echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							<td>'. $row["$col[1]"].'</td>
							<td>'. $row["$col[2]"]. '</td>
							<td>'.$row["$col[3]"].'</td>
							<td>'.$row["$col[4]"].'</td>
							<td>'.$row["$col[5]"].'</td>
							</tr>';
							}
							if($columns == 4){
								echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							<td>'. $row["$col[1]"].'</td>
							<td>'. $row["$col[2]"]. '</td>
							<td>'.$row["$col[3]"].'</td>
							</tr>';
							}
							if($columns == 3){
								echo  '<tr>
							<td>'.$row["$col[0]"].'</td>
							<td>'. $row["$col[1]"].'</td>
							<td>'. $row["$col[2]"]. '</td>
							</tr>';
							}
						}
						echo'</tbody></table>'; 
					} else {
						echo "0 results";
					}
					
?>