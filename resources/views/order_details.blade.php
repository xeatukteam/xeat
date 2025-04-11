@extends('layouts.app')

@section('title', 'Order Details')

@section('content')
<main>

<section class="wraps_order-placed">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6">

            <div class="wrap_order-placed">
              <div class="icon">
                <img src="public/images/Foodwaiting.gif" alt="image-food" class="food_wraps_img">
              </div>
              <div class="order-text">
                <h3 class="wraps_red-color-heading">Your delicious food is a few steps away from you </h3>
                <div class="wraps_wating-confirm">
                  <h4>Waiting for confirmmation</h4>
                  <h5>Please wait, Your order will be accepted in a moment</h5>
                </div>
              </div>
            </div>

            <div class="wrap_order-placed">
              <div class="icon">
                <img src="public/images/foodprepared1.gif" alt="image-food" class="food_wraps_img">
              </div>
              <div class="order-text">
                <h4>Order id: 47048</h4>
                <h5>Your Order will be ready in just few minutes</h5>
              </div>
              <div class="flex-wraps-buttons">
                <a href="#" class="wraps_btn_track-link">Way to restaurant</a>
              </div>
            </div>


            <div class="wrap_order-placed wrap_order_collects">
              <div class="icon">
                <img src="public/images/foodprepared1.gif" alt="image-food" class="food_wraps_img">
              </div>
              <div class="order-text">
                <h4>Your Order is ready to collect</h4>
              </div>
              <div class="flex-wraps-buttons">
                <div class="wraps_order-restaurants"><a href="#" class="wraps_btn_track-link">Way to restaurant</a></div>
                <div class="wraps_order-restaurants"><a href="#" class="wraps_btn_confirm_pickup">Confirm Pickup</a></div>
              </div>
            </div>

            <div class="wrap_order-placed">
              <div class="icon">
                <img src="public/images/driverdoorstep.gif" alt="image-food" class="food_wraps_img">
              </div>
              <div class="order-text">
                <h3 class="wraps_red-color-heading">The Driver has arrived at your doorstep </h3>
              </div>
              <div class="wraps_driver_arrived">
                <div class="row">
                  <div class="wrap_ariveimg">
                    <img src="public/images/driver.jpg" alt="image-driver" class="image-driver">
                  </div>
                  <div class="wraps_arrive_texts">
                    <h5>The driver has arrived at your doorstep</h5>
                    <h6>Xeat Test</h6>
                    <p>Vechile: <span>bike</span></p>
                    <div class="flex_wrppers">
                      <div class="text_vehicle_number">
                        <p>Vechicle number: <span>4576</span></p>
                      </div>
                      <div class="call_toaction-btns">
                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                        <a href="tel:7656789878"><i class="fa-solid fa-phone"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6">
            <div class="wraps_order_details order_details_itms">
          <div class="flex-heading-order-details">
            <h3>Order id #46873 </h3>
          </div>
          

          <div class="wrap_flex-orderdtls">
            <div class="wrap_order-details-img">
              <p><i class="fa-solid fa-location-crosshairs"></i></p>
            </div>

            <div class="wrap_order-details-namerestrurent">
              <h4 class="name_detail_restrurent">Taste Of Mohali</h4>
              <p class="restrurent_location">Mohali Tower</p>
              <p class="order_detail_type">Delivery</p>
            </div>
          </div>

          <div class="wrap_flex-orderdtls">
            <div class="wrap_order-details-img">
              <p><i class="fa-solid fa-location-dot"></i></p>
            </div>

            <div class="wrap_order-details-namerestrurent">
              <p class="restrurent_location">278, Sahibzada Ajit Singh Nagar, Punjab 140308, India</p>
            </div>
          </div>

          <div class="order_delivered">
            <p>Order Placed on : 2025-02-21 13:00:14</p>
          </div>

          <div class="wrap_flex-order">
            <div class="order_item-detail">
              <p>1 ITEM</p>
              <h4>Tandoori Chicken Tikka Roll * 1</h4>
              <p>Tandori Chicken Tikka Roll, Maida Base</p>
            </div>
            <div class="order_item_prics">
              <p>LKR 200.00</p>
            </div>
          </div>
          <div class="wraps_details_orders">

            <h3>Bill Details</h3>
            <div class="wrapper_field_wrpds">
              <div class="wraps_coupon">
                <div class="wrap_coupnform">

                  <div class="wraps_prics_totals">
                    <h5>Subtotal</h5>
                    <h6>LKR 363.00</h6>
                  </div>

                  <div class="wraps_prics_totals">
                    <h5>Delivery Charges</h5>
                    <h6>LKR 0.00</h6>
                  </div>
                  <div class="wraps_prics_totals">
                    <h5>Discount</h5>
                    <h6>LKR 0.00</h6>
                  </div>

                  <div class="wraps_prics_totals">
                    <h5>Service Charges</h5>
                    <h6>LKR 90.00</h6>
                  </div>

                  <div class="wraps_prics_totals">
                    <h5>Other Platform charges</h5>
                    <h6>LKR 0.00</h6>
                  </div>

                  <div class="wraps_prics_totals">
                    <h5>Small order charges</h5>
                    <h6>LKR 0.00</h6>
                  </div>

                  <div class="wraps_prics_totals">
                    <h5>VAT</h5>
                    <h6>LKR 0.00</h6>
                  </div>

                  

                  <div class="wraps_totals-amount">
                    <h5>Total Payable Bill</h5>
                    <div class="wraps_prices-etctols">
                      <h6>LKR 200.00 </h6>
                      <p>(Paid By Cash)</p>
                    </div>
                    
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>

