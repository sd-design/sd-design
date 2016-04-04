
<div class="container theme-showcase">
<div class="blog-post">

<ul class="breadcrumb">
  <li><a href="<?php echo base_url();?>">Главная</a></li>
  <li class="active">Контакты</li>
</ul>


<h3><span class="ic fa fa-phone"></span> <?php echo $page_title;?></h3>
<?php foreach ($list_contacts->result()  as $item):?>
<img src="<?php echo base_url();?>images/pano_contact.jpg" alt="<?php echo $page_title;?>" class="image featured">
	<div class="row contacts">
	<div class="col-lg-6">
	<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Телефон:</h3>
  </div>
  <div class="panel-body">
  <h4><span class="icon fa fa-phone"></span> <?php echo $item->phone;?></h4>
  </div>
</div>
<a href="<?php echo $item->facebook;?>" target="_blank">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Facebook</h3>
  </div>
  <div class="panel-body">
  <h4><span class="icon fa fa-facebook"></span> <?php echo $item->facebook;?></h4>
  </div>
</div></a>
<a href="<?php echo $item->twitter;?>" target="_blank">
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Twitter</h3>
  </div>
   <div class="panel-body">
  <h4><span class="icon fa fa-twitter"></span> <?php echo $item->twitter;?></h4>
  </div>
</div>
</a>
</div>



	<div class="col-lg-6">
  <a href="<?php echo $item->vk;?>" target="_blank">
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Vkontakte</h3>
  </div>
  <div class="panel-body">
  <h4><span class="icon fa fa-vk"></span> <?php echo $item->vk;?></h4>
  </div>
</div>
<a href="<?php echo $item->youtube;?>" target="_blank">
<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Youtube</h3>
  </div>
  <div class="panel-body">
  <h4><span class="icon fa fa-youtube-play"></span> <?php echo $item->youtube;?></h4>
  </div>
</div>
</a>
<a href="<?php echo $item->google;?>" target="_blank">
    <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Google+</h3>
  </div>
  <div class="panel-body">
  <h4><span class="icon fa fa-google"></span> <?php echo $item->google;?></h4>
  </div>
</div>
</a>
  </div>

			</div>

<?php endforeach;?>
			<div id="disqus_thread"></div>
<script>
/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//media-church.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
	
</div>
</div>
