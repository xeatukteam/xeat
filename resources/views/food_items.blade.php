@extends('layouts.app')

@section('title', 'Food Items')

@section('content')

<style>
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

/* .active-size {
    border: 2px solid #ff6600;
    background-color: #fff8f0;
    border-radius: 8px;
} */



</style>
<main>


    <!------------------------------------------ location section ------------------------------------------------->

    <section class="wrap_locations categories_items">

        <div id="loader" class="loader-container">
          <div class="spinner"></div>
        </div>


        <div class="container">

            <div class="col-lg-12">
                
                <div class="wrap_restrurant_details wrap_full-width">
                    <div class="wrap_innr-restrurant_details">
                        <div class="wraps_heading-flex-restrurant">
                            <img src="{{ $restaurant->image }}" alt="restaurant-image">
                        <h1>{{ $restaurant->rest_name }} <br/>
                            <span class="wraps_food_type-v-n">
                            <img src="{{ asset($restaurant->food_type == 1 ? 'public/images/nonvegicon.png' : 'public/images/veg.png') }}" alt="food_type"> 
                            {{ $restaurant->food_type == 1 ? 'Non-Veg' : 'Veg' }}                       
                            </span>
                        </h1>
                        </div>
                        <span class="text-end wrap_closed">
                        {{ $restaurant->online_offline_status ? 'Open' : 'Close' }}
                        </span>
                    <div class="row wraper_itms_details">
                                <div class="col">
                                    <div class="d-flex justify-content-start">
                                    <h4 class="text-start wraps_itms-location">
                                        {{ $restaurant->location }}
                                    </h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex justify-content-end">
                                        <p class="text-end wraps_direction">
                                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($restaurant->location) }}" target="_blank">
                                        <span><i class="fa-solid fa-turn-down"></i></span>
                                        </a>
                                        </p>
                                    </div>
                                </div>
                                </div>

                            <div class="row wraper_itms_details">
                                <div class="col">
                                    <div class="d-flex justify-content-start">
                                    <h4 class="text-start wraps_itmsrating">
                                    Food Hygiene rating: {{ $restaurant->food_hygiene_ratings ?? 'N/A' }} 
                                    <span><i class="fa-solid fa-star"></i></span>	
                                    </h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex justify-content-end">
                                        <p class="text-end wraps_certified">
                                            {{ $restaurant->hallalCertified ? 'Halal certified' : 'Halal certified' }}  
                                            <span><i class="fa-solid fa-circle-check"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row wraper_itms_details wraps_noneetc">
                                <div class="col">
                                    <div class="d-flex justify-content-start">
                                    <h4 class="text-start wraps_itms-phno">
                                    <a href="tel:{{ $restaurant->contact_number }}">
                                            {{$restaurant->contact_number}}</a>
                                    </h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex justify-content-end">
                                        <p class="text-end wraps_minorder">
                                        LKR {{ $restaurant->Minimum_Order ?? 'N/A' }} min order
                                        </p>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                </div>
            </div>

            
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="wrap_location-heading">
                        <h2>Categories</h2>
                    </div>
                </div>
            </div>

            <div class="wraps_navtabs">
                <button class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Pan & Other Crusts</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cuisine-tab" data-bs-toggle="tab" data-bs-target="#cuisine" type="button" role="tab" aria-controls="profile" aria-selected="false">Pan & Other Crusts (Classic) </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="mexican-tab" data-bs-toggle="tab" data-bs-target="#mexican" type="button" role="tab" aria-controls="contact" aria-selected="false">Pan & Other Crusts (Classic1)</button>
                </li> 

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="italian-tab" data-bs-toggle="tab" data-bs-target="#italian" type="button" role="tab" aria-controls="contact" aria-selected="false">Pan & Other Crusts (Classic2)</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="vegetarian-tab" data-bs-toggle="tab" data-bs-target="#vegetarian" type="button" role="tab" aria-controls="contact" aria-selected="false">Pan & Other Crusts (Classic3)</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="food-tab" data-bs-toggle="tab" data-bs-target="#food" type="button" role="tab" aria-controls="contact" aria-selected="false">Pan & Other Crusts (Classic3)</button>
                </li> --}}
                
                </ul>
                <button class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>

        <div class="wrap_headingrestrurents">
            <h3>Menu</h3>
        </div>

        <div class="tab-content" id="myTabContent">
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


    <!----------------------------------------------- addon popups ----------------------------------------------->

    <!-- Modal -->
    <div class="modal fade wraps_addon-forms" id="addon_pop" tabindex="-1" aria-labelledby="addonLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"></h5> <!-- ✅ Add this line -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <div class="wraps_variantslides">
            
                </div>

                <div class="wraps_addon-items">
                    <div class="heading_addons">
                        <h3></h3>
                    </div>

                    <div class="addon_wrapper_itms">
                        <div class="addon_name">
                            <h4></h4>
                        </div>
                        <div class="wraps_etc-flex">
                            <div class="wraps_quantity-text">
                                <div class="number">
                                    <span class="minus"><i class="fa-solid fa-minus"></i></span>
                                    <input type="text" value="0">
                                    <span class="plus"><i class="fa-solid fa-plus"></i></span>
                                </div>
                        </div>

                        <div class="wrap_checkox">
                            <label class="form-check-label" for="addonsause"></label>
                            <input class="form-check-input addon_custom-checkbox" type="checkbox" value="" id="addonsause">
                        </div>
                            
                        </div>
                        
                    </div>
                </div>


                <div class="button_submit">
                    <a href="#"><button type="button" class="btn btn-primary wrap_cart_items">Add item to basket</button></a>
                </div>
        </div>
        </div>
     </div>
    </div>


    <div class="modal fade" id="clearCartModal" tabindex="-1" aria-labelledby="clearCartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clearCartModalLabel">Clear Cart</h5>
            </div>
            <div class="modal-body">
                You already have items from another restaurant in your cart. Do you want to clear it and add this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="confirmClearCart" class="btn btn-danger">Yes</button>
            </div>
            </div>
        </div>
    </div>

