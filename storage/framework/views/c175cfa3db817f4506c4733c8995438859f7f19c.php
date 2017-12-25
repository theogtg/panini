
      <?php $__env->startSection('content'); ?>
         <div class="content row"> 
            <div class="col-xs-12 col-sm-6 col-md-6">
               <div id="video-container">
                     <img id="bg-second" src="/images/bg-secondary-320.png" alt="bg-secondary">
                     <video id="main-video" width="400" height="225" controls poster="https://s3.amazonaws.com/td.other/Panini/2017.kidreporter/assets/videos/bg-video-992.png">
                        <source src="/videos/main.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                     </video>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
               <div id="main-msg">
                  <h1>(1)Contest Grand Prize:</h1>
                  <p>Out of the 10 Finalists, one Grand Prize winner will be selected to win a trip for 2 to attend Super Bowl LII and get to be the Panini Kid Reporter at Super Bowl LII Opening Night in Minneapolis, MN.</p>
                  <p><strong>Prize details list:</strong></p>
                  <ul id="ulMain">
                     <li>Round trip air transportation for 2</li>
                     <li>Hotel accommodations for 8 nights</li>
                     <li>Attendance for 2 at Super Bowl LII Opening Night</li>
                     <li>The opportunity for child to act as a Panini Super Bowl Kid reporter at Super Bowl LII Opening Night</li>
                     <li>2 tickets to Super Bowl LII</li>
                  </ul>
                  
                  <h3><strong>(10) Finalist Prizes:</strong></h3>
                  <p>$200 gift card to our <a href="http://iCollectPanini.com" target="_blank" onclick="ga('send', 'event', 'External Link', 'prizes_iCollect');">iCollectPanini.com</a> store.</p>
                  
                  <h3><strong>(9) Monthly Prizes/ (1) Prize awarded per month:</strong></h3>
                  <p>(1) NFL player Autographed Mini Helmet.</p>

                  <h3><strong>(37) Tier 1 Weekly Prizes/ (1) Prize awarded per week:</strong></h3>
                  <p>(1) Box of Panini NFL trading cards products.</p>

                  <h3><strong>(370) Tier 2 Weekly Prizes/ (10) Prizes awarded per week:</strong></h3>
                  <p>(1) Panini t-shirt.</p>
                  
                  <p>See <a href="/official-rules" onclick="ga('send', 'event', 'Navigation', 'prizes_rules');">Official Rules</a> for complete prize details.</p>
                  
                                 <a href="/" type="button" class="btn btn-default" onclick="ga('send', 'event', 'Navigation', 'prizes_enter_button');">Enter Now</a>
                                 
               </div>
         </div>
      </div>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', ['bodyID' => 'prizes'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>