﻿<!DOCTYPE html>
<html lang="en">



<head>
	<title>Xeat.co.uk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/new_favicon.png">

	<style>
		.error-message {
		background-color: #ffe5e5; /* Light red background color */
		color: #d9534f; /* Red text color */
		border: 1px solid #d9534f; /* Red border */
		padding: 10px; /* Padding for better visibility */
		margin-bottom: 10px; /* Margin to separate from other elements */
		}
	</style>

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script src="ajax/libs/jquery/3.5.1/jquery.min.js"></script>



	<!--===============================================================================================-->
</head>




<body>
	<div id="loader"></div>
	<!-- Header -->

	<div id="main">

	<header class="header-fixed">
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.php">
							<img src="images/icons/new_logo1.png" alt="IMG-LOGO" data-logofixed="images/icons/xeatsArtboard 10@4x2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.php">Home</a>
								</li>

								<li>
									<a href="about.php">About</a>
								</li>

								<li>
									<a href="register.php">Register Restaurant</a>
								</li>

								<li>
									<a href="faq.php">Faq</a>
								</li>

								<li>
									<a href="privacy.php">Privacy Policy</a>
								</li>

								<li>
									<a href="contact.php">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="https://www.instagram.com/xeat.co.uk/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="Xeat.co.uk.html"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="mailto: xeatuk@gmail.com"><i class="fa fa-envelope m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="index.php" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.php" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="contact.php" class="txt19">Contact</a>
			</li>

			<li class="t-center m-b-13">
				<a href="faq.php" class="txt19">faq</a>
			</li>

			<li class="t-center m-b-13">
				<a href="privacy.php" class="txt19">Privacy Policy</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="register.php" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Register Restaurant
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->

		</div>
	</aside>


		<section class="section-booking bg1-pattern p-t-100 p-b-110">
			<div class="container">
			<div id="messages-container"></div>
			<div id="error-message" class="error-message" style="display: none;"></div>


				<div class="row">
					<div class="col-lg-12 p-b-30">
						<div class="t-center">
							<h3 class="tit3 t-center m-b-35 m-t-20">
								Delete Account Request
							</h3>
						</div>

						<form action="index.php" id="cForm" method="post" class="wrap-form-booking">
							<div class="row">
								<div class="col-md-12">
									<!-- Name -->
									<span class="txt9">
										Name
									</span>

									<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
										<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" id="name" placeholder="Name">
										<div class="error"><small class="text-danger" id="name_error"></small></div>
									</div>
								</div>

								<div class="col-md-12">
									<span class="txt9">User Type</span>
									<div class="form-group wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<select class="bo-rad-10 sizefull txt10 p-l-20" name="user_type" id="user_type">
									<option value="user">User</option>
									<option value="driver">Driver</option>
									</select>
									<div class="error"><small class="text-danger" id="user_type_error"></small></div>
									</div>
                                </div>

								

								<div class="col-md-12">
									<!-- Phone -->
									<span class="txt9">
										Phone
									</span>

									<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
										<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" id="phone" placeholder="Phone">
										<div class="error"><small class="text-danger" id="phone_error"></small></div>
									</div>
								</div>

								<div class="col-12">
									<!-- Message -->
									<span class="txt9">
										Message
									</span>
									<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" id="message" placeholder="Message"></textarea>
									<div class="error"><small class="text-danger" id="message_error"></small></div>
								</div>
							</div>

							<div class="wrap-btn-booking flex-c-m m-t-13">
								<!-- Button3 -->
								<button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
									Submit
								</button>
							</div>
						</form>
                       
					</div>

					<!-- <div class="col-lg-4">
						<div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
							<img src="images/pictures/Untitled-2.png" alt="IMG-OUR">
						</div>
					</div> -->
				</div>
			</div>
		</section>
		<!-- Footer -->
		<footer class="bg1">
			<div class="container p-t-40 p-b-70">
				<div class="row">
					<div class="col-sm-6 col-md-4 p-t-50">
						<!-- - -->
						<h4 class="txt13 m-b-33">
							Contact Us
						</h4>

						<ul class="m-b-70">
						<li class="txt14 m-b-14">
								<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
								<a href="http://maps.google.co.uk/?q=393 Luton Road, Harpenden, UK"> 393 Luton Road Harpenden
									AL53NF  UNITED KINGDOM</a>
							</li>

							<li class="txt14 m-b-14">
								<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
								<a href="http://maps.google.co.uk/?q=XEAT, 1st Cross Street, Vavuniya, Sri Lanka"> 86 e 1 st cross street vavuniya Srilanka</a>
							</li>

							<li class="txt14 m-b-14">
								<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
								<a href="tel: +447585424917">+44 1582510304</a>
							</li>

							<li class="txt14 m-b-14">
								<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
								<a href="tel: 01582510304">+94 0775207752</a>    
							</li>

							<li class="txt14 m-b-14">
								<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
								<a href="mailto: xeatuk@gmail.com">xeatuk@gmail.com</a>
							</li>
						</ul>


					</div>

					<div class="links col-sm-6 col-md-4 p-t-50">
						<!-- - -->
						<h4 class="txt13 m-b-33">
							Links
						</h4>

						<div class="m-b-25">
							<span class="fs-13 color2 m-r-5">
								<i class="fa fa-angle-double-right" aria-hidden="true"></i>
							</span>
							<a href="index.php" class="txt15">
								Home
							</a>
						</div>

						<div class="m-b-25">
							<span class="fs-13 color2 m-r-5">
								<i class="fa fa-angle-double-right" aria-hidden="true"></i>
							</span>
							<a href="about.php" class="txt15">
								About
							</a>
						</div>

						<div class="m-b-25">
							<span class="fs-13 color2 m-r-5">
								<i class="fa fa-angle-double-right" aria-hidden="true"></i>
							</span>
							<a href="register.php" class="txt15">
								Register Restaurant
							</a>
						</div>

						<div class="m-b-25">
							<span class="fs-13 color2 m-r-5">
								<i class="fa fa-angle-double-right" aria-hidden="true"></i>
							</span>
							<a href="contact.php" class="txt15">
								Contact
							</a>
						</div>
					</div>



					<div class="footer-app-logo col-sm-6 col-md-4 p-t-50">

						<div class="footer-logo">
							<!-- - -->
							<h4 class="m-b-58">
								<img src="images/icons/new_logo1.png" style="width: 150px;">
							</h4>

						</div>



						<div class="footer-app">

							<h4 class="txt13 m-b-10 t-center">
								Download The App

							</h4>
							<!-- <p>we will launche the APP very soon!</p> -->

							<a class="" href="https://play.google.com/store/apps/details?id=com.food.xeat">
								<img src="images/icons/Google-Play-Store-app-logo.png" alt="GALLERY" style="width: 140px;">
							</a>

							<a class="" href="https://apps.apple.com/in/app/xeat/id1610674856">
								<img src="images/icons/Download_on_the_App_Store_Badge_US-UK_RGB_blk_092917.svg" alt="GALLERY" style="width: 110px;">
							</a>
						</div>

					</div>



				</div>
			</div>

			<div class="end-footer bg2">
				<div class="container">
					<div class="flex-sb-m flex-w p-t-22 p-b-22">
						<div class="p-t-5 p-b-5">
							<a href="https://www.instagram.com/xeat.co.uk"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="Xeat.co.uk.html"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
							<a href="mailto: xeatuk@gmail.com"><i class="fa fa-envelope m-l-21" aria-hidden="true"></i></a>
						</div>

						<div class="txt17 p-r-20 p-t-5 p-b-5">
							Copyright &copy; 2022 All rights reserved | Developed by <a href="https://protolabzit.com" target="_blank">Protolabz eServices</a>
						</div>
					</div>
				</div>
			</div>
		</footer>


		<!-- Back to top -->
		<div class="btn-back-to-top bg0-hov" id="myBtn">
			<span class="symbol-btn-back-to-top">
				<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</span>
		</div>

		<div id="dropDownSelect1"></div>
	</div>


	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script type="text/javascript">
    document.getElementById("cForm").onsubmit = function (e) {
        e.preventDefault();
        var isValid = validateForm();
        if (isValid) {
            // If the form is valid, make the AJAX call
            var formData = {
                name: document.forms["cForm"]["name"].value,
                user_type: document.forms["cForm"]["user_type"].value,
                phone: document.forms["cForm"]["phone"].value,
                message: document.forms["cForm"]["message"].value
            };

            $.ajax({
                type: "POST",
                url: "delete_account.php", // Replace with the correct path to your PHP file
                data: formData,
				dataType: "json",
                success: function (data) {			
					if (data.hasOwnProperty('status')) 
					{
						if (data.status === 'success') 
						{
							displaySuccessMessage(data.message);
							setTimeout(function () {
							location.reload();
							}, 2000);
						
						}else if(data.status === 'error') {
                            displayErrorMessage(data.message);
                        }else {
							console.error("Unexpected response format:", data);
                        }
					}
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText); // Log any errors to the console
                }
            });

				function displaySuccessMessage(message)
				{
					// Create a div element for the success message
					var successDiv = document.createElement("div");
					successDiv.className = "success-message";
					successDiv.innerHTML = message;
					successDiv.style.backgroundColor = '#d4edda'; // Replace with your desired color
					successDiv.style.border = '1px solid #c3e6cb'; // Replace with your desired border color
					successDiv.style.padding = '10px'; // Adjust padding as needed
					successDiv.style.marginBottom = '10px'; // Adjust margin as needed

					// Insert the success message at the top of the page (assuming a container with ID "messages-container" exists)
					var messagesContainer = document.getElementById("messages-container");
					if (messagesContainer) {
						messagesContainer.prepend(successDiv);
						}
				}

				function displayErrorMessage(message) {
					// Display error message logic (e.g., show a red error message div)
					var errorDiv = document.getElementById("error-message");
					errorDiv.innerText = message;
					errorDiv.className = "error-message";
					errorDiv.style.display = "block";
				}
        }
    };

    // Function to validate form fields
    function validateForm() {
        var isValid = true;

        // Reset errors
        ["name", "user_type", "phone", "message"].forEach(function (field) {
            document.getElementById(field + "_error").innerHTML = "";
        });

        // Validate each field
        ["name", "user_type", "phone", "message"].forEach(function (field) {
            var value = document.forms["cForm"][field].value;

            if (value == null || value == "") {
                document.getElementById(field + "_error").innerHTML = "Please enter your " + field.replace('_', ' ');
                isValid = false;
            }else if (field === "phone" && !isValidPhoneNumber(value)) {
            document.getElementById(field + "_error").innerHTML = "Please enter a valid phone number";
            isValid = false;
        }
        });

        return isValid;
    }

	function isValidPhoneNumber(phone) {
    // Allow only numeric values and a '+' at the beginning
    return /^\+\d+$/.test(phone); 
    }

    // Additional code for removing warnings
    ["name","message", "phone", "user_type"].forEach(function (field) {
        document.getElementById(field).onkeyup = function () {
            document.getElementById(field + "_error").innerHTML = "";
        };
    });
</script>


</body>

</html>