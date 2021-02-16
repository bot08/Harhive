<?php
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache"); 
setcookie("yes", "1", time() + (2580000), "/"); // на 1 день (86400 * 30)
?>