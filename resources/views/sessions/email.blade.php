@extends ('layouts.master')

@section('content')
	<br><br><br>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
         <img id="bg-second" src="/images/bg-secondary-320.png" alt="bg-secondary">
         <video id="main-video" width="400" height="225" controls poster="https://s3.amazonaws.com/td.other/Panini/2017.kidreporter/assets/videos/bg-video-992.png">
         <source src="/videos/main.mp4" type="video/mp4">
         Your browser does not support the video tag.
         </video>
      </div>
      <div class ="col-xs-12 col-sm-12 col-md-6">
      	<div id="main-msg">
				<h1>You and your child could<br/>
	        	win a trip to Super Bowl LII</h1>
	        	<p>Enter for a chance to win a once-in-a-lifetime<br/>
	           experience during Super Bowl week.<br/>
	           Interview NFL stars. It's all part of being the<br/>
	           Panini Super Bowl Kid Reporter.</p>
		
		<form method="POST" action="/email">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="email">Enter your Email to continue:</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-default">CONTNIUE</button>
		    </div>
	  	</form>
	    <p>Please note that if you have already filled out a <br>
	    						registration form you will automatically <br>
	       					be entered and will not have to complete the <br>
	       					registration form again.</p>
	       </div>
	  	</div>
	</div>
		<br><br><br>
@endsection