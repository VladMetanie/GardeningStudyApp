
<!DOCTYPE html>
<head>
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="mygarden.css">
</head>
<body> 
            <h2 class="logo"><img src="logo.png"></h2>
            <ul>
            <li><a href="logout.php">Delogare</a></li>
            <li><a href="ProfilulMeu.php">Profilul Meu</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="clasament.php">Clasament</a></li>
                <li><a href="MediuInvatare.php">Mediu de invatare</a></li>
                <li><a href="Pagina.php">Acasa</a></li>
            </ul>
        <style>
        <?php    
        session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
        $id=$user_data['user_id'];
    $scorcurent=$user_data['puncte'];
    if($scorcurent>100){ 
       include "mygarden.css";
    }?>
    </style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <?php
    if ($scorcurent<100)     
    echo '<div class="image">';
    else
    echo '<div class="imagebun">';
    ?>
        <img class="image_img" src="ghiocel.jpg" alt="Ghiocel">
         <div class="image_overlay image_overlay--blur">
            <div class="image_title">Ghiocel</div>
            <p class="image_description">100 Puncte</p>
        </div>
    </div>  
    </div>

      <?php
    if ($scorcurent<200)     
    echo '<div class="image2">';
    else
    echo '<div class="imagebun2">';
    ?>
        <img class="image_img2" src="lalea.jpg" alt="Lalea">
        <div class="image_overlay2 image_overlay--blur">
            <div class="image_title2">Lalea</div>
            <p class="image_description2">200 Puncte</p>
        </div>
    </div>
    <?php
    if ($scorcurent<300)     
    echo '<div class="image3">';
    else
    echo '<div class="imagebun3">';
    ?>
        <img class="image_img3" src="crizantema.jpg" alt="Crizantema">
        <div class="image_overlay3 image_overlay--blur">
            <div class="image_title3">Crizantema</div>
            <p class="image_description3">300 Puncte</p>
        </div>
    </div>
    
    <?php
    if ($scorcurent<400)     
    echo '<div class="image4">';
    else
    echo '<div class="imagebun4">';
    ?>
        <img class="image_img4" src="liliac.jpg" alt="Liliac">
        <div class="image_overlay4 image_overlay--blur">
            <div class="image_title4">Liliac</div>
            <p class="image_description4">400 Puncte</p>
        </div>
    </div>

    <?php
    if ($scorcurent<500)     
    echo '<div class="image5">';
    else
    echo '<div class="imagebun5">';
    ?>
        <img class="image_img5" src="dalie.jpg" alt="Dalie">
        <div class="image_overlay5 image_overlay--blur">
            <div class="image_title5">Dalie</div>
            <p class="image_description5">500 Puncte</p>
        </div>
    </div>

    <?php
    if ($scorcurent<600)     
    echo '<div class="image6">';
    else
    echo '<div class="imagebun6">';
    ?>
        <img class="image_img6" src="trandafir.jpg" alt="Tranadfir">
        <div class="image_overlay6 image_overlay--blur">
            <div class="image_title6">Trandafir</div>
            <p class="image_description6">600 Puncte</p>
        </div>
    </div>
<br>
<br>
<br> 
<?php


?>
