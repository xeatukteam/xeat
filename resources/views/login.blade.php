@extends('layouts.app')

@section('title', 'Login')

@section('content')
<main>


	<!-- first section -->
	<section class="wrap_loginscreen">
		<div class="wraps_login-screen">
			<div class="wraps_left">
				{{-- <a href="{{ route('home')}}" class="wraps_logoimg"><img src="{{ asset('public/images/red-logo.png')}}" class="logo-image"></a> --}}
				<img class="login-image" src="{{ $login_page->image }}" alt="image">
				<div class="wrap_texts">
					<p>You agree to Xeat <a href="#">Terms of Use & Privacy Policy.</a> You don't need to consent as a condition of food, or buying any other goods or services. Message/data rates may apply.</p>
				</div>
			</div>
			<div class="wraps_right">
				<div class="wrapper_loginform">
				<div class="wrap_logintexts">
					<h1>Welcome Back</h1>
					<p>Welcome back! Please enter your details.</p>
				</div>
				<form class="wrap_login-form">
				  <div class="mb-4">
				    <label for="phone" class="form-label">Phone Number</label>
				    <input type="tel" id="phone" class="form-control wraps_phonenumber">
				  </div>
				  <div class="mb-4">
				    <label for="password" class="form-label">Password</label>
				    <div class="wraps_pasord-input">
				    <input type="password" class="form-control wrap_password" id="password" placeholder="Password">
				    <span class="display_password" id="togglePassword"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5799 12.0019C15.5799 13.9819 13.9799 15.5819 11.9999 15.5819C10.0199 15.5819 8.41992 13.9819 8.41992 12.0019C8.41992 10.0219 10.0199 8.42188 11.9999 8.42188C13.9799 8.42188 15.5799 10.0219 15.5799 12.0019Z" stroke="#9EA3AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M11.9998 20.2688C15.5298 20.2688 18.8198 18.1887 21.1098 14.5887C22.0098 13.1787 22.0098 10.8087 21.1098 9.39875C18.8198 5.79875 15.5298 3.71875 11.9998 3.71875C8.46984 3.71875 5.17984 5.79875 2.88984 9.39875C1.98984 10.8087 1.98984 13.1787 2.88984 14.5887C5.17984 18.1887 8.46984 20.2688 11.9998 20.2688Z" stroke="#9EA3AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></span>

                        <span class="display_password" id="togglePasswordeyehide" style="display: none;">
                            <![CDATA[
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2L22 22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.71277 6.7226C3.66479 8.79527 2 12 2 12C2 12 5.63636 19 12 19C14.0503 19 15.8174 18.2734 17.2711 17.2884M11 5.05822C11.3254 5.02013 11.6588 5 12 5C18.3636 5 22 12 22 12C22 12 21.3082 13.3317 20 14.8335" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 14.2362C13.4692 14.7112 12.7684 15.0001 12 15.0001C10.3431 15.0001 9 13.657 9 12.0001C9 11.1764 9.33193 10.4303 9.86932 9.88818" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            ]]>
                        </span>

                    </div>
				  </div>

				  <div class="mb-4 form-check">
				  	<div class="wraps_login-flex">
				  		<div class="remember_me-wrapper">
				  			<div class="wraps_remeber-checkbox">
				  				<input type="checkbox" class="form-check-input wrap_checboxinput" id="remember_me">
				    			<label class="form-check-label" for="remember_me">Remember me</label>
				  			</div>
				  		</div>
				  		<div class="wrap_forgot-passowrd">
				  			<p><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#forgot_passwrd">Forgot Password?</a></p>
				  		</div>
				  	</div>
				    
				  </div>
				  <button type="submit" class="btn btn-primary wrap_signin-btn">Signin</button>

				  <button type="button" class="btn btn-primary wrap_signin-google-btn"><a href="#"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.8055 10.0415H21V10H12V14H17.6515C16.827 16.3285 14.6115 18 12 18C8.6865 18 6 15.3135 6 12C6 8.6865 8.6865 6 12 6C13.5295 6 14.921 6.577 15.9805 7.5195L18.809 4.691C17.023 3.0265 14.634 2 12 2C6.4775 2 2 6.4775 2 12C2 17.5225 6.4775 22 12 22C17.5225 22 22 17.5225 22 12C22 11.3295 21.931 10.675 21.8055 10.0415Z" fill="#FFC107"></path>
                                        <path d="M3.15283 7.3455L6.43833 9.755C7.32733 7.554 9.48033 6 11.9998 6C13.5293 6 14.9208 6.577 15.9803 7.5195L18.8088 4.691C17.0228 3.0265 14.6338 2 11.9998 2C8.15883 2 4.82783 4.1685 3.15283 7.3455Z" fill="#FF3D00"></path>
                                        <path d="M12.0002 22.0003C14.5832 22.0003 16.9302 21.0118 18.7047 19.4043L15.6097 16.7853C14.5719 17.5745 13.3039 18.0014 12.0002 18.0003C9.39916 18.0003 7.19066 16.3418 6.35866 14.0273L3.09766 16.5398C4.75266 19.7783 8.11366 22.0003 12.0002 22.0003Z" fill="#4CAF50"></path>
                                        <path d="M21.8055 10.0415H21V10H12V14H17.6515C17.2571 15.1082 16.5467 16.0766 15.608 16.7855L15.6095 16.7845L18.7045 19.4035C18.4855 19.6025 22 17 22 12C22 11.3295 21.931 10.675 21.8055 10.0415Z" fill="#1976D2"></path>
                                    </svg></span> Contiue with Google</a></button>
                                    <p class="wrap_create_account">Don’t have an account? <a href="{{ route('signup') }}">Create an account</a></p>
				</form>
				</div>
			</div>
		</div>
	</section>
