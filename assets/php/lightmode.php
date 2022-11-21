<?php
if(!defined('MyConst')) {
   http_response_code(403);
   die('Direct access not permitted');
}
?>
<button class="float-button" onclick="themeToggle()">
<i class="fa-solid fa-circle-half-stroke float-button-icon"></i></button>
    <script>
        function themeToggle() {
       var element = document.body;
       element.classList.toggle("light-mode")
        }
    </script>