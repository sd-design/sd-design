<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Panel</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap-theme.min.css">
<link href='<?php echo base_url();?>css-back/style.css' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</head>
<body>

<div class="container theme-showcase">
	<h1>Панель управления</h1>
<div class="well">sd-engine v1.0 <div class="col-md-offset-11"><small><?php echo $panel; ?></small></div></div>
<div class="row">
										<div class="col-sm-4">

<div class="panel panel-primary">
		<div class="panel-heading">

<h3 class="panel-title">[ раздел, запись, элемент ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/create">создать</a> 
<br/>
<a href="<?php echo base_url();?>user/edit">редактировать</a>
<br/>
<a href="<?php echo base_url();?>user/delete">удалить</a>
		</div>
</div>
	
	
<div class="panel panel-primary">
		<div class="panel-heading">
<h3 class="panel-title">[ Countdown-страницы ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/create/countdown">создать страницу countdown</a> 
<br/>
<a href="<?php echo base_url();?>user/edit/countdowns">редактировать countdown</a>
			</div>

</div>


<div class="panel panel-primary">
			<div class="panel-heading">
<h3 class="panel-title">[ Пользователи ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>users/create">создать пользователя</a> 
<br/>
<a href="<?php echo base_url();?>users/edit">редактировать данные пользователя</a>
<br/>
		</div>
</div>

<div class="panel panel-primary">
			<div class="panel-heading">
<h3 class="panel-title">[ Персональный раздел ]</h3>
			</div>
			<div class="panel-body">
<a href="<?php echo base_url();?>user/panel/personal">данные пользователя</a>
<br/>
<a href="<?php echo base_url();?>user/logout">выйти</a>
			</div>
</div>
																</div>
																
	<div class="col-sm-4">
	
<div class="panel panel-success">
		<div class="panel-heading">
<h3 class="panel-title">[ Инфоблоки ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/infoblock/create">создать инфоблок</a> 
<br/>
<a href="<?php echo base_url();?>user/infoblock/edit">редактировать инфоблоки</a>
			</div>
</div>	

<div class="panel panel-success">
		<div class="panel-heading">

<h3 class="panel-title">[ медиафайлы ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/media/upload">загрузить медиафайл</a> 
<br/>
<a href="<?php echo base_url();?>user/media/edit_files">редактировать медиафайлы</a>
<br/>

		</div>
</div>


<div class="panel panel-success">
		<div class="panel-heading">

<h3 class="panel-title">[ загрузки ]</h3>
		</div>
		<div class="panel-body">

<a href="<?php echo base_url();?>user/download/upload">загрузить файл для скачивания</a> 
<br/>
<a href="<?php echo base_url();?>user/download/list">редактировать</a>
<br/>
		</div>
</div>
	


<div class="panel panel-warning">
			<div class="panel-heading">
<h3 class="panel-title">[ Настройки ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/options/change">опции сайта</a> 
<br/>
<a href="<?php echo base_url();?>user/options/mail">настройки обратной связи</a>
<br/>
		</div>
</div>


																</div>
																
	<div class="col-sm-4">

	</div>

	</div>
				</div>

</body>
</html>