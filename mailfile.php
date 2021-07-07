<?php

error_reporting(E_ALL); ini_set('display_errors', 1);
$error = "";
$companyname = $name = $email = $telephone = $morning = $afternoon = $day = $platform = $link = $questions = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);

    //COMPANY
    if (empty($_POST['companyname'])) {
        echo "cerror";
        //$error['company-name'] = "Please enter your company name.";

    } else {
        $companyname = cleandata($_POST['companyname']);
    }

    //NAME
    if (empty($_POST['name'])) {
        echo "nerror";
        //$error['name'] = "Please enter your name.";

    } else {
        $name = cleandata($_POST['name']);
    }

    //EMAIL
    if (empty($_POST["email"])) {
        echo "eerror";
        //$error['email'] = "Please enter a valid email address.";

    } else {
        $email = cleandata($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error["email"] = "Please enter a valid email address.";
        }
    }

    //PHONE
    if (empty($_POST["telephone"])) {
        echo "perror";
        //$error['telephone'] = "Please enter your message. It should have at least 99 characters.";
    
    } else {
        $telephone = cleandata($_POST["telephone"]);
    }

    //Availability
    if (!empty($_POST["morning"])) {
        $morning = $_POST["morning"];
    }

    if (!empty($_POST["afternoon"])) {
        $afternoon = $_POST["afternoon"];
    }

    if (!empty($_POST["day"])) {
        $day = $_POST["day"];
    }

    if (!empty($_POST["platform"])) {
        $platform = $_POST["platform"];
    }

    if (!empty($_POST["link"])) {
        $link = $_POST["link"];
    }

    if (!empty($_POST["questions"])) {
        $questions = $_POST["questions"];
    }
}

function cleandata($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

date_default_timezone_set('Etc/UTC');
require './PHPMailer/PHPMailerAutoload.php';
//$email1 = 'hello@erikhendriks.be';
$email2 = 'erhen3000@gmx.com';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
include './.con/creds.php';
//Set who the message is to be sent from
$mail->setFrom('noreply@phpjobdag.be');
//Set an alternative reply-to address
$mail->addReplyTo('noreply@phpjobdag.be');
//Set who the message is to be sent to
$mail->addAddress(
$email2);
//Set the subject line
$mail->Subject = 'Een email van phpjobdag 2021';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.php'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->Body = "
hallo
$name
$companyname
$email
$telephone
$morning
$afternoon
$day
$platform
$link
$questions
";
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    //echo "Message sent!";
}
?>