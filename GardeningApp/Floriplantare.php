<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device=width, initial-scale=1">
<title>Gardening Web Tutor</title>
<link rel="icon" href="logo.png">
<link rel="stylesheet" href="curs.css">
</head>
<body> 
<br>
<br>
    </section>
    <ul>
            <li><a href="logout.php">Delogare</a></li>
            <li><a href="ProfilulMeu.php">Profilul Meu</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="clasament.php">Clasament</a></li>
                <li><a href="MediuInvatare.php">Mediu de invatare</a></li>
                <li><a href="Pagina.php">Acasa</a></li>
            </ul>
    <br>
<h1>
     
    <center>Plantarea Florilor de Gradina</center>
    
</h1>
<br>
<br>
<div>
    <h2>Capitolul 1</h2>
    <p> Inainte sa incepi plantarea florilor, este nevoie sa pregatesti cu atentie perimetrul care va servi drept gradina de flori.
         In acest sens, urmeaza pasii de mai jos:


        <br>    
        <p>
        </p>
        <br>
        <h3>Alege locul potrivit</h3>
        <p>In general, florile au nevoie de lumina soarelui, intre sase si opt ore pe zi. 
            Pentru a te asigura ca acestea vor primi cantitatea necesara de lumina, alege perimetrul viitoarei tale gradini cu aceasta informatie in minte. 
            Cauta un loc care poate oferi si umbra pe alocuri, pentru ca unele flori nu se dezvolta armonios doar sub razele toropitoare ale soarelui.</p>
        
        </p>
    <br>
    <h3>Curata solul</h3>
    <p>Semintele si bulbii plantelor au nevoie de un sol proaspat sapat si curat. 
    Inarmeaza-te cu un set de accesorii pentru gradina, incepand cu manusi de protectie, o sapa, foarfece de gradina si ustensile pentru extragerea radacinilor si poti incepe pregatirea solului!
    </p>
    <br>
    <h3>Imbunatateste calitatea solului</h3>
    <p>
    Cu cat pamantul este mai fertil, cu atat plantele vor creste mai armonios. 
    Calitatea pamantului din cartierele rezidentiale nou construite poate fi precara, asa ca dupa ce ai trecut cu sapa prin gradina, ocupa-te de imbunatatirea solului. 
    Adauga un strat de compost (un compus organic plin de substante nutritive) de cativa centrimetri la nivelul solului si lasa-l sa schimbe compozitia pamantului timp de cateva saptamani. 
    <br>
    <br>
    <h2> Capitolul 2</h2>
    <br>
    <p>In acest capitol vom discuta despre plantarea florilor de gradina in functie de anotimp.Asa cum am spus mai sus, soiurile de flori de gradina au nevoie de conditii diferite pentru a creste si a inflori. In acest sens, momentul plantarii este crucial pentru dezvoltarea florii, asa ca mai jos vom prezenta cum sa maximizezi rezultatele plantarii in functie de fiecare anotimp</p>
    <br>
    <h3>Flori de primavara:</h3>
    <br>
    <p>
    Mai mult ca sigur vrei sa stii ce flori se planteaza primavara si, poate, care sunt cele mai rezistente sau usor de ingrijit flori care se planteaza primavara, mai ales ca, incepand cu luna martie si odata cu marirea zilei, vei putea sa petreci mai multe momente de relaxare in gradina ta de cu flori de primavara. Soarele straluceste mai puternic pe cer, iar caldura incepe sa se faca simtita, asa ca plantele vor profita din plin de acesti factori favorabili.
   <br>
   <br>
   Asadar, acum este momentul perfect pentru plantarea bulbilor de dalie, begonie si crin, ce vor inflori pe parcursul verii. Retine, insa, ca daliile si begoniile nu sunt plante de gradina rezistente iarna, asa ca planteaza-le in ghivece si tine-le in interior pana trece pericolul inghetului. Apoi, odata ce iarna e de domeniul trecutului, poti sa le transferi din ghiveci in gradina. Asigura-le o cantitate generoasa de lumina si caldura a soarelui.
   <br>
   <br>
   De asemenea, primavara se planteaza si bujorii, primulele si superbele degetele, care vor inflori pe timpul verii, oferind un spectacol cromatic de vis.  
    </p>
    <br>
    <h3>Flori de vara: </h3>
    <br>
    <p>
    Inceputul verii este momentul propice sa muti in gradina florile plantate in ghivece si suporturi pentru plante pe care le-ai tinut in casa, departe de frig. In aceasta categorie includem petuniile, verbena, fuchsiile si begoniile.
    <br>
    <br>
    Lunile iulie si august, care aduc zile fierbinti de vara, nu sunt tocmai momentul ideal pentru plantarea florilor (exceptia este brandusa de toamna!). In acest anotimp iti recomandam sa petreci cat mai putin timp in soarele toropitor, asa ca ocupa-te doar de udarea si ingrijirea florilor dimineata devreme sau odata cu lasarea serii, atunci cand temperatura de afara este mai blanda. 
    <br>
    <br>
    Iar pentru ca acest anotimp este propice zilelor petrecute in curte, sub umbrela, adauga pe terasa mobilier pentru exterior. Va fi o adevarata bucurie a vietii sa iti desfeti privirea cu frumusetea gradinii tale de flori, in timp ce savurezi o limonada fresh de pe un scaun, fotoliu sau balansoar confortabil. In plus, completeaza amenajarea exterioara cu diferite decoratiuni si ornamente pentru gradina.
    <br>
    </p>

    <br>
    <h3>Flori de toamna:</h3>
    <br>
    <p>Daca doresti ca pe timp de toamna sa-ti transformi gradina intr-un festival cromatic spectaculos, toamna este cel mai bun moment pentru plantarea narciselor si a branduselor. 
        Iar daca te intrebi cand se planteaza lalelele, afla ca perioada optima este tot toamna.
        De asemenea, zambilele si freziile se planteaza tot in acest anotimp, iar bulbii lor vor creste intr-o planta pana in primavara, cand vor aparea mugurii infloriti. 

    <br>
    <br>
     Ia in considerare starea vremii atunci cand plantezi aceste flori de toamna. Iti recomandam, in acest sens, sa plantezi florile cu aproximtiv o luna inainte de primul inghet, pentru ca bulbii sa poata prinde radacini. Bulbii nu au nevoie de irigare suplimentara, daca au fost plantati intr-un sol umed, iar in caz contrar este necesara o singura udare.
    </p>
    <br>
    <h3>Flori de plantat iarna:</h3>
    <br>
     <p>In anotimpul rece te poti ocupa de plantarea bulbilor si a semintelor de flori in ghivece, pe care le poti transfera in pamant la venirea primaverii. 
     <br>
     <br>Helenium de toamna este o floare superba care infloreste incepand cu finalul lui august, iar luna decembrie este perfecta pentru a o planta. Pe final de ianuarie iti recomandam sa plantezi seminte de lavanda, pentru ca in timpul primaverii sa poti muta planta crescuta in gradina. 
     <br>
     <br>Pe timpul iernii vei putea admira in gradina ta florile iasomiei de iarna, ale cameliei si ale iernitei, care au inflorit toamna tarziu si care rezista chiar si la temperaturi scazute.   
   

    
    <br>
    <br>
    <h3><center>Verifica ce ai invatat in chestionarul de mai jos!</center> </h3>
    <center><button class="button" style="vertical-align:middle"><span><a href="chestionarPlantare.php">Chestionar pentru cursul 5</a></span></button></center>
    
</div>



</body>
</html>