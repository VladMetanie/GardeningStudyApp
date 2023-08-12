<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD']=="POST")
{
    //ceva a fost pus
    $user_name = $_POST['nume1'];
    $password = $_POST['parola1'];
    if (!empty($user_name)&&!empty($password))
    {
        //citeste din baza de date
        $query="select * from Users where name='$user_name' limit 1";
        $result = mysqli_query($con, $query);
        if ($result)
        {
            if ($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if (password_verify($password,$user_data['password']))
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: Pagina.php");
                    die;
                }
            }
        }
        echo "Numele de utilizator si parola introdusa nu se potrivesc!";
      
    }
    else
    {
        echo "Numele de utilizator si parola introdusa nu se potrivesc!";
    }
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
            <input type="text" placeholder="Nume utilizator" name="nume1" class="input" required>
            <input type="password" placeholder="Parola" name="parola1" class="input" required>
            <input type="submit" value="Autentificare" class="inputID">
            <p class="message">Nu aveti cont? <a href="PaginaRegister.php">Inregistrare</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>
