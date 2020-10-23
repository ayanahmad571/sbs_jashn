<?php include('conn.php'); ?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/needs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php 
$tablenames= array('botd','gallery','guestart','jashn_1_images','news','qotd','interview','headings');
foreach($tablenames as $tablename){
$sqlcol = "SHOW COLUMNS FROM `".$tablename."`";
					$resultcol = $conn->query($sqlcol);
					
					if ($resultcol->num_rows > 0) {
						// output data of each row
						echo '<form action="insert-exec.php?'.$tablename.'" method="post"><div align="center"><h2>'.$tablename.'</h2></div>';
						echo '<table class="table table-bordered"><tbody>';
						echo '<tr>
						
						';
						$col = array(); 
						while($rowcol = $resultcol->fetch_assoc()) {
							echo  "<th>".$rowcol['Field']."</th>";
							$col[] = $rowcol['Field'];
							$columns = count($col);
							
						}
						echo sqlfetchinsert($columns,$col).'</tr></tbody></table><input type="submit" /></form>';
					} else {
						echo "0 results";
					}
}
?>