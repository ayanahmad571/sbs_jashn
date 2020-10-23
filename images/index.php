<?php if(!isset($_GET['doit'])){die('Lo siento, no puedes ver este pagina');} ?>
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
function compress($source, $destination, $conn,$x) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, 100);
		$sql = "INSERT INTO gallery (`id`, `imgsrc`, `about`,`extra`,`day`)
VALUES ('".$x."', '".$destination."', '', 'EXTRA','10')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



    return $destination;
}


$dirname = "temp/";
$images = glob($dirname."*.JPG");
$x=63;
foreach($images as $image) {
compress($image, 'd10/IMG_'.rand(123456789,987654321).'.JPG',$conn,$x);
$x++;
}

?>