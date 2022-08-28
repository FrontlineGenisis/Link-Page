<?php include('counter.php'); ?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Hitcount | Frontline Genisis
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@thefrontlinegenisis">
    <meta name="twitter:title" content="Hitcount | Frontline Genisis">
    <meta name="twitter:description" content="Official link page of Frontline Genisis, a web designer from London, UK. Powered by HTML5 and CSS3.">
    <meta name="description" content="Official link page of Frontline Genisis, a web designer from London, UK. Powered by HTML5 and CSS3." />
    <meta name="twitter:image" content="https://thefrontlinegenisis.ml/assets/img/favicon/favicon.png">
    <meta property="og:title" content="" />
    <meta property="og:description" content="Official link page of Frontline Genisis, a web designer from London, UK. Powered by HTML5 and CSS3."/>
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://thefrontlinegenisis.ml/assets/img/favicon/favicon.png" />
    <meta property="og:image:secure_url" content="https://thefrontlinegenisis.ml/assets/img/favicon/favicon.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:alt" content="Frontline Genisis Logo"/>
    <meta property="og:url" content="https://thefrontlinegenisis.ml" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:site_name" content="Hitcount | Frontline Genisis"/>
    <meta property="fb:admins" content="" />
    <meta name="p:domain_verify" content="76c8311b5ab302bd20cdee92d65e731c" />
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./assets/fonts/fonts.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <link rel="shortcut icon" href="./assets/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="https://thefrontlinegenisis/assets/img/favicon/favicon.png" />
</head>

<body>
<?php include('loader.php'); ?>
<div class="content-alt">
<p class="count"><?php  
	$filename='hitcount.txt';
    echo nl2br(file_get_contents($filename));
?> Views Counted Since 28/8/22</p></div>