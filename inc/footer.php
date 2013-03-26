		
<footer class="foot">	
	<div class="mom">
		<div class="slide">
			<div class="next" id="next"></div>
			<div class="previous"></div>
				<div class="slidebar">
					<div class="train">
						<?php
						$path= './images/slidepic';
						$large_img = './images/slidepic';
						$files= scandir($path);
						$len= 0;
						foreach ($files as $file) {
							$exp= explode('.',$file);
							$type= end($exp);
							if ($type == 'jpg'){
								echo "<a href='$large_img/$file'><img src='$path/$file'></a>";
								$len++;
							}
						}
					?>
					</a>
					</div>
				</div>
		</div>
	</div>	
	<div class="text">
				<p>{ HananEnsemble } © 2012&nbsp; |&nbsp; ALL RIGHTS RESERVED</p>
	</div>
</footer>	
</div>
</body>
</html>
