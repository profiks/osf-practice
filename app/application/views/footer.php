
	       <!--  jquery plguin -->
		<script src="<?php echo URL::base(); ?>assets/js/login.js"></script>
		<script src="<?php echo URL::base(); ?>assets/js/modernizr.custom.js"></script>
		

	    <!--scroll-->
 		<script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<!--//scroll-->
		<!--load ajax scripts-->
	<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/ajax.js?n=22082014"></script>
		
<!-- scroll_top_btn -->
		<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/easing.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>