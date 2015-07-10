<?php
error_reporting(0);
//ini_set("max_executtion_time", 0);
//ini_set("default_socet_timeout", 2);
ob_implicit_flush(1);
//$file= $_GET["path"];
$contents = '';


//$fh = fopen($file, 'r') or die ("rescricted access");

while (!feof($handle)) {
    $contents = fread($fh, 4069);
    echo $contents;
}

//echo fwrite($fh, stripslashes($_POST["raw_data"]));
fclose($fh)

?>