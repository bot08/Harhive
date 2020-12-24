<?php 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache"); 
setcookie("dark", "true", time()+9999999, "/");  
function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
goback();
?>