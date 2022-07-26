<?php
define('MyConst', TRUE);
?>
<?php include('./assets/php/optimize.php'); ?>
<?php include('./assets/php/counter.php'); ?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Home | Frontline Genisis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.google.com">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@thefrontlinegenisis">
    <meta name="twitter:title" content="Links | Frontline Genisis">
    <meta name="twitter:description" content="Official link page of Frontline Genisis, a web designer from London, UK. Powered by HTML5 and CSS3.">
    <meta name="description" content="Official link page of Frontline Genisis, a web designer from London, UK. Powered by HTML5 and CSS3." />
    <meta name="twitter:image" content="https://thefrontlinegenisis.ml/assets/img/favicon/favicon.png">
    <meta property="og:title" content="Laptops, TVs, Tablets, Whole Home Wi-Fi &amp; Phones" />
    <meta property="og:description" content="Official link page of Frontline Genisis, a web designer from London, UK. Powered by HTML5 and CSS3."/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://thefrontlinegenisis.ml/assets/img/favicon/favicon.png"/>
    <meta property="og:image:secure_url" content="https://thefrontlinegenisis.ml/assets/img/favicon/favicon.png"/>
    <meta property="og:image:type" content="image/png"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="600"/>
    <meta property="og:image:alt" content="Frontline Genisis Logo"/>
    <meta property="og:url" content="https://thefrontlinegenisis.ml"/>
    <meta property="og:locale" content="en_GB" />
    <meta property="og:site_name" content="Home | Frontline Genisis"/>
    <meta property="fb:admins" content=""/>
    <meta name="p:domain_verify" content="76c8311b5ab302bd20cdee92d65e731c" />
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./assets/fonts/fonts.css"/>
    <noscript>
    <style>.loader { display:none!important; } .float-button { display:none!important; } .popup1-button-alt { /* text-decoration: line-through!important; */ cursor: no-drop!important; } .popup2-button-alt { /* text-decoration: line-through!important; */ cursor: no-drop!important; }</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </noscript>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <link rel="shortcut icon" href="./assets/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="https://thefrontlinegenisis.ml/assets/img/favicon/favicon.png" />
    <?php
if(isset($_COOKIE['popupClosed'])){
echo'<style>#popup-close {display:none!important}</style>';
} else {
}
?>
</head>

<body onload="checkCookies()">
<?php include('./assets/php/loader.php'); ?>

    <div class="content">
        <img class="pfp" src="./assets/img/logo.webp" alt="PFP" />
        <p class="name">Frontline Genisis
        </p>
        <div class="quick-info">
            <p class="location">
                <a href="https://www.openstreetmap.org/relation/62149" target="_blank">
                    <i class="fa-solid fa-location-dot">
            </i> UK
                    <b>
            </b>
                </a>
                <a href="https://www.famousbirthdays.com/april15.html" target="_blank">
                    <i class="fa-solid fa-calendar-day">
            </i> 15/04/2006
                </a>
            </p>
            <p class="intro">Hello visitor, I am Marshall, otherwise known as Frontline Genisis. I am a web designer from London, UK hoping to fufill my dreams of moving to the USA. I do freelancing commisions and web design for ON:LINE Digital.</p>
        </div>

        <p class="section-title">Social Media</p>
<div id="popup-close">
  <?php
$day_array = array(

    '
<div id="popup1">
<div class="popup1-inner">
     <img src="./assets/img/meta-quest.png" alt="meta-quest" class="meta-quest"/> <!--<i class="fa-solid fa-xmark" onclick="parentNode.parentNode.parentNode.remove()"></i>-->
     <br />
          <img src="./assets/img/thinking-of-buying-one.png" alt="meta-quest" class="header"/>

     <p class="popup1-text">Use my referral code to buy a Meta Quest, giving you £23 in store credit.</p>
     <a class="popup1-button" href="https://www.oculus.com/referrals/link/FrontlineGen/" target="_blank">Sure</a> <p class="popup1-button-alt" onclick="popup1Close()">No, thanks.</p> <!--<div class="popup1-other-btns"><a href="https://amzn.to/3sWQqSx" class="popup1-other-btn" target="_blank"><i class="fa-brands fa-amazon"></i></a></div>-->
     </div></div>',
'
<div id="popup1">
<div class="popup2-inner">
     <img src="./assets/img/dropbox.webp" alt="meta-quest" class="dropbox"/> <!--<i class="fa-solid fa-xmark" onclick="parentNode.parentNode.parentNode.remove()"></i>-->
     <br />
          <p class="header">FREE EXTRA 500MB</p>

     <p class="popup2-text">Use my referral link to signup to Dropbox, giving you 500mb in extra storage.</p>
     <a class="popup2-button" href="https://www.dropbox.com/referrals/AACJPKhWX14h0_VtRntWNO3-Alu52CMnMnI?src=global9" target="_blank">Sure</a> <p class="popup2-button-alt" onclick="popup1Close()">No, thanks.</p> <!--<div class="popup1-other-btns"><a href="https://amzn.to/3sWQqSx" class="popup1-other-btn" target="_blank"><i class="fa-brands fa-amazon"></i></a></div>-->
     </div></div>'
);

shuffle($day_array);
for ($i = 1;$i < 2;$i++)
{
    echo array_shift($day_array);
}
?>
</div>
        <a href="https://discord.gg/QBcnnGKMgR" target="_blank" class="btn">
            <i class="fa-brands fa-discord">
        </i> Discord
        </a>
        <a href="https://twitter.com/thefrontlinegen" target="_blank" class="btn">
            <i class="fa-brands fa-twitter">
        </i> Twitter
        </a>
