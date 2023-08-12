<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$admin=$user_data['admin'];
$result = mysqli_query($con, "SELECT name, 
puncte FROM users ORDER BY puncte DESC");
$ranking = 1;

?>
<!DOCTYPE html>
<head>
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="clasament.css">
</head>
<body> 
            <h2 class="logo"><img src="logo.png"></h2>
            <ul>
            <li><a href="logout.php">Delogare</a></li>
            <li><a href="ProfilulMeu.php">Profilul Meu</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if ($admin==1)
                echo '<li><a href="Admin.php">Admin Panel</a></li>'; ?>
                <li><a href="MediuInvatare.php">Mediu de invatare</a></li>
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
							<th>Loc</th>
							<th>Nume utilizator</th>
							<th>Puncte</th>
						</tr>
					</thead>
					<tbody>
				<?php
        if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td> {$ranking}</td>
        <td>{$row['name']}</td>
        <td>{$row['puncte']}</td></tr>";
        $ranking++;}
    }
    ?>
					</tbody>
				</table>
			</div>
		</div>
    <br>
</body>
</html>
