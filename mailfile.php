<?php

//error_reporting(E_ALL); ini_set('display_errors', 1);
$error = "";
$companyname = $name = $email = $telephone = $availability = $questions = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //COMPANYNAME
    if (!empty($_POST['companyname'])) {
        $companyname = cleandata($_POST['companyname']);
    }

    //NAME
    if (!empty($_POST['name'])) {
        $name = cleandata($_POST['name']);
    }

    //EMAIL
    if (!empty($_POST["email"])) {
        $email = cleandata($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error["email"] = "Please enter a valid email address.";
        }
    }

    //PHONE
    if (!empty($_POST["telephone"])) {
        $telephone = cleandata($_POST["telephone"]);
    }

    //Availability
    if (!empty($_POST["availability"])) {
        $availability = $_POST["availability"];
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
$email1 = 'sarah.vandermaesen@obelisk.be';
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
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "opleidingphpgenk@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Opleiding.21";
//Set who the message is to be sent from
$mail->setFrom('noreply@phpjobdag.be');
//Set an alternative reply-to address
$mail->addReplyTo('noreply@phpjobdag.be');
//Set who the message is to be sent to
$mail->addAddress(
$email1,$email2);
//Set the subject line
$mail->Subject = 'Een email van phpjobdag 2021';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.php'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->Body = "
hallo
naam:               $name
bedrijf:            $companyname
email:              $email
telefoon:           $telephone
beschikbaarheid:    $availability
vragen:             $questions

$name, $companyname, $email, $telephone, $availability, $questions
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

<?php include_once "./common.php"; ?>
<!DOCTYPE html>
<html lang=<?php echo $lang['lang']; ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5; url=https://www.phpjobdag.be">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP Jobdag development">
    <title>Jobdag</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous" />
</head>

<body style="background-color: #BA6EC6;">

<h1 style="text-align: center;margin-top:5%;">
    Bedankt, we laten zo snel mogelijk iets weten<br>
    Thank you, You will hear from us asap.
</h1>

</body>
</html>
