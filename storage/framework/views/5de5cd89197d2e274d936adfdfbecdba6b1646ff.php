      <?php $__env->startSection('content'); ?>
         <div class="content">
            <div class="row">
               <div class="col-xs-12 col-sm-6">
                     <img id="bg-second" src="/images/bg-secondary-320.png" alt="bg-secondary">
                     <video id="main-video" width="400" height="225" controls poster="https://s3.amazonaws.com/td.other/Panini/2017.kidreporter/assets/videos/bg-video-992.png">
                        <source src="/videos/main.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                     </video>
               </div>

               <div class ="col-xs-12 col-sm-6">
                  <div id="main-msg">
                     <h1>You and your child could<br/>
                     win a trip to Super Bowl LII</h1>
                     <p>Enter for a chance to win a once-in-a-lifetime<br/>
                        experience during Super Bowl week.<br/>
                        Interview NFL stars. It's all part of being the<br/>
                        Panini Super Bowl Kid Reporter.</p>

                     <form method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                     <div class="form-group">
                        <label for="promoCode">Enter a promo code to get started<br/>(no spaces)</label>
                        <input id="promoCode" class="form-control" name="promoCode" required>
                     </div>

                        <button type="submit" class="btn btn-default">CONTINUE</button>
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
            
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', ['bodyID' => 'home'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>