<!----------------------------------------------- after order deliver or pickup -------------------------------------->
<div class="wraps_order_details wrapper_order-deliver_or_pickup">
          <div class="flex-heading-order-details">
            <h3>Order id #46873 </h3> <span class="wrap_orderhelp" data-bs-toggle="modal" data-bs-target="#orderhelpModal">Help</span>
          </div>
          

          <div class="wrap_flex-orderdtls">
            <div class="wrap_order-details-img">
              <p><i class="fa-solid fa-location-crosshairs"></i></p>
            </div>

            <div class="wrap_order-details-namerestrurent">
              <h4 class="name_detail_restrurent">Taste Of Mohali</h4>
              <p class="restrurent_location">Mohali Tower</p>
              <p class="order_detail_type">Delivery</p>
            </div>
          </div>

          <div class="wrap_flex-orderdtls">
            <div class="wrap_order-details-img">
              <p><i class="fa-solid fa-location-dot"></i></p>
            </div>

            <div class="wrap_order-details-namerestrurent">
              <p class="restrurent_location">278, Sahibzada Ajit Singh Nagar, Punjab 140308, India</p>
            </div>
          </div>

          <div class="order_delivered">
            <p>Order Delivered on : 2025-02-21 13:00:14</p>
          </div>

          <div class="wrap_order-rate_driver">
            <h4>How was your driver?</h4>
            <p>Rate driver: Xeat Test</p>
            <div class="star_wraps">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>

          <div class="wrap_order-rate_food">
            <h4>How was your Food?</h4>
            <p>Rate restaurant: Taste of Mohali</p>
            <div class="star_wraps">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>

          <div class="wrap_flex-order">
            <div class="order_item-detail">
              <p>1 ITEM</p>
              <h4>Tandoori Chicken Tikka Roll * 1</h4>
              <p>Tandori Chicken Tikka Roll, Maida Base</p>
            </div>
            <div class="order_item_prics">
              <p>LKR 200.00</p>
            </div>
          </div>
          <div class="wraps_details_orders">

            <h3>Bill Details</h3>
            <div class="wrapper_field_wrpds">
    <div class="wraps_coupon">
      <div class="wrap_coupnform">

        <div class="wraps_prics_totals">
          <h5>Subtotal</h5>
          <h6>LKR 363.00</h6>
        </div>

        <div class="wraps_prics_totals">
          <h5>Delivery Charges</h5>
          <h6>LKR 0.00</h6>
        </div>
        <div class="wraps_prics_totals">
          <h5>Discount</h5>
          <h6>LKR 0.00</h6>
        </div>

        <div class="wraps_prics_totals">
          <h5>Service Charges</h5>
          <h6>LKR 90.00</h6>
        </div>

        <div class="wraps_prics_totals">
          <h5>Other Platform charges</h5>
          <h6>LKR 0.00</h6>
        </div>

        <div class="wraps_prics_totals">
          <h5>Small order charges</h5>
          <h6>LKR 0.00</h6>
        </div>

        <div class="wraps_prics_totals">
          <h5>VAT</h5>
          <h6>LKR 0.00</h6>
        </div>

        

        <div class="wraps_totals-amount">
          <h5>Total Payable Bill</h5>
          <div class="wraps_prices-etctols">
            <h6>LKR 200.00 </h6>
            <p>(Paid By Cash)</p>
          </div>
          
        </div>
      </div>
      
    </div>
    </div>
    <div class="submit_rating">
        <button type="button" class="wrap_submit_rating">Submit rating</button>
      </div>
          </div>
        </div>
<!----------------------------------------- after order deliver or pickup end --------------------------------------->
          </div>
        </div>
        
      </div>
    </section>



    <!-------------------------------------------- track order ---------------------------------------------------------------->

