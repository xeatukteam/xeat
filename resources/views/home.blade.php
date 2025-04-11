@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<main>
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

 .pac-container {
		z-index: 9999 !important;
		position: absolute !important;
		left: auto !important;
		transform: translate(62%, 0%);
	} 

	button.location_save {
    margin-top: 12px;
   }

   .wraps_phonenumber::placeholder {
    opacity: 0.6;
	}
	.wraps_name::placeholder {
    opacity: 0.6;
	}


	.wrap_searchformrestrurant input {
       padding: 10px 50px 10px 40px;
    }

	
</style>
<!-- first section -->



<section class="wrap_main-banner" style="background: url('{{ asset($homepageSection1->image) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
	<div class="container">
	   <div class="col-lg-12">
			<div class="wrap_banner_text">
				<h1>{{ $homepageSection1->message }}</h1>
			</div>
		   <form>
			<div class="forms_wrap-location">
			<div class="row">
				{{-- <div class="col-lg-5">
					<div class="wrap_searchformlocation">
						<div class="location_wrp-search">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 23" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.115 21.8122C12.4772 19.4062 17.7886 13.4751 17.7886 8.78883C17.7886 3.79647 13.9976 0 9.00526 0C4.0129 0 0.210938 3.79647 0.210938 8.78883C0.210938 13.4755 5.52998 19.4073 7.89476 21.8129C8.51149 22.4403 9.49871 22.44 10.115 21.8122ZM8.99988 12.7888C11.4269 12.7888 13.3943 10.8214 13.3943 8.39441C13.3943 5.96745 11.4269 4 8.99988 4C6.57292 4 4.60547 5.96745 4.60547 8.39441C4.60547 10.8214 6.57292 12.7888 8.99988 12.7888Z" fill="#FF5200"></path></svg>
							<input id="autocomplete" type="text" name="delivery_location" placeholder="Enter your delivery location">
							</div>
					</div>
				</div> --}}
				<div class="col-lg-12">
					<div class="wrap_searchformrestrurant">
						<div class="restrurant_wraps" data-bs-toggle="modal" data-bs-target="#exampleModal">

						  <div class="location_wrp-search">
							<svg class="custom-location-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 23" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.115 21.8122C12.4772 19.4062 17.7886 13.4751 17.7886 8.78883C17.7886 3.79647 13.9976 0 9.00526 0C4.0129 0 0.210938 3.79647 0.210938 8.78883C0.210938 13.4755 5.52998 19.4073 7.89476 21.8129C8.51149 22.4403 9.49871 22.44 10.115 21.8122ZM8.99988 12.7888C11.4269 12.7888 13.3943 10.8214 13.3943 8.39441C13.3943 5.96745 11.4269 4 8.99988 4C6.57292 4 4.60547 5.96745 4.60547 8.39441C4.60547 10.8214 6.57292 12.7888 8.99988 12.7888Z" fill="#FF5200"></path>
							</svg>
				          </div>

							<input type="text" name="restaurant_wrap" id="restaurant_wrap" placeholder="Select Your Location" value="{{ session('selected_address', isset($user_address) ? $user_address->location : '') }}">
							
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M19.25 10.5C19.25 15.3325 15.3325 19.25 10.5 19.25C5.66751 19.25 1.75 15.3325 1.75 10.5C1.75 5.66751 5.66751 1.75 10.5 1.75C15.3325 1.75 19.25 5.66751 19.25 10.5ZM10.5 20.75C16.1609 20.75 20.75 16.1609 20.75 10.5C20.75 4.83908 16.1609 0.25 10.5 0.25C4.83908 0.25 0.25 4.83908 0.25 10.5C0.25 16.1609 4.83908 20.75 10.5 20.75ZM19.5303 18.4697C19.2374 18.1768 18.7626 18.1768 18.4697 18.4697C18.1768 18.7626 18.1768 19.2374 18.4697 19.5303L20.4696 21.5303C20.7625 21.8232 21.2374 21.8232 21.5303 21.5303C21.8232 21.2374 21.8232 20.7625 21.5303 20.4696L19.5303 18.4697Z" fill="#4D5461"></path>
							
						</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>

		<div class="wraps_food-items">
			<div class="wrap_food-types">
				@foreach($websiteIconImages as $icon)
					<div class="wrap_food_item">
						<a href="{{ $icon->id == 1 ? route('category') : '#' }}" 
						class="food-link" 
						data-id="{{ $icon->id }}">
							<img src="{{ asset($icon->icon_image) }}" alt="{{ $icon->title }}">
						</a>
					</div>
				@endforeach
			</div>
       </div>




	</div>
	</div>
