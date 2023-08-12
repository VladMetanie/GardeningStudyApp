<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$id=$user_data['user_id'];
	$idtest=$user_data['id_irigare'];
    if ($idtest != 0)
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
<h1>Chestionar irigatie </h1>
<h2>
<p>Mult succes!</p>
</h2>

    <form action="resultIrigatie.php" method="post" id="quiz">

 
        <h3>1) Ce este irigatia
        </h3>
        <div class="form-group"> 
        <ol>
        <li>
        <input type="radio" name="q1" id="q1answer1" value="1" required />
        <label for="q1answer1">un proces prin care se administreaza apa unui teren vegetal</label>
        </li>
        <li>
        <input type="radio" name="q1" value="2" />un proces de trecere a germenilor la viata activa de la viata latenta
        </li>
        <li>
        <input type="radio" name="q1" value="3" />un proces de plantare a ierbii
        </li>
        <li>
        <input type="radio" name="q1" value="4" />un proces de ingrijire specific copacilor
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>2) Ce alt proces este folosit in combinatie cu irigatia pentru ameliorarea de soluri salinizate</h3>
        <ol>
        <li>
        <input type="radio" name="q2" value="1"  required/>desecarea
        </li>
        <li>
        <input type="radio" name="q2" value="2" />plantarea
        </li>
        <li>
        <input type="radio" name="q2" value="3" />excavarea
        </li>
        <li>
        <input type="radio" name="q2" value="4" />insamantarea
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>3) Care dintre variantele de mai jos sunt sisteme de irigatii</h3>
        <ol>
        <li>
        <input type="radio" name="q3" value="1"  required />aspiratoare tip tun
        <li>
        <input type="radio" name="q3" value="2" />aspiratoare oscilante
        </li>
        <li>
        <input type="radio" name="q3" value="3" />udare automata subterana
        </li>
        <li>
        <input type="radio" name="q3" value="4"/>udare autonoma de suprafata
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>4) Pentru ce tip de terenuri este potrivita udarea cu furtunul de gradina</h3>
        <ol>
        <li>
        <input type="radio" name="q4" value="1" required />gradinile mari
        </li>
        <li>
        <input type="radio" name="q4" value="2" />terenurile agricole mari
        </li>
        <li>
        <input type="radio" name="q4" value="3" />grandinile mici
        </li>
        <li>
        <input type="radio" name="q4" value="4"/>terenuri cu recolte
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>5) Ce este ideal pentru udarea unei zone dreptunghiulare</h3>
        <ol>
        <li>
        <input type="radio" name="q5" value="1"  required/>aspiratoare oscilante
        </li>
        <li>
        <input type="radio" name="q5" value="2" />aspersoare oscilante
        </li>
        <li>
        <input type="radio" name="q5" value="3" />sisteme de picurare
        </li>
        <li>
        <input type="radio" name="q5" value="4"/>stropitoarea
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>6) Care dintre cele de mai jos reprezinta un avantaj al irigarii</h3>
        <ol>
        <li>
        <input type="radio" name="q6" value="1"  required/>ajuta la mentinerea condensului in interiorul solului
        </li>
        <li>
        <input type="radio" name="q6" value="2" />ajuta la scaparea de sobolani si soareci
        <li>
        <input type="radio" name="q6" value="3" />calitatea apei
        </li>
        <li>
        <input type="radio" name="q6" value="4"/>niciuna de mai sus

        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>7) De unde poate fi colectata apa pentru irigare</h3>
        <ol>
        <li>
        <input type="radio" name="q7" value="1" required />chiuveta
        </li>
        <li>
        <input type="radio" name="q7" value="2" />rauri
        </li>
        <li>
        <input type="radio" name="q7" value="3" />ploaie
        </li>
        <li>
            <input type="radio" name="q7" value="4"/>niciuna de mai sus
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>8) Cand este cea mai mare nevoie de irigatii</h3>
        <ol>
        <li>
        <input type="radio" name="q8" value="1" required />in cazul de seceta
        </li>
        <li>
        <input type="radio" name="q8" value="2" />in cazul unei furtuni
        </li>
        <li>
        <input type="radio" name="q8" value="3" />in perioade de ploi intense
        </li>
        <li>
            <input type="radio" name="q8" value="4"/>in caz de ninsoare

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