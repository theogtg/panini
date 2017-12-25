<!DOCTYPE html>
<html>

<head>
  <title>Panini Kid</title>
  <link rel="icon" href="http://s3.amazonaws.com/td.demos/Panini/2016.kidreporter/assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/vendor.css?v=7">
  <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>">
</head>

<div class="container-fluid">
	<body id="<?php echo e(isset($bodyID) ? $bodyID : ''); ?>">
     	<header class="row">
	        <div class="col-xs-12 col-sm-6 col-md-5">
	    	    <img id="bg-logo" src="/images/bg-logo.png" alt="bg-logo">
	        </div>

	        <div class="col-xs-12 col-sm-6 col-md-7">
	            <nav id="header-nav">
	               <a href="/" class="nav-home ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="official-rules_home">Home</a>
	               <a href="prizes" class="nav-prizes ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="official-rules_prize">Prizes</a>
	               <a href="past-winners" class="nav-past-winners ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="official-rules_past_win">Past Winners</a>
	               <a href="products" class="nav-products ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="official-rules_products">Products</a>
	            </nav>
	        </div>
    	</header>

    	<main id="app">
    		<?php echo $__env->yieldContent('content'); ?>
    	</main>
	</body>

	<footer class="row">
		<div class=row>
               <div class="col-md-12">
                  <div class="social-share">
                     <div class="btn-facebook social-btn">

                        <a id="facebook-share" target="_blank" data-ga-action="click" data-ga-category="Social Share" data-ga-event="prizes_f_share" class="ga-event">
                        <img src="http://s3.amazonaws.com/td.tools/PowerPromo/assets/images/but-facebook.png" alt="Facebook Share Button">
                        </a>
                     </div>
                     <div class="btn-twitter social-btn">
                        <a id="twitter-share" data-ga-action="click" data-ga-category="Social Share" data-ga-event="prizes_t_share" class="ga-event">
                        <img src="http://s3.amazonaws.com/td.tools/PowerPromo/assets/images/but-twitter.png" alt="Twitter Share Button">
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <img id="logo-footer" src="/images/logo-footer.png" alt="logo-footer">
               </div>
            </div>
	   <nav id="footer-nav">
	      <div class="col-md-12">
	         <a href="/" class="f-nav-home ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_home">HOME</a>
	         <a href="prizes" class="f-nav-prizes ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_prizes">PRIZES</a>
	         <a href="past-winners" class="f-nav-pastwinners ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_winners">PAST WINNERS</a>
	         <a href="official-rules" class="f-nav-official-rules ga-event" target="_blank" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_rules">Official Rules</a>
	         <a href="http://www.paniniamerica.net/privacyStatement.cfm" class="f-nav-privacy ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_privacy">Privacy Policy</a>
	         <a href="contact-us" class="f-nav-contact-us ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_contact">Contact Us</a>
	      </div>
	   </nav>
		
	   <p><strong>*NO PURCHASE/MOBILE DEVICE NECESSARY.</strong> To enter you must have an access code, which can be found in select Panini NFL Trading Card products between 4/18/16 &amp; 12/30/16 (while supplies last). <strong>To get an access code without making a purchase send a SASE to be rec’d by 1/4/17 to: Kid Reporter Code Request, 5325 FAA Blvd, Suite 100, Irving, Texas 75061.</strong> Data charges may apply if entering through your mobile phone. Promotion consists of a Sweepstakes &amp; a Contest. Sweepstakes starts 4/18/16 &amp; ends 1/8/17. Contest starts 1/9/17 &amp; ends 1/15/17. Open to residents of the 50 U.S. &amp; DC, 18+ &amp; a parent/legal guardian of a minor child who is a U.S. resident between the ages of 7 &amp; 13. Void where prohibited. Click <a href="/official-rules" target="_blank">here</a> for full Rules and complete details.</p>
	</footer>
</div>
</html>