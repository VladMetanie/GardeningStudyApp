<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$id=$user_data['user_id'];
if ($_SERVER['REQUEST_METHOD']=="POST")
{
    //ceva a fost pus
    $parolaveche = $_POST['parolaveche'];
    $parolanoua = $_POST['parolanoua'];
    $confirmareparola = $_POST['confirmaparola'];
   
                if (!password_verify($parolaveche,$user_data['password']))
                {
                    $name_error = "Parola veche introdusa nu se potriveste cu parola contului"; 
                }
                else
                {
                    if (!($parolanoua===$confirmareparola))
                    {
                        $name_error = "Parola noua si parola noua confirmata nu sunt aceleasi"; 
                    }
                    else
                    {
                        $parola=password_hash($parolanoua,PASSWORD_DEFAULT);
                      $sql = "UPDATE Users SET password = '$parola' WHERE user_id = $id";
                    mysqli_query($con,$sql);
                    header("Location: PaginaLogin.php");
                    }
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
    <?php if (isset($name_error)): ?>
                 <span><?php echo $name_error; ?></span>
                <?php endif ?>
    <form action="" method="post">
                <input type="password" name="parolaveche" placeholder="Parola veche" class="input" required>
<br>
                <input type="password" name="parolanoua" placeholder="Parola noua" class="input" required>
<br>
                <input type="password" name="confirmaparola" placeholder="Confirma parola noua" class="input" required>
                <input type="submit" value="Schimba parola" class="inputID">
            </form>
        </form>
    </div>
</div>

</body>
</html>



