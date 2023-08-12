<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$id=$user_data['user_id'];
	$idtest=$user_data['id_ingrijire'];

        if ($idtest== 1)
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
<h1>Chestionar ingrijirea solului</h1>
<h2>
<p>Mult succes!</p>
</h2>

    <form action="resultIngrijire.php" method="post" id="quiz">

 
        <h3>1) Ce vietati reprezinta microflora solului
        </h3>
        <div class="form-group"> 
        <ol>
        <li>
        <input type="radio" name="q1" id="q1answer1" value="1" required />
        <label for="q1answer1">bacterii </label>
        </li>
        <li>
        <input type="radio" name="q1" value="2" />ciuperci
        </li>
        <li>
        <input type="radio" name="q1" value="3" />alge
        </li>
        <li>
        <input type="radio" name="q1" value="4" /> toate de mai sus 
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>2) Din ce vietati poate fi constituita fauna solului</h3>
        <ol>
        <li>
        <input type="radio" name="q2" value="1"  required/>ciuperci
        </li>
        <li>
        <input type="radio" name="q2" value="2" /> rame
        </li>
        <li>
        <input type="radio" name="q2" value="3" />alge
        </li>
        <li>
        <input type="radio" name="q2" value="4" />paianjeni
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>3) Ce valoare pH are un sol acid</h3>
        <ol>
        <li>
        <input type="radio" name="q3" value="1"  required />sub 7
        <li>
        <input type="radio" name="q3" value="2" />peste 14
        </li>
        <li>
        <input type="radio" name="q3" value="3" />intre 10 si 13
        </li>
        <li>
        <input type="radio" name="q3" value="4"/>exact 7
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>4) Care dintre variantele de mai jos reprezinta un avantaj al unui sol activat cu o viata sanatoasa</h3>
        <ol>
        <li>
        <input type="radio" name="q4" value="1" required />ajuta la mentinerea condensului in interiorul solului
        </li>
        <li>
        <input type="radio" name="q4" value="2" />ajuta la a nu se produc deficite de substante nutritive
        </li>
        <li>
        <input type="radio" name="q4" value="3" />ajuta la pastrarea structurii solului
        </li>
        <li>
        <input type="radio" name="q4" value="4"/>ajuta proprietarii de pamant prin cresterea monetara a terenurilor fertile
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>5) In ce tip de soluri ploaia se poate infiltra cu usurinta</h3>
        <ol>
        <li>
        <input type="radio" name="q5" value="1"  required/>soluri afanate
        </li>
        <li>
        <input type="radio" name="q5" value="2" />soluri cu cruste
        </li>
        <li>
        <input type="radio" name="q5" value="3" />soluri uscate
        </li>
        <li>
        <input type="radio" name="q5" value="4"/>soluri proaspat irigate
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>6) In ce caz solul poate forma cruste</h3>
        <ol>
        <li>
        <input type="radio" name="q6" value="1"  required/>in caz de ploaie
        </li>
        <li>
        <input type="radio" name="q6" value="2" />in caz de seceta
        </li>
        <li>
        <input type="radio" name="q6" value="3" />in caz de infestatie cu daunatori
        </li>
        <li>
        <input type="radio" name="q6" value="4"/>in caz de sapare excesiva

        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>7) Ce activitate poate preveni cresterea buruienilor</h3>
        <ol>
        <li>
        <input type="radio" name="q7" value="1" required />irigatia 
        </li>
        <li>
        <input type="radio" name="q7" value="2" />activarea solului
        </li>
        <li>
        <input type="radio" name="q7" value="3" />sapatul
        </li>
        <li>
            <input type="radio" name="q7" value="4"/>aratul
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>8) Care ar fi motivul pentru care solul si ar pierde structura fina granulara</h3>
        <ol>
        <li>
        <input type="radio" name="q8" value="1" required />din cauza secetei 
        </li>
        <li>
        <input type="radio" name="q8" value="2" />din cauza irigatiei
        </li>
        <li>
        <input type="radio" name="q8" value="3" />din cauza picaturilor de ploaie
        </li>
        <li>
            <input type="radio" name="q8" value="4"/>din cauza daunatorilor
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