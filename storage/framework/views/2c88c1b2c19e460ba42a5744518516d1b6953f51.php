<!DOCTYPE html>
<html>

<head>

  <title>Panini Kid</title>

  <link rel="stylesheet" href="/css/vendor.css?v=3">
  <link rel="stylesheet" href="/css/app.css?v=10">
</head>
<body id="home">
   <div class="container-fluid">
      <header class="row">
           <div class="col-xs-12 col-sm-6 col-md-5">
               <img id="bg-logo" src="/images/bg-logo.png" alt="bg-logo">
           </div>

           <div class="col-xs-12 col-sm-6 col-md-7">
              <nav id="header-nav">
                 <a href="http://tgriffith.teamdigital.com" class="nav-home ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="home_home">Home</a>
                 <a href="http://tgriffith.teamdigital.com/prizes" class="nav-prizes ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="home_prizes">Prizes</a>
                 <a href="http://tgriffith.teamdigital.com/past-winners" class="nav-past-winners ga-event"  target="_blank" data-ga-action="click" data-ga-category="Navigation" data-ga-event="home_past_winners">Past Winners</a>
                 <a href="http://tgriffith.teamdigital.com/products" class="nav-products ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="home_products">Products</a>
              </nav>
           </div>
        </header>

     <main id="app">
           <div class="content">
             <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                 <img id="bg-second" src="/images/bg-secondary-320.png" alt="bg-secondary">
                 <video id="main-video" width="400" controls>
                   <source src="/videos/main.mp4" type="video/mp4">
                 Your browser does not support the video tag.
                 </video>
              </div>

           <div class ="col-xs-12 col-sm-6 col-md-6">
              <div id="main-msg">
                 <h1>You and your child could<br/>
                     win a trip to Super Bowl LII</h1>
                 <p>Enter for a chance to win a once-in-a-lifetime<br/>
                    experience during Super Bowl week.<br/>
                    Interview NFL stars. It's all part of being the<br/>
                    Panini Super Bowl Kid Reporter.</p>

        <!--<div class="alert alert-danger fade in" role="alert" v-show="this.errors.any() && this.alert">
           <p>There are error(s) with the field(s) in red.</p>
        </div>-->
                 <form method="POST" action="http://tgriffith.teamdigital.com" accept-charset="UTF-8" id="frmGate" name="frmGate"><input name="_token" type="hidden" value="NDMQcHfs3O05G6VkHX1WWWVK7yOG4PMdD9Efvy3c">

                    <div class="form-group" :class="{ 'has-error': errors.has('emailAddress') }">
                      <label for="emailAddress">Enter a promo code to get started<br/>(no spaces)</label>
                      <input id="emailAddress" class="form-control" v-validate="&#039;required|email&#039;" maxlength="100" name="emailAddress" type="email">
                   </div>
                   <input id="gate" name="_gate" type="hidden" value="email">
                   <button type="button" class="btn btn-default ga-event" data-ga-action="click" data-ga-category="Forms" data-ga-event="email_gate_submit" @click="validateForm()">CONTINUE</button>
                 </form>

                 <h3 id="enterNow">Plus, enter now for a chance to win<br/>
                                   awesome weekly and monthly prizes.</h3>
              </div>
          </div>

          <div class ="col-xs-12 col-sm-12 col-md-12">
             <br/><br/><br/>
             <h3 id="promoInfo">Promo codes can be found in select packages of 2017 Panini NFL Trading Cards.<br/>
                 To see participating Panini products, and where they are sold near you, click here.<br/>
                 See below to enter without purchase.*</h3>
          </div>
       </div>
       <br/><br/><br/>
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
   </main>
</body>

<footer class="row">
   <nav id="footer-nav">
      <div class="col-md-12">
         <a href="http://tgriffith.teamdigital.com" class="f-nav-home ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_home">HOME</a>
         <a href="http://tgriffith.teamdigital.com/prizes" class="f-nav-prizes ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_prizes">PRIZES</a>
         <a href="http://tgriffith.teamdigital.com/past-winners" class="f-nav-pastwinners ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_winners">PAST WINNERS</a>
         <a href="http://tgriffith.teamdigital.com/official-rules" class="f-nav-official-rules ga-event" target="_blank" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_rules">Official Rules</a>
         <a href="#" class="f-nav-privacy ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_privacy">Privacy Policy</a>
         <a href="http://tgriffith.teamdigital.com/contact-us" class="f-nav-contact-us ga-event" data-ga-action="click" data-ga-category="Navigation" data-ga-event="prizes_f_contact">Contact Us</a>
      </div>
   </nav>
</footer>
</html>
