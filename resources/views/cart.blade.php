@extends('layouts.app')

@section('title', 'Cart')

@section('content')
<main>
	<!---------------------------------------------- first section ----------------------------------------------->
	<section class="wrapcart_main-banner">
				<div class="container">
					<div class="col-lg-12">
						<div class="wrap_cart_details">
							<div class="details_cart-wrps">
							<div class="wraps_cart-goldn">
								<div class="wraps-left-img">
									<img id="restaurant-image" src="public/images/golden.jpg" alt="restaurant_image">
								</div>

								<div class="wraps_right-text">
								   <h1 id="restaurant-name">Loading...</h1>
								   <p id="restaurant-location">Fetching location...</p>
								</div>
							</div>
							</div>
						</div>
					</div>
			</div>
	</section>

	<!---------------------------------------------- first section ----------------------------------------------->

	<section class="wrap_cart-items">
		<div class="container">
			<div class="wraporders">
				<h2>Your Order</h2>
				<div class="wrapper-flex-cart">
					<div class="wrapcart-table">
						<table class="table ">
						<thead>
							<tr class="tabel-main-top">
								<th>Details</th>
								<th>Quantity</th>
								<th class="details-control-two">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="tabel-text">
										<h5></h5>
										<p class="wraps_addons">Size :</p>
										<p class="wraps_addons">Addon :</p>
										<p></p>
									</div>
								</td>
								<td>
									<div class="wraps_quantity-text">
										<div class="number">
											<span class="minus"><i class="fa-solid fa-minus"></i></span>
											<input type="text" value="1"/>
											<span class="plus"><i class="fa-solid fa-plus"></i></span>
										</div>
									</div>
								</td>
								<td>
									<div class="tabel-modal-btn">
										<a href="#">
											<span>
												<svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M5.834 0.890599C6.20493 0.334202 6.8294 0 7.4981 0H9.35737C10.0261 0 10.6505 0.334202 11.0215 0.8906L11.9277 2.25H15.6777C16.0919 2.25 16.4277 2.58579 16.4277 3C16.4277 3.41421 16.0919 3.75 15.6777 3.75H1.17773C0.763521 3.75 0.427734 3.41421 0.427734 3C0.427734 2.58579 0.763521 2.25 1.17773 2.25H4.92773L5.834 0.890599ZM11.4277 20H5.42773C3.2186 20 1.42773 18.2091 1.42773 16V5H15.4277V16C15.4277 18.2091 13.6369 20 11.4277 20ZM6.42773 8.25C6.84195 8.25 7.17773 8.58579 7.17773 9V16C7.17773 16.4142 6.84195 16.75 6.42773 16.75C6.01352 16.75 5.67773 16.4142 5.67773 16L5.67773 9C5.67773 8.58579 6.01352 8.25 6.42773 8.25ZM10.4277 8.25C10.8419 8.25 11.1777 8.58579 11.1777 9V16C11.1777 16.4142 10.8419 16.75 10.4277 16.75C10.0135 16.75 9.67774 16.4142 9.67773 16V9C9.67773 8.58579 10.0135 8.25 10.4277 8.25Z" fill="white"></path>
												</svg>
											</span>
										</a>
									</div>
								</td>
							</tr>
						
						</tbody>
					</table>

					<div class="wraps_cart_location">
					 <div class="location_cart-wrps">
					   <div class="wraps_taxt_wraps">
							<h3>Pickup</h3>
							<div class="wraps_delivery-item">
								<p><a href="#" class="active" data-value="1"><i class="fa-solid fa-truck"></i> <span>Pickup</span></a></p>
								<p><a href="#" data-value="2"><i class="fa-solid fa-location-dot"></i> <span>Delivery</span></a></p>
								<p><a href="#" data-value="3"><i class="fa-solid fa-hotel"></i> <span>In Dine</span></a></p>
							</div>

							<input type="hidden" id="selected-delivery-option" name="delivery_option" value="1">

							<div class="wraps_instructions">
								<label class="form-label wraps_instructions">Instructions/ Allergic</label>
								<textarea class="form-control" id="instructions" name="instructions" rows="3"></textarea>
							</div>
					   </div>
				     </div>
				    </div>
				</div>


			<div class="wrapper_field_wrpds">
				<div class="wraps_coupon">
					<h2>Bill Details</h2>
					<h3>Apply Coupon</h3>
					<div class="wrap_coupnform">
						<form class="wraps_coupnforms">
							<div class="wrap_coupn-input">
								<input type="text" class="form-control" name="coupon" id="couponInput" placeholder="Coupon">
								<div class="coupon-popup" id="couponPopup">
									<ul>
										<li onclick="selectCoupon('DISCOUNT10')">DISCOUNT10</li>
										<li onclick="selectCoupon('SAVE20')">SAVE20</li>
										<li onclick="selectCoupon('WELCOME15')">WELCOME15</li>
										<li onclick="selectCoupon('FREESHIP')">FREESHIP</li>
										<li onclick="selectCoupon('SAVE30')">SAVE30</li>
									</ul>
								</div>
							</div>
							<div class="wrap_coupn-submit">
								<input type="submit" name="coupon_apply" id="coupon_apply" value="Apply">
							</div>
							
						</form>

						<div class="wraps_prics_totals">
							<h5>Subtotal</h5>
							<h6 id="subtotal"></h6>
						</div>

						<div class="wraps_prics_totals">
							<h5>Delivery Charges</h5>
							<h6 id="deliveryCharges"></h6>
						</div>
						<div class="wraps_prics_totals">
							<h5>Discount</h5>
							<h6 id="discount"></h6>
						</div>

						<div class="wraps_prics_totals">
							<h5>Service Charges</h5>
							<h6 id="serviceCharges"></h6>
						</div>

						<div class="wraps_prics_totals">
							<h5>Small order charges</h5>
							<h6 id="smallOrderCharges"></h6>
						</div>

						<div class="wraps_prics_totals">
							<h5>VAT</h5>
							<h6 id="vat"></h6>
						</div>

						<div class="wraps_prics_totals">
							<div class="wrap_checkox">
							<input class="form-check-input custom-checkbox" type="checkbox" value="" id="xeatPennyCheckbox">
							<label class="form-check-label" for="xeatPennyCheckbox">
							     Xeat Penny (<span id="xeatPennyValue">0</span> penny)
							</label>
							</div>
							<h6 class="colorwraps"  id="xeatPenny" ></h6>
						</div>

						<div class="wraps_totals-amount">
							<h5>Total Payable Bill</h5>
							<div class="wraps_prices-etctols">
								<h6 id="totalPayable"></h6>
								<p id="total_price_currency"></p>
							</div>
							
						</div>

						<div class="wraps_payment-wraps">
							<div class="form-check">
							<input class="form-check-input custom-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								Credit card/Dabit card
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input custom-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								Pay cash
							</label>
							</div>
						</div>

						<div class="order_place">
								<button type="button" class="wraps_orderplace btn btn-primary" data-bs-toggle="modal" data-bs-target="#order_placed">Place Order</button>

							<div class="wrap_flex-loginsignupbtn">
								<div class="wraps_btns_link-ls wraps_loginsbtns">
									<a href="{{ route('login') }}"><button type="button" class="wraps_orderplace btn btn-primary">Login</button></a>
								</div>
								<div class="wraps_btns_link-ls">
									<a href="{{ route('signup') }}"><button type="button" class="wraps_orderplace btn btn-primary">Signup</button></a>
								</div>
							</div>
							
						</div>

					</div>
				</div>
			</div>
				
			</div>
			</div>
		</div>

		<div class="container">
		</div>
	</section>
	<!--------------------------------------------- Restaurant Food Experience --------------------------------------------->
	<section class="wrap-restaurant-food-experience">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="wrap-restaurant-food_heading">
						<h2>Find out Better Restaurant Food Experience</h2>
					</div>

					<div class="wrap-restaurant-food_description">
						<p>We've done it carefully and simply. Combined with the ingredients makes for beautiful landings.</p>
					</div>

					<div class="wrap-restaurant-food-buttons">
						<a href="https://play.google.com/store/apps/details?id=com.food.xeat" target="blank" class="restaurant-google-pay"> <span>
								<img src="public/images/google-pay.png" alt="Google play icon">
							</span> Google Play</a>
						<a href="https://apps.apple.com/in/app/xeat/id1610674856" target="blank" class="restaurant-apple-pay"> <span>
								<img src="public/images/appleplay.png" alt="Apple Play">
							</span> Apple Play</a>
					</div>
				</div>

				<div class="col-md-6 col-lg-6">
					<div class="wrap_image-restaurant">
						<img src="public/images/bottoming.png" alt="restaurant-food-img">
					</div>
				</div>
			</div>
		</div>
		
	</section>

	<!--------------------------------------------- account  login popup ------------------------------------------------>

	<div class="modal fade wraps_logincart-modal" id="logincartModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="wraps_order-cart-login">
					<h4>To place your order now, log in to your existing account or sign up.</h4>
					<div class="wrap_buttons">
						<a href="{{ route('login') }}" class="btn_link-modal">Login</a>
						<a href="{{ route('signup') }}" class="btn_link-modal wraps_yes" id="user_logout">Signup</a>
					</div>
				</div>
			</div>
			
			</div>
		</div>
	</div>