<!-------------------- first section end ------------------------------------>


<!--------------------------------------------- Restaurant Food Experience --------------------------------------------->



<!----------------------------------------- popup forgot password ------------------------------------------->

<!-- Modal -->
<div class="modal fade wrapper_forgots_form" id="forgot_passwrd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="wraps_forgot_item">
        	<div class="heading_forgots">
        		<h3>Reset your password</h3>
        		<p>Enter the phone number associated with your account and we'll send you a code to reset your password.</p>
        		  <div class="mb-4">
				    <input type="tel" id="forgotphone" class="form-control wraps_phonenumber">
				  </div>

				  <div class="mb-3 wraps_send-otp">
				  	<button type="submit" class="btn btn-primary wrap_continue" id="openSecondModal">Continue</button>
				  </div>

				  <div class="mb-2 wrap_return_login">
				  	<p><span data-bs-dismiss="modal" aria-label="Close">Return to login</span></p>
                      <div id="otpMessage" class="alert mt-3" style="display: none;"></div>

				  </div>
        	</div>
        </div>
        <!-- OTP Message Display -->

      </div>
    </div>
  </div>
</div>

<!-------------------------------------------------- second modal ------------------------------------>

<div class="modal fade wrap_second_modalopen" id="secondModal" tabindex="-1" aria-labelledby="secondModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            	<div class="heading_forgots">
        		<h3>Enter verification code</h3>
        		<p>Enter the phone number associated with your account and we'll send you a code to reset your password.</p>
        		<div class="mb-4">
				    <input type="text" id="otpCode" class="form-control wraps_phonenumber" placeholder="- - - -">
				  </div>
				   <div class="mb-3 wrap_return_login">
				  	<button type="button" class="btn btn-primary wrap_sendagain" id="resendOtp">Send the code again</button>
				  </div>
				  <div class="mb-3 wraps_send-otp">
				  	<button type="submit" class="btn btn-primary wrap_continue" id="openthirdModal">Continue</button>
				  </div>
				 
        	</div>
               
            </div>
        </div>
    </div>
</div>


<!-------------------------------------------------- second modal end ------------------------------------>

<!-------------------------------------------------- Third modal ------------------------------------>

<div class="modal fade wrap_second_modalopen" id="thirdModal" tabindex="-1" aria-labelledby="thirdModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            	<div class="heading_forgots">
        		<h3>Create new password</h3>
        		<p>Please enter a new password. Your new password must be different from previous password.</p>
        		<div class="mb-4">
				    <input type="password" id="new_password" class="form-control wraps_password" placeholder="New Password">
				  </div>

				  <div class="mb-4">
				    <input type="password" id="confirm_password" class="form-control wraps_password" placeholder="Confirm Password">
				  </div>

				  <div class="mb-3 wraps_send-otp">
				  	<button type="submit" class="btn btn-primary wrap_continue" id="openfourthModal">Continue</button>
				  </div>
				 
        	</div>
               
            </div>
        </div>
    </div>
