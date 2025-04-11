@extends('layouts.app')

@section('title', 'About')

@section('content')

<style>
	.testimonial-icon img {
    width: 20px; /* Adjust size if needed */
    height: 20px;
    opacity: 0.4; /* Default: Faded gray star */
}

.testimonial-icon img.active {
    opacity: 1; /* Full yellow star */
    filter: brightness(1.5); /* Make yellow pop */
}

</style>
<main>

		<!-- first section -->
		<section class="wrap_about-banner">
			<div class="container">
				<div class="col-lg-12">
				<div class="wrap_about_heading">
					<h1>About us</h1>
				</div>
			</div>
			</div>
			
		</section>
	<!-------------------- first section end ------------------------------------>


	<section class="wrap_about-texts">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<img src="public/images/about.jpg" class="wrap_aboutimg" alt="image-about">
				</div>
				<div class="col-md-6 col-lg-6">
					<h2>Our mission</h2>
					<p>We aim to spread our love of incredible food delivery and potential takeaway service. We could not have asked for a better reception. Since we first started operating, we have created a loyal fanbase that is just as good food for us! At Xeat.co.uk & xeat.lk, we guarantee that every meal you make will be a seamless process from start to finish. Contact our site for queries related services. We launched xeat after realizing that delivering the highest quality fresh and healthy food in the UK & SRI LANKA is not always easy. We have worked hard to build strong relationships with our incredible vendors, which helps us reduce our costs, and we do everything we can to send those savings to you, including the payment system.</p>
				</div>
			</div>
		</div>
	</section>

	<!---------------------------------------- Dining Experience------------------------------------------>
	<section class="wrap_dining-experience">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="wrapdining-image">
					<img src="{{ $homepageSection2->image}}" alt="image">
					</div>
					
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="wrap_heading-dining">
					<h2>{{ $homepageSection2->message }}</h2>
					</div>
					<div class="wrapperdining_items">	
					<div class="dining_item">
						<div class="dining_item-icon">
							<div class="dinig_icon">
								<span>
									<svg width="30" height="34" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M20.7371 23.5034C23.8364 20.3264 26.6663 15.5679 26.6663 11.7606C26.6663 5.44878 21.443 0.332031 14.9997 0.332031C8.55635 0.332031 3.33301 5.44878 3.33301 11.7606C3.33301 15.5679 6.16294 20.3264 9.26228 23.5034C11.3011 25.5932 13.4566 26.9987 14.9997 26.9987C16.5428 26.9987 18.6982 25.5932 20.7371 23.5034ZM14.9997 15.332C16.8406 15.332 18.333 13.8396 18.333 11.9987C18.333 10.1577 16.8406 8.66536 14.9997 8.66536C13.1587 8.66536 11.6663 10.1577 11.6663 11.9987C11.6663 13.8396 13.1587 15.332 14.9997 15.332Z" fill="white"></path>
										<path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M6.75902 24.4883C2.6873 25.3824 0 26.9199 0 28.6668C0 31.4282 6.71573 33.6668 15 33.6668C23.2843 33.6668 30 31.4282 30 28.6668C30 26.9199 27.3127 25.3824 23.241 24.4883C23.0051 24.7502 22.7668 25.0045 22.5269 25.2504C21.4064 26.399 20.2024 27.4143 19.0016 28.1599C17.8569 28.8707 16.455 29.5 15 29.5C13.545 29.5 12.1431 28.8707 10.9984 28.1599C9.7976 27.4143 8.59362 26.399 7.47312 25.2504C7.23321 25.0045 6.99487 24.7502 6.75902 24.4883Z" fill="white"></path>
									</svg>
								</span>
							</div>
						</div>
						<div class="diningtext">
							<h4>Set your location</h4>
							<p>A high quality solution beautifully food for customers.</p>
						</div>
					</div>

					<div class="dining_item">
						<div class="dining_item-icon">
							<div class="dinig_icon">
								<span>
									<svg width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.4" d="M3.66634 10H0.333008V25L7.51773 28.5924C9.36914 29.5181 11.4106 30 13.4806 30H26.9997C28.8406 30 30.333 28.5076 30.333 26.6667C30.333 24.8257 28.8406 23.3333 26.9997 23.3333H24.3604C22.8079 23.3333 21.2768 22.9719 19.8882 22.2776L14.9863 19.8267C15.3068 19.5315 15.5716 19.1655 15.7544 18.739C16.4436 17.1307 15.7065 15.2676 14.1034 14.5662L3.66634 10Z" fill="white"></path>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M20.666 0C19.5614 0 18.666 0.89543 18.666 2V13C18.666 14.1046 19.5614 15 20.666 15H31.666C32.7706 15 33.666 14.1046 33.666 13V2C33.666 0.895431 32.7706 0 31.666 0H20.666ZM27.8327 6.25C28.523 6.25 29.0827 5.69036 29.0827 5C29.0827 4.30964 28.523 3.75 27.8327 3.75H24.4993C23.809 3.75 23.2493 4.30964 23.2493 5C23.2493 5.69036 23.809 6.25 24.4993 6.25H27.8327Z" fill="white"></path>
												</svg>
								</span>
							</div>
						</div>
						<div class="diningtext">
							<h4>Select Food</h4>
							<p>A high quality solution beautifully food for customers.</p>
						</div>
					</div>

					<div class="dining_item">
						<div class="dining_item-icon">
							<div class="dinig_icon">
								<span>
									<svg width="24" height="34" viewBox="0 0 24 34" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.4" d="M16.6667 0.332031H3.33333C1.49238 0.332031 0 1.82442 0 3.66537V30.332C0 32.173 1.49238 33.6654 3.33333 33.6654H16.6667C18.5076 33.6654 20 32.173 20 30.332V3.66536C20 1.82442 18.5076 0.332031 16.6667 0.332031Z" fill="white"></path>
													<path d="M10 8.66406H20C21.8409 8.66406 23.3333 10.1564 23.3333 11.9974V18.6641C23.3333 20.505 21.8409 21.9974 20 21.9974H10V8.66406Z" fill="white"></path>
													<path d="M11.6663 28.6667C11.6663 29.5871 10.9201 30.3333 9.99967 30.3333C9.0792 30.3333 8.33301 29.5871 8.33301 28.6667C8.33301 27.7462 9.0792 27 9.99967 27C10.9201 27 11.6663 27.7462 11.6663 28.6667Z" fill="white"></path>
													<path opacity="0.4" d="M9.99968 14.5L23.333 14.5L23.333 12L9.99968 12L9.99968 14.5Z" fill="white"></path>
												</svg>
								</span>
							</div>
						</div>
						<div class="diningtext">
							<h4>Pay Cash or Online</h4>
							<p>Providing an upscale and elegant ambiance for ..</p>
						</div>
					</div>

					<div class="dining_item">
						<div class="dining_item-icon">
							<div class="dinig_icon">
								<span>
									<svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.4" d="M13.6663 0H6.99967C3.31778 0 0.333008 2.98477 0.333008 6.66667V20C0.333008 23.1087 2.46079 25.7204 5.33942 26.4583C5.44698 24.7144 6.89538 23.3333 8.66634 23.3333C10.5073 23.3333 11.9997 24.8257 11.9997 26.6667H20.333V6.66667C20.333 2.98477 17.3482 0 13.6663 0Z" fill="white"></path>
													<path d="M20.333 26.668V6.66797H25.6815C26.5284 6.66797 27.3435 6.9903 27.9613 7.56951L32.6128 11.9303C33.285 12.5604 33.6663 13.4407 33.6663 14.3621V23.3346C33.6663 25.1756 32.174 26.668 30.333 26.668H20.333Z" fill="white"></path>
													<path d="M12.8333 26.6667C12.8333 28.9679 10.9679 30.8333 8.66667 30.8333C6.36548 30.8333 4.5 28.9679 4.5 26.6667C4.5 26.5792 4.5027 26.4923 4.50801 26.4062C4.64247 24.2263 6.45296 22.5 8.66667 22.5C10.9679 22.5 12.8333 24.3655 12.8333 26.6667Z" fill="white"></path>
													<path opacity="0.4" d="M31.1587 26.6667C31.1587 28.9679 29.2932 30.8333 26.992 30.8333C24.6908 30.8333 22.8253 28.9679 22.8253 26.6667C22.8253 26.5792 22.828 26.4923 22.8333 26.4062C22.9678 24.2263 24.7783 22.5 26.992 22.5C29.2932 22.5 31.1587 24.3655 31.1587 26.6667Z" fill="white"></path>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M9.08301 8.33203C9.08301 7.64168 9.64265 7.08203 10.333 7.08203L13.6663 7.08203C14.3567 7.08203 14.9163 7.64168 14.9163 8.33203C14.9163 9.02239 14.3567 9.58203 13.6663 9.58203L10.333 9.58203C9.64265 9.58203 9.08301 9.02239 9.08301 8.33203Z" fill="white"></path>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M5.75 15C5.75 14.3096 6.30964 13.75 7 13.75L13.6667 13.75C14.357 13.75 14.9167 14.3096 14.9167 15C14.9167 15.6904 14.357 16.25 13.6667 16.25H7C6.30964 16.25 5.75 15.6904 5.75 15Z" fill="white"></path>
												</svg>
								</span>
							</div>
						</div>
						<div class="diningtext">
							<h4>Delivery or Pickup</h4>
							<p>Allowing customers to easily book tables through</p>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>

	<!---------------------------------------- Dining Experience end ------------------------------------------>

	<!--------------------------------------- Popular items ---------------------------------------------------->

	{{-- <section class="wrap-popular">
		<div class="container">
			<div class="popular_heading">
				<h2>Most Popular Items</h2>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="wrap_popular-item">
						<div class="wrap_food_image">
							<img src="public/images/foodbbest.png" alt="foodimg">
							<div class="wrap-review-box-overlay">
										<div class="star_icon">
											<span>
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z" fill="#FFB23E"></path>
												</svg>
											</span>
										</div>

										<div class="reviewtext">
											<p>4.7(2.5K)</p>
										</div>
									</div>
						</div>
						<div class="popular_wraps-inner">
						<div class="popularwrs-item-text">
							<h4>Quinoa-Stuffed Bell Pepper</h4>
						</div>

						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>4 Paces Chicken</p>
							</div>
						</div>
						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>Spicy Sauce</p>
							</div>
						</div>

						<div class="wrapper_popular_texts">
							<div class="wraps_populr-text">
								<h4>$20.00</h4>
							</div>

							<div class="popular-inner-item-button">
								<a href="#" class="wraps_addto-cart">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
											<path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
											<path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									Add to Cart
								</a>
							</div>
						</div>

					</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="wrap_popular-item">
						<div class="wrap_food_image">
							<img src="public/images/foodbbest.png" alt="foodimg">
							<div class="wrap-review-box-overlay">
										<div class="star_icon">
											<span>
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z" fill="#FFB23E"></path>
												</svg>
											</span>
										</div>

										<div class="reviewtext">
											<p>4.7(2.5K)</p>
										</div>
									</div>
						</div>
						<div class="popular_wraps-inner">
						<div class="popularwrs-item-text">
							<h4>Quinoa-Stuffed Bell Pepper</h4>
						</div>

						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>4 Paces Chicken</p>
							</div>
						</div>
						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>Spicy Sauce</p>
							</div>
						</div>

						<div class="wrapper_popular_texts">
							<div class="wraps_populr-text">
								<h4>$20.00</h4>
							</div>

							<div class="popular-inner-item-button">
								<a href="#" class="wraps_addto-cart">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
											<path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
											<path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									Add to Cart
								</a>
							</div>
						</div>

					</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="wrap_popular-item">
						<div class="wrap_food_image">
							<img src="public/images/foodbbest.png" alt="foodimg">
							<div class="wrap-review-box-overlay">
										<div class="star_icon">
											<span>
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z" fill="#FFB23E"></path>
												</svg>
											</span>
										</div>

										<div class="reviewtext">
											<p>4.7(2.5K)</p>
										</div>
									</div>
						</div>
						<div class="popular_wraps-inner">
						<div class="popularwrs-item-text">
							<h4>Quinoa-Stuffed Bell Pepper</h4>
						</div>

						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>4 Paces Chicken</p>
							</div>
						</div>
						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>Spicy Sauce</p>
							</div>
						</div>

						<div class="wrapper_popular_texts">
							<div class="wraps_populr-text">
								<h4>$20.00</h4>
							</div>

							<div class="popular-inner-item-button">
								<a href="#" class="wraps_addto-cart">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
											<path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
											<path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									Add to Cart
								</a>
							</div>
						</div>

					</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="wrap_popular-item">
						<div class="wrap_food_image">
							<img src="public/images/foodbbest.png" alt="foodimg">
							<div class="wrap-review-box-overlay">
										<div class="star_icon">
											<span>
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z" fill="#FFB23E"></path>
												</svg>
											</span>
										</div>

										<div class="reviewtext">
											<p>4.7(2.5K)</p>
										</div>
									</div>
						</div>
						<div class="popular_wraps-inner">
						<div class="popularwrs-item-text">
							<h4>Quinoa-Stuffed Bell Pepper</h4>
						</div>

						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>4 Paces Chicken</p>
							</div>
						</div>
						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>Spicy Sauce</p>
							</div>
						</div>

						<div class="wrapper_popular_texts">
							<div class="wraps_populr-text">
								<h4>$20.00</h4>
							</div>

							<div class="popular-inner-item-button">
								<a href="#" class="wraps_addto-cart">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
											<path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
											<path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									Add to Cart
								</a>
							</div>
						</div>

					</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="wrap_popular-item">
						<div class="wrap_food_image">
							<img src="public/images/foodbbest.png" alt="foodimg">
							<div class="wrap-review-box-overlay">
										<div class="star_icon">
											<span>
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z" fill="#FFB23E"></path>
												</svg>
											</span>
										</div>

										<div class="reviewtext">
											<p>4.7(2.5K)</p>
										</div>
									</div>
						</div>
						<div class="popular_wraps-inner">
						<div class="popularwrs-item-text">
							<h4>Quinoa-Stuffed Bell Pepper</h4>
						</div>

						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>4 Paces Chicken</p>
							</div>
						</div>
						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>Spicy Sauce</p>
							</div>
						</div>

						<div class="wrapper_popular_texts">
							<div class="wraps_populr-text">
								<h4>$20.00</h4>
							</div>

							<div class="popular-inner-item-button">
								<a href="#" class="wraps_addto-cart">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
											<path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
											<path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									Add to Cart
								</a>
							</div>
						</div>

					</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="wrap_popular-item">
						<div class="wrap_food_image">
							<img src="public/images/foodbbest.png" alt="foodimg">
							<div class="wrap-review-box-overlay">
										<div class="star_icon">
											<span>
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z" fill="#FFB23E"></path>
												</svg>
											</span>
										</div>

										<div class="reviewtext">
											<p>4.7(2.5K)</p>
										</div>
									</div>
						</div>
						<div class="popular_wraps-inner">
						<div class="popularwrs-item-text">
							<h4>Quinoa-Stuffed Bell Pepper</h4>
						</div>

						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>4 Paces Chicken</p>
							</div>
						</div>
						<div class="wraps_popular-inner-item">
							<div class="poplur_icon">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_304_21999)">
											<path d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z" stroke="#FE724C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg></span>
							</div>

							<div class="poplr_wraps-text">
								<p>Spicy Sauce</p>
							</div>
						</div>

						<div class="wrapper_popular_texts">
							<div class="wraps_populr-text">
								<h4>$20.00</h4>
							</div>

							<div class="popular-inner-item-button">
								<a href="#" class="wraps_addto-cart">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
											<path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
											<path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									Add to Cart
								</a>
							</div>
						</div>

					</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

	<!--------------------------------------- Popular items end---------------------------------------------------->

	<!--------------------------------------- testimonial section ---------------------------------------------------->
	<section class="wrap_testimonials">
  <div class="container">
	<div class="testimonail_heading">
		<h2>What’s Our Customer Say</h2>
	</div>

	<div class="row wrap_testimonial_slides">
		@foreach ($website_reviews as $review)
			<div class="col-lg-4 col-md-6">
				<div class="testimonial-item">
					<div class="testimonial-img">
						<img src="{{ asset('public/images/testimonialicon.png')}}" alt="testimonial-icon">
					</div>
					<div class="testimonial-item-text">
						<p>"{{ $review->message }}"</p>
					</div>
				</div>
				<div class="testimonial-inner">
					<div class="testimonial-inner-img">
						<img src="{{  $review->image  }}" alt="img">
					</div>
					<div class="testimonial-inner-text">
						<h4>{{ $review->customer_name }}</h4>
						<div class="testimonial-icon">
							@for ($i = 1; $i <= 5; $i++)
							<img src="https://xeat.co.uk/public/images/star.svg" 
								alt="star" 
								class="{{ $i <= $review->rating ? 'active' : 'inactive' }}">
							@endfor
						</div>
						<p>{{ $review->title }}</p>
					</div>

				</div>
			</div>
		@endforeach
	</div>


  </div>
</section>



	<!--------------------------------------------- Restaurant Food Experience --------------------------------------------->
<!--------------------------------------------- Restaurant Food Experience --------------------------------------------->
<section class="wrap-restaurant-food-experience">
		<div class="container">
			<!-- Slick Slider Wrapper -->
			<div class="wrap_apps_slider">
				<!-- Slide 1 -->
				<div class="wraps_slider-app">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="wrap-restaurant-food_heading">
								<h2>{{$homepageSection4->title}}</h2>
							</div>
							<div class="wrap-restaurant-food_description">
								<p>{{$homepageSection4->message}}</p>
							</div>
							<div class="wrap-restaurant-food-buttons">
								<a href="https://play.google.com/store/apps/details?id=com.food.xeat" target="blank" class="restaurant-google-pay"> 
									<span><img src="{{ asset('public/images/google-pay.png')}}" alt="Google Play"></span> Google Play
								</a>
								<a href="https://apps.apple.com/in/app/xeat/id1610674856" target="blank" class="restaurant-apple-pay">
									<span><img src="{{ asset('public/images/appleplay.png') }}" alt="Apple Play"></span> Apple Play
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="wrap_image-restaurant">
								<img src="{{$homepageSection4->image}}" alt="restaurant-food-img">
							</div>
						</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="wraps_slider-app">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="wrap-restaurant-food_heading">
								<h2>{{$homepageSection8->title}}</h2>
							</div>
							<div class="wrap-restaurant-food_description">
								<p>{{$homepageSection8->message}}</p>
							</div>
							<div class="wrap-restaurant-food-buttons">
								<a href="https://play.google.com/store/apps/details?id=com.xride" target="blank" class="restaurant-google-pay"> 
									<span><img src="{{ asset('public/images/google-pay.png')}}" alt="Google Play"></span> Google Play
								</a>
								<a href="https://apps.apple.com/lk/app/xride-slk/id6444444169" target="blank" class="restaurant-apple-pay">
									<span><img src="{{ asset('public/images/appleplay.png') }}" alt="Apple Play"></span> Apple Play
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="wrap_image-restaurant">
								<img src="{{$homepageSection8->image}}" alt="restaurant-food-img">
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End of .wrap_apps_slider -->
		</div>
	</section>
</main>
@endsection


@push('scripts')

<script type="text/javascript">
$(document).ready(function(){
    $('.wrap_apps_slider').slick({
        autoplay: true,          
        autoplaySpeed: 3000,    
        dots: false,            
        arrows: true,          
        infinite: true,          
        speed: 500,              
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: false, // Adjusts height automatically for longer text
        pauseOnHover: false,  // Prevents pausing on mouse hover
        pauseOnFocus: false,  // Prevents pausing when clicking inside
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

</script>

<script type="text/javascript">
	$(document).ready(function(){
  $('.wrap_testimonial_slides').slick({
    autoplay: true,          
    autoplaySpeed: 3000,    
    dots: false,            
    arrows: true,          
    infinite: true,          
    speed: 500,              
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});
</script>

@endpush