</section>
<!-------------------- first section end ------------------------------------>




<!------------------------------------------- promotion section ----------------------------->
@php
    use Illuminate\Support\Str;
@endphp

<section class="wrappermostions"> 
	<div class="container">
		<div class="row">
			<div class="wraps_imagesslider">
				@foreach ($website_slider_images as $slider)
					<div class="slider_image">
						@if (Str::endsWith($slider->image, ['.mp4', '.avi', '.mov', '.webm']))
							<!-- If it's a video -->
							<div class="video_banner">
								<video class="bnnr_videos" autoplay="" loop="" muted="" playsinline="">
									<source src="{{ $slider->image }}" type="video/mp4">
								</video>
							</div>
						@else
							<!-- If it's an image -->
							<img src="{{ $slider->image }}" alt="slider image">
						@endif
					</div>
				@endforeach
			</div>			
		</div>
	</div>
</section>



<!----------------------------------------- promotion section end ----------------------------------------->


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

	<div class="container gettheapp">
	<div class="wrap_apps-now">
	<img src="{{ $homepageSection3_qrCode->image }}" alt="xeat-wraps-qr">
	</div>
	</div>
</section>


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

<!--------------------------------------- testimonial section end---------------------------------------------------->


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



<!----------------------------------- modal popup ------------------------------------------------------>
<div class="modal fade wraps_first-modals" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<div class="wraps_location-icon">
      		<h3><i class="fa-solid fa-location-dot"></i></h3>
      	</div>
      	<h4 class="wraps_heading-location">Select your location</h4>
       <p>Please choose your location to get nearby services.</p>
      </div>
      <div class="wrap_buttons">
       	 	<a href="javascript:void(0)" class="btn_link-modal" id="openlocationModal">Choose from map</a>
            <a href="javascript:void(0)" class="btn_link-modal wraps_yes" id="useMyLocation">Use my current location</a>
       	 	
       	 </div>
    </div>
  </div>
</div>


<!----------------------------------- modal popup end------------------------------------------------------>

	<!----------------------------------- location popup ------------------------------------------------------>

	<div class="modal fade wraps_location-modals" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				
				<div class="modal-body">
					<div class="wraps_maps">
						<div class="wrapper_maps">
						<div id="map" style="width: 100%; height: 100%;"></div>
						</div>
						<div class="wraps_input">
							<input type="text" class="form-control wraps_input-field" id="searchBox" placeholder="Search nearby locality and place">
						
						</div>
						<div class="wraps_buttons_link">

							<div class="btn_wraps-adress">
								<div class="adjuts_wrapsdiv">
								<button type="button" id="adjustPin"  class="save_address-adjust">Adjust pin to save address</button>
								</div>
							</div>

							<div class="wraps_none-next">
								<p id="address_heading"></p>
								<button type="button" id="wrap_next" class="wrapper_next">Next</button>
							</div>
							<div class="wraps_addrress_fields">
								<form>
								
								<div class="wraps_textarea">
									<label for="textarea_location" class="form-label"></label>
									<textarea class="form-control" id="textarea_location" rows="2" readonly disabled></textarea>
								</div>

								<div class="form-group wraps_locaton-form">
									<input type="text" id="name" name="name" class="form-control wraps_name" placeholder="Name">
								</div>

								<div class="form-group wraps_locaton-form">
								<input type="tel" id="locationphone" class="form-control wraps_phonenumber" autocomplete="off" placeholder="000000" style="padding-left: 83px;">

								</div>
								<button type="submit" id="location_save" class="location_save">Save</button>
								</form>
							</div>
						</div>

					
					</div>
				</div>
			</div>
		</div>
	</div>


<!----------------------------------- location popup end------------------------------------------------------>
@endsection


@push('scripts')


<!-- Google Maps API - Load it only once -->


