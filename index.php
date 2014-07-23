<?php include_once('includes/phplib.inc'); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Deal Breakrs Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Deal Breakrs Demo">
    <meta name="author" content="Deal Breakrs Demo">
    <link rel="icon" type="image/png" href="<?php echo $domain ?>/img/favicon.png" />
	<link rel="shortcut icon" href="<?php echo $domain ?>/img/favicon.ico"/>
    <script src="<?php echo $domain ?>/fonts/MyFontsWebfontsKit.js"></script>
	<?php include('includes/css.php'); ?>
 </head>

  <body>
    <?php // include('includes/nav.php'); ?>
    
    
    
    <!--<div class="container">-->
	<!-- 77811239 (private video) -->
    	<div id="above-the-fold">
        <div id="fake-profile">
        	 <h2>About Me</h2>
        	 <div style="border-radius:10px; border:1px solid #444; width:600px; height:100px; padding:30px; background-color:#fff;">
                <span id="typed">
                </span>
            </div>
         </div>
        </div>
    <!--</div>
    -->
    <div id="below-the-fold"><a name="success"></a>
    <!--<div class="container">-->
        <!--<div id="logo"><p style="margin-top:30px; font-size:36px; text-align:center; text-shadow: 3px 3px 3px #ccc;"><a href="<?php echo $domain ?>">DealBreakrs.com</a></p></div>-->
        <!--<div id="logo"><p style="margin-bottom:30px; font-size:36px; text-align:center; text-shadow: 3px 3px 3px #ccc;"><a href="<?php echo $domain ?>">DealBreakrs.com</a></p></div>-->
        <p style="text-align:center; font-size:18pt;">Talking about yourself is awkward.</p>
        <h2 style="margin:40px 0 70px 0; font-size:28pt;">We're doing online dating different.</h2>
        <div id="sign-up">
        <?php 
		if ($_SESSION['sign_up'] == 1) {echo '<p class="alert" style="text-align:center;">Thanks for submitting your information! We will be in touch soon.</p>'; unset($_SESSION['sign_up']); }
	
        ?>
        
        
        <!-- Begin MailChimp Signup Form ORIGINAL-->
        <div id="mc_embed_signup">
        <!--<form action="http://dealbreakrs.us7.list-manage.com/subscribe/post?u=c01986c2a16b5a89673858ad4&amp;id=6ccd6d6df1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>-->
        <!--<form action="#form-disabled" class="validate" target="_blank" novalidate>-->
        <div class="mc-field-group">
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address" style="text-align:left; position:relative; top:5px; margin-right:10px;">
            <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
        </div>
        
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
        <!--</form>-->
        </div>
        
        <!--End mc_embed_signup-->
        
        <p style="text-align:center;"><img src="img/twitter.jpg" /><img src="img/instragram.jpg" style="margin:0 20px;" /><span style="position:relative; top:2px; color:#55caf1 !important;"><a href="#" style="color:#55caf1 !important;">Follow our blog</a>.</span></p>
        <!--<a class="btn btn-facebook"><i class="icon-facebook"></i> | Connect with Facebook</a> <a class="btn btn-twitter"><i class="icon-twitter"></i> | Follow on Twitter</a>
        <br /><br />-->
        
        <?php include('includes/footer.php'); ?>

    <div style="clear:both;"></div>

    <!--</div>  /container -->
    </div> <!-- /below-the-fold -->
    <?php include('includes/js.php'); ?>
  </body>
</html>
