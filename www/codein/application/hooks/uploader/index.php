<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="ru">
<head>
<link href="http://media-church.ru/images/favicon.ico" rel="shortcut icon"/> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Добавить | Россия</title>
<link href="uploadify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#file_upload').uploadify({
    'uploader'  : 'uploadify.swf',
    'script'    : 'uploadify.php',
    'cancelImg' : 'cancel.png',
    'folder'    : '../uploads',
    'auto'      : true
  });
});
</script>
</head>
<body>
<input id="file_upload" name="file_upload" type="file" />
</body>
</html>