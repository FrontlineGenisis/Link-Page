<?php
if(!defined('MyConst')) {
   http_response_code(403);
   die('Direct access not permitted');
}
?>
<?php
function sanitize_output($buffer) {
$search = array(
'/\>[^\S ]+/s',     
'/[^\S ]+\</s',     
'/(\s)+/s',        
'/<!--(.|\s)*?-->/'
);
$replace = array(
'>',
'<',
'\\1',
''
);
$buffer = preg_replace($search, $replace, $buffer);
return $buffer;
}
ob_start("sanitize_output");
?>