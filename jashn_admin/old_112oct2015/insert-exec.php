<?php include('conn.php'); ?>
<?php #givepost('news',$conn); 
?>
<?php  if(isset($_GET['botd'])){
	
	$sql = "INSERT INTO botd (".getnames('botd',$conn)." )
 VALUES (".givepost('botd',$conn,$_POST).")";

dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	
	
	} ?>
<?php if(isset($_GET['gallery'])){
	
	$sql = "INSERT INTO gallery (".getnames('gallery',$conn)." )
 VALUES (".givepost('gallery',$conn,$_POST).")";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	
	} ?>
<?php if(isset($_GET['news'])){
	$sql = "INSERT INTO news (".getnames('news',$conn)." )
 VALUES (".givepost('news',$conn,$_POST).")";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_GET['jashn_1_images'])){
	
	$sql = "INSERT INTO jashn_1_images (".getnames('jashn_1_images',$conn)." )
 VALUES (".givepost('jashn_1_images',$conn,$_POST).")";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_GET['qotd'])){
	
	$sql = "INSERT INTO qotd (".getnames('qotd',$conn)." )
 VALUES (".givepost('qotd',$conn,$_POST).")";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_GET['guestart'])){
	
	$sql = "INSERT INTO guestart (".getnames('guestart',$conn)." )
 VALUES (".givepost('guestart',$conn,$_POST).")";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


<?php if(isset($_GET['interview'])){
	
	$sql = "INSERT INTO interview (".getnames('interview',$conn)." )
 VALUES (".givepost('interview',$conn,$_POST).")";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


<?php if(isset($_GET['headings'])){
	
	$sql = "INSERT INTO headings (".getnames('headings',$conn)." )
 VALUES (".givepost('headings',$conn,$_POST).")";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


