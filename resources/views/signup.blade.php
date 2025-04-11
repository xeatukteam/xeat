@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')

<main>

<!-- first section -->
<section class="wrap_loginscreen">
		<div class="wraps_login-screen">
			<div class="wraps_left">
				<a href="{{ route('home') }}" class="wraps_logoimg"><img src="{{ asset('public/images/red-logo.png') }}" class="logo-image"></a>
				<img class="login-image" src="{{ $signup_page->image }}" alt="image">
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
				    <label for="name" class="form-label">Name</label>
				    <input type="text" id="name" class="form-control" name="name" placeholder="Name">
				  </div>
				  <div class="mb-4">
				    <label for="phone" class="form-label">Phone Number</label>
				    <input type="tel" id="contact" name="contact" class="form-control wraps_phonenumber">
				  </div>
				  <div class="mb-4">
				    <label for="password" class="form-label">Password</label>
				    <div class="wraps_pasord-input">
				    <input type="password" class="form-control wrap_password" name="password" id="password" placeholder="Password">
				    <span class="display_password" id="togglesignPassword"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5799 12.0019C15.5799 13.9819 13.9799 15.5819 11.9999 15.5819C10.0199 15.5819 8.41992 13.9819 8.41992 12.0019C8.41992 10.0219 10.0199 8.42188 11.9999 8.42188C13.9799 8.42188 15.5799 10.0219 15.5799 12.0019Z" stroke="#9EA3AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M11.9998 20.2688C15.5298 20.2688 18.8198 18.1887 21.1098 14.5887C22.0098 13.1787 22.0098 10.8087 21.1098 9.39875C18.8198 5.79875 15.5298 3.71875 11.9998 3.71875C8.46984 3.71875 5.17984 5.79875 2.88984 9.39875C1.98984 10.8087 1.98984 13.1787 2.88984 14.5887C5.17984 18.1887 8.46984 20.2688 11.9998 20.2688Z" stroke="#9EA3AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>

                        <span class="display_password" id="togglePasswordsigneyehide" style="display: none;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2L22 22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.71277 6.7226C3.66479 8.79527 2 12 2 12C2 12 5.63636 19 12 19C14.0503 19 15.8174 18.2734 17.2711 17.2884M11 5.05822C11.3254 5.02013 11.6588 5 12 5C18.3636 5 22 12 22 12C22 12 21.3082 13.3317 20 14.8335" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 14.2362C13.4692 14.7112 12.7684 15.0001 12 15.0001C10.3431 15.0001 9 13.657 9 12.0001C9 11.1764 9.33193 10.4303 9.86932 9.88818" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>

                    </div>
				  </div>

				  <div class="mb-4 form-check">
				  	<div class="wraps_login-flex">
				  		<div class="remember_me-wrapper">
				  			<div class="wraps_remeber-checkbox wrapsterms_conditions">
				  				<input type="checkbox" class="form-check-input wrap_checboxinput" id="terms_conditions">
				    			<label class="form-check-label" for="terms_conditions">I accept terms and conditions</label>
				  			</div>
				  		</div>
				  	</div>
				    
				  </div>
				  <button type="submit" class="btn btn-primary wrap_signup-btn">Signup</button>
                   <p class="wrap_create_account">Already have an account? <a href="{{ route('login') }}"> Login</a></p>
				</form>
				</div>
			</div>
		</div>
	</section>
<!-------------------- first section end ------------------------------------>

</main>

@endsection

@push('scripts')

<!-- Initialize intlTelInput -->
<script>

    document.addEventListener("DOMContentLoaded", function () {
        var input = document.querySelector("#contact");
        if (input && !input.dataset.intlInitialized) {
            window.intlTelInput(input, {
                separateDialCode: true,
                initialCountry: "us",
                preferredCountries: ["us", "gb", "ca", "au"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });
            input.dataset.intlInitialized = "true";
        }
    });
    
</script>


<script>
document.getElementById("togglesignPassword").addEventListener("click", function() {
    var passwordField = document.getElementById("password");
    var eyeOpen = document.getElementById("togglesignPassword");
    var eyeClose = document.getElementById("togglePasswordsigneyehide");

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

document.getElementById("togglePasswordsigneyehide").addEventListener("click", function() {
    var passwordField = document.getElementById("password");
    var eyeOpen = document.getElementById("togglesignPassword");
    var eyeClose = document.getElementById("togglePasswordsigneyehide");

    passwordField.type = "password";
    eyeOpen.style.display = "inline";
    eyeClose.style.display = "none";
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {

    const API_BASE_URL = "{{ $apiBaseUrl }}";


    const signup_apiUrl  = `${API_BASE_URL}/backend/API/users.php/signup`;

    const form = document.querySelector(".wrap_login-form");
    const submitButton = document.querySelector(".wrap_signup-btn");

    form.addEventListener("submit", async function(event) {
        event.preventDefault(); // Prevent default form submission
        event.stopImmediatePropagation(); // Ensure event fires only once

        // Get input values
        let name = document.getElementById("name").value.trim();
        let contact = document.getElementById("contact").value.trim();
        let password = document.getElementById("password").value.trim();
        let termsAccepted = document.getElementById("terms_conditions").checked;

        // Clear previous toastr messages
        toastr.clear();

        // Validation checks
        if (!name) {
            toastr.error("Name is required.");
            submitButton.disabled = false;
            return;
        }
        if (!contact) {
            toastr.error("Phone number is required.");
            submitButton.disabled = false;
            return;
        }
        if (!password) {
            toastr.error("Password is required.");
            submitButton.disabled = false;
            return;
        }
        if (password.length < 8) {
            toastr.error("Password must be at least 8 characters.");
            submitButton.disabled = false;
            return;
        }
        if (!termsAccepted) {
            toastr.error("You must accept the terms and conditions.");
            submitButton.disabled = false;
            return;
        }

        // Get selected country dial code (if applicable)
        let countryCode = "+94"; // Default to US if no country code logic
        if (typeof iti !== "undefined") {
            let countryData = iti.getSelectedCountryData();
            countryCode = "+" + countryData.dialCode;
        }

        // Generate a default email for web signups
        let email = "web" + Math.floor(Math.random() * 9000 + 1000) + "@gmail.com";

        let fullContact = countryCode + contact;



        // Build form data
        let formData = new FormData();
        formData.append("name", name);
        formData.append("contact", fullContact);
        formData.append("email", email);
        formData.append("password", password);
        formData.append("countryCode", countryCode);
        formData.append("device_type", "");
        formData.append("device_token", "");
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");

        try {
            let response = await fetch(signup_apiUrl, {
                method: "POST",
                body: formData
            });
            let data = await response.json();

            if (data.code === "200") {
                toastr.success("Signup successful! Redirecting...");

                await fetch("{{ url('/set-session') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    credentials: "include",
                    body: JSON.stringify({ user_id: data.data.id })
                });               

                 setTimeout(() => {
                    window.location.href = "{{ route('home') }}"; // Redirect to home page
                }, 2000);

                
            } else {
                toastr.error("Error: " + data.message);
            }
        } catch (error) {
            console.error("Error:", error);
            toastr.error("An error occurred. Please try again.");
        } finally {
            submitButton.disabled = false; // Re-enable button
        }
    }, { once: true }); // Ensure event fires only once
});
</script>



@endpush