<script 
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCucT3KjQnJ-nzxKMWfO5Y9g0_1m1Y8Bfk&libraries=places,marker&map_ids=de6ec126d3ec9697&callback=initSearchAutocomplete&v=beta"
></script>


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

	const API_BASE_URL = "{{ asset('/backend') }}";


	initializeIntlTelInput("#locationphone");

	// localStorage.clear();  // Clears all stored values
	// location.reload();      // Refreshes the page
	// Global variables
	let map, marker, geocoder,autocomplete;
	let searchAutocomplete = null; // Ensure this is declared globally
    let hasToastrShown = false;



	document.getElementById("useMyLocation").removeEventListener("click", handleLocationClick);
	document.getElementById("useMyLocation").addEventListener("click", handleLocationClick);

    //useMyLocation from model
	function handleLocationClick() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(
				function (position) {
					let lat = position.coords.latitude;
					let lng = position.coords.longitude;

					// Save to localStorage
					localStorage.setItem("selected_lat", lat);
					localStorage.setItem("selected_lng", lng);

					// Reverse geocode to get address
					let geocoder = new google.maps.Geocoder();
					let latlng = new google.maps.LatLng(lat, lng);

					let placesService = new google.maps.places.PlacesService(document.createElement('div'));
					let request = {
						location: new google.maps.LatLng(lat, lng),
						radius: 50
					};

					placesService.nearbySearch(request, function (results, status) {
						console.log("Places API Status:", status);

						if (status === google.maps.places.PlacesServiceStatus.OK && results.length > 0) {
							let place = results[0];
							let address = place.name; // Use place name

							console.log("Nearest Place:", place);
							document.getElementById("restaurant_wrap").value = address;

							// Check if user is logged in
							let userId = "{{ session('user_id') }}".trim();
							userId = userId !== "" ? userId : null;



							if (!userId) {

								console.log("User id of Use curren location function Nearest Place:", sessionStorage.getItem("address_saved"));

								// Ensure API is not called multiple times
								if (sessionStorage.getItem("address_saved") === "false" || sessionStorage.getItem("address_saved") === null) {
									console.log("Address not saved, calling store_address_session API");

									console.log("User id of Use current:",userId);

									sessionStorage.setItem("address_saved", "true"); // Prevent multiple calls

									// Store address in session via AJAX
									fetch("{{ route('store_address_session') }}", {
										method: "POST",
										headers: {
											"Content-Type": "application/json",
											"X-CSRF-TOKEN": "{{ csrf_token() }}"
										},
										body: JSON.stringify({
											location: address,
											a_lat: lat,
											a_long: lng
										})
									})
									.then(response => response.json())
									.then(data => {
										if (data.status === 1) {
											toastr.success(data.message);
											localStorage.setItem("selected_address", address);

											let modal = bootstrap.Modal.getInstance(document.getElementById("locationModal"));
											if (modal) modal.hide();
											
											let selectLocationModal = bootstrap.Modal.getInstance(document.getElementById("exampleModal"));
											if (selectLocationModal) selectLocationModal.hide();

										} else {
											toastr.error("Failed to save address.");
										}
									})
									.catch(error => {
										console.error("API Error:", error);
										toastr.error("Something went wrong.");
									});
								}
							}else{
								//current location logined user add current location
								// Create FormData object
				                let formData = new FormData();
								formData.append("location", address);
								formData.append("a_lat", lat);
								formData.append("a_long", lng);
								formData.append("phone_number", "{{ optional($user_address)->phone_number ?? 'N/A' }}");
								formData.append("name", "{{ optional($user_address)->name ?? 'N/A' }}");
								formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
								formData.append("com_address", address);
								formData.append("landmark", "{{ optional($user_address)->landmark ?? 'N/A' }}");
								formData.append("hte", "{{ optional($user_address)->hte ?? 'N/A' }}");
								formData.append("address", address);
								formData.append("building_number", "{{ optional($user_address)->building_number ?? 'N/A' }}");
								formData.append("city", "{{ optional($user_address)->city ?? 'N/A' }}");
								formData.append("postal_code", "{{ optional($user_address)->postal_code ?? 'N/A' }}");
								// formData.append("id", userId);
								formData.append("id", "{{ $address_id ?? 'N/A' }}"); 
								formData.append("house_number", "{{ optional($user_address)->house_number ?? 'N/A' }}");

								let update_addres  = `${API_BASE_URL}/API/users.php/update_addres`;

								
								fetch(update_addres, {
									method: "POST",
									body: formData  // No need for headers, browser sets it automatically
								})
								.then(response => response.json())
								.then(data => {
					
									if (data.code === "200") {
										toastr.success(data.message);
										hideModals();
										
									} else {
										toastr.error("Failed to save address. Please try again.");
									}
								})
								.catch(error => {
									console.error("API Error:", error);
									toastr.error("Something went wrong. Please try again.");
								});

							}
						} else {
							alert("No nearby places found. Please enter manually.");
						}
					});

					// Close the modal after selecting location
					let modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
					modal.hide();
				},
				function (error) {
					alert("Error getting location. Please enable location services.");
					console.log(error);
				}
			);
		} else {
			alert("Geolocation is not supported by this browser.");
		}
    }


	// Helper function to close modals properly
	function hideModals() {
		let locationModal = bootstrap.Modal.getInstance(document.getElementById("locationModal"));
		if (locationModal) locationModal.hide();

		let selectLocationModal = bootstrap.Modal.getInstance(document.getElementById("exampleModal"));
		if (selectLocationModal) selectLocationModal.hide();

		// Fix for disabled page issue
		setTimeout(() => {
			document.body.classList.remove("modal-open"); // Remove Bootstrap's modal-open class
			let backdrops = document.querySelectorAll(".modal-backdrop");
			backdrops.forEach(backdrop => backdrop.remove()); // Remove all modal backdrops
		}, 500);
	}



	//delivery address code google autocomplete


	function initAutocomplete() {

		console.log("init autocmple on delvery address");
        if (typeof google === "undefined" || !google.maps || !google.maps.places) {
            console.error("Google Maps API not loaded yet.");
            return;
        }

        const locationInput = document.getElementById("autocomplete");
        if (!locationInput) {
            console.error("Location input field not found!");
            return;
        }

        if (autocomplete) return;

        autocomplete = new google.maps.places.Autocomplete(locationInput, { types: ["establishment","geocode"] });

        autocomplete.addListener("place_changed", function () {
            let place = autocomplete.getPlace();
            if (!place.geometry) {
                alert("No location details found. Please select a valid place.");
                return;
            }
            localStorage.setItem("delivery_lat", place.geometry.location.lat());
            localStorage.setItem("delivery_lng", place.geometry.location.lng());
            locationInput.value = place.formatted_address;
        });
    }

	 // Function to check if selected_address exists
	 function checkSelectedAddress() {

		let selectedAddress = localStorage.getItem("selected_address") || "";

		if (selectedAddress && typeof selectedAddress === "string") {
			return Promise.resolve(selectedAddress);
		}

		// Fetch from session if not found in localStorage

		let userId   = "{{ session('user_id') }}";
		let session_url = "{{ route('get_session_address') }}";
		if (userId) {
			session_url += `?user_id=${userId}`;
        }


		return fetch(session_url, {
			method: "GET",
			})
			.then(response => response.json())
			.then(data => {
				if (data.status === 1 && typeof data.address === "string") {
					localStorage.setItem("selected_address", data.address);
					localStorage.setItem("selected_lat", data.lat || "");
                    localStorage.setItem("selected_lng", data.lng || "");

					// document.getElementById("restaurant_wrap").value = data.address;

					return data.address;
				}
				return ""; // Ensure it returns a string
			})
			.catch(error => {
				console.error("Error fetching session address:", error);
				return ""; // Return empty string on error
			});
    }



	 // Add event listener to all category links
	 document.querySelectorAll(".food-link").forEach((link) => {
        link.removeEventListener("click", handleCategoryClick); // Remove old listeners
        link.addEventListener("click", handleCategoryClick);   // Add fresh listener
     });

	function handleCategoryClick(event) {
      event.preventDefault();
      event.stopImmediatePropagation();

     checkSelectedAddress().then(selectedAddress => {
        console.log("Current Selected Address:", selectedAddress);

        if (typeof selectedAddress !== "string") {
            selectedAddress = ""; // Ensure it's a string
        }

        if (selectedAddress.trim().length === 0) {
            if (!hasToastrShown) {
                hasToastrShown = true; // Prevent duplicate toasts

                showLocationModal(); // Show modal if no address is selected

                setTimeout(() => {
                    hasToastrShown = false; // Reset flag after delay
                }, 1000);
            }
        } else {
            console.log("Navigating to:", event.currentTarget.href);
            window.location.href = event.currentTarget.href; // Allow navigation
        }
    }).catch(error => {
        console.error("Error checking address:", error);
       });
    }


	// Function to show modal
	function showLocationModal() {
		let modal2 = bootstrap.Modal.getInstance(document.getElementById("exampleModal"));
		if (modal2) {
			modal2.show();
		} else {
			modal2 = new bootstrap.Modal(document.getElementById("exampleModal"));
			modal2.show();
		}
    }

	console.log("Checking selected_address on page load:", checkSelectedAddress());

	//Add Addresss PIn code model functionality start here

	// Open Location Modal
	let openModalBtn = document.getElementById("openlocationModal");
		if (openModalBtn) {
			openModalBtn.addEventListener("click", function () {
				let modal = new bootstrap.Modal(document.getElementById("locationModal"));
				modal.show();
			});
		}


	// Initialize Map & Search Autocomplete When Modal is Fully Displayed
	document.getElementById("locationModal").addEventListener("shown.bs.modal", function () {

		setTimeout(() => {
			let searchInput = document.getElementById("searchBox");
			if (searchInput) {
				searchInput.focus();
				if (!searchAutocomplete) { // Ensure it initializes only once
                 initSearchAutocomplete();
                }
				// initSearchAutocomplete(); // Ensure Autocomplete initializes inside modal
			}
		}, 500);

		// Ensure map initializes only once
		if (typeof map === "undefined" || !map) {
			initMap();
		}

		// Update address heading when modal opens
		let addressHeading = document.getElementById("address_heading");
		if (addressHeading) {
			let savedAddress = localStorage.getItem("selected_address") || "Select your location";
			addressHeading.textContent = savedAddress;
		}

		// let addressHeadingNext = document.getElementById("address_heading_next");
		// if (addressHeadingNext) {
		// 	addressHeadingNext.textContent = savedAddress;
		// }

		// Update textarea heading when modal opens
		let textarea_location = document.getElementById("textarea_location");
		if (textarea_location) {
			let text_savedAddress = localStorage.getItem("selected_address") || "Select your location";
			textarea_location.textContent = text_savedAddress;
		}


    });

	
	


	function initSearchAutocomplete() 
	{

		if (searchAutocomplete) {
         console.warn("Autocomplete already initialized.");
         return; // Prevent multiple initializations
        }
		

		if (!window.google?.maps?.places || !google.maps.marker?.AdvancedMarkerElement) {
			console.error("Google Maps API or AdvancedMarkerElement not loaded.");
			setTimeout(initSearchAutocomplete, 1000); // Retry after 1 second
			return;
		}

		const searchBoxInput = document.getElementById("searchBox");

		if (!searchBoxInput) {
			console.error("Search box input field not found!");
			return;
		}

		
		searchAutocomplete = new google.maps.places.Autocomplete(searchBoxInput, {
			types: ["establishment", "geocode"]
		});
		

		// Ensure autocomplete is moved only once
		// setTimeout(() => {
		// 	searchBoxInput.setAttribute("autocomplete", "on");
		// 	let existingPacContainer = document.querySelector("#locationModal .wraps_input .pac-container");
		// 	let pacContainer = document.querySelector(".pac-container");

		// 	if (pacContainer && !existingPacContainer) {
		// 		let modalDialog = document.querySelector("#locationModal .wraps_input");
		// 		if (modalDialog) {
		// 			modalDialog.appendChild(pacContainer);
		// 		}
		// 	}
		// }, 500);

		 // Prevent duplicate `.pac-container`
		 setTimeout(() => {
			let existingPacContainer = document.querySelector(".pac-container");
			if (existingPacContainer) {
				console.log("Pac-container already exists. No need to append.");
				return;
			}

			let pacContainer = document.querySelector(".pac-container");
			let modalDialog = document.querySelector("#locationModal .wraps_input");

			if (pacContainer && modalDialog) {
				modalDialog.appendChild(pacContainer);
			}
        }, 500);


		searchAutocomplete.addListener("place_changed", function () {
			let place = searchAutocomplete.getPlace();
			if (!place.geometry) {
				alert("No location details found. Please select a valid place.");
				return;
			}

			let lat = place.geometry.location.lat();
			let lng = place.geometry.location.lng();
			// let address = place.formatted_address || place.name;

			let address = place.formatted_address;
			if (!address && place.address_components) {
				address = place.address_components.map(comp => comp.long_name).join(", ");
			}
			if (!address && place.name) {
				address = place.name;
			}


			// Store in localStorage
			localStorage.setItem("selected_lat", lat);
			localStorage.setItem("selected_lng", lng);
			localStorage.setItem("selected_address", address);

			document.getElementById("restaurant_wrap").value = address;

			// Update UI
			searchBoxInput.value = address;
			let textarea = document.getElementById("textarea_location");
			textarea.value = address;
			textarea.removeAttribute("readonly"); // Enable input
			textarea.removeAttribute("disabled"); // Enable input

			document.getElementById("address_heading").textContent = address;

			let addressHeadingNext = document.getElementById("address_heading_next");
			if (addressHeadingNext) {
				addressHeadingNext.textContent = address;
			}

			updateMap(lat, lng);
		});
    }
	

	function updateMap(lat, lng) {

		let position = { lat, lng };

		if (map) {
			map.setCenter(position);
			map.setZoom(15);
		} else {
			console.error("Map is not initialized.");
			return;
		}

		if (marker instanceof google.maps.marker.AdvancedMarkerElement) {
			marker.position = position; // Use direct assignment for AdvancedMarkerElement
		} else {
			marker = new google.maps.marker.AdvancedMarkerElement({
				position: position,
				map: map,
				title: "Drag to adjust location",
				gmpDraggable: true
			});

			marker.addListener("dragend", () => {
				let newPos = marker.position;
				let newLat = newPos.lat;
				let newLng = newPos.lng;
				console.log("Marker moved to:", newLat, newLng);
				getAddress(newLat, newLng);  // Get new address
			});
		}
    }

	


	function initMap() {

		geocoder = new google.maps.Geocoder();
		let initialLat = parseFloat(localStorage.getItem("selected_lat")) || 8.752315879179774;
		let initialLng = parseFloat(localStorage.getItem("selected_lng")) || 80.50044792268179;

		// Initialize Map
		// Check if map already exists to prevent reinitialization
		if (!map) {
			map = new google.maps.Map(document.getElementById("map"), {
				center: { lat: initialLat, lng: initialLng },
				zoom: 15,
				mapId: "de6ec126d3ec9697"
			});
        }

		 // Check if marker already exists
		 if (!marker) {
            if (google.maps.marker && google.maps.marker.AdvancedMarkerElement) {
				marker = new google.maps.marker.AdvancedMarkerElement({
					position: { lat: initialLat, lng: initialLng },
					map: map,
					title: "Drag to adjust location",
					gmpDraggable: true
				});

				// Drag event listener
				marker.addListener("dragend", () => {
					let position = marker.position;
					getAddress(position.lat, position.lng);
				});
			} else {

				marker.setPosition({ lat: initialLat, lng: initialLng });
                map.setCenter({ lat: initialLat, lng: initialLng });
				console.error("AdvancedMarkerElement is not available.");
				alert("AdvancedMarkerElement is not available. Check Google Maps API settings.");
			}
		}
	}

	// Get Address from Lat/Lng
	function getAddress(lat, lng) {
		console.log("getAddress() called with:", lat, lng); // ✅ Should always log

		let latlng = new google.maps.LatLng(lat, lng);
		let map = new google.maps.Map(document.createElement("div")); // Temporary map element

		let service = new google.maps.places.PlacesService(map);
		let request = {
			location: latlng,
			radius: 50 // Search within 50 meters
		};

		service.nearbySearch(request, function (results, status) {

			if (status === google.maps.places.PlacesServiceStatus.OK && results.length > 0) {

				console.log("address result in getaddress", results[0]);
				let address = results[0].name; // Get the name of the nearest place

				console.log("New get address:", address);

				let textarea = document.getElementById("textarea_location");
				textarea.value = address;
				textarea.removeAttribute("readonly"); // Enable input
				textarea.removeAttribute("disabled"); // Enable input			
				document.getElementById("address_heading").textContent = address;
				// document.getElementById("address_heading_next").textContent = address;
				document.getElementById("restaurant_wrap").value = address; //update restaurant_wrap value when change address drag and drop from map


				console.log("Function is running! lat:", lat, "lng:", lng, "address:", address);
				
				localStorage.setItem("selected_lat", lat);
				localStorage.setItem("selected_lng", lng);
				localStorage.setItem("selected_address", address);

				console.log("Saved lat:", localStorage.getItem("selected_lat"));
				console.log("Saved lng:", localStorage.getItem("selected_lng"));
				console.log("Saved address:", localStorage.getItem("selected_address"));


			} else {
				console.error("Places API failed. Status:", status);
				alert("Address not found! Please try again.");
			}
		});
    }


    window.addEventListener("load", function () {
        if (typeof google !== "undefined" && google.maps && google.maps.places) {
            initAutocomplete();
			// initSearchAutocomplete();
			
        } else {
            console.error("Google Maps API is not yet available.");
        }
    });


	 var input = document.querySelector("#locationphone");
     var nameInput = document.querySelector("#name");

	 // Ensure phone input only accepts numbers and show toast if invalid input is entered
	 input.addEventListener("input", function () {
        let oldValue = this.value;
        this.value = this.value.replace(/\D/g, ""); // Remove non-numeric characters

        if (oldValue !== this.value) {
            toastr.warning("Please enter only numbers in the phone number field.");
        }
    });


	 // Ensure placeholder updates correctly
	 setTimeout(function () {
		input.setAttribute("placeholder", "000000");
	 }, 500);

	  // Clear name input when modal opens
	  let locationModal = document.getElementById("locationModal");
       locationModal.addEventListener("show.bs.modal", function () {
        nameInput.value = ""; // Clear name field
        input.value = ""; // Clear phone field
      });


		let saveLocationBtn = document.getElementById("location_save");

		if (saveLocationBtn) {

			saveLocationBtn.addEventListener("click", function (event) {
				event.preventDefault(); // Prevent form submission

				let name = document.getElementById("name").value.trim();
				// let phone_number = document.getElementById("locationphone").value.trim();
				//  phone_number = phone_number.replace(/\D/g, ""); // Remove non-numeric characters
				//  phone_number = phone_number.replace(/^0+/, ""); // Remove leading zeros

				 let input = document.querySelector("#locationphone");
				let iti = window.intlTelInputGlobals.getInstance(input);

				let dialCode = "+" + iti.getSelectedCountryData().dialCode;

				// Get the local number in national format (e.g., "01234 567890")
				let nationalNumber = iti.getNumber(intlTelInputUtils.numberFormat.NATIONAL);

				// Clean the national number: remove non-digits and leading zeros
				nationalNumber = nationalNumber.replace(/\D/g, ""); // Remove non-numeric characters
				nationalNumber = nationalNumber.replace(/^0+/, ""); // Remove leading zeros

				// Combine country code and cleaned number
				let phone_number = `${dialCode}${nationalNumber}`;

				console.log("Dial Code:", `${dialCode}`);
				console.log("Cleaned National Number:", nationalNumber);
				console.log("Full Phone Number:", phone_number);


				let address = localStorage.getItem("selected_address") || "";
				let a_lat = localStorage.getItem("selected_lat") || "";
				let a_long = localStorage.getItem("selected_lng") || "";

				console.log("save address selected",localStorage.getItem("selected_address"));
				console.log("save address lat selected",localStorage.getItem("selected_lat"));
				console.log("save lng address selected",localStorage.getItem("selected_lng"));


				if (!name || !phone_number || !address) {
					toastr.error("Please fill in all required fields.");
					return;
				}

				 // Get user ID from session
				 let userId   = "{{ session('user_id') }}";
                 userId       = userId.trim() !== "" ? userId : null;

	
				// Create FormData object
				let formData = new FormData();

				formData.append("location", address);
				formData.append("a_lat", a_lat);
				formData.append("a_long", a_long);
				formData.append("phone_number", phone_number);
				formData.append("name", name);
				formData.append("countryCode", dialCode);

				// If user is not logged in, store address in session
				if (!userId) {

				 fetch("{{ route('store_address_session') }}", {
						method: "POST",
						headers: {
							"X-CSRF-TOKEN": "{{ csrf_token() }}"
						},
						body: formData
					})
					.then(response => response.json())
					.then(data => {
						if (data.status === 1) {
							toastr.success(data.message);

							localStorage.setItem("selected_address", address); // Update localStorage
							document.getElementById("restaurant_wrap").value = address;
							sessionStorage.setItem("address_saved", "false"); //new session storage value

							let modal = bootstrap.Modal.getInstance(document.getElementById("locationModal"));
						    modal.hide();
							// Hide "Select your location" modal if present
							let selectLocationModal = bootstrap.Modal.getInstance(document.getElementById("exampleModal"));
							if (selectLocationModal) selectLocationModal.hide();


							 // Fix for disabled page issue
							setTimeout(() => {
								document.body.classList.remove("modal-open"); // Remove Bootstrap's modal-open class
								let backdrops = document.querySelectorAll(".modal-backdrop");
								backdrops.forEach(backdrop => backdrop.remove()); // Remove all modal backdrops
							}, 500);

						} else {
							toastr.error("Failed to save address.");
						}
					})
					.catch(error => {
						console.error("API Error:", error);
						toastr.error("Something went wrong.");
					});

					return; // Stop further execution for non-logged-in users
                }


				formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
				formData.append("com_address", address);
				formData.append("landmark", "N/A");
				formData.append("hte",dialCode);
				formData.append("address", address);
				formData.append("building_number", "N/A");
				formData.append("city", "N/A");
				formData.append("postal_code", "N/A");
				formData.append("user_id", userId);
				formData.append("house_number", "N/A");

				let add_addres  = `${API_BASE_URL}/API/users.php/add_addres`;

				

				fetch(add_addres, {
					method: "POST",
					body: formData  // No need for headers, browser sets it automatically
				})
				.then(response => response.json())
				.then(data => {
					
					if (data.code === "200") {
						toastr.success(data.message);
						let modal = bootstrap.Modal.getInstance(document.getElementById("locationModal"));
						modal.hide();
						 // Hide "Select your location" modal if present
						 let selectLocationModal = bootstrap.Modal.getInstance(document.getElementById("exampleModal"));
                         if (selectLocationModal) selectLocationModal.hide();

						 // Fix for disabled page issue
						 setTimeout(() => {
								document.body.classList.remove("modal-open"); // Remove Bootstrap's modal-open class
								let backdrops = document.querySelectorAll(".modal-backdrop");
								backdrops.forEach(backdrop => backdrop.remove()); // Remove all modal backdrops
							}, 500);
						
					} else {
						toastr.error("Failed to save address. Please try again.");
					}
				})
				.catch(error => {
					console.error("API Error:", error);
					toastr.error("Something went wrong. Please try again.");
				});
			});
		} else {
			console.log("Save button not found!");
		}

 });

