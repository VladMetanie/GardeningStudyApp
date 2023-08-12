<?php
session_start();
include("connection.php");
include("functions.php");
$msg="";
$css_class="";
$user_data = check_login($con);
$image= $user_data['image'];
$id=$user_data['id'];
$admin=$user_data['admin'];
if (isset($_POST['upload']))
{
    $image=time() . '_' . $_FILES['image']['name'];
    $target='images/'.$image;
    if (move_uploaded_file($_FILES['image']['tmp_name'],$target))
    {
        $sql = "UPDATE Users SET image = '$image' WHERE id = $id";
        if (mysqli_query($con,$sql))
        {$msg = "Image uploaded and saved to database";
        $css_class="alert-succes";}
        else
        {
            echo mysqli_error($con);
            $msg="DATABASE error: Failed to upload image";
            $css_class="alert-danger";
        }
    }
    else
    {
        $msg="Failed to upload image";
        $css_class="alert-danger";
    }
}
?>
<!DOCTYPE html>
<head>
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="profilulmeu.css">
</head>
<body> 
            <h2 class="logo"><img src="logo.png"></h2>
            <ul>
            <li><a href="logout.php">Delogare</a></li>
            <?php if ($admin==1)
                echo '<li><a href="Admin.php">Admin Panel</a></li>'; 
                ?>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="clasament.php">Clasament</a></li>
                <li><a href="MediuInvatare.php">Mediu de invatare</a></li>
                <li><a href="Pagina.php">Acasa</a></li>
            </ul>
<br>
<br>
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="text">
            <b><h1>Profilul meu</h1></b>
            <br><br>
            <div class ="poza">
                <h2>
                Poza ta
            </h2>
            <br>
            <?php if (!empty($msg)): ?>
                <?php echo $msg; ?>
                <?php echo "<br>"; ?>
                <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data"> 
            <img src="images/<?php echo $image; ?>"> <br>
          <input type="file" name="image" id="image" accept = ".jpg, .jpeg, .png">
          <br><input type="submit" name="upload">
            </form>
            </div>  
            <br><br>

            <div style="color:black; font-size:200%;">
          Numarul tau de puncte este: <?php echo $user_data['puncte']; ?> 
            </div>
            <div class="nrpuncte">
                Pentru a vedea gradina ta apasa <a href="mygarden.php">AICI</a>
            </div>
               <div class="changepass">
                Pentru a schimba parola apasa <a href="changepassword.php">AICI</a>
            </div>
	</div>
</div>
    <br>
</body>
</html>