</main>

@endsection


@push('scripts')


<script>

    const accessToken  = "{{ $accessToken }}";

    const API_BASE_URL = "{{ asset('/backend') }}";
    const manage_add_to_cart  = `${API_BASE_URL}/api/manage_add_to_cart`;

    var restCommission = {{ $restaurant->rest_commission ?? 0 }};
    
    //both sizes and addons
    function openSizeAndAddonModal(menuId,price,actual_price,isSubmenu,isSizeAvailable,buttonElement) {

        // const API_BASE_URL = "{{ $apiBaseUrl }}";
        const API_BASE_URL = "{{ asset('/backend') }}";

        const APP_URL = "{{ $APP_URL }}";

        const accessToken  = "{{ $accessToken }}";
    
        const quantityInput = buttonElement.closest('.wrapper_popular_texts').querySelector('.number input');
        const selectedQty = quantityInput ? quantityInput.value : 1;

        console.log("selectedQty openSizeAndAddonModal"+selectedQty);


          // First call rest_subitems_list
            fetch(API_BASE_URL + "/api/rest_subitems_list", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    accesstoken: accessToken,
                    subitem_id: menuId
                })
            })
            .then(res => res.json())
            .then(sizeData => {
                // Then call search_menuitems_categroy for addon data
                fetch(API_BASE_URL + "/api/search_menuitems_categroy", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                        accesstoken: accessToken,
                        menu_id: menuId
                    })
                })
                .then(res => res.json())
                .then(addonData => {
                    // Merge both data into modal
                    showModalWithSizeAndAddon(sizeData, addonData,menuId,selectedQty);
                });
            });


    }

    function showModalWithSizeAndAddon(sizeData, addonData,menuId,selectedQty) {
        // Ensure modal exists in DOM
        const modal = document.getElementById("addon_pop");
        if (!modal) {
            console.error("Modal not found!");
            return;
        }

          // ✅ Update modal heading
        const modalHeading = modal.querySelector(".modal-title"); // Adjust this selector if needed
        if (modalHeading) {
            modalHeading.textContent = "Select Variants";
        }

        // ✅ These must match the modal HTML you shared
        const variantsContainer = modal.querySelector(".wraps_variantslides");
        const addonsContainer = modal.querySelector(".wraps_addon-items");

        if (!variantsContainer || !addonsContainer) {
            console.error("Variant or Addon container not found in modal.");
            return;
        }

        // Clear existing content before inserting new
        variantsContainer.innerHTML = "";
        addonsContainer.innerHTML = "";

         // Default selected size (first one)
       let selectedSize = sizeData.menu_sizes?.[0]?.menu_size;

        // ✅ Render sizes
        generateSizeOptions_NEW(sizeData, variantsContainer,menuId,selectedQty);

        // ✅ Render addons
         const displayedTitles = new Set(); // To avoid repeating the same title

        // 🔄 Render addons based on selected size
        const renderAddonsBySize = (size) => {
                addonsContainer.innerHTML = "";
                displayedTitles.clear();
                addonData.data.forEach(item => {
                    generateAddons_NEW(item, addonsContainer, displayedTitles, size);
                });
        };

        renderAddonsBySize(selectedSize);


        //  addonData.data.forEach(item => {
        //     generateAddons_NEW(item, addonsContainer, displayedTitles);
        // });

         // 👉 Add click handler to size slider
         variantsContainer.querySelectorAll(".variants_wraps").forEach(item => {
                item.addEventListener("click", function () {
                    selectedSize = this.getAttribute("data-size");

                    // 🔄 Re-render addons
                    renderAddonsBySize(selectedSize);

                    // ✅ Remove "active-size" from all sizes
                    variantsContainer.querySelectorAll(".variants_wraps").forEach(el => {
                        el.classList.remove("active-size");
                    });

                    // ✅ Add "active-size" to the clicked one
                    item.classList.add("active-size");
                });
            });


            // ✅ Highlight first size
            setTimeout(() => {
                const firstSizeOption = variantsContainer.querySelector(".variants_wraps");
                if (firstSizeOption) {
                    firstSizeOption.classList.add("active-size");
                }
            }, 50);

      
       
         // Wait a moment for DOM updates before initializing Slick
         setTimeout(() => {
                    $(".wraps_variantslides").slick("unslick");
                    $(".wraps_variantslides").slick({
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        dots: false,
                        arrows: false
                    });
        }, 500);
    }



    //only sizes case

    function openSizeOnlyModal(menuId, price, actual_price, isSubmenu, isSizeAvailable, buttonElement) {
        // const API_BASE_URL = "{{ $apiBaseUrl }}";
        const API_BASE_URL = "{{ asset('/backend') }}";

        const accessToken  = "{{ $accessToken }}";

        const quantityInput = buttonElement.closest('.wrapper_popular_texts').querySelector('.number input');
        const selectedQty = quantityInput ? quantityInput.value : 1;

        console.log("selectedQty openSizeAndAddonModal"+selectedQty);


        fetch(API_BASE_URL + "/api/rest_subitems_list", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
                accesstoken: accessToken,
                subitem_id: menuId
            })
        })
        .then(res => res.json())
        .then(sizeData => {
            const modal = document.getElementById("addon_pop");
            const variantsContainer = modal.querySelector(".wraps_variantslides");
            if (!modal || !variantsContainer) return;


            // ✅ Update modal heading
            const modalHeading = modal.querySelector(".modal-title"); // Adjust this selector based on your HTML
            if (modalHeading) {
                modalHeading.textContent = "Select Variants";
            }

            variantsContainer.innerHTML = "";
            generateSizeOptions_NEW(sizeData, variantsContainer,menuId,selectedQty);

            // ✅ Mark first size as active
            setTimeout(() => {
                const firstSizeOption = variantsContainer.querySelector(".variants_wraps");
                if (firstSizeOption) {
                    firstSizeOption.classList.add("active-size");
                }
            }, 50);

            // (Optional: Hide addon section since it's size-only)
            const addonsContainer = modal.querySelector(".wraps_addon-items");
            if (addonsContainer) addonsContainer.innerHTML = "";

            setTimeout(() => {
                $(".wraps_variantslides").slick("unslick");
                $(".wraps_variantslides").slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: false,
                    arrows: false
                });
            }, 500);
        });
    }


    //only addons case

    function openAddonOnlyModal(menuId, price, actual_price, isSubmenu, isSizeAvailable, buttonElement) 
    {
                // const API_BASE_URL = "{{ $apiBaseUrl }}";
                const API_BASE_URL = "{{ asset('/backend') }}";

                const accessToken  = "{{ $accessToken }}";

                fetch(API_BASE_URL + "/api/search_menuitems_categroy", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                        accesstoken: accessToken,
                        menu_id: menuId
                    })
                })
                .then(res => res.json())
                .then(addonData => {
                    const modal = document.getElementById("addon_pop");

                      // ✅ Update modal heading
                    const modalHeading = modal.querySelector(".modal-title"); // Adjust this selector if needed
                    if (modalHeading) {
                        modalHeading.textContent = "Select Add-ons";
                    }
                    const addonsContainer = modal.querySelector(".wraps_addon-items");
                
                    if (!modal || !addonsContainer) return;

                    modal.setAttribute("data-menu-id", menuId);
                    modal.setAttribute("data-price", price);
                    modal.setAttribute("data-actual-price", actual_price);
                    modal.setAttribute("data-quantity", 1);
                    modal.setAttribute("data-size","R");


                    addonsContainer.innerHTML = "";
                    const displayedTitles = new Set();

                    // Default to first size if available
                    let selectedSize = addonData.data[0]?.selection?.[0]?.variant_size ?? null;

                    // Show add-ons for selected size
                    addonData.data.forEach(item => {
                        generateAddons_NEW(item, addonsContainer, displayedTitles, selectedSize,menuId);
                    });
                });
    }



    function generateAddons_NEW(menuItem, addonsContainer, displayedTitles, selectedSize) {

        console.log(selectedSize);
        let extrasHTML = "";
        let requiredText = menuItem.is_required === "1" ? '(Required)' : '';
        let inputType = menuItem.is_size === "1" ? "checkbox" : "radio";
        let radioGroupName = `addon_${menuItem.id}`;

        if (!displayedTitles.has(menuItem.title)) {
            extrasHTML += `<div class="heading_addons"><h3>${menuItem.title} ${requiredText}</h3></div>`;
            displayedTitles.add(menuItem.title);
        }

        if (Array.isArray(menuItem.selection)) {
            menuItem.selection.forEach((addon) => {
                // ✅ Only show addons matching selected size
                if (addon.variant_size !== selectedSize) return;

                let basePrice = parseFloat(addon.variant_price) || 0;
                let finalPrice = basePrice + (basePrice * (restCommission / 100));

                extrasHTML += `
                    <div class="addon_wrapper_itms">
                        <div class="addon_name">
                            <h4>${addon.name} (${addon.variant_size})</h4>
                        </div>
                        <div class="wraps_etc-flex">
                            <div class="wraps_quantity-text">
                               
                            </div>
                            <div class="wrap_checkox">
                                <label class="form-check-label">LKR ${finalPrice.toFixed(2)}</label>
                                <input 
                                    class="form-check-input addon_custom-checkbox" 
                                    type="${inputType}"  data-size="${addon.variant_size}" data-price="${finalPrice}" data-addon_name="${addon.name}"
                                    name="${inputType === 'radio' ? radioGroupName : ''}"  data-quantity="1" data-required="${menuItem.is_required}"
                                    data-id="${addon.id}">
                            </div>
                        </div>
                    </div>`;
            });
        }

        addonsContainer.insertAdjacentHTML("beforeend", extrasHTML);
    }



    function generateSizeOptions_NEW(menuItem, modalBody,menuId,selectedQty) 
    {
        // Clear modal body first (optional but safe)
        modalBody.innerHTML = "";

        menuItem.menu_sizes.forEach((size, index) => {
            let basePrice = parseFloat(size.menu_price) || 0;
            let finalPrice = basePrice + (basePrice * (restCommission / 100));
            let quantity = 1;



            let sizeHTML = `
                <div class="variants_wraps" 
                    data-size="${size.menu_size}" 
                    data-price="${finalPrice.toFixed(2)}" 
                    data-actual-price="${basePrice.toFixed(2)}" data-quantity="${selectedQty}" data-menu-id="${menuId}">
                    <div class="item_varints">
                        <p>${size.menu_full_size}</p>
                        <p>(LKR ${finalPrice.toFixed(2)})</p>
                    </div>
                </div>`;
            modalBody.insertAdjacentHTML("beforeend", sizeHTML);
        });

        // ✅ Attach click handler to newly added size options
        document.querySelectorAll(".variants_wraps").forEach(variant => {
            variant.addEventListener("click", function () {
                // Remove active class from all
                document.querySelectorAll(".variants_wraps").forEach(el => el.classList.remove("active"));
                this.classList.add("active");

                let selectedSizePrice = this.getAttribute("data-price");
                let selectedSizeActualPrice = this.getAttribute("data-actual-price");
                let selectedSize = this.getAttribute("data-size");
                let selectedQuantity = this.getAttribute("data-quantity");
                let selectedMenuId = this.getAttribute("data-menu-id"); // ✅ GET menu-id from clicked element



                // Save to modal
                let modal = document.getElementById("addon_pop");
                modal.setAttribute("data-price", selectedSizePrice);
                modal.setAttribute("data-actual-price", selectedSizeActualPrice);
                modal.setAttribute("data-size", selectedSize);
                modal.setAttribute("data-quantity", selectedQuantity);
                modal.setAttribute("data-menu-id", selectedMenuId); // ✅ ADD this line

            });

            
        }); 

         // ✅ Auto-select first size option and set modal data
        let firstVariant = modalBody.querySelector(".variants_wraps");
        if (firstVariant) {
            firstVariant.classList.add("active");

            let modal = document.getElementById("addon_pop");
            modal.setAttribute("data-price", firstVariant.getAttribute("data-price"));
            modal.setAttribute("data-actual-price", firstVariant.getAttribute("data-actual-price"));
            modal.setAttribute("data-size", firstVariant.getAttribute("data-size"));
            modal.setAttribute("data-quantity", firstVariant.getAttribute("data-quantity"));
            modal.setAttribute("data-menu-id", firstVariant.getAttribute("data-menu-id"));
        }
    }




    //addon pop model add to basket buton functionality

    document.querySelector(".wrap_cart_items").addEventListener("click", function() {

            let selectedData     = [];
            let showError        = false; // Flag to track if an error has already been shown
            let checkboxSelected = false; // Flag to track if at least one checkbox is selected
            let requiredGroups   = {}; // Track required addon groups


            // Get stored menuId, price, and actual_price
            let modal            = document.getElementById("addon_pop");
            let menuId           = modal.getAttribute("data-menu-id");
            let price            = modal.getAttribute("data-price");
            let actual_price     = modal.getAttribute("data-actual-price");
            let menuItemQuantity = modal.getAttribute("data-quantity"); // ✅ Retrieve stored quantity
            let menu_size        = modal.getAttribute("data-size"); // ✅ Retrieve stored quantity
            let selectedSize_menu     = menu_size || "R"; // ✅ proper fallback

            let restId         = "{{ $restaurant->id }}";


            console.log("Selected Menu ID sizes default:", menu_size);

            document.querySelectorAll(".addon_wrapper_itms").forEach(item => {

                let checkbox = item.querySelector(".addon_custom-checkbox");

                if (!checkbox) return;

                let quantity    = parseInt(checkbox.dataset.quantity) || 1;
                let size        = checkbox.dataset.size;
                let price       = checkbox.dataset.price;
                let addonId     = checkbox.dataset.id;
                let addon_name  = checkbox.dataset.addon_name;
                let isRequired  = checkbox.dataset.required === "1";
                let groupId     = menuId; // assuming each addon group is tied to menu_id


            if (isRequired) {
                    if (!requiredGroups[groupId]) {
                        requiredGroups[groupId] = false; // no selection yet
                    }
                    if (checkbox.checked) {
                        requiredGroups[groupId] = true;
                    }
            }

               
                if (checkbox.checked) {

                checkboxSelected = true; // At least one addon is selected

                selectedData.push({
                    // size        : size,
                    // quantity    : quantity,
                    id    : addonId,
                    name  : addon_name,
                    price : price,
                });

                }
            });

            // Show error if no checkboxes are selected
            // if (!checkboxSelected) {
             // Check if any required group has no selection
                for (let group in requiredGroups) {
                    if (!requiredGroups[group]) {
                        toastr.error("Please select at least one required addon.");
                        return;
                    }
                }
            // }

    
            // if (selectedData.length > 0) {

                console.log(selectedData);

                // let totalAddonsQuantity = selectedData.reduce((sum, addon) => sum + parseInt(addon.quantity, 10), 0);
                let selectedSize = selectedData.length > 0 ? selectedData[0].size : selectedSize_menu ;

                let cartData = {
                    accesstoken: accessToken,
                    user_id: "{{ $userId ?? '' }}",
                    menu_item_id: menuId,
                    price: price,
                    actual_price: actual_price,
                    Add_on: selectedData.length > 0 ? 1 : 0,
                    add_on_items: JSON.stringify(selectedData),
                    schedule_type: "now",
                    size: selectedSize, // Use "S" if available, else "R"
                    type: 0,
                    add_penny: 0,
                    operation: 1,
                    repeat_add_on: 0,
                    item_instruction: "",
                    count:menuItemQuantity,


                };

               

                fetch(manage_add_to_cart, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(cartData),
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log("Cart Details Response:", data);
                        if (data.status === "200") {

                            toastr.success("Item successfully added to cart!");
                            
                             updateCartUI(data);
                             updateCartCount();

                            // ✅ Ensure modal is properly hidden
                            if (modal) {
                                modal.classList.remove("show");
                                modal.style.display = "none";
                                modal.setAttribute("aria-hidden", "true");
                            }

                            // ✅ Fully remove Bootstrap's modal-open class and restore scroll
                            document.body.classList.remove("modal-open");
                            document.body.style.overflow = "auto"; // Re-enable scrolling
                            document.body.style.pointerEvents = "auto"; // Re-enable clicks
                            document.body.removeAttribute("data-bs-backdrop");

                            // ✅ Remove all modal backdrops (sometimes multiple exist)
                            document.querySelectorAll(".modal-backdrop").forEach(backdrop => backdrop.remove());

                        } else if (data.status === "202") {
                            // Custom logic for different restaurant
                            $('#clearCartModal').modal('show');

                            document.getElementById("confirmClearCart").onclick = function () 
                            {

                            const delete_cart  = `${API_BASE_URL}/api/delete_cart`;

                            fetch(delete_cart, {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                },
                                body: JSON.stringify({
                                    accesstoken: accessToken,
                                    user_id: cartData.user_id
                                })
                            })
                                .then(res => res.json())
                                .then(deleteData => {
                                    if (deleteData.status === "200") {
                                        toastr.info("Previous cart cleared.");
                                        $('#clearCartModal').modal('hide');

                                          // ✅ Hide the addon modal too
                                        const addonModal = document.getElementById("addon_pop");
                                        const addonModalInstance = bootstrap.Modal.getInstance(addonModal) || new bootstrap.Modal(addonModal);
                                        addonModalInstance.hide();
                                        updateCartUI({ data: [] }); // fallback for instant UI clear
                                        fetchCartDetails();         // API refresh to sync with backend
                                        updateCartCount();     // updates header badge

                                    } else {
                                        toastr.error("Failed to clear cart.");
                                    }
                                });
                            };

                        
                            document.getElementById("cancelClearCart").onclick = function () {
                                $('#clearCartModal').modal('hide');
                            };
                            
                        }
                        else {
                            console.error("Failed to fetch cart details:", data.message);
                        }
                    })
                    .catch(error => {
                        // console.error("Error adding to cart:", error);
                        // alert("An error occurred while adding to cart.");
                 });

            // }
    });




       //increment and decrement the order process
       function increaseQuantity(button) {
            let input = button.parentElement.querySelector("input");  
            let currentValue = parseInt(input.value) || 0;  
            input.value = currentValue + 1;
        }

        function decreaseQuantity(button) {
            let input = button.parentElement.querySelector("input");  
            let currentValue = parseInt(input.value) || 0;
            if (currentValue > 0) {
                input.value = currentValue - 1;
            }
        }


        
       function addToCart(itemId, price, actualPrice) {

        let restId         = "{{ $restaurant->id }}";
        let selectedRestId = restId; // current page restaurant ID


         // Select the correct quantity input field for this item
        let quantityInput = document.querySelector(`#item-${itemId} .wraps_quantity-text input`);

        if (!quantityInput) {
            console.error(`Quantity input not found for item ${itemId}`);
            return;
        }

        let quantity = parseInt(quantityInput.value.trim() || "0"); // Ensure valid quantity

        if (quantity <= 0) {
            toastr.error("Please select a valid quantity."); 
            return;
        }

        let userId = @json(isset($userId) && $userId ? $userId : 'guest');

      

         // Proceed to add item to cart
        let cartData = {
            accesstoken: accessToken,
            user_id: "{{ $userId ?? '' }}",
            menu_item_id: itemId,
            price: price,
            actual_price: actualPrice,
            count: quantity,
            instruction:'',
            cart_instruction:'',
            type:0,
            Add_on:0,
            add_on_items:0,
            // size:0,
            operation:1,
            repeat_add_on:0
        };

            // =============== FOR GUEST USERS ================
        if (userId === "guest") {

        let guestCart = JSON.parse(localStorage.getItem("guest_cart")) || [];
        let cartMeta  = JSON.parse(localStorage.getItem("guest_cart_meta")) || null;

        let currentRestId = "{{ $restaurant->id }}";
        let rest_name     = "{{ $restaurant->rest_name }}";
        let rest_image    = "{{ $restaurant->image }}";
        let location      = "{{ $restaurant->location }}";

          // If cart exists but from another restaurant — clear it
        if (guestCart.length > 0 && cartMeta?.restId !== currentRestId) {
            guestCart = [];
            localStorage.removeItem("guest_cart");
            toastr.info("Previous cart cleared because it's from a different restaurant.");
        }


            let cartItem = {
                menu_item_id: itemId,
                price: price,
                actual_price: actualPrice,
                count: quantity,
                instruction: '',
                cart_instruction: '',
                type: 0,
                Add_on: 0,
                add_on_items: 0,
                operation: 1,
                repeat_add_on: 0,
                item_name: document.querySelector(`#item-${itemId} .item-name`)?.innerText || "Item",
                size: document.querySelector(`#item-${itemId} .selected-size`)?.innerText || "R"

            };

             // Save restaurant info separately
            localStorage.setItem("guest_cart_meta", JSON.stringify({
                restId: currentRestId,
                rest_name: rest_name,
                image: rest_image,
                location: location,

            }));


            let existingIndex = guestCart.findIndex(item => item.menu_item_id === itemId);
            if (existingIndex !== -1) {
                // Update quantity if already exists
                guestCart[existingIndex].count += quantity;
            } else {
                guestCart.push(cartItem);
            }

            localStorage.setItem("guest_cart", JSON.stringify(guestCart));
            toastr.success("Item added to cart!");
            
            // Optional: update total quantity, not just item count
            let totalQty = guestCart.reduce((sum, item) => sum + item.count, 0);
             updateGuestCartUI(guestCart); // Call correct guest UI handler
            
            return;
        }

        console.log("Adding to cart:", cartData);

        fetch(manage_add_to_cart, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(cartData),
        })
        .then(response => response.json())
        .then(data => {
            console.log("Cart Details Response:", data);
            if (data.status === "200") {

             toastr.success("Item successfully added to cart!");

             updateCartUI(data);
             updateCartCount();
             document.getElementById("addon_pop").classList.remove("show");
             document.body.classList.remove("modal-open");
             document.querySelector(".modal-backdrop").remove();
            } else if (data.status === "202") {
                // Custom logic for different restaurant
              $('#clearCartModal').modal('show');

              document.getElementById("confirmClearCart").onclick = function () 
              {

                const delete_cart  = `${API_BASE_URL}/api/delete_cart`;

                fetch(delete_cart, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        accesstoken: accessToken,
                        user_id: cartData.user_id
                    })
                })
                .then(res => res.json())
                .then(deleteData => {
                    if (deleteData.status === "200") {
                        toastr.info("Previous cart cleared.");
                        $('#clearCartModal').modal('hide');
                        updateCartUI({ data: [] }); // fallback for instant UI clear
                        fetchCartDetails();         // API refresh to sync with backend
                        updateCartCount();     // updates header badge



                        // fetchCartDetails();

                        // Retry add to cart
                    } else {
                        toastr.error("Failed to clear cart.");
                    }
                });
              };

              


              document.getElementById("cancelClearCart").onclick = function () {
                $('#clearCartModal').modal('hide');
              };
                
            }else {
                console.error("Failed to fetch cart details:", data.message);
            }
        })
        .catch(error => {
            console.error("Error adding to cart:", error);
            // alert("An error occurred while adding to cart.");
        });
 
       }


    function updateGuestCartUI(guestCart) 
    {
            let cartContainer = document.getElementById("cart-container");

            // ✅ Filter only items with quantity > 0
            let validItems = (guestCart || []).filter(item => parseInt(item.count) > 0);

            if (validItems.length === 0) {
                cartContainer.innerHTML = "";
                return;
            }

            let orderDetails = `
                <div class="track_order">
                    <div class="wraps_row">
                        <div class="wraps_left-texts">
                            <h5>Order Id: ${validItems.length}</h5>
                            <p>Note: You need to log in to complete the order.</p>
                        </div>
                        <div class="wraps_right-button">
                            <a href="{{ route('cart') }}" class="wraps_view_details">
                                <button type="button" class="order_details_button">View Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
            `;

            cartContainer.innerHTML = orderDetails;
    }



        function updateCartUI(cartData) 
        {
            let cartContainer = document.getElementById("cart-container");

            let validItems = (cartData.data || []).filter(item => parseInt(item.count) > 0);


            if (validItems.length === 0) {
                cartContainer.innerHTML = "";
                return;
            }

            let userId = "{{ $userId ?? '' }}"; // Check if user is logged in

            console.log("User is not logged in, hiding track order.",userId);

            let orderDetails = `
                <div class="track_order">
                    <div class="wraps_row">
                        <div class="wraps_left-texts">
                            <h5>Order ID: ${validItems[0].cart_id}</h5>
                            <p>View Details</p>
                        </div>
                        <div class="wraps_right-button">
                            <a href="{{ route('cart') }}" class="wraps_view_details">
                                <button type="button" class="order_details_button">View Details</button>
                            </a>
                        </div>
                    </div>
                </div>
            `;

            cartContainer.innerHTML = orderDetails;
        }



        function fetchCartDetails() 
        {
            let userId = "{{ $userId ?? '' }}";

            if (!userId) {
                let guestCart = JSON.parse(localStorage.getItem("guest_cart")) || [];
                updateGuestCartUI(guestCart);
                return;
            }

            const cart_details  = `${API_BASE_URL}/api/manage_cart_detail_new`;


            fetch(cart_details, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    accesstoken: accessToken,
                    user_id: userId,
                    type: 0
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "200") {
                    updateCartUI(data);
                } else {

                    updateCartUI({ data: [] }); 

                    console.error("Failed to fetch cart details:", data.message);
                }
            })
            .catch(error => {
                console.error("Error fetching cart details:", error);
            });

            // Load from localStorage in case API fails
            // let savedCart = localStorage.getItem("cartData");
            // if (savedCart) {
            //     updateCartUI(JSON.parse(savedCart));
            // }
        }

        // Call this function on page load
        fetchCartDetails();

        function updateCartCount() {
            fetch('/cart/count')
                .then(response => response.json())
                .then(data => {
                    const badge = document.getElementById('cart-badge-count');
                    if (badge) {
                        if (data.count > 0) {
                            badge.innerText = data.count;
                            badge.style.display = 'inline-block';
                        } else {
                            badge.style.display = 'none';
                        }
                    }
                });
        }






     document.addEventListener("DOMContentLoaded", function () {
        

        var addonModal = document.getElementById("addon_pop"); //model hide addon on sizes of model

        addonModal.addEventListener("hidden.bs.modal", function () {
            document.body.classList.remove("modal-open"); // Remove Bootstrap's class that disables scrolling
            document.querySelectorAll(".modal-backdrop").forEach(backdrop => backdrop.remove()); // Remove any remaining backdrop
        });

        var assetPath      = "{{ asset('public/images') }}";
        const API_BASE_URL = "{{ asset('/backend') }}";
        const APP_URL = "{{ $APP_URL }}";

      

        const accessToken  = "{{ $accessToken }}";
        let restId         = "{{ $restaurant->id }}";
        const categoryUrl  = `${API_BASE_URL}/api/rest_category`;
        const menuUrl      = `${API_BASE_URL}/API/users.php/menu_item`;

        //this code for category list

        const loader = document.getElementById("loader");

        function showLoader() {
            loader.style.display = "flex";
        }

        function hideLoader() {
            loader.style.display = "none";
        }

        showLoader(); // Show loader before API call


        fetch(categoryUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ 
                accesstoken: accessToken,
                rest_id: restId
            })
        })
        .then(response => response.json())
        .then(data => {

            hideLoader();

            if (data.code === "200") {

                renderCategoryTabs(data.data);

                initializeSlickSlider();
            
            } else {
                console.error("Error fetching categories:", data.message);
            }
        })
        .catch(error => {
            hideLoader();
            console.error("Fetch error:", error);
        });


        function renderCategoryTabs(categories) 
        {
           const tabList = document.getElementById("myTab");
            tabList.innerHTML = ""; // Clear existing items

            categories.forEach((category, index) => {
                let isActive = index === 0 ? "active" : ""; // First category is active
                let tabId = `category-${category.id}`;

                // let categoryItem = `
                //     <li class="nav-item" role="presentation">
                //         <button class="nav-link ${isActive}" id="${tabId}-tab" data-bs-toggle="tab" data-bs-target="#${tabId}" type="button" role="tab" aria-controls="${tabId}" aria-selected="${index === 0}">
                //             ${category.c_name}
                //         </button>
                //     </li>
                // `;

                let categoryItem = `
                    <li class="nav-item" role="presentation">
                        <button class="nav-link ${isActive}" id="${tabId}-tab" data-category-id="${category.id}">
                            ${category.c_name}
                        </button>
                    </li>
                `;

                tabList.insertAdjacentHTML("beforeend", categoryItem);
            });

                 // Add click event to fetch menu items when category is clicked
                document.querySelectorAll("#myTab .nav-link").forEach(button => {
                    button.addEventListener("click", function () {
                        document.querySelectorAll("#myTab .nav-link").forEach(btn => btn.classList.remove("active"));
                        this.classList.add("active");
                        selectedCategoryId = this.getAttribute("data-category-id");

                        fetchMenusByCategory(selectedCategoryId,1);

     
                    });
                });
        }

        const Category_Menu_List_ApiUrl = "https://xeat.co.uk/backend/api/category_menu_list";


        function fetchMenusByCategory(categoryId, page) {

            // showLoader(); // Show loader before API call

            fetch(Category_Menu_List_ApiUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    accesstoken: accessToken,
                    id: categoryId,
                }),
            })
            .then((response) => response.json())
            .then((data) => {

                // hideLoader();

            if (data.code === "200") {
                renderMenuItems(data.data);
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

     //end category list code

    //menulist code api start here

        let   currentPage = 1;
        const limit       = 100;

     function fetchMenuItems(page) {
        showLoader();

        let formData = new FormData();
        formData.append("accesstoken", accessToken);
        formData.append("rid", restId);
        formData.append("limit", limit);
        formData.append("page", page);

      fetch(menuUrl, {
        method: "POST",
        body: formData // Use FormData instead of JSON
       })
        .then(response => response.json())
        .then(data => {

           

            if (data.code === "200" && data.data.length > 0) {
                renderMenuItems(data.data);
                checkPagination(data.totalpages, page);  //  Check if more pages exist
                hideLoader(); // Hide menu loader

            } else {
                console.error("Error fetching menu items:", data.message);
                document.getElementById("myTabContent").innerHTML = "<p class='text-danger'>No menu items found</p>";
                checkPagination(0, page);  //  No data, disable button
                hideLoader(); // Hide menu loader

            }
        })
         .catch(error => {
                hideLoader();
                console.error("Fetch error:", error);
            });

     }


     var cartRoute = "{{ route('cart') }}";


        function renderMenuItems(menuItems) 
        {
            const menuContainer = document.querySelector("#myTabContent .row");
            menuContainer.innerHTML = "";

            menuItems.forEach(item => {
                let foodTypeClass = item.food_type === "0" ? "wrap_vegs" : "";
                let foodIcon = item.food_type === "0" ? "veg.png" : "nonvegicon.png";
                let foodTypeIcon = `${assetPath}/${foodIcon}`;
                let basePrice = parseFloat(item.f_price) || 0; // Ensure price is a number
                let finalPrice = basePrice + (basePrice * (restCommission / 100)); // Add commission

                let price = `${item.currency} ${finalPrice.toFixed(2)}`; // Format to 2 decimal places

                let isSubmenu = parseInt(item.is_submenu_exist) === 1;
                let isSizeAvailable = parseInt(item.is_size_available) === 1;

                let addToCartAction = '';

                if (isSizeAvailable && isSubmenu) {
                    // Needs both size and submenu API calls
                    addToCartAction = `data-bs-toggle="modal" data-bs-target="#addon_pop" onclick="openSizeAndAddonModal(${item.id},${finalPrice}, ${basePrice},${isSubmenu},${isSizeAvailable},this)"`;
                } else if (isSizeAvailable) {
                    // Only sizes
                    addToCartAction = `data-bs-toggle="modal" data-bs-target="#addon_pop" onclick="openSizeOnlyModal(${item.id},${finalPrice}, ${basePrice},${isSubmenu},${isSizeAvailable},this)"`;
                } else if (isSubmenu) {
                    // Only add-ons
                    addToCartAction = `data-bs-toggle="modal" data-bs-target="#addon_pop" onclick="openAddonOnlyModal(${item.id},${finalPrice}, ${basePrice},${isSubmenu},${isSizeAvailable},this)"`;
                } else {
                    // No size or add-on, direct add to cart
                    addToCartAction = `onclick="addToCart(${item.id}, ${finalPrice}, ${basePrice})"`;
                }

                // let addToCartAction = (isSizeAvailable || isSubmenu)
                //     ? `data-bs-toggle="modal" data-bs-target="#addon_pop" onclick="openSizeModal(${item.id},${finalPrice}, ${basePrice},${isSubmenu},${isSizeAvailable},this)"`
                //     : `onclick="addToCart(${item.id}, ${finalPrice}, ${basePrice})"`;

                let menuItemHTML = `
                    <div class="col-lg-6 col-md-6" id="item-${item.id}">
                        <div class="wrap_popular-item">
                            <div class="food_typev-n">
                                <span class="${foodTypeClass}">
                                    <img src="${foodTypeIcon}" alt="food_icon"> ${item.food_type === "0" ? "Veg" : "Non-Veg"}
                                </span>
                            </div>
                            <div class="wrap_food_image">
                                <img src="${item.image}" alt="foodimg">
                            </div>
                            <div class="popular_wraps-inner">
                                <div class="popularwrs-item-text">
                                    <h4>${item.name}</h4>
                                    <p class="wrap_coloretc">${price}</p>
                                    <p class="wrpars-description">${item.Ingredients}</p>
                                </div>
                                <div class="wrapper_popular_texts">
                                    <div class="wraps_quantity-text">
                                        <div class="number">
                                            <span class="minus" onclick="decreaseQuantity(this)" ><i class="fa-solid fa-minus"></i></span>
                                            <input type="text" value="0"/>
                                            <span class="plus" onclick="increaseQuantity(this)"><i class="fa-solid fa-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="popular-inner-item-button">
                                        <a class="wraps_addto-cart" ${addToCartAction}>
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
                    </div>`;

                menuContainer.insertAdjacentHTML("beforeend", menuItemHTML);
            });


        }



        // Load first page of menu items
        fetchMenuItems(currentPage);

        // Add event listener to "Browser All" button
        document.querySelector(".allfood-wrapslink").addEventListener("click", function (event) {
            event.preventDefault();
            currentPage++;
            fetchMenuItems(currentPage);
        });

        function checkPagination(totalPages, currentPage) {
            const browseButton = document.querySelector(".allfood-wrapslink");
            if (currentPage >= totalPages) {
                browseButton.style.display = "none"; // Hide the button when no more pages
            } else {
                browseButton.style.display = "block"; // Show the button if more pages exist
            }
        }


     

});
</script>



<!----------------------------------------------- addon popups end ----------------------------------------------->
<script>
$(document).ready(function(){
  $('.nav-tabs').slick({
    autoplay: true,          
    autoplaySpeed: 3000,    
    dots: false,            
    arrows: false,          
    infinite: true,          
    speed: 500,              
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $('.slick-prev'),
    nextArrow: $('.slick-next'),
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
        slidesToShow:3,
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
$(document).ready(function () {
  $('.nav-link').on('click', function () {
    $('.wrapper_featured-item-img-slide').slick('refresh');
  });
});

$(document).ready(function(){
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


<script type="text/javascript">

$(document).ready(function(){
    // Initialize Slick slider when modal is shown
    $('#addon_pop').on('shown.bs.modal', function () {
        let slider = $('.wraps_variantslides');
        if (!slider.hasClass('slick-initialized')) {
            slider.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: false,
                arrows: false
            });
        }
    });

    // Reset modal content when closed
        $('#addon_pop').on('hidden.bs.modal', function () {
                console.log("🛑 Modal closed. Resetting content...");

                const $slider = $('.wraps_variantslides');
                const $addons = $('.wraps_addon-items');

                // Destroy Slick slider to avoid multiple init
                if ($slider.hasClass('slick-initialized')) {
                    $slider.slick('unslick');
                }

                // Clear contents
                $slider.html('');
                $addons.html('');
                $('#addon_pop .modal-title').text('');
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

@endpush
