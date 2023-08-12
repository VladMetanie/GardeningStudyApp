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
      
    <center>Protejarea gradinii de daunatori</center>

</h1>
<h2>Capitolul 1</h2>
<br>
<p>In acest curs vom discuta despre protectia gradinii de fungi, buruieni si insecte daunatoare. Vom incepe cu fungii si ce masuri putem lua impotriva acestora.</p>
<br>
<h3>Ce sunt fungicidele și ce efect au</h3>
<br>
<p>Fungicidele sunt substanțe chimice sau biologice utilizate pentru combaterea fungilor și sporilor. 
    În funcție de ingredientul activ, infestarea este eliminată sau proliferarea este temporar împiedicată. 
    Ele se utilizează în principal ca produse pentru protecția plantelor – dar și pentru a combate ciuperci dăunătoare, cum ar fi de ex. mucegaiul sau putregaiul.</p>

<br>
<p>O boala fungica apare din cauza sporii fungilor.Sporii fungilor sunt răspândiți de oameni, animale, picături de apă și vânt.
Când sporii fungilor se întâlnesc cu un țesut vegetal, aceștia pot germina – umiditatea (de ex. ploaia, ceața sau roua) favorizează proliferarea.</p>
<br>
<p>În condiții ideale, se formează un tub germinativ care pătrunde în țesutul vegetal și se răspândește ca o rădăcină prin intermediul unui miceliu. 
    Miceliul fungilor se hrănește cu celulele plantei, le distruge și formează purtători de spori, care, la rândul lor, formează noi spori. În acest fel, boala poate prolifera și infecta alte plante.</p>
<br>
<p>Sfat: ciupercile dăunătoare se dezvoltă la nivel microscopic și inițial nu sunt vizibile cu ochiul liber. Abia atunci când infestarea cu ciuperci se răspândește, urmele ei sunt vizibile. 
    Astfel pot să apară de ex. mana frunzelor și monilioza, făinarea, rugina brună, putregaiul negru, rugina și uscarea mugurilor, încrețirea frunzelor, boala petelor de bronz.</p>
<br>
  <p>Poate va intrebati cum functioneaza fungicidele. Fungicidele de contact au un efect preventiv prin aplicarea completă asupra țesutului vegetal, formând astfel o peliculă protectoare. Când sporii fungilor ating țesutul plantelor și încep să germineze în condițiile descrise mai sus, ei formează un tub germinativ. Imediat ce acesta intră în contact cu filmul protector, substanța activă îl omoară și împiedică astfel răspândirea unei infecții fungice. 
    Tratamentele cu fungicide trebuie repetate la intervale regulate, deoarece substanțele active se descompun, respectiv sunt spălate – în plus, noi zone netratate se formează în permanență, pe măsură ce planta crește. </p>  
<br>

<h2>Capitolul 2</h2>
<br>
<p>Erbicidele sunt printre cele mai eficiente produse pentru protecția plantelor. Acestea sunt substanțe sintetice care sunt utilizate pentru combaterea buruienilor. 
    Există erbicide selective, care au efect numai la anumite plante, și erbicide cu spectru larg care funcționează la multe plante.</p>

    <br>
    <p>Indiferent ce tip de grădină vă decorează proprietatea, buruienile reprezintă un însoțitor neplăcut. 
        Ele nu numai că arată urât în răsadul de flori, dar necesită apă, nutrienți și lumină, la fel ca plantele dumneavoastră ornamentale. Și culturile au de pierdut, ceea ce poate reduce recolta la minimum.Erbicidele foliare sistemice se diluează cu apă și se pulverizează pe buruieni. Planta absoarbe substanța activă și o distribuie prin fluxul de sevă – acesta distruge la rândul său celulele plantei. Buruiana dispare.</p>
    
    <br>
