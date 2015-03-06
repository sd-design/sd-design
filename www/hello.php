<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>HELLO</title>

</head>

<body>
<?php
if ($_GET[yes]==1){
echo "<h1>hello world</h1>";
echo "Your IP-address:";
echo $_SERVER["REMOTE_ADDR"];
phpinfo();}

else { echo "no strim";}

?>
</body>
</html>