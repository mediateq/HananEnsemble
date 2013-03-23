		
<footer class="foot">	
	<div class="mom">
		<div class="slide">
			<div class="next" id="next"></div>
			<div class="previous"></div>
				<div class="slidebar">
					<div class="train">
						<?php
						$path= './images/slidepic';
						$files= scandir($path);
						$len= 0;
						foreach ($files as $file) {
							$exp= explode('.',$file);
							$type= end($exp);
							if ($type == 'jpg'){
								echo "<img src='$path/$file'>";
								$len++;
							}
						}
					?>
					</div>
				</div>
		</div>
	</div>	
	<div class="text">
				<p>{ EBRAHIM TEHRANIPOUR } © 2012&nbsp; |&nbsp; ALL RIGHTS RESERVED</p>
	</div>
</footer>	
</div>
</body>
</html>
