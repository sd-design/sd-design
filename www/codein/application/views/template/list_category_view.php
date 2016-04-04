<div id="main-wrapper">
	<div id="main_inside" class="container">



		<div class="row">
<?php foreach ($list_category->result()  as $item):?>


											<div class="3u">
							<div class="cat_list">					
												<!-- Feature -->
													<section class="box feature">
<h4><a href="<?php echo base_url();?>category/<?php echo $item->category_url;?>"><?php echo $item->category_name;?></a></h4>
<p class="descript"><?php echo $item->category_descript;?></p>
		</section>
										</div>
											</div>

<p class="footer"></p>
<?php endforeach;?>
</div>
	

</div>
</div>


