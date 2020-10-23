<?php
$servername = "localhost";
$username = "root";
$password = "";
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
function compress($source, $destination, $quality, $conn) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);
	$sql = "INSERT INTO gallery (`id`, `imgsrc`, `about`,`extra`)
VALUES ('', '".$destination."', '', 'EXTRA')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    return $destination;
}


$dirname = "/";
$images = glob($dirname."*.JPG");
foreach($images as $image) {
compress($image, 'new/'.$image, 50,$conn);
}

?>