</script>

<script>
// document.addEventListener("DOMContentLoaded", function () {
//     var input = document.querySelector("#locationphone");
//     var iti = window.intlTelInput(input, {
//         initialCountry: "auto",
//         geoIpLookup: function (callback) {
//             fetch("https://ipapi.co/json")
//                 .then(response => response.json())
//                 .then(data => callback(data.country_code))
//                 .catch(() => callback("us"));
//         },
//         separateDialCode: true,
//         utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
//     });

//     // Wait for the initialization to complete, then set the placeholder
//     setTimeout(function () {
//         input.setAttribute("placeholder", "00000000");
//     }, 1000); // Adjust the delay if necessary
// });

</script>


<script>
	document.getElementById("wrap_next").addEventListener("click", function() {
		document.querySelector(".wraps_none-next").style.display = "none"; // Hide the div
		document.querySelector(".wraps_addrress_fields").style.display = "block"; // Show the form div
	});
</script>

<script>
	$(document).ready(function(){
		$('.wrap_food-types').slick({
			autoplay: true,          
			autoplaySpeed: 3000,    
			dots: false,            
			arrows: false,          
			infinite: true,          
			speed: 500,              
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
			{
			breakpoint: 1100,
			settings: {
				slidesToShow: 4,
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

<script>
	$(document).ready(function(){
		$('.wraps_imagesslider').slick({
			autoplay: true,          
			autoplaySpeed: 3000,    
			dots: false,            
			arrows: true,          
			infinite: true,          
			speed: 500,              
			slidesToShow: 2,
			slidesToScroll: 1,
			responsive: [
			{
			breakpoint: 1100,
			settings: {
				slidesToShow: 2,
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