</div>


<!-------------------------------------------------- Third modal end ------------------------------------>

<!-------------------------------------------------- fourth modal ------------------------------------>

<div class="modal fade wrap_second_modalopen" id="fourthModal" tabindex="-1" aria-labelledby="fourthModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            	<div class="heading_forgots">
        		<h3>Your successfully changed your password</h3>
        		<p>Setting up an account takes less than 1 minute.</p>
				  
				  <div class="mb-3 wraps_send-otp">
				  	<button type="submit" class="btn btn-primary wrap_continue" id="goToLogin">Continue</button>
				  </div>
				 
        	</div>
               
            </div>
        </div>
    </div>
</div>


<!-------------------------------------------------- fourth modal end ------------------------------------>


</main>



@endsection


@push('scripts')

 <script>

function initializeIntlTelInput(selector) {
    var input = document.querySelector(selector);
    if (input && !input.dataset.intlInitialized) { 
        window.intlTelInput(input, {
            separateDialCode: true,
            initialCountry: "us",
            preferredCountries: ["us", "gb", "ca", "au"],
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });
        input.dataset.intlInitialized = "true"; // Mark as initialized
    }
}

document.addEventListener("DOMContentLoaded", function () {
    initializeIntlTelInput("#phone");
    initializeIntlTelInput("#forgotphone");
});


</script>



<script>
    let accesstoken = "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd";
    let userPhone = "";
    const API_BASE_URL = "{{ $apiBaseUrl }}";


    // Step 1: Send OTP
    document.getElementById("openSecondModal").addEventListener("click", function() {
        userPhone = document.getElementById("forgotphone").value.trim();
        let input = document.querySelector("#forgotphone");
        let iti = window.intlTelInputGlobals.getInstance(input);
        userPhone = iti.getNumber();


    if (!userPhone) {
        toastr.error("Phone number is required."); // ✅ Show toast error
        return;
    }

    let formData = new FormData();
    formData.append("accesstoken", accesstoken);
    formData.append("contact", userPhone);
    let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


    fetch("/otp_send_forgot", {
        method: "POST",
        headers: {
        "X-CSRF-TOKEN": csrfToken // Add CSRF token
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "200") {
            $("#forgot_passwrd").modal("hide");
            $("#secondModal").modal("show");
        } else {
            toastr.error(data.message); // ✅ Show API error in Toastr
        }
    })
    .catch(error => toastr.error("Something went wrong!"));
    });



   // Disable and show countdown on Resend OTP button
    function startResendTimer() {
        let resendButton = document.getElementById("resendOtp");
        let timer = 30; // 30 seconds cooldown
        resendButton.disabled = true;

        let interval = setInterval(function () {
            resendButton.innerText = `Resend OTP (${timer}s)`;
            timer--;

            if (timer < 0) {
                clearInterval(interval);
                resendButton.innerText = "Send the code again";
                resendButton.disabled = false;
            }
        }, 1000);
    }


    //Resend Otp functionalty start here
    document.getElementById('resendOtp').addEventListener("click",function(){

        if (!userPhone) {
         toastr.error("Phone number is missing. Please enter your phone number again.");
         return;
        }

        let resendData = new FormData();
        resendData.append("accesstoken", accesstoken);
        resendData.append("contact", userPhone);

        fetch("/otp_send_forgot", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: resendData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "200") {
                toastr.success("OTP resent successfully!");
                startResendTimer(); // Start timer after resending OTP

            } else {
                toastr.error(data.message);
            }
        })
        .catch(error => toastr.error("Something went wrong while resending the OTP!"));


    });

    // Step 2: Verify OTP
    document.getElementById("openthirdModal").addEventListener("click", function() {
        let otpCode = document.getElementById("otpCode").value.trim();

        if (!otpCode) {
            toastr.error("Please enter the OTP."); // ✅ Show toast error
            return;
        }

        let formData = new FormData();
        formData.append("accesstoken", accesstoken);
        formData.append("contact", userPhone);
        formData.append("otp", otpCode);

        fetch("/verify_otp", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}" // Add CSRF token
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "200") {
                $("#secondModal").modal("hide");
                $("#thirdModal").modal("show");
            } else {
                toastr.error(data.message);
            }
        })
        .catch(error => toastr.error("Something went wrong!"));
    });

    // Step 3: Reset Password
    document.getElementById("openfourthModal").addEventListener("click", function() {
        let newPassword = document.getElementById("new_password").value.trim();
        let confirmPassword = document.getElementById("confirm_password").value.trim();

        if (!newPassword || !confirmPassword) {
            toastr.error("All fields are required.");
            return;
        }

         // Check password length
        if (newPassword.length < 8) {
            toastr.error("Password must be at least 8 characters long.");
            return;
        }

        if (newPassword !== confirmPassword) {
            toastr.error("The new password and confirm password do not match. Please try again.");
            return;
        }


        const forgot_Url  = `${API_BASE_URL}/backend/API/users.php/forgot_password`;


        let formData = new FormData();
        formData.append("accesstoken", accesstoken);
        formData.append("contact", userPhone);
        formData.append("password", newPassword);

        fetch(forgot_Url, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}" // Add CSRF token
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.code === "200") {
                toastr.success("Password changed successfully!");

                $("#thirdModal").modal("hide");
                $("#fourthModal").modal("show");
            } else {
                toastr.error(data.message);
            }
        })
        .catch(error => toastr.error("Something went wrong!"));
    });

    // Step 4: Final Step - Redirect to Login
    document.getElementById("goToLogin").addEventListener("click", function() {
         window.location.href = "{{ route('login') }}"; // Redirect to login page
    });
