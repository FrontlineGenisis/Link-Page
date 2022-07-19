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
   <a href="#"><button class="btn"><i class="fa-solid fa-at"></i> Email</button>
   <a href="#"><button class="btn"><i class="fa-brands fa-discord"></i> Discord</button></a>
    <a href="#"><button class="btn"><i class="fa-brands fa-twitter"></i> Twitter</button></a>
    <a href="#"><button class="btn"><i class="fa-brands fa-deviantart"></i> DeviantArt</button></a>
    <a href="#"><button class="btn"><i class="fa-brands fa-twitch"></i> Twitch</button></a>
    <a href="#"><button class="youtube"><i class="fa-brands fa-youtube"></i> YouTube</button>
      <iframe width="100%" height="315" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" src="https://www.youtube-nocookie.com/embed/wCs4XZbLq7c?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </a>
    </div>
  </body>
</html>