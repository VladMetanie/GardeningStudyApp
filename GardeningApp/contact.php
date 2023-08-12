<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//$mail = new PHPMailer(true);
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$admin=$user_data['admin'];
if ($_SERVER['REQUEST_METHOD']=="POST")
{
    $user_name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

    try {
        require 'PHPMailerAutoload.php';
        $mail->SMTPDebug = 2;                                       
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com;';                    
        $mail->SMTPAuth   = true;                             
        $mail->Username   = 'gardeningwebtutor@gmail.com';                 
        $mail->Password   = 'Parolanoastra123';                        
        $mail->SMTPSecure = 'tls';                              
        $mail->Port       = 587;  
        $mail->setFrom('gardeningwebtutor@gmail.com', 'Feedback');           
        $mail->addAddress('gardeningwebtutor@gmail.com');
        $body = "";
        $body .= "From: ".$user_name. "\r\n";
        $body .= "Email: ".$email. "\r\n";
        $body .= "Phone: ".$phone. "\r\n";
        $body .= "Message: ".$message. "\r\n";
        $mail->isHTML(true);                                  
        $mail->Subject = $_POST['subject'];
        $mail->Body    = $body;
        $mail->AltBody = $body
        ;
        $mail->send();
        echo "Mail has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


$to = "gardeningwebtutor@gmail.com";
mail($to,$subject,$body);}
?>
<!DOCTYPE html>
<head>
<title>Gardening Web Tutor</title>
<link rel="stylesheet" href="contact.css">
</head>
<body> 
            <h2 class="logo"><img src="logo.png"></h2>
            <ul>
            <li><a href="logout.php">Delogare</a></li>
            <li><a href="ProfilulMeu.php">Profilul Meu</a></li>
            <?php if ($admin==1)
                echo '<li><a href="Admin.php">Admin Panel</a></li>'; ?>
                <li><a href="clasament.php">Clasament</a></li>
                <li><a href="MediuInvatare.php">Mediu de invatare</a></li>
                <li><a href="Pagina.php">Acasa</a></li>
            </ul>
<br>
<br><br><br><br><br><br><br><br><br><br><br>
        <div class="container">
        <h1>Conecteaza-te cu noi</h1>
        <p>Ne place sa vedem feedback si idei de imbunatatire din partea
            utilizatorilor nostrii. <br> Te asteptam sa iei legatura cu noi!
        </p>
        <div class="contact">
            <div class="stanga">
            <h3>Scrie-ne aici!</h3>
            <form action="contact.php" method="POST">
                <div class="input-row">
                    <div class="input-group">
                        <label>Nume</label>
                        <input type="text" placeholder="Nume utilizator" name="name" required>        
                    </div>
                    <div class="input-group">
                        <label>Phone</label>
                        <input type="text" placeholder="Numar telefon" name="phone" required>        
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" placeholder="Adresa de mail" name="email" required>        
                    </div>
                    <div class="input-group">
                        <label>Subiect</label>
                        <input type="text" placeholder="Subiect" name="subject" required>        
                    </div>
                </div>
                <label>Mesaj</label>
                <textarea rows="5" placeholder="Mesajul tau" name="message" required>
                </textarea> 
                <button type="submit">Trimite</button>
            </form>
            </div>
            <div class="dreapta">
                <h3>Ne poti contacta si aici:</h3>
                <table>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            roberthaidau11@yahoo.com
                            vladmetanie@yahoo.com
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Telefon:
                        </td>
                        <td>
                            0746914643
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Adresa:
                        </td>
                        <td>
                           Facultatea de informatica<br> Universitatea Alexandru Ioan Cuza
                        </td>
                    </tr>
                </table>
            </div>
        </div>
		</div>
    <br>
</body>
</html>
