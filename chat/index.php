<?php
//echo $_SERVER ["PHP_SELF"];
$template = basename($_SERVER ["PHP_SELF"]);
echo $template;
if ($template === 'index.php') {
    echo ' tstdfdsfsf';
    require_once './src/index.php';
} else {
    require_once 'src/views/404.php';
}
