 <?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$id=$user_data['user_id'];
	$idtest=$user_data['id_flori'];

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
<h1>Chestionar flori de gradina</h1>
<h2>
<p>Mult succes!</p>
</h2>

    <form action="resultFlori.php" method="post" id="quiz">

 
        <h3>1) Cat dureaza un ciclu de viata al florilor de gradina sezoniere?
        </h3>
        <div class="form-group"> 
        <ol>
        <li>
        <input type="radio" name="q1" id="q1answer1" value="1" required />
        <label for="q1answer1">3 luni </label>
        </li>
        <li>
        <input type="radio" name="q1" value="2" />1 an
        </li>
        <li>
        <input type="radio" name="q1" value="3" />durata a doua sezoane
        </li>
        <li>
        <input type="radio" name="q1" value="4" /> intre 4 si 8 saptamani 
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>2) Care dintre acestea sunt flori sezoniere?</h3>
        <ol>
        <li>
        <input type="radio" name="q2" value="1"  required/>papadia
        </li>
        <li>
        <input type="radio" name="q2" value="2" /> trandafirul
        </li>
        <li>
        <input type="radio" name="q2" value="3" />craitele
        </li>
        <li>
        <input type="radio" name="q2" value="4" />lalelele
        </li>
        </ol>
        </div>
        <br/>
        <div class="form-group"> 
        <h3>3)Cand mor carciumaresele?</h3>
        <ol>
        <li>
        <input type="radio" name="q3" value="1"  required />dupa ce trece sezonul acestora 
        </li>
        <li>
        <input type="radio" name="q3" value="2" />dupa prima inflorire
        </li>
        <li>
        <input type="radio" name="q3" value="3" />dupa a doua inflorire
        </li>
        <li>
        <input type="radio" name="q3" value="4"/> la cateva saptamani dupa plantarea acestora
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>4)Care este diferenta dintre florile de gradina sezoniere si cele perene?</h3>
        <ol>
        <li>
        <input type="radio" name="q4" value="1" required />cele perene mor mai usor decat cele sezoniere
        </li>
        <li>
        <input type="radio" name="q4" value="2" />cele perene rezista mai mult decat cele sezoniere
        </li>
        <li>
        <input type="radio" name="q4" value="3" />cele perene sunt de dimensiuni mai mari
        </li>
        <li>
        <input type="radio" name="q4" value="4"/>nu este nicio diferenta substantiala intre cele doua
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>5)De ce nu este recomandat sa uzi florile de gradina vara in mijlocul zilei?</h3>
        <ol>
        <li>
        <input type="radio" name="q5" value="1"  required/>din cauza caldurii sunt sanse ca apa sa se evapore foarte repede
        </li>
        <li>
        <input type="radio" name="q5" value="2" />datorita expunerii la soare puternic acestea sunt afectate si creste riscul de inec al acestora
        </li>
        <li>
        <input type="radio" name="q5" value="3" />deoarece va atrage insecte care pot fi daunatoare
        </li>
        <li>
        <input type="radio" name="q5" value="4"/> nu sunt dovezi care sa ateste ca acest lucru nu este recomandat
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>6) Caror flori nu le plac temperaturile scazute care apar la incepetul toamnei?</h3>
        <ol>
        <li>
        <input type="radio" name="q6" value="1"  required/>zambilelor
        </li>
        <li>
        <input type="radio" name="q6" value="2" />garoafelor
        </li>
        <li>
        <input type="radio" name="q6" value="3" />trandafirilor
        </li>
        <li>
        <input type="radio" name="q6" value="4"/>begonia 

        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>7) Care dintre acestea sunt plante perene?</h3>
        <ol>
        <li>
        <input type="radio" name="q7" value="1" required /> gura-leului 
        </li>
        <li>
        <input type="radio" name="q7" value="2" />panselutele 
        </li>
        <li>
        <input type="radio" name="q7" value="3" />galbenelele
        </li>
        <li>
            <input type="radio" name="q7" value="4"/>niciuna dintre cele de mai sus
        </li>
        </ol>
        </div>
        <br>
        <div class="form-group"> 
        <h3>8) Ce este recomandat sa faci iarna din cauza temperaturilor scazute?</h3>
        <ol>
        <li>
        <input type="radio" name="q8" value="1" required />sa plantezi cat mai multe flori pentru a inflori pana la primavara
        </li>
        <li>
        <input type="radio" name="q8" value="2" /> sa plantezi flori sezoniere de primavara
        </li>
        <li>
        <input type="radio" name="q8" value="3" />sa nu plantezi flori care au rezistenta mai mare la temperaturi scazute
        </li>
        <li>
            <input type="radio" name="q8" value="4"/> niciuna dintre cele de mai sus
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