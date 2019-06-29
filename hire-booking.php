<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* PULLING FORM ENTRIES */

$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
$eventDate = isset($_REQUEST['event-date']) ? $_REQUEST['event-date'] : null;
$eventType = isset($_REQUEST['event-type']) ? $_REQUEST['event-type'] : null;
$phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
$attendance = isset($_REQUEST['attendance']) ? $_REQUEST['attendance'] : null;
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
$message = isset($_REQUEST['extra-message']) ? $_REQUEST['extra-message'] : null;

/* VALIDATING & SANITIZING FORM ENTRIES */

$name = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
$eventDate = filter_var($eventDate, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$eventDate = filter_var($eventDate, FILTER_SANITIZE_SPECIAL_CHARS);
$eventType = filter_var($eventType, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$eventType = filter_var($eventType, FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_var($phone, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$phone = filter_var($phone, FILTER_SANITIZE_SPECIAL_CHARS);
$attendance = filter_var($attendance, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$attendance = filter_var($attendance, FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var($email, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
$message = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$message = filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);
// Load Composer's autoloader
require_once('php/vendor/autoload.php');
/* EMAIL TO SEND */
require_once('php/email.php');
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host = 'smtp.livemail.co.uk';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                     // Enable SMTP authentication
    $mail->Username = 'bookings@thepineapple.pub';              // SMTP username
    $mail->Password = 'Pineapple1!';                             // SMTP password
    $mail->Port = 465;                                          // TCP port to connect to
    $mail->setFrom('bookings@thepineapple.pub', $name);         // From address
    $mail->addAddress('emma@thepineapple.pub');                  
    $mail->addReplyTo($email, $name);
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'NEW BOOKING: The Pineapple Website';
    $mail->Body    = $emailContent;                                
    $mail->send();

    $pageContent = <<<EOT

<!DOCTYPE html>
<html>
<head>
    <title>Successful Booking | The Pineapple</title>
    <meta charset="utf-8">
    <link href="css/booking.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:bold,regular|Yellowtail" rel="stylesheet">
    <link href="css/reset.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <ul class="menu wrapper">
            <li class="menu__item text-left">
                <span class="menu__link"><i class="fa fa-bars" aria-hidden="true"></i>MENU</span>
                <nav>
                    <ul class="navigation">
                        <li class="navigation__menu-item"><a class="text-link" href="/">Home</a></li>
                        <li class="navigation__menu-item"><a class="text-link" href="visit">Visit</a></li>
                        <li class="navigation__menu-item"><a class="text-link" href="menus">Menus</a></li>
                        <li class="navigation__menu-item"><a class="text-link" href="whats-on">What's on</a></li>
                        <li class="navigation__menu-item"><a class="text-link" href="hire">Hire</a></li>
                        <li class="navigation__menu-item"><a class="text-link" href="about">About</a></li>
                    </ul>
                </nav>
            </li>
            <li class="menu__item">
                <a href="/"><img class="menu__logo" src="img/The-Pineapple-logo.png" alt="The Pineapple logo"></a>
            </li>
            <li class="menu__item text-right">
                <a class="menu__link" href=""><i class="fa fa-cutlery" aria-hidden="true"></i>FOOD</a>
            </li>
        </ul>
    </header>
    <section id="booking" class="wrapper">
        <i id="tick" class="fa fa-check-circle" aria-hidden="true"></i>
        <h2>Booking successful!</h2>
        <p>Your booking details:</p><br>
        <p>Name: $name</p>
        <p>Event date: $eventDate</p>
        <p>Event type: $eventType</p>
        <p>Phone: $phone</p>
        <p>Expected attendance: $attendance</p>
        <p>Email: $email</p>
        <p>Message: $message</p><br><br>
        <a class="button button--primary" href="/">Back to homepage</a>
    </section>
    <section class="yellow-section--tall">
        <div class="feature wrapper">
            <article class="feature__card">
                <h2 class="feature__card-title text-left">Events</h2>
                <p class="feature__card-content--small text-left">Come and enjoy the latest sport live on our large screens. Expect football, Gaelic football, rugby, big fights and live music nights, which are free to everyone!</p>
                <a class="button button--secondary feature__card-button--left" href="whats-on">What’s on</a>
            </article>
            <article class="feature__card">
                <h2 class="feature__card-title text-left">Food</h2>
                <p class="feature__card-content--small text-left">We serve quality pub food all day. Pop in after exploring the sights of London to enjoy a traditional pub lunch or dinner.</p>
                <a class="button button--secondary feature__card-button--left" href="">Food menu</a>
            </article>
            <article class="feature__card">
                <h2 class="feature__card-title text-left">Drinks</h2>
                <p class="feature__card-content--small text-left">Here at The Pineapple we serve a range of ales and traditional Guinness from Ireland. We also stock a collection of wine and spirits to suit all tastes.</p>
                <a class="button button--secondary feature__card-button--left" href="">Drinks menu</a>
            </article>
        </div>
    </section>
    <footer class="footer">
    <section class="wrapper">
        <div class="footer__column">
            <h3 class="footer__heading">Pub Features</h3>
            <ul>
                <li class="footer__pub-feature"><i class="fa fa-cutlery" aria-hidden="true"></i>Food served</li>
                <li class="footer__pub-feature"><i class="fa fa-wifi" aria-hidden="true"></i>Free wifi</li></li>
                <li class="footer__pub-feature"><i class="fa fa-sun-o" aria-hidden="true"></i>Outdoor seating</li>
                <li class="footer__pub-feature"><i class="fa fa-child" aria-hidden="true"></i>Family friendly</li>
                <li class="footer__pub-feature"><i class="fa fa-wheelchair" aria-hidden="true"></i>Wheelchair  <span class="footer__pub-feature--line-break">access</span></li>
                <li class="footer__pub-feature"><i class="fa fa-camera-retro" aria-hidden="true"></i>Near tourist <span class="footer__pub-feature--line-break"> attractions</span></li>
            </ul>
        </div>
        <div class="footer__column">
            <h3 class="footer__heading">Opening times</h3>
            <p>
                Mon-Thu: 11:00 - 23:00, Fri-Sat: 11:00 - 00:00, Sun: 12:00 - 22:30<br><br>
                For all other enquiries contact us.
            </p>
            <a class="button button--primary footer__button-primary" href="tel:+442074012860">Call us</a>
            <a class="button button--secondary footer__button-secondary" href="mailto:emma@thepineapple.pub">Email</a>
        </div>
    </section>
</footer>
<section>
    <ul class="wrapper feature">
        <li><a class="text-link footer__navigation-item text-left" href="/">Home</a></li>
        <li><a class="text-link footer__navigation-item text-left" href="visit">Visit</a></li>
        <li><a class="text-link footer__navigation-item text-left" href="menus">Menus</a></li>
        <li><a href="#top"><i class="fa fa-arrow-up footer__item" aria-hidden="true"></i></a></li>
        <li><a class="text-link footer__navigation-item text-right" href="whats-on">What's on</a></li>
        <li><a class="text-link footer__navigation-item text-right" href="hire">Hire</a></li>
        <li><a class="text-link footer__navigation-item text-right" href="about">About</a></li>
    </ul>
    <hr>
    <p class="footer__item">
        Website by <a class="text-link" href="http://www.minosmedia.co.uk/" target="_blank">Minos Media</a>
    </p>
</section>
<div class="overlay"></div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/core.js"></script>
</body>
</html>

EOT;

    echo ($pageContent);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}