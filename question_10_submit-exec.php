<?php session_start(); ?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php 
date_default_timezone_set('Asia/Kolkata');

?>
<?php include("include.php"); ?>
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
												if(isset($_POST['sys_id_q_day'])){
												
												$stuanswer_clean = $conn->escape_string($_POST['stu_answer']);
												$queid_clean = $conn->escape_string(base64_decode($_POST['sys_id']));
												$queday_clean = $conn->escape_string(base64_decode($_POST['sys_id_q_day']));
												if (is_numeric ($queid_clean) and is_numeric($queday_clean)) 
													 {
													 
													 
												$startday = 13;
												$day= (date('d')-$startday);
												
												$sql = "SELECT count(*) FROM `answers` WHERE  `q_id`='".$queid_clean."' and `stu_id`='".$_SESSION['ADMISSION_NUMBER']."'";
												
												$result = $conn->query($sql);
												if ($result->num_rows > 0/*code dode */) {
													$row = $result->fetch_assoc();
													
													if($row['count(*)'] == 0){
														
														
														$sql = "INSERT INTO `answers`(`id`, `q_id`, `stu_id`, `stu_name`, `stu_house`, `stu_class`, `stu_section`, `stu_dob`, `answer`, `day`, `marks`, `stu_session_hash`, `time`, `ip`) VALUES 
																				(NULL,'".$queid_clean."','".$_SESSION['ADMISSION_NUMBER']."','".$_SESSION['STU_NAME']."','".$_SESSION['HOUSE']."','".$_SESSION['CLASS_NUMBER']."','".$_SESSION['CLASS_SECTION']."','".$_SESSION['STU_DOB']."','".strtoupper($stuanswer_clean)."','".$queday_clean."',NULL,'".$_SESSION['SESS_ID']."',CURRENT_TIMESTAMP,'".$_SERVER['REMOTE_ADDR']."')";

														if ($conn->query($sql) === TRUE) {
															echo "We have succesfully submitted your data";
														} else {
															echo "Error: " . $sql . "<br>" . $conn->error;
														}
														
														
														
														
													}else {
														echo "You have already answered this question.";
														}
													
													
													} else {
													
													
												/*code dode */
															echo "Error:There was some problem while contacting database";

													}
													
													
														} else {
													 
													 
													 echo "There was some Problem while passing the variables Please Refresh the page";
													
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