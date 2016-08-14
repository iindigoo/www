
<footer>
<div class="footer"></div>
	<div class="navbar navbar-default navbar-fixed-bottom">

		<div class="container" id="footerText">
		<ul class="list-inline" style="display:inline-block;margin-top:10px">
			<li>Copyright &copy; 2016, LUCKY4 - All rights reserved.</li>
			<li><a href="tos.php">Terms of Service</a></li>
			<li><a href="faq.php">FAQ</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="http://steampowered.com" target="_target">Powered by Steam</a></li>
		</ul>
	</div>	

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	 </footer>
</body>
		<?php if (Session::userIsLoggedIn()) : ?>
			<script src="<?php echo Config::get('URL'); ?>js/update.js"></script>
			<script src="<?php echo Config::get('URL'); ?>js/progressbar.js"></script>
		<?php endif; ?>
		<script src="<?php echo Config::get('URL'); ?>js/bootstrap.js"></script> 
		<script src="<?php echo Config::get('URL'); ?>js/bootstrap.min.js"></script>
	    <script>
        	var url = "<?php echo Config::get('URL'); ?>";
    	</script>
		<script src="<?php echo Config::get('URL'); ?>js/vendor/jquery.min.js"></script>
		<script src="<?php echo Config::get('URL'); ?>js/vendor/video.js"></script>
		<script src="<?php echo Config::get('URL'); ?>js/flat-ui.min.js"></script>

		<script>
		  videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
		</script>
	</body>
</html>