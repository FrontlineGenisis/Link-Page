<?php
if(!defined('MyConst')) {
   http_response_code(403);
   die('Direct access not permitted');
}
?>
<?php
$filename = 'hitcount.txt';
$handle = fopen($filename, 'r');
$hits = trim(fgets($handle)) + 1;
fclose($handle);

$handle = fopen($filename, 'w');
fwrite($handle, $hits);
fclose($handle);
?>
