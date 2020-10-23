<?php include('conn.php'); ?>
<?php $columns =  getnames('guestart',$conn); 
?>
<?php if(isset($_GET['botd'])){
	
	$sql = "INSERT INTO botd (id,head,byname,content)
 VALUES ('".$_POST['0']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	
	
	} ?>
<?php if(isset($_GET['gallery'])){
	
	$sql = "INSERT INTO gallery (id,imgsrc,about,extra,day )
 VALUES ('".$_POST['0']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['4']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	
	} ?>
<?php if(isset($_GET['news'])){
	$sql = "INSERT INTO news (id,byname,head,content )
 VALUES ('".$_POST['0']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_GET['jashn_1_images'])){
	
	$sql = "INSERT INTO jashn_1_images (id,img_url,ip,extra,time )
 VALUES ('".$_POST['0']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['4']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_GET['qotd'])){
	
	$sql = "INSERT INTO qotd (id,ans,question,extra )
 VALUES ('".$_POST['0']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_GET['guestart'])){
	
	$sql = "INSERT INTO guestart (id,guart_head,guart_cont,extra )
 VALUES ('".$_POST['0']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


