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
<link rel="stylesheet" href="MediuInvatare.css">
</head>
<body> 
            <h2 class="logo"><img src="logo.png"></h2>
            <ul>
            <li><a href="logout.php">Delogare</a></li>
            <li><a href="ProfilulMeu.php">Profilul Meu</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="clasament.php">Clasament</a></li>
                <?php if ($admin==1)
                echo '<li><a href="Admin.php">Admin Panel</a></li>'; ?>
                <li><a href="Pagina.php">Acasa</a></li>
            </ul>
<br>
<br>
        <div class="container">
            <br><br><br><br>
			<div class="wrapper">
				<table>
					<thead>
						<tr>
							<th>Insamantare</th>
							<th>Irigare</th>
							<th>Ingrijirea solului</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                <td ><img src="insamantare.jpg"></td>
                <td ><img src="irigare.jpg"></td>
                <td><img src="ingrijire.jpg"></td>
              </tr>
					  <tr>
                <td ><a href="Insamantare.php">Curs pentru Insamantare</a></td>
                <td ><a href="Irigatie.php">Curs pentru Irigare</a></td>
                <td ><a href="Ingrijirea_solului.php">Curs pentru Ingrijirea Solului</a></td>
              </tr>
            	<tr>
                <td ><a href="chestionarInsamantare.php">Chestionar</a></td>
                <td ><a href="chestionarIrigare.php">Chestionar</a></td>
                <td ><a href="chestionarIngrijire.php">Chestionar</a></td>
              </tr>
					</tbody>
				</table>
			</div>
      <div class="container">
            <br><br><br><br>
			<div class="wrapper">
      <table>
					<thead>
						<tr>
							<th>Flori de gradina</th>
							<th>Plantare flori de gradina </th>
							<th>Protejarea gradinii</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                <td ><img src="gradina2.jpg"></td>
                <td ><img src="plantat5.jpg"></td>
                <td><img src="daunatori.jpg"></td>
              </tr>
					  <tr>
                <td ><a href="Flori.php">Curs pentru Flori de Gradina</a></td>
                <td ><a href="Floriplantare.php">Curs pentru Plantarea Florilor</a></td>
                <td ><a href="Daunatori_Gradina.php">Curs pentru Protejarea Gradinii</a></td>
              </tr>
            	<tr>
                <td ><a href="chestionarflori.php">Chestionar</a></td>
                <td ><a href="chestionarPlantare.php">Chestionar</a></td>
                <td ><a href="chestionarProtectie.php">Chestionar</a></td>
              </tr>
					</tbody>
				</table>
		</div>
    <br>
</body>
</html>
