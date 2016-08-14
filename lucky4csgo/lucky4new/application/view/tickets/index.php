 
<body class="ticketsBackground">
<?php $this->renderFeedbackMessages(); ?>
<div class="container" id="tickets">
<div id="warning"></div>
<p>wait {SECONDS} for 20 tickets!</p>
<button id="button">Click me!!!</button>


	<div class="progress">
	  <div class="progress-bar" style="width: 16%;"></div>
	</div>


	<div class="panel panel-default">
	  <div class="panel-body">

	  </div>
	</div>

</div>


<script src="<?php echo Config::get('URL'); ?>js/update.js"></script>
<script src="<?php echo Config::get('URL'); ?>js/progressbar.js"></script>

