<?php
if(!defined('MyConst')) {
   http_response_code(403);
   die('Direct access not permitted');
}
?>
<div class="loader">
<div class="ring">
</div>
<a class="privacy-policy" href="./privacy-policy">Privacy Policy</a>
</div>
   <script>
        const loader = document.querySelector(".loader");
          window.onload = function(){
            setTimeout(function(){
              loader.style.opacity = "0";
              setTimeout(function(){
                loader.style.display = "none";
              }
                         , 500);
            }
                       ,1500);
          }
    </script>
<?php include('preload.php'); ?>
<?php include('lightmode.php'); ?>