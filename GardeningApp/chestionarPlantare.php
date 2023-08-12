<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$id=$user_data['user_id'];
	$idtest=$user_data['id_plantare'];
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
<h1>Chestionar Plantarea florilor de gradina</h1>
<h2>
<p>Mult succes!</p>
</h2>

    <form action="resultPlantare.php" method="post" id="quiz">

 
        <h3>1) De cate ore au nevoie florile de lumina soarelui pe zi?
        </h3>
        <div class="form-group"> 
        <ol>
        <li>
        <input type="radio" name="q1" id="q1answer1" value="1" required />
        <label for="q1answer1"> 6-8 ore pe zi</label>
        </li>
        <li>
        <input type="radio" name="q1" value="2" /> 12-16 ore pe zi
        </li>
        <li>
        <input type="radio" name="q1" value="3" />sub 6 ore
        </li>
        <li>
        <input type="radio" name="q1" value="4" />nu au nevoie de lumina 
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>2) Ce este compostul?</h3>
        <ol>
        <li>
        <input type="radio" name="q2" value="1"  required/>un compus organic plin de substante nutritive
        </li>
        <li>
        <input type="radio" name="q2" value="2" />o floare de gradina sezoniera
        </li>
        <li>
        <input type="radio" name="q2" value="3" />un tip de fung
        </li>
        <li>
        <input type="radio" name="q2" value="4" />unealta de gradina
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>3) Care dintre aceste plante se recomanda sa se planteze primavara?</h3>
        <ol>
        <li>
        <input type="radio" name="q3" value="1"  required />dalie
        <li>
        <input type="radio" name="q3" value="2" />trandafirul
        </li>
        <li>
        <input type="radio" name="q3" value="3" />papadia
        </li>
        <li>
        <input type="radio" name="q3" value="4"/>ciresul
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>4)Care dintre lunile de vara pot dauna cresterii plantelor datorita temperaturilor</h3>
        <ol>
        <li>
        <input type="radio" name="q4" value="1" required />toate
        </li>
        <li>
        <input type="radio" name="q4" value="2" />iunie
        </li>
        <li>
        <input type="radio" name="q4" value="3" />iulie
        </li>
        <li>
        <input type="radio" name="q4" value="4"/>niciuna
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>5) Ce planta este mai rezistenta la temperaturile de vara si la soarele puternic fata de majoritatea florilor de gradina</h3>
        <ol>
        <li>
        <input type="radio" name="q5" value="1"  required/>laleaua
        </li>
        <li>
        <input type="radio" name="q5" value="2" />brandusa de toamna
        </li>
        <li>
        <input type="radio" name="q5" value="3" />toporasul
        </li>
        <li>
        <input type="radio" name="q5" value="4"/>zambila
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>6) Ce flori sunt perfecte pentru plantat in toamna</h3>
        <ol>
        <li>
        <input type="radio" name="q6" value="1"  required/>crinii
        </li>
        <li>
        <input type="radio" name="q6" value="2" />ghioceii
        <li>
        <input type="radio" name="q6" value="3" />galbenelele
        </li>
        <li>
        <input type="radio" name="q6" value="4"/>narcisele

        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>7) Cu cat timp inainte de primul inghet este recomandat sa plantezi flori in timpul toamnei</h3>
        <ol>
        <li>
        <input type="radio" name="q7" value="1" required />2 luni inainte
        </li>
        <li>
        <input type="radio" name="q7" value="2" />o saptamana
        </li>
        <li>
        <input type="radio" name="q7" value="3" />2 saptamani
        </li>
        <li>
            <input type="radio" name="q7" value="4"/>o luna
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>8) Care dintre aceste flori rezista la temperaturi scazute de iarna</h3>
        <ol>
        <li>
        <input type="radio" name="q8" value="1" required />laleaua
        </li>
        <li>
        <input type="radio" name="q8" value="2" />iernita
        </li>
        <li>
        <input type="radio" name="q8" value="3" />crinii
        </li>
        <li>
            <input type="radio" name="q8" value="4"/>toporasii

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