</script>


<script>
    document.getElementById("togglePassword").addEventListener("click", function() {
        var passwordField = document.getElementById("password");
        var eyeOpen = document.getElementById("togglePassword");
        var eyeClose = document.getElementById("togglePasswordeyehide");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeOpen.style.display = "none";
            eyeClose.style.display = "inline";
        } else {
            passwordField.type = "password";
            eyeOpen.style.display = "inline";
            eyeClose.style.display = "none";
        }
    });

    document.getElementById("togglePasswordeyehide").addEventListener("click", function() {
        var passwordField = document.getElementById("password");
        var eyeOpen = document.getElementById("togglePassword");
        var eyeClose = document.getElementById("togglePasswordeyehide");

        passwordField.type = "password";
        eyeOpen.style.display = "inline";
        eyeClose.style.display = "none";
    });
</script>

<script>

// localStorage.removeItem("user_id");

 document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".wrap_login-form");

    // Remove any existing event listener before adding a new one
    form.removeEventListener("submit", handleLogin);
    form.addEventListener("submit", handleLogin);
 });

    async function handleLogin(event) {
        event.preventDefault(); // Prevent form from reloading the page

        // Get input values
        let phone = document.getElementById("phone").value.trim();

        let input = document.querySelector("#phone");
        let iti = window.intlTelInputGlobals.getInstance(input);
        phone = iti.getNumber();
        let password = document.getElementById("password").value.trim();

        // Clear existing toastr messages (to prevent duplicates)
        toastr.clear();

        // Validation
        if (!phone) {
            toastr.error("Phone number is required.");
            return;
        }

        if (!password) {
            toastr.error("Password is required.");
            return;
        }

        if (password.length < 8) {
            toastr.error("Password must be at least 8 characters.");
            return;
        }

        // Create FormData object
        let formData = new FormData();
        formData.append("contact", phone);
        formData.append("password", password);
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("device_token", "");
        formData.append("device_type", "");

        const apiUrl  = `${API_BASE_URL}/backend/API/users.php/login`;


        // API endpoint
        // let apiUrl = "https://xeat.co.uk/backend/API/users.php/login";

        try {
            let response = await fetch(apiUrl, {
                method: "POST",
                body: formData //Sending as FormData (not JSON)
            });

            let result = await response.json();

            if (result.code === "200") {
                toastr.success("Login successful! Redirecting...");
                
                    // Send user ID to Laravel for session storage
                    await fetch("{{ url('/set-session') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        credentials: "include",
                        body: JSON.stringify({ user_id: result.data.id })
                    });

                    // Save session address to database
                await fetch("{{ route('save_address_db') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                    },
                    credentials: "include",
                    body: JSON.stringify({ user_id: result.data.id }),
                });

                
                setTimeout(() => {
                    window.location.href = "{{ route('home') }}"; // Redirect to home page
                }, 2000);
            } else {
                toastr.error("Error: " + result.message);
            }
        } catch (error) {
            console.error("Error:", error);
            toastr.error("An error occurred. Please try again.");
        }
    }



</script>
@endpush