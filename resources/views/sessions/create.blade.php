@extends('layouts.master') 

@section('content')
	<div class="col-sm-12">
		<h1>Register</h1>

		<form method="POST" action="/register">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="firstName">First Name:</label>
				<input type="text" class="form-control" id="firstName" name="firstName" required>
			</div>

			<div class="form-group">
				<label for="lastName">Last Name:</label>
				<input type="text" class="form-control" id="lastName" name="lastName" required>
			</div>

			<div class="form-group">
				<label for="address">Address:</label>
				<input type="text" class="form-control" id="address" name="address" required>
			</div>

			<div class="form-group">
				<label for="city">City:</label>
				<input type="text" class="form-control" id="city" name="city">
			</div>

			<div class="form-group">
				<label for="state">State:</label>
				<select class="form-control" id="state" name="state">
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
			</div>

			<div class="form-group">
				<label for="zip">ZIP Code:</label>
				<input type="text" class="form-control" id="zip" name="zip">
			</div>

			<div class="form-group">
				<label for="phone">Phone Number:</label>
				<input type="text" class="form-control" id="phone" name="phone">
			</div>

			<div class="form-group">
				<label for="email">E-Mail:</label>
				<input type="text" class="form-control" id="email" name="email" readonly value="{{ session('email') }}">
			</div>

			<div class="form-group">
				<label for="code">Promo Code:</label>
				<input type="text" class="form-control" id="code" name="code" readonly value="{{ session('code') }}">
			</div>

			<div class="form-group">
				<input type="checkbox" name="opt" id="opt" checked="checked">Add me to the Panini America mailing list to receive special offers and discounts.*
			</div>

			<div class="form-group">
				<input type="checkbox" name="terms" id="terms" required>I hereby attest that I am a legal resident of the 50 U.S. & DC 18+ & a parent/legal guardian of a minor child who is a legal U.S. resident between the ages of 7 & 13 & hereby agree to the terms of the Official Rules. 
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-default">REGISTER</button>
            </div>
		</form>
	</div>
@endsection