</main>

@endsection


@push('scripts')

<script>
    document.addEventListener("DOMContentLoaded", function() {

		let lastRestaurantId = null; // Global variable to store last restaurant id
		let globalCartData = {}; // Define a global variable to store cart data
		const userId = "{{ $userId ?? 'guest' }}"; // Using Blade to pass user ID
		// Show modal if user is not logged in
		if (userId === 'guest' || !userId) {
			// Show the login modal
			const logincartModal = new bootstrap.Modal(document.getElementById('logincartModal'));
			logincartModal.show();
        }

        fetchCartDetails();
    });

	const accessToken  = "{{ $accessToken }}";

	const API_BASE_URL = "{{ asset('/backend') }}";

	// const API_BASE_URL = "{{ $apiBaseUrl }}";
	//let userId         = "{{ $userId ?? 'guest' }}"; // Get user_id from Blade, default to "guest"
	let userId         = @json(isset($userId) && $userId ? $userId : 'guest');

	console.log(userId);

	function clearGuestCart() {
		localStorage.removeItem("guest_cart");
		localStorage.removeItem("guest_cart_meta");
		updateCartUI({ data: [] }); // Clear UI
    }


	function fetchCartDetails() {
		// clearGuestCart();

	if (userId === "guest") 
	{
		let guestCart = JSON.parse(localStorage.getItem("guest_cart")) || [];
		let cartMeta  = JSON.parse(localStorage.getItem("guest_cart_meta")) || {};

		console.log(cartMeta);

		if (!guestCart.length) {
			document.getElementById("cart-container").innerHTML = "<p>Your cart is empty.</p>";
			return;
		}

		let totalAmount = guestCart.reduce((sum, item) => sum + item.price * item.count, 0);

		let guestCartData = {
			data: guestCart.map((item, index) => ({
				id: `guest-${index}`,
				item_name: item.item_name || "Item",
				menu_item_size: item.size || "R",
				add_on_items: JSON.stringify(item.add_on_items || []),
				count: item.count,
				total_price: (item.price * item.count).toFixed(2),
			})),
			restaurant_detail: {
				rest_name: cartMeta.rest_name || "Unknown Restaurant",
				image: cartMeta.image || "default.jpg",
				location: cartMeta.location
			},
			currency: "₹",
			total_Item_amount: totalAmount,
			delivery_charges: 0,
			coupon_discount: 0,
			service_charges: 0,
			small_charges: 0,
			vat: 0,
			applied_penny: 0,
			user_penny: 0,
			total_amount: totalAmount,
			total_price_currency: 0,
			payment_option: "COD"
		};

		updateCartUI(guestCartData);
		checkCartStatus(guestCartData);
		return;
    }





        let apiUrl = `${API_BASE_URL}/api/manage_cart_detail_new`;
        let requestData = {
            accesstoken:accessToken,
            user_id:userId,
            type: 0
        };

        fetch(apiUrl, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(requestData),
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "200") {
				globalCartData = data; // Store the cart data globally
				lastRestaurantId = data.restaurant_detail?.id || null;

                updateCartUI(globalCartData);
            } else {
                console.error("Failed to fetch cart details:", data.message);
            }

			checkCartStatus(data);
        })
        .catch(error => {
            console.error("Error fetching cart details:", error);
        });
    }

    function updateCartUI(cartData) {
        // Update Restaurant Details
        document.getElementById("restaurant-image").src = cartData.restaurant_detail.image;
        document.getElementById("restaurant-name").innerText = cartData.restaurant_detail.rest_name;
        document.getElementById("restaurant-location").innerText = cartData.restaurant_detail.location;


		 // Update Cart Items Table
		let cartContainer_view = document.querySelector(".wrapcart-table tbody");
        cartContainer_view.innerHTML = ""; // Clear previous items

        // Update Cart Items
        let cartContainer = document.getElementById("cart-container");
        if (!cartData.data || cartData.data.length === 0) {
            cartContainer.innerHTML = "<p>Your cart is empty.</p>";
            return;
        }

		cartData.data.forEach((item) => {
			let addOns = JSON.parse(item.add_on_items || "[]"); // Parse the add-on items array
            let addOnsHTML = addOns.map(addon => `Addon: ${addon.name} (+${cartData.currency} ${addon.price})`).join('<br>'); // Generate HTML for each addon

			let row = document.createElement("tr");
			row.innerHTML = `
				<td>
					<div class="tabel-text">
						<h5>${item.item_name}</h5>
						<p class="wraps_addons">Size: ${item.menu_item_size || 'R'}</p>
                        <p class="wraps_addons">${addOnsHTML}</p> <!-- Addons displayed dynamically -->
						<p>${cartData.currency} ${parseFloat(item.total_price).toFixed(2)}</p>
					</div>
				</td>
				<td>
					<div class="wraps_quantity-text">
						<div class="number">
							<span class="minus" onclick="updateQuantity('${item.id}', -1)"><i class="fa-solid fa-minus"></i></span>
							<input type="text" value="${item.count}"/>
							<span class="plus" onclick="updateQuantity('${item.id}', 1)"><i class="fa-solid fa-plus"></i></span>
						</div>
					</div>
				</td>
				<td>
					<div class="tabel-modal-btn">
						<a href="#" onclick="removeCartItem('${item.id}')">
							<span>
								<svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M5.834 0.890599C6.20493 0.334202 6.8294 0 7.4981 0H9.35737C10.0261 0 10.6505 0.334202 11.0215 0.8906L11.9277 2.25H15.6777C16.0919 2.25 16.4277 2.58579 16.4277 3C16.4277 3.41421 16.0919 3.75 15.6777 3.75H1.17773C0.763521 3.75 0.427734 3.41421 0.427734 3C0.427734 2.58579 0.763521 2.25 1.17773 2.25H4.92773L5.834 0.890599ZM11.4277 20H5.42773C3.2186 20 1.42773 18.2091 1.42773 16V5H15.4277V16C15.4277 18.2091 13.6369 20 11.4277 20ZM6.42773 8.25C6.84195 8.25 7.17773 8.58579 7.17773 9V16C7.17773 16.4142 6.84195 16.75 6.42773 16.75C6.01352 16.75 5.67773 16.4142 5.67773 16L5.67773 9C5.67773 8.58579 6.01352 8.25 6.42773 8.25ZM10.4277 8.25C10.8419 8.25 11.1777 8.58579 11.1777 9V16C11.1777 16.4142 10.8419 16.75 10.4277 16.75C10.0135 16.75 9.67774 16.4142 9.67773 16V9C9.67773 8.58579 10.0135 8.25 10.4277 8.25Z" fill="white"></path>
								</svg>
							</span>
						</a>
					</div>
				</td>
			`;
			cartContainer_view.appendChild(row);
		});


		const selectedOption      = cartData.payment_option;
		const selectedOptionInput = document.getElementById("selected-delivery-option");
		const deliveryOptions     = document.querySelectorAll(".wraps_delivery-item a");
		deliveryOptions.forEach(option => {
			option.addEventListener("click", function (event) {
				event.preventDefault();

				// Remove "active" class from all options
				deliveryOptions.forEach(opt => opt.classList.remove("active"));

				// Add "active" class to the clicked option
				this.classList.add("active");

				 // Get the selected option's text
				 const selectedOptionValue = this.getAttribute("data-value");

				// Update the hidden input value with the selected option text
				selectedOptionInput.value = selectedOptionValue;

				console.log("Selected Delivery Option:", selectedOptionInput);
			});
        });


		updateBillDetails(cartData);

    }

	function updateBillDetails(data) {
		function formatAmount(amount) {
			return `${data.currency} ${(Number(amount) || 0).toFixed(2)}`;
		}

		document.getElementById("subtotal").innerText = formatAmount(data.total_Item_amount);
		document.getElementById("deliveryCharges").innerText = formatAmount(data.delivery_charges);
		document.getElementById("discount").innerText = formatAmount(data.coupon_discount);
		document.getElementById("serviceCharges").innerText = formatAmount(data.service_charges);
		document.getElementById("smallOrderCharges").innerText = formatAmount(data.small_charges);
		document.getElementById("vat").innerText = formatAmount(data.vat || 0); // Added fallback for vat
		document.getElementById("xeatPenny").innerText = formatAmount(data.applied_penny);
		document.getElementById("xeatPennyValue").innerText = Number(data.user_penny) || 0;
		document.getElementById("totalPayable").innerText = formatAmount(data.total_amount);
		document.getElementById("total_price_currency").innerText = `International Transaction Fee ${formatAmount(data.total_price_currency)}`;
    }


	// 💡 Force update UI when entire cart is deleted
	function checkCartStatus(cartData) {
		if (!cartData.data || cartData.data.length === 0) {
			globalCartData = {}; // Reset global cart data
			document.getElementById("cart-container").innerHTML = "<p>Your cart is empty.</p>";
		}
	}


	//remove cart items code here

	function removeCartItem(cartItemId) {

		let remove_cart_apiUrl = `${API_BASE_URL}/api/manage_update_add_to_cart_new`;

		 // Ensure cart data is available
		 if (!globalCartData || !globalCartData.data) {
			toastr.error("Cart data not loaded yet.");
			return;
		}

		console.log("cartItemId:", cartItemId);
		console.log("Cart Data:", globalCartData.data);

		  // Find the cart item from the fetched cart data
		  let cartItem = globalCartData.data.find(item => item.id === Number(cartItemId));



		  if (!cartItem) {
				toastr.error("Item not found in cart.");
				return;
			}

		  console.log(cartItem);

		if (!cartItem) {
			toastr.error("Item not found in cart.");
			return;
		}

		 // Ensure price values exist
		 let price = cartItem.total_price || "0";
         let actual_price = cartItem.total_price_without_commsion || "0";

		let requestData = {
			accesstoken: accessToken,
			user_id: userId,
			cart_item_id: cartItemId,
			count: "0", // Set count to 0 to remove item
			price: price,  // Use total price from cart data
			actual_price: actual_price, // Use actual price from cart data
			type: "0"
       };

	   fetch(remove_cart_apiUrl, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(requestData),
		})
		.then(response => response.json())
		.then(data => {
		
			if (data.status === "200") {
				toastr.success("Item removed from cart.");
				fetchCartDetails();

				 // Refresh cart after removal
			}else if (data.status === "201") {

				toastr.success("Cart is now empty. Redirecting to restaurant menu...");

				let restId = data.restaurant_detail?.id ||  lastRestaurantId; // Use 1 as fallback

				setTimeout(() => {
					window.location.href = `/food_items/${restId}`;
				}, 1000); // wait for 1s before redirect
	        } else {
				toastr.error("Failed to remove item: " + data.message);
				console.log("Failed to remove item removecart: " + data.message);
			}

		})
		.catch(error => {

			console.error("Error removing cart item:", error);
			toastr.error("Something went wrong!");
			// fetchCartDetails();

		});



	}



</script>


@endpush
