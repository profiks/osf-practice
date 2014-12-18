<?php defined('SYSPATH') or die('No direct script access.');?>
<?php require Kohana::find_file('views', 'header'); ?>

<div class="container">
<div class="row">
		<div class="content-feature-grids" id="features">
<!-- loader image-->
<noscript>
<div id="indicator" style="display:block;text-align: center;" class="loading_img">
    <img src="<?php echo URL::base(); ?>/assets/images/ajax-loader.gif"/>
    <h1>This application require javascripts enabled. Please turn on javascripts in your browser.</h1>
</div>				
<!-- end loader image-->
</noscript>

<div id="modal"></div>
<div class="addLink"></div>
<div id="response">			
		<?php echo isset($content)? $content :''; ?>			
</div>			
		<div class="clearfix"></div>		
		</div>
	</div>
</div>
<?php require Kohana::find_file('views', 'footer'); ?>