<a href="https://instagram.com/thefrontlinegenisis" target="_blank" class="btn">
            <i class="fa-brands fa-instagram">
        </i> Instagram
        </a>
        <a href="https://deviantart.com/frontlinegenisis" target="_blank" class="btn">
            <i class="fa-brands fa-deviantart">
        </i> DeviantArt
        </a>
        <a href="https://twitch.tv/thefrontlinegenisis" target="_blank" class="btn">
            <i class="fa-brands fa-twitch">
        </i> Twitch
        </a>
        <a href="https://twitch.tv/thefrontlinegenisis" target="_blank" class="btn">
           <i class="fa-brands fa-kickstarter">
        </i> Kickstarter
        </a>
        <a href="https://www.youtube.com/channel/UCucWkds2O2DOR8Ju8Grc9ZQ" target="_blank" class="btn">
            <i class="fa-brands fa-youtube">
        </i> YouTube
            <!--<iframe width="100%" height="315" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; margin-bottom: 10px;" src="https://www.youtube-nocookie.com/embed/wCs4XZbLq7c?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe> TO CHANGE BACK TO YT SET BUTTON CLASS TO YOUTUBE-->
        </a>
        <a href="https://creator.nightcafe.studio/u/frontlinegen" target="_blank" class="btn">
            <i class="fa-solid fa-brain">
        </i> NightCafe
        </a>
        <a href="https://www.pinterest.co.uk/frontlinegenisis" target="_blank" class="btn">
            <i class="fa-brands fa-pinterest">
        </i> Pintrest
        </a>
        <a href="https://www.reddit.com/user/frontline_genisis" target="_blank" class="btn">
            <i class="fa-brands fa-reddit">
        </i> Reddit
        </a>
        <a href="https://www.behance.net/frontlinegenisis" target="_blank" class="btn">
            <i class="fa-brands fa-behance-square">
        </i> B&emacr;hance
        </a>
        <p class="section-title">Contact Me</p>

        <a href="mailto:thefrontlinegenisis@protonmail.com" class="btn">
            <i class="fa-solid fa-at">
        </i> Email
        </a>
        <a href="https://www.linkedin.com/in/marshall-woodhouse-ba270223a/" target="_blank" class="btn">
            <i class="fa-brands fa-linkedin">
        </i> LinkedIn
        </a>
        <p class="section-title">Support Me</p>
        <a href="https://www.patreon.com/frontlinegen" target="_blank" class="btn">
            <i class="fa-brands fa-patreon">
        </i> Patreon
        </a>
        <a href="https://fiverr.com/frontlinegen" target="_blank" class="btn">
            <i class="fa-solid fa-money-bill-1-wave">
        </i> Fiverr
        </a>
        <a href="https://ko-fi.com/frontlinegen" target="_blank" class="btn">
            <i class="fa-solid fa-mug-hot"></i> Ko-Fi
        </a>
        <a href="https://throne.me/u/thefrontlinegenisis" target="_blank" class="btn">
            <i class="fa-solid fa-gift"></i> Throne Gifts
        </a>
        <a href="https://www.buymeacoffee.com/frontlinegen" target="_blank" class="btn">
            <i class="fa-solid fa-pizza-slice"></i> Buy Me A Pizza
        </a>
        <p class="section-title">Coding</p>
        <a href="https://github.com/frontlinegenisis" target="_blank" class="btn">
            <i class="fa-brands fa-github">
        </i> GitHub
        </a>
        <a href="https://archive.org/details/@frontlinegen" target="_blank" class="btn">
            <i class="fa-solid fa-landmark">
        </i> Internet Archive
        </a>
        <a href="https://stackoverflow.com/users/16217400/frontline-genisis" target="_blank" class="btn">
            <i class="fa-brands fa-stack-overflow">
        </i> Stack Overflow
        </a>
        <a href="https://replit.com/@FrontlineGen" target="_blank" class="btn">
            <i class="fa-solid fa-code">
        </i> Replit
        </a>
        <p class="section-title">Gaming</p>

        <a href="https://steamcommunity.com/id/frontlinegen" target="_blank" class="btn">
            <i class="fa-brands fa-steam">
        </i> Steam
        </a>
        <a href="https://www.gamertagnation.com/member.php?u=11916" target="_blank" class="btn">
            <i class="fa-brands fa-xbox">
        </i> Xbox
        </a>
        <a href="https://psnprofiles.com/frontlinegenisis" target="_blank" class="btn">
            <i class="fa-brands fa-playstation">
        </i> PlayStation
        </a>
        <a href="https://www.roblox.com/users/1627432809/profile" target="_blank" class="btn">
            <i class="fa-brands fa-roblox">
        </i> Roblox
        </a>
        <div class="other">
            <p class="other-profiles">Other Profiles
            </p>
            <a href="https://on-linedigital.ml">
                <img src="./assets/img/profiles/online.webp" alt="ON:LINE" />
            </a>
            <a href="https://dotzi.shop">
                <img src="./assets/img/profiles/dotzi.webp" alt="dotzi" />
            </a>
        </div>
    </div>
<script>
  function popup1Close() {
  document.getElementById("popup-close").style.display = "none";
	document.cookie = "popupClosed=true; expires=Thu, 01 Jan 2025 00:00:00 UTC; path=/;";
}
</script>
  </body>
</html>