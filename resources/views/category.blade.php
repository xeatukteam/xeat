@extends('layouts.app')

@section('title', 'Category')

@section('content')

<style>
.delivery_btns {
    display: flex;
}

.active-tab {
    background-color:#ED1B24 !important;
    color: #ffffff !important;
    border-radius: 10px;
    transition: 0.3s;
}

.loader-container {
    display: none; /* Hidden initially */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);
    z-index: 9999;
    justify-content: center;
    align-items: center;
}

.spinner {
    width: 50px;
    height: 50px;
    border: 5px solid #f3f3f3;
    border-top: 5px solid #3498db;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}



</style>
<main>

    <!------------------------------------------ location section ------------------------------------------------->

    <section class="wrap_locations">

        <div id="loader" class="loader-container">
        <div class="spinner"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="wrap_location-heading">
                        <h2>Our Cuisines</h2>
                    </div>
                </div>
            </div>




            <div class="wraps_navtabs">
                <button class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                </ul>
                <button class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>


            <div class="wrap_headingrestrurents">
                <h3>Some Traditional Food Based on Location</h3>
            </div>

            <div class="tab-content" id="myTabContent">

                <!-- home tab -->

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="row">

                    </div>

                </div>

            
            </div>

            <div class="wrap_button-link">
                <a href="#" class="allfood-wrapslink">Browser All</a>
            </div>
        </div>

    </section>

    <!------------------------------------------ location section end------------------------------------------------->



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
<script>
 document.addEventListener("DOMContentLoaded", function() {

    const loader = document.getElementById("loader");

    function showLoader() {
        loader.style.display = "flex";
    }

    function hideLoader() {
        loader.style.display = "none";
    }

    showLoader(); // Show loader before API call


    let currentPage = 1;
    let totalPages = 1;
    let isFetching = false;

    const API_BASE_URL = "{{ $apiBaseUrl }}";
    const accessToken  = "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd";
 
    // const apiUrl = "https://xeat.co.uk/backend/api/2.0/manage_cuisine_details_near_restor";

    const apiUrl  = `${API_BASE_URL}/backend/api/2.0/manage_cuisine_details_near_restor`;


    // const restaurantApiUrl = "https://xeat.co.uk/backend/api/new_cuisine_restdetail";

    const restaurantApiUrl  = `${API_BASE_URL}/backend/api/new_cuisine_restdetail`;


    // const restaurant_All = "https://xeat.co.uk/backend/API/users.php/near_restor_new";

    const restaurant_All  = `${API_BASE_URL}/backend/API/users.php/near_restor_new`;

    


    // Fetch dynamic values from PHP
    let srcLati = "{{ $user_address->a_lat ?: session('selected_lat', '') }}";
    let srcLong = "{{ $user_address->a_long ?: session('selected_lng', '') }}";
    let countryCode = "{{ $user_address->countryCode ?: '+94' }}";

    const browseAllButton = document.querySelector(".allfood-wrapslink"); // Select "Browse All" button



    //new api 

    function fetchRestaurants(page = 1, append = false) {
        if (isFetching || (page > totalPages)) return;
        isFetching = true;
        showLoader();

        let formData = new FormData();
        formData.append("accesstoken", accessToken);
        formData.append("src_lati", srcLati);
        formData.append("src_long", srcLong);
        formData.append("country_code", countryCode);
        formData.append("page", page);
        formData.append("limit", 50); // Adjust limit if needed

        fetch(restaurant_All, {
            method: "POST",
            body: formData, // Use FormData instead of JSON
        })
            .then((response) => response.json())
            .then((data) => {
                hideLoader();
                isFetching = false;

                if (data.code === "200") {
                    totalPages = parseInt(data.totalPages) || 1;
                    renderRestaurantList(data.data, append);

                    if (currentPage >= totalPages) {
                        browseAllButton.style.display = "none";
                    }
                }
            })
            .catch((error) => {
                console.error("Error fetching restaurants:", error);
                hideLoader();
                isFetching = false;
            });
    }



    // "Browse All" Button Click Event (Load More Data)
    browseAllButton.addEventListener("click", function (event) {
        event.preventDefault();
        currentPage++;
        fetchRestaurants(currentPage, true);
    });

    // Initial fetch
    fetchRestaurants();


    //end new api code

    fetch(apiUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                accesstoken: accessToken,
                src_lati: srcLati,
                src_long: srcLong,
                country_code: countryCode,
            }),
        })
        .then((response) => response.json())
        .then((data) => {

            hideLoader();

            if (data.code === "200") {
                renderCuisineTabs(data.data);
                // renderRestaurantList(data.restaurant);
                initializeSlickSlider();
            }
        })
        .catch((error) => console.error("Error fetching cuisines:", error));


        


    function renderRestaurantList(restaurants, append = false) {
        const restaurantContainer = document.querySelector("#myTabContent .row");
        restaurantContainer.innerHTML = "";

        if (!Array.isArray(restaurants)) {
            console.error("Expected an array of restaurants, but got:", restaurants);
            return;
        }

        restaurants.forEach(restaurant => {
            let sliderImages = "";

            let mediaElement = '';

            if (restaurant.image.endsWith('.mp4')) {
                // If it's a video, use the <video> tag
                mediaElement = `
					<video class="w-100" autoplay loop muted>
						<source src="${restaurant.image}" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				`;
            } else {
                // If it's an image, use the <img> tag
                mediaElement = `
					<img src="${restaurant.image}" class="w-100" alt="restaurant-image">
				`;
            }


            if (Array.isArray(restaurant.slider_images) && restaurant.slider_images.length > 0) {

                sliderImages = restaurant.slider_images.map(slide => {
                if (slide.type === 'video') {
                    return `<div class="image_wrprs">
                        <video class="w-100" autoplay loop muted preload="auto">
                            <source src="${slide.image}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>`;
                } else {
                    return `<div class="image_wrprs">
                        <img src="${slide.image}" class="w-100" alt="featured-thumb">
                    </div>`;
                }
              }).join(" ");

            } else {
                // Fallback: Use restaurant's main image if no slider images exist
                sliderImages = `<div class="image_wrprs">${mediaElement}</div>`;

            }

            var assetPath = "{{ asset('public/images') }}"; // Get the full asset path from Laravel
            let foodIcon = restaurant.food_type === 1 ? "nonvegicon.png" : "veg.png";
            let foodIconPath = `${assetPath}/${foodIcon}`;

            let rating = parseFloat(restaurant.rating) || 0; // Convert to number, default to 0
            let formattedRating = rating.toFixed(1); // Ensure one decimal place

            let restItem = `
				<div class="col-lg-6 col-md-6">
                    <a href="{{ url('/food_items') }}/${restaurant.id}">
						<div class="wrapper_featured-item-img-slide">
							${sliderImages}
						</div>
					</a>
					<div class="featured-item-text">
                        <a href="{{ url('/food_items') }}/${restaurant.id}">
							<button class="trapezoid-button">
							 <img src="${foodIconPath}" alt="food_type"> 
                               ${restaurant.food_type === 1 ? 'Non Veg' : 'Veg'}
							</button>
						</a>
						<div class="hstgbdj_text-item-center-item-box">
							<div class="wrapper-text-item-center-item">
								<div class="wrapscategory_icon">
                                   <a href="{{ url('/food_items') }}/${restaurant.id}">
										<div class="category_icon"> 
								          <span>${mediaElement}</span> <!-- Corrected Media Placement -->
										</div>
									</a>
								</div>
								<div class="tabline-text">
									<p class="wrap_ratings">
                                       <a href="{{ url('/food_items') }}/${restaurant.id}">
											<i class="fa-solid fa-star"></i> <span>${formattedRating}</span>
										</a>
									</p>
                                    <a href="{{ url('/food_items') }}/${restaurant.id}">
										<h3>${restaurant.rest_name}</h3>
									</a>
									<a href="{{ url('/food_items') }}/${restaurant.id}" class="wrap_descoration">
										<div class="links">
											<p>${restaurant.hallalCertified ? 'Halal certified' : 'Halal certified'} <i class="fa-solid fa-circle-check"></i></p>
											<div class="flex-text-time">
												<div class="food_rating">
													<p>Food hygiene rating: ${restaurant.food_hygiene_ratings || 'N/A'} <i class="fa-solid fa-star"></i></p>
												</div>
												<div class="time_btns">
													<span class="wrap_time">${restaurant.distance}</span>
												</div>
											</div>
											<div class="flex-delivery">
												<div class="delivery_text">
													<p>Delivery in ${restaurant.preparing_t} mins</p>
												</div>
												<div class="delivery_btns">
													<span class="wrap_close">${restaurant.online_offline_status ? 'Open' : 'Close'}</span>
													<span class="wrap_delivery">Delivery</span>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			`;
            restaurantContainer.insertAdjacentHTML("beforeend", restItem);
        });

        // Reinitialize Slick after adding new restaurants
            setTimeout(() => {
                initializeSlickSliderForRestaurants();
            }, 500);  // Slight delay to ensure rendering is done
    }

    initializeSlickSliderForRestaurants();

    function initializeSlickSliderForRestaurants() {
        $(".wrapper_featured-item-img-slide").each(function() {
            if ($(this).hasClass("slick-initialized")) {
                $(this).slick("unslick");
            }

            $(this).slick({
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: false,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    }




    function renderCuisineTabs(cuisines) {
        const tabList     = document.getElementById("myTab");
        tabList.innerHTML = ""; // Clear existing items
        cuisines.forEach((cuisine, index) => {
            const isActive = index === 0 ? "active" : "";
            const tabItem = `
                <li class="nav-item" role="presentation">
                    <button class="nav-link ${isActive}" id="tab-${cuisine.id}" data-cuisine-id="${cuisine.id}" data-bs-toggle="tab"
                    data-bs-target="#content-${cuisine.id}" type="button" role="tab"
                    aria-controls="content-${cuisine.id}" aria-selected="${index === 0}">
                    <span class="wrap_categoryicon">
                        <img src="${cuisine.cuisine_image}" alt="${cuisine.cuisine}">
                    </span> 
                    ${cuisine.cuisine}
                    </button>
                </li>
                `;

            tabList.insertAdjacentHTML("beforeend", tabItem);
        });


         // Attach click event to cuisine tabs
        document.querySelectorAll("#myTab .nav-link").forEach((tab) => {
            tab.addEventListener("click", function () {

            // Remove active class from all tabs
            document.querySelectorAll("#myTab .nav-link").forEach((item) => {
                item.classList.remove("active-tab");
            });

            // Add active class to the selected tab
            this.classList.add("active-tab");

                let cuisineId = this.getAttribute("data-cuisine-id");
                fetchRestaurantsByCuisine(cuisineId);
            });
        });

        initializeSlickSlider();
    }

    function fetchRestaurantsByCuisine(cuisineId) {

        showLoader(); // Show loader while fetching data

        fetch(restaurantApiUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                accesstoken: accessToken,
                src_lati: srcLati,
                src_long: srcLong,
                country_code: countryCode,
                cuisine_id: cuisineId,
            }),
        })
            .then((response) => response.json())
            .then((data) => {

                hideLoader(); // Hide loader once data is fetched
                if (data.code === "200") {
                    renderRestaurantList(data.data);
                }
            })
            .catch((error) => {
                hideLoader();
                console.error("Error fetching restaurants:", error);
            }
            );

    }


    function initializeSlickSlider() 
    {
        if ($(".wraps_navtabs ul").hasClass("slick-initialized")) {
            $(".wraps_navtabs ul").slick("unslick");
        }

        $(".wraps_navtabs ul").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $(".slick-prev"),
            nextArrow: $(".slick-next"),
            infinite: false,
        });
    }
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

<script>
$(document).ready(function() {
    $('.nav-tabs').slick({
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: $('.slick-prev'),
        nextArrow: $('.slick-next'),
        responsive: [{
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
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('.nav-link').on('click', function() {
        $('.wrapper_featured-item-img-slide').slick('refresh');
    });
});

$(document).ready(function() {
    $('.wrapper_featured-item-img-slide').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });
});
</script>

@endpush