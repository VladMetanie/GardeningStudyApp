<?php 
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
    $id=$user_data['user_id'];
	//if($q1=='' || $q2 =='' || $q3 =='' || $q4 == '' || $q5=='' || $q6 =='' || $q7 == '') {
		//echo '<h2>Bifeaza toate raspunsurile!.</h2>';
	//}

	$q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];

		$score = 0;
		if($q1 == 1) { 
		$score = $score	+10;
		}
		if($q2 == 3) { 
		$score = $score	+10;
		}
		if($q3 == 4) { 
		$score=$score +10;
		}
		if($q4 == 2) {
			$score = $score	+10;
		}
		if ($q5 == 1){
			$score = $score	+10;
		}
		if ($q6 == 4) {
			$score = $score	+10;
		}
		if($q7 == 4) {
			$score = $score	+10;
		}
	        
		
		if($score < 50)
		{
		echo '<h2>Trebuie sa raspunzi corect la macar 5/8 intrebari!</h2>'; 
		echo ' <center><button class="button" style="vertical-align:middle"><span><a href="flori.php">Chestionar pentru cursul 4</a></span></button></center>';
		}
		else {
		echo '<h2>Felicitari! Ai acumulat '.$score. ' de puncte.</h2>';
		echo ' <center><button class="button" style="vertical-align:middle"><span><a href="MediuInvatare.php">Inapou la Mediu de Invatare</a></span></button></center>';
		
		$scorcurent=$user_data['puncte'];
		$scorcurent=$scorcurent+100;
		$sql = "UPDATE Users SET puncte = '$scorcurent' WHERE user_id = $id";
		mysqli_query($con,$sql);

	}

	
?>
<!DOCTYPE html>
<head>
<title>Gardening Web Tutor-chestionar</title>
<link rel="stylesheet" href="chestionar.css">
</head>
<body> 
</body>