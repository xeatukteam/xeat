@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
	<!-- Title Page -->
	<section>
		<div class="item-slick2">
			<img src="images/banner/restaurantreg.jpg" alt="">
		</div>
	</section>


	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113 margintop">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Register
						</span>

						<h6 class="tit3 t-center m-b-35 m-t-2">
							Restaurant
						</h6>
					</div>

					<form action="" id="contactForm" method="post" class="contactForm wrap-form-reservation size22 m-l-r-auto">
						<div class="row">
							<div class="col-md-4">
								<!-- Name -->
								<span class="txt9">
									Restaurant Name
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="rname" id="rname" placeholder="Restaurant Name">
									<div class="error"><small class="text-danger" id="rname_error"></small></div>
								</div>

							</div>

							<div class="col-md-4">
								<!-- Name -->
								<span class="txt9">
									Address
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="address" id="address" placeholder="Address">
									<div class="error"><small class="text-danger" id="address _error"></small></div>
								</div>
							</div>

							<div class="col-md-4">
								<!-- Name -->
								<span class="txt9">
									Postal Code
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="pcode" id="pcode" placeholder="Postal Code">
									<div class="error"><small class="text-danger" id="pc_error"></small></div>
								</div>
							</div>
						</div>

						<div class="row">

							<div class="col-md-4">
								<!-- Phone -->
								<span class="txt9">
									Country
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="country" value="United Kingdom">
								</div>
							</div>

							<div class="col-md-4">
								<!-- Email -->
								<span class="txt9">
									Email
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="email" name="email" id="email" placeholder="Email">
									<div class="error"><small class="text-danger" id="email_error"></small></div>
								</div>
							</div>



							<div class="col-md-4">
								<!-- Phone -->
								<span class="txt9">
									Phone
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" id="phone" placeholder="Phone">
									<div class="error"><small class="text-danger" id="phone_error"></small></div>
								</div>
							</div>

						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" name="submityes" id="submityes" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Register
							</button>
						</div>
						<div class="t-center m-t-22">
							<p class"alert="" alert-success="" t-center"="" style="visibility: hidden">Register Request Send
								Successfully!</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection


@push('scripts')
<script type="text/javascript">
		document.getElementById("contactForm").onsubmit = function () {
			
			var rname = document.forms["contactForm"]["rname"].value;
			var address = document.forms["contactForm"]["address"].value;
			var pc = document.forms["contactForm"]["pcode"].value;
			var email = document.forms["contactForm"]["email"].value;
			var phone = document.forms["contactForm"]["phone"].value;

			var submit = true;

			if (rname == null || rname == "") {
				nameError = "Please enter your restaurant name!";
				document.getElementById("rname_error").innerHTML = nameError;
				submit = false;
			}

			if (address == null || address == "") {
				addressError = "Please enter your address!";
				document.getElementById("address _error").innerHTML = addressError;
				submit = false;
			}


			if (pc == null || pc == "") {
				pcError = "Please enter your postal code!";
				document.getElementById("pc_error").innerHTML = pcError;
				submit = false;
			}


			if (email == null || email == "") {
				emailError = "Please enter your email address!";
				document.getElementById("email_error").innerHTML = emailError;
				submit = false;
			}


			if (phone == null || phone == "") {
				phoneError = "Please enter your phone number!";
				document.getElementById("phone_error").innerHTML = phoneError;
				submit = false;
			}


			return submit;
		}

		function removeWarning() {
			document.getElementById(this.id + "_error").innerHTML = "";
		}

		document.getElementById("rname").onkeyup = removeWarning;
		document.getElementById("address").onkeyup = removeWarning;
		document.getElementById("pcode").onkeyup = removeWarning;
		document.getElementById("email").onkeyup = removeWarning;
		document.getElementById("phone").onkeyup = removeWarning;
	</script>
@endpush