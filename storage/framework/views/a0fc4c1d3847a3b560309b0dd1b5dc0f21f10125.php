<!DOCTYPE html>

<head>

  <title>Panini Kid</title>
  <link rel="icon" href="http://s3.amazonaws.com/td.demos/Panini/2016.kidreporter/assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/vendor.css?v=3">
  <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>">

</head>

<div class="container-fluid">

	<body id="register">
		<header class="row">
         <div class="col-xs-12 col-sm-6 col-md-5">
            <img id="bg-logo" src="/images/bg-logo.png" alt="bg-logo">
         </div>

         <div class="col-xs-12 col-sm-6 col-md-7">
            <nav id="header-nav">
               <a href="/" class="nav-home ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="home_home">Home</a>
               <a href="prizes" class="nav-prizes ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="home_prizes">Prizes</a>
               <a href="past-winners" class="nav-past-winners ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="home_past_winners">Past Winners</a>
               <a href="products" class="nav-products ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="home_products">Products</a>
            </nav>
         </div>
      </header>

		<form method="POST">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
               <div class="form-group">
                  <label for="firstName">First Name:</label>
                  <input id="firstName" class="form-control" name="firstName" required>

						<br/>

                  <label for="lastName">Last Name:</label>
                  <input id="lastName" class="form-control" name="lastName" required>

                  <br/>

                  <label for="address">Street Address:</label>
                  <input id="address" class="form-control" name="address" required>

                  <br/>

                  <label for="city">City:</label>
                  <input id="city" class="form-control" name="city" required>

						<br/>
				
						<label for="state">State:</label>
                  <select id="state" name="state" class="form-control" required>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>	

						<br/>

                  <label for="zip">ZIP Code:</label>
                  <input id="zip" class="form-control" name="zip" required>

                  <br/>

                  <label for="phone">Phone Number (format: xxx-xxx-xxxx)</label>
                  <input id="phone" name="phone" class="form-control" required >

                  <br/>

                  <label for="email">Email:</label>
                  <input id="email" name="email" class="form-control" required >

                  <br/>

						 
                   <label id="offers" for="offers">
                   <input type="checkbox" id="offers" name="offers" class="form-control" checked> Add me to the Panini America mailing list to receive special offers and discounts.*</label>

                   <br/>

                   <label id="terms" for="terms"><input type="checkbox" id="terms" class="form-control" required> I hereby attest that I am a legal resident of the 50 U.S. & DC 18+ & a parent/legal guardian of a minor child who is a legal U.S. resident between the ages of 7 & 13 & hereby agree to the terms of the Official Rules.</label>

                   <br/>
                </div>

                <button type="submit" class="btn btn-default">ENTER NOW</button>
        </form>
		
	</body>

	<footer class="row">
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