<div class="modal fade wraps_location-modals" id="trackModal" tabindex="-1" aria-labelledby="trackModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="wraps_maps">
          <div class="wrapper_maps">
          <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.2642046397705!2d76.69077027438696!3d30.71097208668617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fefeee92efd23%3A0x35e17c0eb19c487d!2sProtolabz%20eServices!5e0!3m2!1sen!2sin!4v1740720211486!5m2!1sen!2sin" width="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="wraps_buttons_link">
            <div class="wraps_driver_arrived">
                <div class="row">
                  <div class="wrap_ariveimg">
                    <img src="public/images/driver.jpg" alt="image-driver" class="image-driver">
                  </div>
                  <div class="wraps_arrive_texts">
                    <h5>The driver has arrived at your doorstep</h5>
                    <h6>Xeat Test</h6>
                    <p>Vechile: <span>bike</span></p>
                    <div class="flex_wrppers">
                      <div class="text_vehicle_number">
                        <p>Vechicle number: <span>4576</span></p>
                      </div>
                      <div class="call_toaction-btns">
                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                        <a href="tel:7656789878"><i class="fa-solid fa-phone"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>

        
        </div>
      </div>
    </div>
  </div>
</div>
<!-------------------------------------------- track order ---------------------------------------------------------------->

<!----------------------------------------- order related help form modal ------------------------------------------------>

<div class="modal fade wrap_order_related-modal" id="orderhelpModal" tabindex="-1" aria-labelledby="orderhelpModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Help</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="wraps_related-help_modal-popup">
          <div class="wraps_help-list">
            <form>
              <div class="form-check wraps_issues">
            <input class="form-check-input wraps_radio" type="radio" name="issue_wraps" id="issue_one">
            <label class="form-check-label" for="issue_one">
             Spoilage Food
            </label>
          </div>

          <div class="form-check wraps_issues">
            <input class="form-check-input wraps_radio" type="radio" name="issue_wraps" id="issue_two">
            <label class="form-check-label" for="issue_two">
             I have not received any order
            </label>
          </div>

          <div class="form-check wraps_issues">
            <input class="form-check-input wraps_radio" type="radio" name="issue_wraps" id="issue_three">
            <label class="form-check-label" for="issue_three">
             I recieved bad quality of food
            </label>
          </div>

          <div class="form-check wraps_issues">
            <input class="form-check-input wraps_radio" type="radio" name="issue_wraps" id="issue_four">
            <label class="form-check-label" for="issue_four">
             Some items are missing from my order
            </label>
          </div>

          <button type="button" class="btn btn-primary wraps_submit_help" id="openchatModal">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!---------------------------------------------------- chat modal start --------------------------------------->
<div class="modal fade wrap_chat_modalopen" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="wrap_orderid_texts">Order #198717</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column p-0">
                <div class="chat-box" id="chatBox">
                    <div class="message incoming">Hello! How are you?</div>
                    <div class="message outgoing">I'm good, thanks! What about you?</div>
                </div>
                <div class="chat-input">
                    <input type="text" id="messageInput" class="form-control" placeholder="Type a message...">
                    <button class="btn btn-primary wraps_message-send" id="sendBtnmsg">&#10148;</button>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

@endsection

@push('scripts')

<script type="text/javascript">
  $(document).ready(function () {
    $('.wraps_radio').change(function () {
        // Remove 'active' class from all parent divs
        $('.wraps_issues').removeClass('issueactive');

        // Add 'active' class to the parent div of the selected radio
        $(this).closest('.wraps_issues').addClass('issueactive');
    });
});
</script>


<script>
    function scrollToBottom() {
        const chatBox = document.getElementById("chatBox");
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    document.getElementById("sendBtnmsg").addEventListener("click", function() {
        const input = document.getElementById("messageInput");
        const chatBox = document.getElementById("chatBox");
        if (input.value.trim() !== "") {
            const newMessage = document.createElement("div");
            newMessage.classList.add("message", "outgoing");
            newMessage.textContent = input.value;
            chatBox.prepend(newMessage); // Adds message to the bottom
            input.value = "";
        }
    });

    document.getElementById("messageInput").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            document.getElementById("sendBtnmsg").click();
        }
    });

    // Scroll to bottom when the modal is opened
    document.getElementById("chatModal").addEventListener("shown.bs.modal", scrollToBottom);
</script>


<script>
    document.getElementById("openchatModal").addEventListener("click", function () {
        var firstModal = bootstrap.Modal.getInstance(document.getElementById("orderhelpModal"));
        firstModal.hide(); // Close first modal
        var secondModal = new bootstrap.Modal(document.getElementById("chatModal"));
        secondModal.show(); // Open second modal
    });
</script>

<script type="text/javascript">
  $('.wrap_chats-open').click(function(){
    $('#chatModal').modal('show');
});
</script>



@endpush
