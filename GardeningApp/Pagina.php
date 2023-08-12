<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$admin=$user_data['admin'];
?>
<!DOCTYPE html>
<head>
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="style.css">
</head>
<body> 
            <h2 class="logo"><img src="logo.png"></h2>
            <ul>
            <li><a href="logout.php">Delogare</a></li>
            <li><a href="ProfilulMeu.php">Profilul Meu</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="clasament.php">Clasament</a></li>
                <li><a href="MediuInvatare.php">Mediu de invatare</a></li>
                <?php 
                if ($admin==1)
                echo '<li><a href="Admin.php">Admin Panel</a></li>'; ?>
            </ul>
<br>
<br>

    <div class="content">
        <div><h1>Gardening <br><span>Web Tutor</span></h1> <br>
        <p class="par">Aplicatia noastra va ofera suport pentru 
            <br> invatarea interactiva a conceptelor si activitatilor specifice gradinaritului.
        </p>  </div>
</div>
    </div>
    <br>
</body>
</html>
