<!DOCTYPE html>
<head>
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="documentatie.css">
</head>
<body> 
   <center><h1>Documentatie proiect Gardening Web Tutor</h1> </center>
    <ol>
        <li>
            <a href="#introducere">1. Introducere</a>
            <ol>
                <li>
                    1.1 Scopul proiectului 
                </li>
                 <li>   1.2 Cui ii este adresat proiectul
                     </li>
              <li>      1.3 Referinte </li>
                </li>
            </ol>
        </li>
        <li>
            <a href="#structura"> 2. Structura </a>
             <ol>
                 <li>
                    <a href="PaginaLogin.php"> 2.1 Login </a> <br>
                    <a href = "PaginaRegister.php">2.2 Register <a> <br>
                    <a href = "changepassword.php">2.3 Change password <a> <br>
                     <a href="Pagina.php">2.2 Acasa </a> <br>
                     <a href="MediuInvatare.php">2.3 Mediu de invatare </a><br>
                    <a href="Clasament.php"> 2.4 Clasament</a> <br>
                    <a href="ProfilulMeu.php"> 2.5 Profilul meu </a><br>
                    <a href="Contact.php"> 2.6 Contact </a><br>
                    <a href="mygarden.php">2.7 Gradina mea </a> <br>
                 </li>
             </ol>
         </li>
        <li>
           <a href="#descriere"> 3. Descriere generala </a>
            <ol>
                <li>
                    3.1 Descrierea site-ului <br>
                    3.2 Functiile site-ului
                </li>
            </ol>
        </li>
        <li>
            <a href="#diagrama"> 4. Diagrama Use Case </a>
         </li>
         <li>
            <a href="#tehnologii"> 5. Tehnologii folosite </a>
            <ol>
                <li>
                    5.1 Tehnologii Front-end <br>
                    5.2 Tehnologii Back-end <br>
                    5.3 Baza de date 
                </li>
            </ol>
         </li>
    </ol>
    <br>
   <section id="introducere">
       <h2>1. Introducere </h2>
       <ol>
 <li><b>1.1 Scopul proiectului </b><br> Scopul proiectului este de a aduce cunostiinte noi utilizatorilor
  in legatura cu tot ce tine de gradinarit. <br></li> <br>
<li><b>1.2 Cui ii este adresat proiectul? </b><br> Proiectul este adresat persoanelor pasionate de gradinarit care vor sa invete 
cat mai mult despre acest domeniu. <br></li> <br>
<li><b>1.3 Referinte </b><br> https://github.com/HaidauRobert/Proiect-TW <br> </li><br>
</ol>
   </section>
   <section id="structura">
    <h2>2. Structura </h2>
    <ol>
        <li>
            <b>2.1 Register</b> <br> In cazul in care utilizatorul nu are un cont creat pe site, acesta poate sa-si creeze unul prin intermediul paginii register care va aparea inainte de a accesa siteul.
        </li>
        <li>
            <b>2.2 Login</b> <br> Pagina aceasta are rolul de a realiza autentificarea utilizatorilor. Acestia pot sa se logheze in contul lor sau daca nu au unul sa isi creeze un cont.
        </li>
        <li>
            <b>2.3 Acasa</b> <br> Aceasta este pagina principala. Dupa efectuarea login-ului utilizatorul ajunge pe aceasta pagina de unde poate accesa celelalte resurse ale site-ului.
        </li>
        <li>
            <b>2.4 Mediu de invatare</b> <br> La mediu de invatare utilizatorul gaseste cursuri referitoare la gradinarit si cate un chestionar asociat fiecarui curs, chestionar ce ii va aduce puncte utilizatorului.

        </li>
        <li>
            <b>2.5 Clasament</b> <br> Pe aceasta pagina utilizatorul va gasi un clasament cu utilizatorii care contin cel mai mare punctaj in urma rezolvarii chestionarelor.
        </li>
        <li>
            <b>2.6 Profilul Meu</b> <br> Pe aceasta pagina se gaseste poza utilizatorului, punctajul lui, acesta are posibilitatea de a-si schimba parola si de a-si accesa gradina. 
        </li>
        <li>
            <b> 2.7 Gradina Mea </b> <br> Pe aceasta pagina utilizatorul va putea vedea ce flori a deblocat in functie de numarul de puncte acumulate de la chestionare.
        </li>
        <li>
            <b>2.8 Contact</b> <br> Pagina are rolul de a furniza utilizatorul cu informatii referitoare la creatorii site-ului. Acesta de asemenea poate completa un formular pentru a isi trimite parerea/nemultumirea catre creatori.
        </li>
        <li>
            <b>2.9 Change Password </b> <br> Aici utilizatorul va putea sa-si schmibe parola in cazul in care si-a uitat-o sau daca vrea sa o inlocuiasca.
        </li>