<h2>Capitolul 3</h2>
<br>
<p>Insecticidele sunt pesticide, substanțe chimice pentru combaterea insectelor în cele mai diferite stadii de dezvoltare. 
    Insecticidele mai sunt numite și produse pentru exterminarea insectelor sau produse pentru distrugerea insectelor.Dacă grădina vă este populată de insecte dăunătoare, cum ar fi afidele, păduchele verde, gândacii de Colorado și gândacii de scoarță, ar trebui să interveniți la timp. 
    Dacă nu faceți acest lucru, ei se pot înmulți rapid și vor deveni o problemă incontrolabilă care vă va distruge planta.
În orice caz, insectele utile, cum ar fi albinele, bondarii, furnicile sau gărgărițele ar trebui cruțate. 
Ele sunt foarte importante pentru ecosistemul din grădina dumneavoastră si nu numai.</p>
<br>
<p>Insecticidele se împart în trei categorii de otrăvuri:
<br>
        <p> &nbsp&nbsp&nbsp&nbsp1)Otravă inhalată – funcționează prin căile respiratorii
        </p>
        <p> &nbsp&nbsp&nbsp&nbsp2)Otrava ingerată – funcționează prin tractul gastrointestinal </p>
        <p> &nbsp&nbsp&nbsp&nbsp3)Otrava de contact – funcționează prin atingere</p>
</p>
<br>
<p>Aceste produse pentru protecția plantelor sunt oferite sub formă de spray, tinctură, pulbere sau granulat. Prin urmare, insecticidele fie se pulverizează direct pe dăunător (efect de contact), fie se tratează planta afectată (efect sistemic).</p>
<br>
<h2>Mai jos gasiti niste recomandari pentru utilizarea corecta a produselor pentru protectia plantelor</h2>
<br>
<p>Înainte de prima utilizare, citiți cu atenție instrucțiunile de utilizare. Respectați cantitățile recomandate de producător. Multe produse sunt disponibile în ambalaje dozate sau conțin mijloace de dozare. Acestea facilitează măsurarea și evită revărsarea inutilă.</p>
<br>
<p>Nu consumați alimente și băuturi și nu fumați în timpul utilizării produsului. Respectați neapărat timpii de așteptare. Timpul de așteptare este relevant, de regulă, numai pentru culturi. Se face referire la intervalul de timp care trebuie să se scurgă de la ultima aplicare până la recoltare. Așteptați perioade răcoroase și fără vânt.

</p>
<br>
<p>Produsele pentru protecția plantelor nu trebuie utilizate la temperaturi peste 25 °C. Vântul ar conduce la risipa inutilă a lichidului pulverizator. Nu aplicați înainte de ploaie. Evitați să lăsați cantități reziduale. Cantitățile rămase nu trebuie aruncate în sistemul de canalizare.</p>
<br>
<p>Diluați-le într-un raport de 1:10 și distribuiți cantitatea rămasă pe plantele afectate. Curățați temeinic toate utilajele folosite. Aplicați apă de clătire pe suprafețele tratate anterior din grădină. Nu aruncați apa de clătire în toaletă, canalizare sau în ape!</p>
<br>
<p>După utilizare, spălați-vă temeinic mâinile cu apă și săpun, precum și toate părțile corpului care au intrat în contact cu produsul pentru protecția plantelor. Schimbați-vă hainele și spălați-le, dacă este necesar.</p>
<br>
<p>Păstrați întotdeauna închise produsele pentru protecția plantelor și în recipientul original, într-un loc sigur. Țineți copiii și animalele de companie la distanță și nu păstrați recipientele în apropierea alimentelor și furajelor.</p>
<br>
<p>Eliminați resturile de produs la vehiculul transportator de deșeuri periculoase sau predați-le unui punct de colectare corespunzător din comunitate, dedicat deșeurilor speciale. Informații exacte puteți obține de la administrația orașului sau a județului. Eliminați ambalajele și recipientele complet golite în containerul de reciclare.</p>

<br>
    <br>
    <h3><center>Verifica ce ai invatat in chestionarul de mai jos!</center> </h3>
    <center><button class="button" style="vertical-align:middle"><span><a href="chestionarProtectie.php">Chestionar pentru cursul 6</a></span></button></center>
    
</div>



</body>
</html>
