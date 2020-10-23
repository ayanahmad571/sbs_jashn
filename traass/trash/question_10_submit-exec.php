<?php session_start(); ?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php 
date_default_timezone_set('Asia/Kolkata');

?>
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


if(isset($_SESSION['SESS_ID'])){
	if(isset($_SESSION['SESS_ID_TIME_HASH'])){
		if(isset($_SESSION['HOUSE'])){
			if(isset($_SESSION['ADMISSION_NUMBER'])){
				if(isset($_SESSION['CLASS_NUMBER'])){
					if(isset($_SESSION['CLASS_SECTION'])) {
						if(isset($_SESSION['STU_NAME'])){
							if(isset($_SESSION['STU_DOB'])) {
								if(isset($_SESSION['TIME_HASH'])) {
									if(isset($_SESSION['START_QUIZ'])){
										if(isset($_POST['sys_id'])){
											if(isset($_POST['stu_answer'])){
												
												$stuanswer_clean = $conn->escape_string($_POST['stu_answer']);
												$queid_clean = $conn->escape_string(base64_decode($_POST['sys_id']));
												echo 'You input was  '.$stuanswer_clean;
												$startday = 12;
												$day= (date('d')-$startday);
												
												$sql = "SELECT count(*) FROM `answers` WHERE  `q_id`='".$queid_clean."' and `stu_id`='".$_SESSION['ADMISSION_NUMBER']."'"
												
												if ($result->num_rows > 0) {
													// output data of each row
													echo "You have already answered this question.";
													} else {
													echo "0 results";
													
												$sql = "INSERT INTO `answers`(`id`, `q_id`, `stu_id`, `stu_name`, `stu_house`, `stu_class`, `stu_section`, `stu_dob`, `answer`, `day`, `marks`, `stu_session_hash`, `time`, `ip`) VALUES 
																				(NULL,".$queid_clean.",".$_SESSION['ADMISSION_NUMBER'].",".$_SESSION['STU_NAME'].",".$_SESSION['HOUSE'].",".$_SESSION['CLASS_NUMBER'].",".$_SESSION['CLASS_SECTION'].",".$_SESSION['STU_DOB'].",".$stuanswer_clean.",".$day.",NULL,".$_SESSION['SESS_ID'].",CURRENT_TIMESTAMP,".$_SERVER['REMOTE_ADDR'].")";

														if ($conn->query($sql) === TRUE) {
															echo "New record created successfully";
														} else {
															echo "Error: " . $sql . "<br>" . $conn->error;
														}


													}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
}

?>