<?
$count_my_page = ("./assets/hitcounter/hits.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
?>
<html>
  <head>
    <title>Home | Frontline Genisis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css" media="screen"/>
     <link rel="stylesheet" type="text/css" href="./assets/fonts/fonts.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="shortcut icon" href="./assets/img/favicon/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" href="https://thefrontlinegenisis/assets/img/favicon/favicon.png"/>
  </head>
  <body>
    <div class="content">
    <button class="btn"><a href="#"><i class="fa-brands fa-discord"></i> Discord</a></button>
    <button class="btn"><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></button>
    <button class="btn"><a href="#"><i class="fa-brands fa-deviantart"></i> DeviantArt</a></button>
    <button class="btn"><a href="#"><i class="fa-brands fa-twitch"></i> Twitch</a></button>
    <button class="btn"><a href="#"><i class="fa-brands fa-youtube"></i> YouTube</a></button>
    </div>
  </body>
</html>