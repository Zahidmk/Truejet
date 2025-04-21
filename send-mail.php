<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'mkzahid673@gmail.com'; // your actual email
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $email_content = "
        <html>
        <head><title>Contact Form Submission</title></head>
        <body>
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong> $message</p>
        </body>
        </html>
    ";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "<p style='color: green;'>Email sent successfully!</p>";
    } else {
        echo "<p style='color: red;'>Failed to send email.</p>";
    }
}
?>

<!-- php -->

<?php $mailsent=""; 
if(isset($_POST['Send'])){
	//error_reporting(E_ALL);
	//ini_set("display_errors","on");

	$name      		= $_POST['name'];
	$email      	= $_POST['email'];
	$phone_number   = $_POST['phone_number'];
	$msg_subject    = $_POST['msg_subject'];
	$message      	= $_POST['message'];
	
	$EmailBody =   "<b>Thank you for your enquiry ".$name.". Our executives will get back to you...</b><br><br><b>Here is your enquiry details</b><br>
	<b>Name:</b> ".$name."<br>
	<b>Email:</b> ".$email."<br>
	<b>Phone:</b> ".$phone_number."<br>
	<b>Subject: </b>".$msg_subject."<br>
	<b>Message: </b>".$message."<br>";
	$Message = $EmailBody;

	require("class.phpmailer.php");
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->Mailer = "sendmail";
	$mail->Host = 'smtp.hostinger.com';
	$mail->FromName = $name;
	$mail->From = $email;
	$mail->AddAddress("info@skillycat.com");



// 	$mail->AddAddress("jestinvj4@gmail.com");
	//$mail->AddAddress("chary174@gmail.com,sudheeshb222@gmail.com");
	$mail->AddCC($email);
	$mail->Subject = "Enquiry from ".$email." - Scorpion Fix";
	$mail->Body = $Message;
	$mail->WordWrap = 50;

	//$mail->addAttachment("mailuploads/".$attachment);

	if(!$mail->Send()){
		echo "Message was not sent";
		echo "Mailer Error: " . $mail->ErrorInfo;
	}else{
		echo "Message sent";
		header("Location:contact.php?mail=sent");
	}
}?>


<?php

$spam_words =
    ['f*ck',
    'bitch','ww','cum','hacker','money','Buy','Order','Meet singles','Near you','Near you','Additional income','Be your own boss','Robot','More Internet Traffic','Performance','Sale','Sales','Search engine listings','Search engines','Subscribe','Visit our website','Web traffic','traffic','100%','satisfied','Giving away','Warranty','Winner','Winning','won','Sleazy','Shady','Prize','Guarantee','free','Double your','Hurry up','Offer expires','crypto','Cryptaxbot','@Cryptaxbot','Exclusive deal','Compete for your business', '<','>'
    ];
    
    function validEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        list($user,$domain) = explode('@',$email);
        return checkdnsrr($domain, 'MX');
    } 
    return false;
}
    
?>

<script type="text/javascript">
// document.write('<a href="mailto:'+first + '@' + last+'">'+first + '@' + last+'<\/a>');
</script>
<?php include 'iconnect.php';?>
<!doctype html>
<html lang="en-US">

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N5MBMH9');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C9FB5ZTBR0"></script>

    <!-- Your code -->

    <!-- Your code -->

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-C9FB5ZTBR0');
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <base href="https://scorpionfix.com/" />
    <meta property="og:image" content="https://scorpionfix.com/assets/img/logo.png" />

    <meta name="google-site-verification" content="CxC09VwaV5L_hmvOBecyGywdzKPZzie4ubUdTbmBNDY" />
    <meta name="keywords"
        content="laptop service center in dubai, laptop motherboard repair, laptop repair dubai, laptop repair in dubai, computer repair services,remote computer repair, Gaming Laptop and Desktop repair in UAE, laptop repair uae, laptop service dubai, acer laptop authorised service center in uae, hp laptop authorised service center in dubai, acer laptop authorised service center in dubai, lenovo laptop authorised service center in sharjah, dell laptop authorised service center in dubai, acer laptop authorised service center in sharjah,authorized dell laptop service center in dubai, toshiba laptop authorized service center in dubai, hp authorised laptop service centre, all brand desktop services and repairs in UAE," />
    <meta name="description"
        content="Scorpionfix provide  laptop repair & replacement dubai.If you have any problem regarding your Laptop,MacBook or Gaming consoles please feel free to contact us for this services. " />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:site_name" content="LAPTOP SERVICE DUBAI" />
    <link rel="canonical" href="https://scorpionfix.com/contact.php" />
    <meta name="author" content="scorpionfix">
    <meta property="og:url" content="https://scorpionfix.com/contact.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Best Laptop service center in Dubai ,UAE| Contact Us" />
    <meta property="og:image" content="https://scorpionfix.com/assets/img/logo.png" />
    <meta property="og:description"
        content="Scorpionfix provide  laptop repair & replacement dubai.If you have any problem regarding your Laptop,MacBook or Gaming consoles please feel free to contact us for this services. " />
    <meta name="og:email" content="info@scorpionfix.com" />
    <meta name="og:phone_number" content="065677726" />
    <meta name="fb:page_id" content="102064805052883" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Theme Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Magnific CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- -->
    <!--  -->
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <!-- Title -->
    <title>Best Laptop service center in Dubai ,UAE| Contact Us</title>
</head>
<?php include("itopseo.php")?>

<?php
//reCAPTCHA Configuration - go to Google and get the below keys http://www.google.com/recaptcha/admin
define('SITE_KEY',"6Lec2BkpAAAAAJADKDlq_IIm7aLw-lBRIwiUUeik"); 
define('SECRET_KEY',"6Lec2BkpAAAAAK0sCiM5g-sW60fAIBQM7mwBihJM")
?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Start Page Title Area -->
<div class="page-title-area bg-14">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact</h2>
            <ul>
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="quick-contact">
                    <h3>Quick Contact </h3>
                    <ul>
                        <li>
                            <i class="flaticon-maps-and-flags"></i>
                            Location:
                            <span><b>UAE</b></span>
                            <span>Shop no.3, Building no.13, Muweilah commercial Sharjah</span><br>
                        </li>

                        <li>
                            <i class="flaticon-call"></i>
                            Call Us:


                            <a href="tel:+971 545047171">+971 545047171 </a>
                            <a href="tel:065677726">065366070</a>

                        </li>

                        <li>
                            <i class="flaticon-envelope"></i>
                            Email Us:
                            <a href="mailto:info@scorpionfix.com">

                                info@scorpionfix.com
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-wrap">
                    <div class="contact-form">
                        <div class="section-title">
                            <h2>Let's Talk!</h2>
                        </div>
                        <?php if(isset($_REQUEST['mail'])){?>
                        <div class="section-title">
                            <h3 style="color:green;">Thank you for your enquiry. We will get back to you.</h3>
                        </div>
                        <?php }?>
                        <form action="contact.php" enctype="multipart/form-data" method="post">

                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please enter your number" class="form-control"
                                            placeholder="Your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                            required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                            required data-error="Write your message"
                                            placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="col-12 pt-3 px-0 ">
                                        <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY;?>"
                                            data-callback="submit1"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" name="Send" class="default-btn page-btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<div class="map-area">

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.3805459218397!2d55.387194850686114!3d25.358559583741904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5bc5836434cf%3A0xeb8ce68dcafd9bd!2sScorpion%20Computer%20Trading%20L.L.C!5e0!3m2!1sen!2sae!4v1626261693899!5m2!1sen!2sae"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>
<!-- End Map Area -->

<?php include("ifooter.php")?>


<!--  -->