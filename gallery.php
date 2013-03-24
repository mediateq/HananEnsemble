<?php include('./inc/header.php') ?>

	<section class="Ajaxloader">
		<div class="gallery" id="loader">
			<ul>
				<li>
					<a href="./images/gallery/1.jpg" rel="prettyphoto[gallery1]" title="">
						<img src="./images/gallery/1.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/2.jpg" rel='prettyphoto[gallery1]' title="">
						<img src="./images/gallery/2.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/3.jpg" rel='prettyphoto[gallery1]' title="">
						<img src="./images/gallery/3.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/4.jpg" rel='prettyphoto[gallery1]' title="">
						<img src="./images/gallery/4.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/5.jpg" rel='prettyphoto[gallery1]' title="">
						<img src="./images/gallery/5.jpg" alt="" >
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/6.jpg" rel='prettyphoto[gallery1]' title="">
						<img src="./images/gallery/6.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/7.jpg" rel='prettyphoto[gallery1]' title="">
						<img src="./images/gallery/7.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/8.jpg" rel='prettyphoto[gallery1]' title="">
						<img src="./images/gallery/8.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/9.jpg" rel='prettyphoto[gallery1]' title="">
						<img src="./images/gallery/9.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
			</ul>
			<div class="badboy"></div>
			<div class="but right">
				<a href="./gallery.php">1</a>
				<a href="./gallery-2.php">2</a>
				<a href="./gallery-3.php">3</a>
			</div>
			<div class="badboy"></div>
		</div>
	</section>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyphoto']").prettyPhoto({
    	autoplay_slideshow: true,
    });
  });
</script>
	
<?php include('./inc/footer.php') ?>