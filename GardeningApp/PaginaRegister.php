<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD']=="POST")
{
    //ceva a fost pus
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
       header("Location: PaginaLogin.php");
     die;
    }
    else
    {
        echo "Introduceti date valide pentru inregistrare!";
    }}
}
?>
<!DOCTYPE html>
<head>
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="stylelogin.css">
</head>
<body> 
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
            <p class="message">Aveti deja cont? <a href="PaginaLogin.php">Autentificare</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>
