<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$admin=$user_data['admin'];
if($admin!=1) {
    header("Location: Pagina.php");
    die;
}
if ($_SERVER['REQUEST_METHOD']=="POST")
{
    //ceva a fost pus

    if (isset($_POST['idsters']))
    {
    $id=$_POST['idsters'];
    $sql_i = "SELECT * FROM Users WHERE id='$id'";
    $res_i = mysqli_query($con, $sql_i);
    if (mysqli_num_rows($res_i) == 0) {
  	  $stersok = "Id-ul nu exista"; 	
  	}
      else
      {
          $query="DELETE FROM USERS WHERE id='$id'";
          mysqli_query($con, $query);
          $stersok="Utilizatorul a fost sters din baza de date";
      }
    }
    else
    {
    $user_name = $_POST['nume1'];
    $email = $_POST['email1'];
    $password = password_hash($_POST['parola1'],PASSWORD_DEFAULT);
    $sql_u = "SELECT * FROM Users WHERE name='$user_name'";
  	$sql_e = "SELECT * FROM Users WHERE email='$email'";
  	$res_u = mysqli_query($con, $sql_u);
  	$res_e = mysqli_query($con, $sql_e);
      if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Username-ul este deja folosit"; 	
  	}else 
      if(mysqli_num_rows($res_e) > 0){
  	  $name_error = "Email-ul este deja folosit"; 	
  	}else
    {if (!empty($user_name)&&!empty($email)&&!empty($password))
    {
        //salveaza in baza de date
        $user_id=random_num(20);
        $query="insert into Users (user_id,name,password,email) values ('$user_id','$user_name','$password','$email')";

      mysqli_query($con, $query);
       $name_error = "Utilizatorul a fost inregistrat cu succes";
    }
    else
    {
        echo "Introduceti date valide pentru inregistrare!";
    }}
 } 
}
?>
<!DOCTYPE html>
<head>
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="admin.css">
</head>
<body>  
    <h2 class="logo"><img src="logo.png"></h2>
            <ul>
            <li><a href="logout.php">Delogare</a></li>
            <li><a href="ProfilulMeu.php">Profilul Meu</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="clasament.php">Clasament</a></li>
                <li><a href="MediuInvatare.php">Mediu de Invatare </a></li>
                <li><a href="Pagina.php">Acasa</a></li>
            </ul>
<br>
<br>
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="text">
            <b><h1>Admin Panel</h1></b>
            <br><br>
            <div style="color:black; font-size:200%;">
        <b> Utilizatorii din baza de date:  </b>
</div>
<center>
        <div style="color:black; font-size:125%;">
        <table>
					<thead>
						<tr>
                            <th>Id</th>
							<th>&nbsp Nume utilizator</th>
							<th>Email</th>
							<th>Puncte</th>
						</tr>
					</thead>
                    <tbody>
<?php
$sql = "SELECT * FROM users";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0)
{
    while ($users=mysqli_fetch_assoc($result))
    {
        $id=$users['id'];
        $username=$users['name'];
        $email=$users['email'];
        $puncte=$users['puncte'];
        echo '<tr>';
        echo '<td>', $id, '</td>', " ", '<td>', $username, '</td>' ," ", '<td>', $email, '</td>'," ", '<td>', $puncte, '</td>',"<br>"; 
        echo '</tr>';
    }
}
?>
<tbody>
</table>
</center>
<br><br><br>
<div style="color:black; font-size:200%;">
<b>Adauga un utilizator in baza de date </b>
<div style="color:black; font-size:125%;">
<div class="login">
    <div class="form">
<form class="login-form" method="post">
            <?php if (isset($name_error)): ?>
                 <span><?php echo $name_error; ?></span>
                <?php endif ?>
                <br>
            <input type="text" placeholder="Nume utilizator" name="nume1" class="input" required>
            <input type="email" placeholder="Email" name="email1" class="input" required>
            <input type="password" placeholder="Parola" name="parola1" class="input" required>
            <input type="submit" value="Inregistrare" class="inputID">
        </form>
            </div></div>
</div>
</div>
<br><br><br>
<div style="color:black; font-size:200%;">
<b>Sterge un utilizator din baza de date </b>
<div style="color:black; font-size:125%;">
<div class="login">
    <div class="form">
<form class="login-form" method="post">
<?php if (isset($stersok)): ?>
                 <span><?php echo $stersok; ?></span>
                <?php endif ?>
                <br>
                <br>
            <input type="text" placeholder="Id-ul utilizatorului ce urmeaza a fi sters" name="idsters" class="input" required>
            <input type="submit" value="Sterge" class="inputID">
        </form>
            </div></div>
</div>
</div>
            </div>
	</div>
</body>
