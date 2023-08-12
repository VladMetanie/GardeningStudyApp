<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$id=$user_data['user_id'];
	$idtest=$user_data['id_insamantare'];

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
<h1>Chestionar insamantare</h1>
<h2>
<p>Mult succes!</p>
</h2>

    <form action="resultInsamantare.php" method="post" id="quiz">

 
        <h3>1) Ce este germinarea
        </h3>
        <div class="form-group"> 
        <ol>
        <li>
        <input type="radio" name="q1" id="q1answer1" value="1" required />
        <label for="q1answer1">procesul de trecere a unui germen la viata latenta la viata activa</label>
        </li>
        <li>
        <input type="radio" name="q1" value="2" />procesul de udare al plantelor
        </li>
        <li>
        <input type="radio" name="q1" value="3" />procesul de crestere al buruienilor
        </li>
        <li>
        <input type="radio" name="q1" value="4" />procesul de montare al unui gazon artificial
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>2) Care este temperatura optima pentru dezvoltarea gazonului</h3>
        <ol>
        <li>
        <input type="radio" name="q2" value="1"  required/>peste 25 de grade
        </li>
        <li>
        <input type="radio" name="q2" value="2" />5-10
        </li>
        <li>
        <input type="radio" name="q2" value="3" />16-21
        </li>
        <li>
        <input type="radio" name="q2" value="4" />sub 5 grade
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>3) Care dintre variantele de mai jos sunt pasi de urmat pentru instamantarea gazonului</h3>
        <ol>
        <li>
        <input type="radio" name="q3" value="1"  required />ameliorarea solului
        <li>
        <input type="radio" name="q3" value="2" />taierea copacilor
        </li>
        <li>
        <input type="radio" name="q3" value="3" />alungarea animalelor (caini/pisici)
        </li>
        <li>
        <input type="radio" name="q3" value="4"/>udarea cu furtunul
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>4) Cand ar trebui sa aiba loc prima tundere a gazonului</h3>
        <ol>
        <li>
        <input type="radio" name="q4" value="1" required />imediat dupa plantarea ierbii
        </li>
        <li>
        <input type="radio" name="q4" value="2" />cand se observa ca apar buruieni
        </li>
        <li>
        <input type="radio" name="q4" value="3" />cand firele de iarba au lungimea de circa 10 cm
        </li>
        <li>
        <input type="radio" name="q4" value="4"/>cand firele de iarba au lungimea de aproximatim 20 cm
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>5) Care dintre acestea este un soi de iarba</h3>
        <ol>
        <li>
        <input type="radio" name="q5" value="1"  required/>Festuca Arundinaceea
        </li>
        <li>
        <input type="radio" name="q5" value="2" />canis lupus
        </li>
        <li>
        <input type="radio" name="q5" value="3" />plantae
        </li>
        <li>
        <input type="radio" name="q5" value="4"/>fagus
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>6) Ce factori influenteaza amestecul de gazon pentru obtinerea unuia ideal</h3>
        <ol>
        <li>
        <input type="radio" name="q6" value="1"  required/>expunerea terenului
        </li>
        <li>
        <input type="radio" name="q6" value="2" />prezenta animalelor
        <li>
        <input type="radio" name="q6" value="3" />calitatea apei
        </li>
        <li>
        <input type="radio" name="q6" value="4"/>nimic din cele de mai sus

        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>7) Ce caracteristici ar trebui sa prezinte soiurile de iarba dintr un gazon de trafic intens</h3>
        <ol>
        <li>
        <input type="radio" name="q7" value="1" required />aspru
        </li>
        <li>
        <input type="radio" name="q7" value="2" />subtire
        </li>
        <li>
        <input type="radio" name="q7" value="3" />crestere lenta
        </li>
        <li>
            <input type="radio" name="q7" value="4"/>sensibil la apa
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>8) In ce circumstante este ideal gazonul pentru zone insorite</h3>
        <ol>
        <li>
        <input type="radio" name="q8" value="1" required />zone umbrite
        </li>
        <li>
        <input type="radio" name="q8" value="2" />zone cu umiditate ridicata
        </li>
        <li>
        <input type="radio" name="q8" value="3" />zone expuse la lumina sudica
        </li>
        <li>
            <input type="radio" name="q8" value="4"/>zone montane
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