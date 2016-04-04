<div id="main_inside" class="jumbotron">
<div class="page-header container">
	<h1>Обзоры сайтов недели</h1>
</div>
</div>
<?php foreach ($list_category->result()  as $item):?>

			
											
	<!-- Feature -->
	
<div class="container">
	<div class="row">
	<div class="col-md-4 review">
				<a href="#" class="image featured"><img src="<?php echo base_url();?>uploads/<?php echo $item->review_image;?>" alt="<?php echo $item->review_link;?>"></a>
<h3><a href="<?php echo base_url();?>reviews/<?php echo $item->review_url;?>"><?php echo $item->review_title;?></a></h3>



<p class="descript"><?php echo $item->review_anons;?></p>


	
									
										

<p class="footer"></p></div>
<?php endforeach;?>

	</div>
</div>