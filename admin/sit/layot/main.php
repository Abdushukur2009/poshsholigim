<?php

require 'header.php';
if(isset($_GET['v'])){
    include_once  $conf['base']['url'].'sit/sid/'.$_GET['v'];
?>
<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="1660370275.jpg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
</div>

				 
<?php
}
else{
    include_once  $conf['base']['url'].'/'.'sit/sid/home.php';
    
}
require 'footer.php';
?>