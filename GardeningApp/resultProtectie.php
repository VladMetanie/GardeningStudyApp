<?php 
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
	$id=$user_data['user_id'];
	$idtest=$user_data['id_protectie'];



	$q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];

		$score = 0;
		if($q1 == 4) { 
		$score = $score	+10;
		}
		if($q2 == 1) { 
		$score = $score	+10;
		}
		if($q3 == 3) { 
		$score=$score +10;
		}
		if($q4 == 4) {
			$score = $score	+10;
		}
		if ($q5 == 1){
			$score = $score	+10;
		}
		if ($q6 == 3) {
			$score = $score	+10;
		}
		if($q7 == 1) {
			$score = $score	+10;
		}
        if($q8 == 3) {
            $score = $score +10;
        }
		 if($score < 50)
		{
		echo '<h2>Trebuie sa raspunzi corect la macar 5/8 intrebari!</h2>'; 
		echo ' <center><button class="button" style="vertical-align:middle"><span><a href="Daunatori_Gradina.php">Chestionar pentru cursul 6</a></span></button></center>';
		}
		else {
		echo '<h2>Felicitari! Ai trecut testul!</h2>';
		echo ' <center><button class="button" style="vertical-align:middle"><span><a href="MediuInvatare.php">Inapoi la Mediu de Invatare</a></span></button></center>';
		
		
		$scorcurent=$user_data['puncte'];
		$scorcurent=$scorcurent+100;
		$sql = "UPDATE Users SET puncte = '$scorcurent' WHERE user_id = $id";

		mysqli_query($con,$sql);

		$idtest=$user_data['id_protectie'];
		$idtest=$idtest +1;
		$sql = "UPDATE Users SET id_protectie = '$idtest' WHERE user_id =$id";
		
		mysqli_query($con,$sql);
		
		

	}

	
?>
<!DOCTYPE html>
<head>
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="chestionar.css">
</head>
<body> 
</body>