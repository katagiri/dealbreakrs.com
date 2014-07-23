	<!-- HTML5 patch, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo $domain ?>/js/html5ie.js"></script>
    <![endif]-->
    
    <!-- Javascript -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo $domain ?>/js/jquery-validate.js"></script>
    <script src="<?php echo $domain ?>/js/jquery-validate-fns.js"></script>
    <script src="<?php echo $domain ?>/js/typed.js"></script>
    <script src="<?php echo $domain ?>/js/bootstrap.min.js"></script>
    
    
    
    <!--<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> THIS WAS FOR THE ACCORDIAN EFFECT-->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> THIS IS FOR RESPONSIVESLIDES, MAYBE DON'T NEED? -->
	<!--<script src="<?php echo $domain ?>/js/responsiveslides.min.js"></script>-->
    
    
    
    <script>
	$(function(){ //http://www.mattboldt.com/demos/typed-js/
		
		/*$(window).ready(function() {
		  $('#vid').width(($(window).width())*(1/2));
		  $('#vid').height(($(window).width())/3);
		});
		$(window).resize(function() {
		  $('#vid').width(($(window).width())*(1/2));
		  $('#vid').height(($(window).width())/3);
		});*/
		$("#typed").typed({
			strings: ["Hi! I'm really cool, but I pretend not to be aware to impress you.", "Hello there.", "Hello ladies.", "This is hard.", "How am I supposed to summarize myself in a box?", "I wish there was a better, more meaningful way to do this."]
			//strings: ["Hi.", "Hello there.", "Hello ladies.", "This is hard."]
		});

	});
	</script>
    
    <!--<script>
	  $(function() {
		$(".rslides").responsiveSlides({
		  auto: true,             // Boolean: Animate automatically, true or false
		  speed: 500,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		  pager: false,           // Boolean: Show pager, true or false
		  nav: false,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: false,           // Boolean: Pause on hover, true or false
		  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		  prevText: "Previous",   // String: Text for the "previous" button
		  nextText: "Next",       // String: Text for the "next" button
		  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "rslides",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
		});
	  });
	</script>-->
    
    
    <!-- Google Analytics-->