</ol>
</section>
<section id="descriere">
<h2>3. Descriere generala</h2>
<ol>
    <li><b>3.1 Descrierea site-ului </b><br> Site-ul nostru este un site care contine o pagina de login unde utilizatorii 
        se vor autentifica daca au cont, altfel vor avea posibilitatea de a isi
         crea unul. Odata accesat site-ul utilizatorul poate accesa mediul de
          invatare unde va gasi cateva cursuri despre gradinarit impreuna cu 
          niste chestionare care contin intrebari din cursuri. In functie de 
          raspunsurile la acele chestionare fiecare utilizator va acumula niste
           puncte si poate aparea in clasamentul nostru care se poate vedea pe
           pagina respectiva. De asemenea avem si un formular de contact unde 
           utilizatorii isi pot trimite sugestiile si nemultumirile catre noi. <br></li> <br>
   <li><b>3.2 Functiile site-ului</b> <br> 
<ol>
<b>3.2.1 Register</b> - utilizatorul site-ului nostru se poate inregistra pe site-ul nostru completand formular de inregistrare. </li>
<ol>
        <li>
            <img src="poza1.png">
        </li>
</ol>
<li><br><b>3.2.2 Login</b> - utilizatorul site-ului nostru se poate autentifica pe site-ul nostru completand formular de autentificare.</li>
<ol>
        <li>
            <img src="poza2.png">
        </li>
</ol>
<br><li><b>3.2.3 Change Password </b>- utilizatorul nostru isi poate schimba parola accesand functia change password din pagina web "Profilul meu".</li>
<ol>
        <li>
            <img src="poza9.png">
        </li>
</ol>
<br><li><b>3.2.4 Mediu de Invatare </b>- utilizatorul poate da cate un test sub forma unui chestionar pentru fiecare curs astfel acumuland puncte.</li>
<ol>
        <li>
            <img src="poza4.png">
        </li>
</ol>
<br><li><b>3.2.5 Gradina mea </b>- utilizatorul poate accesa pagina "Gradina mea" accesand "Profilul meu" si acolo in functie de punctele acumulate
poate debloca anumite flori. </li>
<ol>
        <li>
            <img src="poza8.png">
        </li>
</ol>
<br><li><b>3.2.6 Profilul meu </b>- utilizatorul isi poate schimba poza de profil, sa isi vizioneze punctajul, sa schimbe parola si sa acceseze gradina sa. </li>
<ol>
        <li>
            <img src="poza6.png">
        </li>
</ol>
<br><li><b>3.2.7 Clasament </b>- in clasament se pot observa toti utilizatorii site-ului nostru ordonati dupa punctajul acestora. </li>
<ol>
        <li>
            <img src="poza5.png">
        </li>
</ol>
<br><li><b>3.2.8 Contact </b>- utilizatorul isi poate trimite observatiile catre administratorii paginii. </li>
<ol>
        <li>
            <img src="poza7.png">
        </li>
</ol>
</ol>
</ol>
</section>
<section id="diagrama">
    <h2>4. Diagrama Use Case </h2>
    <ol>
        <li>
            <img src="diagrama.png">
        </li>
</ol>
</section>
<section id="tehnologii">
    <h2>5. Tehnologii folosite </h2>
    <ol>
        <li>
           <b>5.1 Tehnologii Front-end</b><br> Pentru proiectul nostru, la partea de front-end am folosit HTML si CSS.
        </li>
        <li>
            <b>5.2 Tehnologii Back-end</b><br> Pentru proiectul nostru, la partea de back-end am folosit PHP.
        </li>
        <li>
            <b>5.3 Baza de date</b><br> Pentru proiectul nostru, am folosit o baza de date de tip MySQL, mai exact XAMPP, unde vom retine datele de conectare a utilizatorilor impreuna cu punctajul acestora.
        </li>
</ol>
</section>
</body>
</html>
