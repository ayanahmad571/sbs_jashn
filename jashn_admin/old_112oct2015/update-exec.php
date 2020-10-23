<?php include('conn.php'); ?>
<?php #givepost('news',$conn); 
?>
<?php  if(isset($_POST['botd'])){

	$tname = 'botd';
	$midsection = getcolrest($tname,$conn,$_POST);
	$sql = "UPDATE ".$tname." SET ".$midsection."
 WHERE `".getcolfirst($tname,$conn)."`='".$_POST[getcolfirst($tname,$conn)]."'";


dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
	
	} ?>
<?php if(isset($_POST['gallery'])){
	
	$tname = 'gallery';
	$midsection = getcolrest($tname,$conn,$_POST);
	$sql = "UPDATE ".$tname." SET ".$midsection."
 WHERE `".getcolfirst($tname,$conn)."`='".$_POST[getcolfirst($tname,$conn)]."'";

dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	
	} ?>
<?php if(isset($_POST['news'])){
	
	$tname = 'news';
	$midsection = getcolrest($tname,$conn,$_POST);
	$sql = "UPDATE ".$tname." SET ".$midsection."
 WHERE `".getcolfirst($tname,$conn)."`='".$_POST[getcolfirst($tname,$conn)]."'";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo $sql."<br> Record updated successfully on<br>".$tname;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_POST['jashn_1_images'])){
	
	$tname = 'jashn_1_images';
	$midsection = getcolrest($tname,$conn,$_POST);
	$sql = "UPDATE ".$tname." SET ".$midsection."
 WHERE `".getcolfirst($tname,$conn)."`='".$_POST[getcolfirst($tname,$conn)]."'";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo $sql."<br> Record updated successfully on<br>".$tname;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_POST['qotd'])){
	
	$tname = 'qotd';
	$midsection = getcolrest($tname,$conn,$_POST);
	$sql = "UPDATE ".$tname." SET ".$midsection."
 WHERE `".getcolfirst($tname,$conn)."`='".$_POST[getcolfirst($tname,$conn)]."'";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo $sql."<br> Record updated successfully on<br>".$tname;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_POST['guestart'])){
	
	$tname = 'guestart';
	$midsection = getcolrest($tname,$conn,$_POST);
	$sql = "UPDATE ".$tname." SET ".$midsection."
 WHERE `".getcolfirst($tname,$conn)."`='".$_POST[getcolfirst($tname,$conn)]."'";

dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo $sql."<br> Record updated successfully on<br>".$tname;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


<?php if(isset($_POST['interview'])){
	
	
	$tname = 'interview';
	$midsection = getcolrest($tname,$conn,$_POST);
	$sql = "UPDATE ".$tname." SET ".$midsection."
 WHERE `".getcolfirst($tname,$conn)."`='".$_POST[getcolfirst($tname,$conn)]."'";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo $sql."<br> Record updated successfully on<br>".$tname;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


<?php if(isset($_POST['headings'])){
	
	
	$tname = 'headings';
	$midsection = getcolrest($tname,$conn,$_POST);
	$sql = "UPDATE ".$tname." SET ".$midsection."
 WHERE `".getcolfirst($tname,$conn)."`='".$_POST[getcolfirst($tname,$conn)]."'";
dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo $sql."<br> Record updated successfully on<br>".$tname;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


