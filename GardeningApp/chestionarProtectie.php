<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$id=$user_data['user_id'];
	$idtest=$user_data['id_protectie'];
    if ($idtest !=0 )
			{
				echo '<h2>Ai completat deja acest chestionar!<h2>';
				echo '<center><button class="button" style="vertical-align:middle"><span><a href="MediuInvatare.php">Inapoi la Mediu de Invatare</a></span></button></center>';
                echo '<link rel="stylesheet" href="chestionar.css">';
                die;
            }
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="chestionar.css">
</head>
<body> 
   
<div class="container">
<h1>Chestionar protectia florilor de gradina</h1>
<h2>
<p>Mult succes!</p>
</h2>

    <form action="resultProtectie.php" method="post" id="quiz">

 
        <h3>1)Pentru ce sunt folosite fungicidele?
        </h3>
        <div class="form-group"> 
        <ol>
        <li>
        <input type="radio" name="q1" id="q1answer1" value="1" required />
        <label for="q1answer1">pentru combaterea daunatorilor</label>
        </li>
        <li>
        <input type="radio" name="q1" value="2" /> pentru combatarea painjenilor
        </li>
        <li>
        <input type="radio" name="q1" value="3" />pentru protectia impotriva soarelui puternic
        </li>
        <li>
        <input type="radio" name="q1" value="4" />pentru combaterea fungilor 
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>2) Cand pot germina sporii fungilor?</h3>
        <ol>
        <li>
        <input type="radio" name="q2" value="1"  required/>cand se intalnesc cu un tesut vegetal
        </li>
        <li>
        <input type="radio" name="q2" value="2" />atunci cand bate foarte puternic soarele
        </li>
        <li>
        <input type="radio" name="q2" value="3" />in lipsa soarelui
        </li>
        <li>
        <input type="radio" name="q2" value="4" />pe timp de seceta
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>3) Pentru ce sunt utilizate erbicidele</h3>
        <ol>
        <li>
        <input type="radio" name="q3" value="1"  required />impotriva fungilor
        <li>
        <input type="radio" name="q3" value="2" />impotriva insectelor
        </li>
        <li>
        <input type="radio" name="q3" value="3" />impotriva buruienilor
        </li>
        <li>
        <input type="radio" name="q3" value="4"/>niciuna dintre variantele de mai sus nu sunt corecte
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>4)Pentru ce sunt folositele insecticidele</h3>
        <ol>
        <li>
        <input type="radio" name="q4" value="1" required />impotriva furnicilor
        </li>
        <li>
        <input type="radio" name="q4" value="2" />impotriva paianjenilor
        </li>
        <li>
        <input type="radio" name="q4" value="3" />impotriva gandacilor
        </li>
        <li>
        <input type="radio" name="q4" value="4"/>toate variantele de mai sus sunt corecte
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>5) Ce tipuri de otravuri se pot gasi in insecticide</h3>
        <ol>
        <li>
        <input type="radio" name="q5" value="1"  required/>toate de mai jos
        </li>
        <li>
        <input type="radio" name="q5" value="2" />otrava inhalata 
        </li>
        <li>
        <input type="radio" name="q5" value="3" />otrava ingerata 
        </li>
        <li>
        <input type="radio" name="q5" value="4"/>otrava de contact
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>6) Produsele pentru protectia plantelor nu sunt recomandate sa fie folosite cand se depaseste o anumita temperatura. Despre ce temperatura este vorba?</h3>
        <ol>
        <li>
        <input type="radio" name="q6" value="1"  required/>peste 10 grade
        </li>
        <li>
        <input type="radio" name="q6" value="2" />peste 15 grade
        <li>
        <input type="radio" name="q6" value="3" />peste 25 de grade
        </li>
        <li>
        <input type="radio" name="q6" value="4"/>peste 20 de grade

        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>7) La ce raport trebuie diluate substantele de protectie pentru plante?</h3>
        <ol>
        <li>
        <input type="radio" name="q7" value="1" required />1:10
        </li>
        <li>
        <input type="radio" name="q7" value="2" />1:5
        </li>
        <li>
        <input type="radio" name="q7" value="3" />1:7
        </li>
        <li>
            <input type="radio" name="q7" value="4"/>1:15
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>8) Cum actioneaza otrava ingerata?</h3>
        <ol>
        <li>
        <input type="radio" name="q8" value="1" required />prin atingere
        </li>
        <li>
        <input type="radio" name="q8" value="2" />prin inhalare 
        </li>
        <li>
        <input type="radio" name="q8" value="3" />prin tractul gastrointestinal
        </li>
        <li>
            <input type="radio" name="q8" value="4"/>nicio varianta nu este corecta

        </li>
        </ol>
        </div>

        <div class="form-group">
        <input type="submit" value="Submit" class="submitbtn" />
    </form>

</form>
</div>
</body>
</html>