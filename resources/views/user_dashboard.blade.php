@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<style>
    .wrap_order-details {
    margin-bottom: 20px; /* Adds space between orders */
    padding: 15px;
    border-bottom: 1px solid #ddd; /* Optional: Adds a subtle divider */
}


#edit_map {
    width: 100%;
    height: 250px; /* or whatever height is visible */
}

/* Add this style to your CSS */
.pac-edit-container {
    z-index: 9999 !important;
    position: absolute !important;
    top: 100% !important;
    left: 0 !important;
    width: 100% !important;
}

.pac-add-container {
    z-index: 9999 !important;
    position: absolute !important;
    top: 100% !important;
    left: 0 !important;
    width: 100% !important;
}




</style>
<main>

    <!-------------------------------------- section userdashboard -------------------------------->
    <section class="wrap_dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                <div class="wrap_user-sidebar">
                <div class="wrap_profile-img">
                    <img src="{{ $user->image ?  $user->image  : asset('public/images/profile-img.png')  }}" id="previewImage" alt="user-image">
                    <h1>{{ $user->name ?? 'Guest' }}</h1>
                    <h5>User ID #{{ $user->id ?? '' }}</h5>
                    </div>	
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="user_profile-tabs">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true"><i class="fa-solid fa-user"></i> Profile</button>
                    </div>

                    <div class="user_profile-tabs">
                        <button class="nav-link" id="address-tab" data-bs-toggle="pill" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false"><i class="fa-solid fa-address-card"></i> Address </button>
                    </div>

                    <div class="user_profile-tabs">
                        <button class="nav-link" id="password-tab" data-bs-toggle="pill" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false"><i class="fa-solid fa-unlock"></i> Change password</button>
                    </div>

                    <div class="user_profile-tabs">
                        <button class="nav-link" id="orders-tab" data-bs-toggle="pill" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false"><i class="fa-brands fa-first-order-alt"></i> Your orders</button>
                    </div>

                    <!-- <div class="user_profile-tabs">
                        <button class="nav-link" id="promotions-tab" data-bs-toggle="pill" data-bs-target="#promotions" type="button" role="tab" aria-controls="promotions" aria-selected="false"><i class="fa-solid fa-rectangle-ad"></i> Promotions</button>
                    </div> -->

                    <div class="user_profile-tabs">
                        <button class="nav-link" id="wallet-tab" data-bs-toggle="pill" data-bs-target="#wallet" type="button" role="tab" aria-controls="wallet" aria-selected="false"><i class="fa-solid fa-wallet"></i> Wallet</button>
                    </div>

                    <div class="user_profile-tabs">
                        <button class="nav-link" id="support-tab" data-bs-toggle="pill" data-bs-target="#support" type="button" role="tab" aria-controls="support" aria-selected="false"><i class="fa-solid fa-headset"></i> Support</button>
                    </div>

                    <div class="user_profile-tabs">
                        <button class="nav-link" id="delete-tab" data-bs-toggle="modal" data-bs-target="#delete"><i class="fa-solid fa-trash"></i> Delete</button>
                    </div>

                    <div class="user_profile-tabs">
                        <button class="nav-link" id="logout-tab" data-bs-toggle="modal" data-bs-target="#logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                    </div>

                </div>
                </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="wraps_profile-etc">
                                <h2>Update Profile</h2>
                                <form class="update_profile" id="updateProfileForm" enctype="multipart/form-data">
                                    <div class="mb-4">
                                        <label for="image" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="image" name="image">
                                        
                                    </div>
                                    <div class="mb-4">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" value="{{ $user->name }}">
                                    </div>

                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" value="{{ $user->email }}">
                                    </div>

                                    <div class="mb-4">
                                        <label for="phone" class="form-label">Phone number</label>
                                        <input type="text" class="form-control" id="phone" value="{{ $user->contact }}" readonly disabled>
                                    </div>

                                    <button type="submit" class="btn btn-primary wrap_submit">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                            <div class="wraps_address">
                                <div class="heading_wraps-addressmain">
                                    <div class="row wrapper_address_itms">
                                        <div class="col">
                                            <div class="d-flex justify-content-start">
                                            <h2 class="text-start wraps_headingaddress">
                                                Address
                                            </h2>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-end">
                                                <p class="text-end add_wrapaddress">
                                                <a href="javascript: void(0)" data-bs-toggle="modal" data-bs-target="#locationModal">Add Address</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- get address list using api to show here -->
                                <div class="row address-list">

                                </div>
                                <!-- end get address list using api to show here -->

                            </div>
                        </div>

                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                            <div class="wraps_profile-etc">
                                <h2>Change Password</h2>
                                <form class="changePasswordForm" id="changePasswordForm">
                                    <div class="mb-4">
                                        <label for="current_password" class="form-label">Current Password</label>
                                        <input type="text" class="form-control" id="current_password" placeholder="Current password">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="mb-4">
                                                <label for="new_password" class="form-label">New password</label>
                                                <input type="text" class="form-control" id="new_password" placeholder="New password">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6">
                                            <div class="mb-4">
                                                <label for="confirm_password" class="form-label">Confirm password</label>
                                                <input type="text" class="form-control" id="confirm_password" placeholder="Confirm password">
                                            </div>
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary password_wrap_submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                        <div class="wrap_all-orders">
                            <div class="wrap_prder_heading">
                                <h2>Past Orders</h2>
                            </div>
                            <div class="wrapper_orders"></div>
                        </div>

                    <!------------------------------------------------- order modals --------------------------------------------------->
                    <div class="modal fade wrap_orderdetail-modal" id="viewdetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="wraps_order_details">
                                    <div class="flex-heading-order-details">
                                        <h3></h3>
                                    </div>
                                    

                                    <div class="wrap_flex-orderdtls">
                                        <div class="wrap_order-details-img">
                                            <p><i class="fa-solid fa-location-crosshairs"></i></p>
                                        </div>

                                        <div class="wrap_order-details-namerestrurent">
                                            <h4 class="name_detail_restrurent"></h4>
                                            <p class="restrurent_location"></p>
                                            <p class="order_detail_type"></p>
                                        </div>
                                    </div>

                                    <div class="wrap_flex-orderdtls">
                                        <div class="wrap_order-details-img">
                                            <p><i class="fa-solid fa-location-dot"></i></p>
                                        </div>

                                        <div class="wrap_order-details-namerestrurent">
                                            <p class="restrurent_location"></p>
                                        </div>
                                    </div>

                                    <div class="order_delivered">
                                        <p></p>
                                    </div>

                                    <div class="wrap_order-rate_driver">
                                        <h4>How was your driver?</h4>
                                        <p>Rate driver: Xeat Test</p>
                                        <div class="star_wraps">
                                            <i class="fa-solid fa-star active"></i>
                                            <i class="fa-solid fa-star active"></i>
                                            <i class="fa-solid fa-star active"></i>
                                            <i class="fa-solid fa-star active"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="wrap_order-rate_food">
                                        <h4>How was your Food?</h4>
                                        <p>Rate restaurant: Taste of Mohali</p>
                                        <div class="star_wraps">
                                            <i class="fa-solid fa-star active"></i>
                                            <i class="fa-solid fa-star active"></i>
                                            <i class="fa-solid fa-star active"></i>
                                            <i class="fa-solid fa-star active"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>

                                    <!-- <div class="wrap_flex-order">
                                       
                                    </div> -->

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
                            </div>
                            </div>
                        </div>
                    </div>

                    <!------------------------------------------------- order modals end---------------------------------------------->
                    </div>

                  
                        <!-- start wallet transactions -->

                        <div class="tab-pane fade" id="wallet" role="tabpanel" aria-labelledby="wallet-tab">
                            <div class="wrap_wallet">
                                <h2>Balance</h2>
                                <p></p>
                            </div>

                            <div class="wrap_wallet_items">
                                <h3>Transactions</h3>
                            </div>
                        </div>

                        <!-- end wallet transactions -->

                        <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
                            <div class="wraps_supports">
                                <div class="row wrapper_support_itms">
                                        <div class="col">
                                            <div class="d-flex justify-content-start">
                                            <h2 class="text-start wraps_headingsupport">
                                                Support
                                            </h2>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-end">
                                                <p class="text-end add_help" id="addHelpIcon">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#helpModal"><i class="fa-solid fa-plus"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                </div>

                                <div class="wraps_support-tabs">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="help-tab" data-bs-toggle="pill" data-bs-target="#help" type="button" role="tab" aria-controls="help" aria-selected="true"><span class="icon_helps"><i class="fa-solid fa-question"></i></span> Help</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="order-help-tab" data-bs-toggle="pill" data-bs-target="#order-help" type="button" role="tab" aria-controls="order-help" aria-selected="false"><span class="icon_helps"><i class="fa-solid fa-question"></i></span> Order related help</button>
                                    </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        
                                     <div class="tab-pane fade show active" id="help" role="tabpanel" aria-labelledby="help-tab">
                                        <div class="wraps_helps">
                                            <div class="help_wrapper">
                                                <div class="wraps_flex-help">
                                                    <h4></h4>
                                                    <p></p>
                                                </div>
                                                <p class="wrap_help-status wraps_statuscolor"></p>
                                                <p class="wraps_description"></p>
                                            </div>

                                            
                                        </div>
                                     </div>


                                     <!-- order related help section -->
                                     <div class="tab-pane fade" id="order-help" role="tabpanel" aria-labelledby="order-help-tab">
                                        <div class="wraps_helps">
                                            <div class="help_wrapper wrap_chats-open">
                                                <div class="wraps_flex-help">
                                                    <h4></h4>
                                                    <p></p>
                                                </div>
                                                <p class="wrap_help-status wrap_pendingstatus"></p>
                                                <p class="wraps_description"></p>
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
    </section>

   <!-------------------------------------- section userdashboard end-------------------------------->


    <!---------------------------------------------- help form modal --------------------------------------------------->

    <div class="modal fade wrap_helpform_modal" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="wraps_help_modal-popup">
                    <form>
                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary wraps_form-save">Save</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!---------------------------------------------- help form modal end--------------------------------------------------->

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
                        <input class="form-check-input wraps_radio" type="radio" name="comment" value="Spoilage Food" id="issue_one">
                        <label class="form-check-label" for="issue_one">
                        Spoilage Food
                        </label>
                        </div>

                        <input type="hidden" id="helpOrderId">

                        <div class="form-check wraps_issues">
                        <input class="form-check-input wraps_radio" type="radio" name="comment"  value="I have not received any order" id="issue_two">
                        <label class="form-check-label" for="issue_two">
                        I have not received any order
                        </label>
                        </div>

                        <div class="form-check wraps_issues">
                        <input class="form-check-input wraps_radio" type="radio"  value="I recieved bad quality of food" name="comment" id="issue_three">
                        <label class="form-check-label" for="issue_three">
                        I recieved bad quality of food
                        </label>
                        </div>

                        <div class="form-check wraps_issues">
                        <input class="form-check-input wraps_radio" type="radio"   value="Some items are missing from my order" name="comment" id="issue_four">
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

     <!------------------------------------ order related help form modal end -------------------------------------------->

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
                        {{-- <div class="message incoming"></div>
                        <div class="message outgoing"></div> --}}
                    </div>
                    <div class="chat-input">
                        <input type="text" id="messageInput" class="form-control" placeholder="Type a message...">
                        <button class="btn btn-primary wraps_message-send" id="sendBtnmsg">&#10148;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-------------------------------------------- Delete modal -------------------------------------------------------------->


    <!-- Modal -->
    <div class="modal fade wrap_logout-modals" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="wraps_logout">
            <div class="wrap_image_logout">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="80" height="80">
                    <path d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z"/>
                </svg>
            </div>

            <div class="logout_texts">
                <h2>Are you sure want to delete</h2>
            </div>
            <div class="wrap_buttons">
                <a href="javascript:void(0)" class="btn_link-modal" data-bs-dismiss="modal" aria-label="Close">NO!</a>
                <a href="javascript:void(0)" class="btn_link-modal wraps_yes" id="user_delete">Yes!</a>
                
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>

    <!-------------------------------------------- Delete modal end ---------------------------------------------------------->    



    <!-------------------------------------------- logout modal -------------------------------------------------------------->


    <!-- Modal -->
    <div class="modal fade wrap_logout-modals" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="wraps_logout">
            <div class="wrap_image_logout">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_312_69316)">
                        <path d="M77.4976 37.4998H45.8317C44.4517 37.4998 43.3318 36.3799 43.3318 34.9999C43.3318 33.62 44.4517 32.5 45.8317 32.5H77.4976C78.8776 32.5 79.9975 33.62 79.9975 34.9999C79.9975 36.3799 78.8776 37.4998 77.4976 37.4998Z" fill="#F01543"></path>
                        <path d="M64.9978 50.0011C64.3576 50.0011 63.718 49.7576 63.2309 49.2681C62.2544 48.291 62.2544 46.7078 63.2309 45.7312L73.9642 34.9985L63.2309 24.2652C62.2544 23.2887 62.2544 21.7055 63.2309 20.729C64.2081 19.7518 65.7913 19.7518 66.7678 20.729L79.2674 33.2286C80.2439 34.2051 80.2439 35.7883 79.2674 36.7648L66.7678 49.2644C66.2777 49.7576 65.6381 50.0011 64.9978 50.0011Z" fill="#F01543"></path>
                        <path d="M26.666 80.0014C25.9526 80.0014 25.2757 79.9013 24.5995 79.6914L4.53965 73.0082C1.81025 72.0549 0 69.5116 0 66.6687V6.67057C0 2.99393 2.99002 0.00390625 6.66666 0.00390625C7.37953 0.00390625 8.05639 0.104001 8.73325 0.313955L28.7924 6.9971C31.5225 7.95044 33.3321 10.4937 33.3321 13.3366V73.3347C33.3321 77.0114 30.3427 80.0014 26.666 80.0014ZM6.66666 5.00375C5.74994 5.00375 4.99984 5.75385 4.99984 6.67057V66.6687C4.99984 67.3785 5.47651 68.0383 6.15642 68.2751L26.1222 74.9283C26.2657 74.9747 26.4524 75.0016 26.666 75.0016C27.5828 75.0016 28.3322 74.2515 28.3322 73.3347V13.3366C28.3322 12.6268 27.8556 11.967 27.1757 11.7302L7.20986 5.07699C7.06643 5.0306 6.87967 5.00375 6.66666 5.00375Z" fill="#F01543"></path>
                        <path d="M50.8315 26.6699C49.4516 26.6699 48.3316 25.55 48.3316 24.17V9.17049C48.3316 6.87381 46.4622 5.00375 44.1655 5.00375H6.66667C5.28671 5.00375 4.16675 3.88379 4.16675 2.50383C4.16675 1.12387 5.28671 0.00390625 6.66667 0.00390625H44.1655C49.2221 0.00390625 53.3315 4.11388 53.3315 9.17049V24.17C53.3315 25.55 52.2115 26.6699 50.8315 26.6699Z" fill="#F01543"></path>
                        <path d="M44.1655 70.002H30.8322C29.4522 70.002 28.3323 68.882 28.3323 67.5021C28.3323 66.1221 29.4522 65.0021 30.8322 65.0021H44.1655C46.4622 65.0021 48.3316 63.1321 48.3316 60.8354V45.8359C48.3316 44.4559 49.4516 43.3359 50.8316 43.3359C52.2115 43.3359 53.3315 44.4559 53.3315 45.8359V60.8354C53.3315 65.892 49.2221 70.002 44.1655 70.002Z" fill="#F01543"></path>
                    </g>
                </svg>
            </div>
            <div class="logout_texts">
                <h2>Are you sure want to Logout</h2>
            </div>
            <div class="wrap_buttons">
                <a href="javascript:void(0)" class="btn_link-modal" data-bs-dismiss="modal" aria-label="Close">NO!</a>
                <a href="javascript:void(0)" class="btn_link-modal wraps_yes" id="user_logout">Yes!</a>
                
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>



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
                  <div id="add_map" style="width: 100%; height: 100%;"></div>
                </div>
                <div class="wraps_input">
                    <input type="text" class="form-control wraps_input-field" id="add_searchBox" name="searchBox" placeholder="Search nearby locality and place">
                </div>
                <div class="wraps_buttons_link">
                    <div class="btn_wraps-adress">
                        <div class="adjuts_wrapsdiv">
                        <button type="button" id="adjustPin" class="save_address-adjust">Adjust pin to save address</button>
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


          <!-- Order Related Help Chat Modal -->
        <div class="modal fade wrap_chat_modalopen" id="OrderRelatedchatModal" tabindex="-1" aria-labelledby="chatModalLabelOrder" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="wrap_orderid_texts" id="chatModalLabelOrder">Order #</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column p-0">
                        <div class="chat-box" id="chatMessages">
                            <!-- Messages will be loaded here -->
                        </div>
                        <div class="chat-input d-flex">
                            <input type="text" id="chatInput" class="form-control" placeholder="Type a message...">
                            <button class="btn btn-primary wraps_message-send" id="sendMessageBtn">&#10148;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- edit primary address of customer -->

        <!-- Edit primary address of customer -->
        <div class="modal fade wraps_location-modals" id="EditAddress" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="wraps_maps">
                    <div class="wrapper_maps">
                        <div id="edit_map" style="width: 100%; height: 100%;"></div>
                    </div>

                    <!-- Search Box -->
                    <div class="wraps_input">
                        <input type="text" class="form-control wraps_input-field" id="edit_searchBox" placeholder="Search nearby locality and place">
                    </div>

                    <!-- Adjust pin button -->
                    <div class="wraps_buttons_link">
                        <div class="btn_wraps-adress">
                            <div class="adjuts_wrapsdiv">
                                <button type="button" id="adjustPin" class="save_address-adjust">Adjust pin to save address</button>
                            </div>
                        </div>

                        <!-- Address form -->
                        <div class="wraps_addrress_fields" style="display:block;">
                        <form>
                            <div class="wraps_textarea">
                            <label for="textarea_location" class="form-label"></label>
                            <textarea class="form-control" id="edit_textarea_location" rows="2"></textarea>
                            </div>

                            <div class="form-group wraps_locaton-form">
                            <input type="text" id="edit_name" name="name" class="form-control wraps_name" placeholder="Name">
                            </div>

                            <div class="form-group wraps_locaton-form" style="margin-bottom:10px;">
                            <input type="tel" id="edit_locationphone" class="form-control wraps_phonenumber" autocomplete="off" placeholder="000000" style="padding-left: 83px;">
                            </div>

                            <input type="hidden" id="edit_location_id" name="location_id">

                            <button type="submit" id="update_location" class="location_save">Update Address</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>





</main>



@endsection


@push('scripts')

<script 
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCucT3KjQnJ-nzxKMWfO5Y9g0_1m1Y8Bfk&libraries=places,marker&map_ids=de6ec126d3ec9697&callback=initSearchAutocomplete&v=beta"
></script>

<script>
    //order user help section
    document.addEventListener("DOMContentLoaded", function () {

        const API_BASE_URL = "{{ asset('/backend') }}";


    let supportForm = document.querySelector("#helpModal form");
    let helpModalEl = document.getElementById("helpModal");
    let isSubmitting = false; // Flag to prevent duplicate submissions

    if (!supportForm.dataset.listenerAdded) { // Ensure the event listener is added only once
        supportForm.addEventListener("submit", handleSubmit, { once: true });
        supportForm.dataset.listenerAdded = true;
    }

    function handleSubmit(e) {
        e.preventDefault(); // Prevent default form submission

        if (isSubmitting) return; // Prevent duplicate submission
        isSubmitting = true;

        let title = document.getElementById("title").value.trim();
        let description = document.getElementById("description").value.trim();
        let userId = "{{ $user->id }}"; // Ensure this is dynamically populated

        if (!title || !description) {
            if (!document.querySelector(".toast-message")) { 
                toastr.error("Please fill in both title and description.");
            }
            isSubmitting = false;
            return;
        }


        let user_help  = `${API_BASE_URL}/API/users.php/user_help`;


        // let apiUrl = "https://xeat.co.uk/backend/API/users.php/user_help";
        let formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("help_title", title);
        formData.append("comment", description);
        formData.append("user_id", userId);

        // Disable submit button to prevent multiple clicks
        let submitButton = supportForm.querySelector("button[type='submit']");
        submitButton.disabled = true;

        fetch(user_help, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {

            if (data.code === "200" || data.status === "1") {
                toastr.success("Support request submitted successfully.");

                // Clear input fields
                document.getElementById("title").value = "";
                document.getElementById("description").value = "";

                // Hide the modal properly
                let helpModal = bootstrap.Modal.getInstance(helpModalEl);
                if (helpModal) {
                    helpModal.hide();

                    fetchHelpListings();
                } else {
                    new bootstrap.Modal(helpModalEl).hide();
                }
            } else {
                // toastr.error("Failed to submit support request. Try again later.");
            }
        })
        .catch(error => {
            console.error("Error submitting support request:", error);
            // toastr.error("Something went wrong. Please try again.");
        })
        .finally(() => {
            isSubmitting = false; // Reset flag
            submitButton.disabled = false; // Re-enable button after API call
        });
      }


      //help and order realted help section show and hide

      let helpTabBtn      = document.getElementById("help-tab");
      let orderHelpTabBtn = document.getElementById("order-help-tab");
      let addHelpIcon      = document.getElementById("addHelpIcon");

        // Show/hide + icon based on active tab
        function toggleHelpIcon() 
        {
            if (helpTabBtn.classList.contains("active")) {
                addHelpIcon.style.display = "block";
            } else {
                addHelpIcon.style.display = "none";
            }
        }

         // Event listeners for tab switch
     helpTabBtn.addEventListener("click", toggleHelpIcon);
     orderHelpTabBtn.addEventListener("click", toggleHelpIcon);


      //User help section listing showing
    function fetchHelpListings() {

        let apiUrl  = `${API_BASE_URL}/API/users.php/user_help_revert`;


        // let apiUrl = "https://xeat.co.uk/backend/API/users.php/user_help_revert";
        let accesstoken = "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd";
        let userId = "{{ $user->id }}";

        let order_related_HelpApi  = `${API_BASE_URL}/API/users.php/get_order_help`;


        // let order_related_HelpApi = "https://xeat.co.uk/backend/API/users.php/get_order_help";


        let formData = new FormData();
        formData.append("accesstoken", accesstoken);
        formData.append("user_id", userId);


        fetch(apiUrl, {
        method: "POST",
        body: formData, // Send as FormData, not JSON
        })
        .then(response => response.json())
        .then(data => {

            if (data.code === "200") {
                // populateHelpTabs(data.data);
                populateHelpTabs(data.data, "help");

            } else {
                // toastr.error("Failed to load help listings.");
            }
        })
        .catch(error => {
            console.error("Error fetching help data:", error);
            // toastr.error("Something went wrong while fetching help listings.");
        });

        //order related help api

        fetch(order_related_HelpApi, { method: "POST", body: formData })
            .then(response => response.json())
            .then(data => {
                if (data.code === "200") {
                    // populate_order_realted_HelpTabs(data.data, "order-help");
                    populateHelpTabs(data.data, "order-help", true);

                } else {
                    // toastr.error("Failed to load order-related help.");
                }
            })
            .catch(error => console.error("Error fetching order help:", error));
    }

    function populateHelpTabs(helpData, type, isOrderHelp = false) {
        let targetTab = document.querySelector(`#${type} .wraps_helps`);
        targetTab.innerHTML = ""; // Clear existing content

        helpData.forEach(item => {
            let statusText = isOrderHelp 
            ? (item.status === "1" ? "Pending" : "Closed") 
            : (item.status === "1" ? "Open" : "Closed");           
            
            
             let statusClass = isOrderHelp 
            ? (item.status === "1" ? "wrap_pendingstatus" : "wrap_closedstatus") 
            : (item.status === "1" ? "wraps_statuscolor" : "wrap_closedstatus");

            // Handle differences in response structures
            let title = isOrderHelp ? `Order ID: ${item.order_id}` : item.help_title;
            let description = isOrderHelp ? item.comment : item.comment;
            let createdAt = formatDate(item.created_at);

            let helpItemHTML = `
               <div class="help_wrapper ${isOrderHelp ? 'chat-item' : ''}" 
                ${isOrderHelp ? `data-order-id="${item.order_id}" data-help-id="${item.id}"` : ''}>
                    <div class="wraps_flex-help">
                        <h4>${title}</h4>
                        <p>${createdAt}</p>
                    </div>
                    <p class="wrap_help-status ${statusClass}">Status: ${statusText}</p>
                    <p class="wraps_description">${description}</p>
                </div>
            `;

            targetTab.innerHTML += helpItemHTML;
        });


         // Add click event only to order-related help items
        if (isOrderHelp) {
            document.querySelectorAll(".chat-item").forEach(item => {
                item.addEventListener("click", function() {
                    let orderId = this.getAttribute("data-order-id");
                    let order_help_Id = this.getAttribute("data-help-id");
                    openChatModal(order_help_Id,orderId);
                });
            });
        }

        let chatRefreshInterval = null; // Global variable to track refresh interval


        function openChatModal(order_help_Id,orderId) {
            let chatModalEl = new bootstrap.Modal(document.getElementById("OrderRelatedchatModal"));
            document.getElementById("chatModalLabelOrder").innerText = `Chat for Order ID: ${orderId}`;
            
            fetchChatMessages(order_help_Id); // Fetch previous messages
            chatModalEl.show();

            // chatRefreshInterval = setInterval(() => fetchChatMessages(order_help_Id, false), 5000);


            document.getElementById("sendMessageBtn").onclick = function() {
                sendMessage(order_help_Id);
            };
            
            // Stop refreshing when modal is closed
            // document.getElementById("OrderRelatedchatModal").addEventListener("hidden.bs.modal", () => {
            //     clearInterval(chatRefreshInterval);
            // });
        }
    }

    // ✅ Function to Send a Message
    function sendMessage(order_help_Id) {
        let messageInput = document.getElementById("chatInput");
        let messageText = messageInput.value.trim();

        if (messageText === "") {
            alert("Message cannot be empty!");
            return;
        }

        let userId = "{{ $user->id }}";

        let order_help_chat  = `${API_BASE_URL}/API/users.php/order_help_chat`;


        // let apiUrl = "https://xeat.co.uk/backend/API/users.php/order_help_chat";
        let formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("user_id", userId);
        formData.append("order_help_id", order_help_Id);
        formData.append("comment", messageText);
        formData.append("type", "1"); // 1 = User message, 0 = Admin message

        fetch(order_help_chat, { method: "POST", body: formData })
            .then(response => response.json())
            .then(data => {
                if (data.code === "200") {
                    // ✅ Message sent successfully, update UI immediately
                    let chatBox = document.getElementById("chatMessages");
                    let formattedTime = new Date().toLocaleTimeString();

                    let messageHTML = `
                        <div class="message outgoing">
                            <p>${messageText}</p>
                            <span class="chat-time">${formattedTime}</span>
                        </div>
                    `;

                    chatBox.insertAdjacentHTML("beforeend", messageHTML); // Append at the bottom
                    chatBox.scrollTop = chatBox.scrollHeight; // Auto-scroll to latest message

                    messageInput.value = ""; // Clear input field
                } else {
                    alert("Failed to send message. Try again.");
                }
            })
            .catch(error => {
                console.error("Error sending message:", error);
                alert("Error sending message. Please check your connection.");
            });
    }



    function fetchChatMessages(order_help_Id) {
        let chatBox = document.getElementById("chatMessages");
        chatBox.innerHTML = "<p>Loading chat...</p>";

        let get_order_help_chat  = `${API_BASE_URL}/API/users.php/get_order_help_chat`;


        // let apiUrl = "https://xeat.co.uk/backend/API/users.php/get_order_help_chat";
        let formData = new FormData();
        formData.append("order_help_id", order_help_Id);
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");

        fetch(get_order_help_chat, { method: "POST", body: formData })
            .then(response => response.json())
            .then(data => {
                chatBox.innerHTML = "";
                if (data.code === "200" && data.data.length > 0) {
                    data.data.reverse().forEach(msg => {
                        let isUser = msg.from === "1"; // 1 = User, 2 = Admin
                        let msgClass = isUser ? "outgoing" : "incoming"; // Fix applied
                        let formattedTime = new Date(msg.created_at).toLocaleTimeString();

                        let messageHTML = `
                            <div class="message ${msgClass}">
                                <p>${msg.comment}</p>
                                <span class="chat-time">${formattedTime}</span>
                            </div>
                        `;
                        chatBox.insertAdjacentHTML("beforeend", messageHTML); // ✅ Append messages in the correct order
                    });
                    chatBox.scrollTop = chatBox.scrollHeight; // Scroll to latest message
                } else {
                    chatBox.innerHTML = "<p>No messages yet.</p>";
                }
            })
            .catch(error => {
                console.error("Error fetching chat messages:", error);
                chatBox.innerHTML = "<p>Error loading chat.</p>";
            });
    }




    function formatDate(dateString) {
        let date = new Date(dateString);
        return date.toLocaleString(); // Format to readable date/time
    }

     fetchHelpListings(); // Fetch data when the page loads

     //End User help Section
    });


</script>



<script>
   // primary address listing

   let addMap, addMarker, addAutocomplete, addGeocoder, addSearchAutocomplete = null;


   let allAddresses = []; // Store all address objects here

   let map, marker, geocoder,autocomplete;
   
   let searchAutocomplete = null; // Ensure this is declared globally

    var userCountryCode = "{{ $user->countryCode }}"; // Fetch country code from session

    const API_BASE_URL = "{{ asset('/backend') }}";

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


    // let map, marker, geocoder,autocomplete;
    
	// let searchAutocomplete = null; // Ensure this is declared globally
    let hasToastrShown = false;

    fetchAddresses();

    initializeIntlTelInput("#locationphone");

    });

    function fetchAddresses() {
        let userId = "{{$user->id}}"; // Ensure correct user ID

        const API_BASE_URL = "{{ asset('/backend') }}";

        let get_address  = `${API_BASE_URL}/API/users.php/get_address`;

        // let apiUrl = "https://xeat.co.uk/backend/API/users.php/get_address";

        let formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("user_id", userId);

        fetch(get_address, {
            method: "POST",
            body: formData // Send as FormData
        })
        .then(response => response.json())
        .then(data => {
        if (data.code === "200") {

            allAddresses = data.data; // ✅ Store full address data globally

            let addressContainer = document.querySelector(".wraps_address .address-list"); 
            addressContainer.innerHTML = "";

            data.data.forEach(address => {
                let addressHtml = `
                    <div class="col-md-6 col-lg-6">
                        <div class="wrapper_address">
                            <div class="row wrapper_address_itms">
                                <div class="col">
                                   <div class="d-flex justify-content-start">
                                    <h3 class="text-start wraps_subheadingaddress">
                                        ${address.is_primary == 1 ? "Billing Address" : "Home Address"}
                                    </h3>
                                    </div>
                                </div>
                                <div class="col">
                                  <div class="d-flex justify-content-end">
                                    <p class="text-end icons_wrapaddress">
                                    <a href="#" class="icon_edit" data-id="${address.id}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="icon_delete" onclick="deleteAddress(${address.id})"><i class="fa-solid fa-trash"></i></a>
                                    </p>
                                  </div>
                                </div>
                            </div>
                            <div class="address-details">
                                <div class="wraps_detailslist">
                                <p>Full Name: <strong>${address.name}</strong></p>
                                <p>Phone: <strong>${address.phone_number}</strong></p>
                                <p>Country: <strong>
                                    ${address.hte === '+91' ? 'India' : 
                                    address.hte === '+44' ? 'UK' : 
                                    address.hte === '+94' ? 'Sri Lanka' : 'Unknown'}
                                    </strong>
                                </p>

                                <p>Address: <strong>${address.address}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                addressContainer.innerHTML += addressHtml;
            });
        } else {
            // toastr.error(data.message);
        }
        })
        .catch(error => {
            // toastr.error(error);
        });
    }


    //add address model code start here

    // Initialize Map & Search Autocomplete When Modal is Fully Displayed
    $('#locationModal').on('shown.bs.modal', function ()
    {

        setTimeout(() => {
            
            let searchInput = document.getElementById("add_searchBox");
            
            if (searchInput) {
                searchInput.focus();
                searchInput.value = ""; // Optional: clear old address

           
            if (!addSearchAutocomplete) { // Ensure it initializes only once
                 // Remove previously added PAC container if still attached
                let oldPac = document.querySelector(".pac-add-container");
                if (oldPac && oldPac.parentElement) {
                    oldPac.parentElement.removeChild(oldPac);
                }
                
                initAddSearchAutocomplete();
            }
            }
        }, 300);

            // Ensure map initializes only once
            if (typeof addMap === "undefined" || !addMap) {
               initAddMap();
            }

            // Update address heading when modal opens
            let addressHeading = document.getElementById("address_heading");
            if (addressHeading) {
                let savedAddress = localStorage.getItem("selected_address") || "Select your location";
                addressHeading.textContent = savedAddress;
            }


            // Update textarea heading when modal opens
            let textarea_location = document.getElementById("textarea_location");
            if (textarea_location) {
                let text_savedAddress = localStorage.getItem("selected_address") || "Select your location";
                textarea_location.textContent = text_savedAddress;
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
	//   let locationModal = document.getElementById("locationModal");
    //    locationModal.addEventListener("show.bs.modal", function () {
    //     nameInput.value = ""; // Clear name field
    //     input.value = ""; // Clear phone field
    //   });


      let saveLocationBtn = document.getElementById("location_save");

      saveLocationBtn.addEventListener("click", function (event) {
        event.preventDefault();
            let name = document.getElementById("name").value.trim();
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

            
            if (!name || !phone_number || !address) {
                toastr.error("Please fill in all required fields.");
                return;
            }
            
            // Get user ID from session
            let userId   = "{{ session('user_id') }}";
            userId       = userId.trim() !== "" ? userId : null;

            let formData = new FormData();
            formData.append("location", address);
            formData.append("a_lat", a_lat);
            formData.append("a_long", a_long);
            formData.append("phone_number", phone_number);
            formData.append("name", name);
            formData.append("countryCode", dialCode);

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

                        fetchAddresses();

						
						//  // Fix for disabled page issue
						//  setTimeout(() => {
						// 		document.body.classList.remove("modal-open"); // Remove Bootstrap's modal-open class
						// 		let backdrops = document.querySelectorAll(".modal-backdrop");
						// 		backdrops.forEach(backdrop => backdrop.remove()); // Remove all modal backdrops
						// 	}, 500);
						
					} else {
						toastr.error("Failed to save address. Please try again.");
					}
				})
				.catch(error => {
					console.error("API Error:", error);
					toastr.error("Something went wrong. Please try again.");
				});



      });



      


    


    function initAddMap() 
    {
            geocoder = new google.maps.Geocoder();

            let initialLat = parseFloat(localStorage.getItem("selected_lat")) || 8.752315879179774;
            let initialLng = parseFloat(localStorage.getItem("selected_lng")) || 80.50044792268179;

            // Check if addMap already exists
            if (!window.addMap) {
                addMap = new google.maps.Map(document.getElementById("add_map"), {
                    center: { lat: initialLat, lng: initialLng },
                    zoom: 15,
                    mapId: "de6ec126d3ec9697"
                });
            }

            // Check if addMarker already exists
            if (!window.addMarker) {
                if (google.maps.marker && google.maps.marker.AdvancedMarkerElement) {
                    addMarker = new google.maps.marker.AdvancedMarkerElement({
                        position: { lat: initialLat, lng: initialLng },
                        map: addMap,
                        title: "Drag to adjust location",
                        gmpDraggable: true
                    });

                    // When marker is dragged, get new address
                    addMarker.addListener("dragend", () => {
                        let position = addMarker.position;
                        getAddAddress(position.lat, position.lng);
                    });
                } else {
                    console.error("AdvancedMarkerElement is not available.");
                    alert("AdvancedMarkerElement is not available. Please check your Google Maps API setup.");
                }
            }
    }


    function initAddSearchAutocomplete() 
    {
            if (addSearchAutocomplete) {
                console.warn("Add autocomplete already initialized.");
                return;
            }

            if (!window.google?.maps?.places || !google.maps.marker?.AdvancedMarkerElement) {
                console.error("Google Maps API or AdvancedMarkerElement not loaded.");
                setTimeout(initAddSearchAutocomplete, 1000); // Retry after 1 second
                return;
            }

            const searchBoxInput = document.getElementById("add_searchBox");
            if (!searchBoxInput) {
                console.error("Search box for add modal not found!");
                return;
            }

            addSearchAutocomplete = new google.maps.places.Autocomplete(searchBoxInput, {
                types: ["establishment", "geocode"]
            });

            // Fix Chrome autofill behavior
            setTimeout(() => {
                searchBoxInput.setAttribute("autocomplete", "on");
            }, 1000);

            setTimeout(() => {
                let pacContainer = document.querySelector(".pac-container");
                let modalDialog = document.querySelector("#locationModal .wraps_input");

                if (pacContainer && modalDialog && !modalDialog.contains(pacContainer)) {
                    modalDialog.appendChild(pacContainer);
                    pacContainer.classList.add("pac-add-container");
                }
            }, 500);

            addSearchAutocomplete.addListener("place_changed", function () {
                let place = addSearchAutocomplete.getPlace();
                if (!place.geometry) {
                    alert("Please select a valid location.");
                    return;
                }

                let lat = place.geometry.location.lat();
                let lng = place.geometry.location.lng();
                let address = place.formatted_address || place.name;

                if (!address && place.address_components) {
                    address = place.address_components.map(c => c.long_name).join(", ");
                }

                // Update UI
                document.getElementById("add_searchBox").value = address;
                document.getElementById("textarea_location").value = address;
                document.getElementById("address_heading").textContent = address;

                // Store in localStorage
                localStorage.setItem("selected_lat", lat);
                localStorage.setItem("selected_lng", lng);
                localStorage.setItem("selected_address", address);

                // Update map
                updateAddMap(lat, lng);
            });
    }

    function updateAddMap(lat, lng) 
    {
            const position = { lat, lng };

            if (addMap) {
                addMap.setCenter(position);
                addMap.setZoom(15);
            }

            if (addMarker instanceof google.maps.marker.AdvancedMarkerElement) {
                addMarker.position = position;
            } else {
                addMarker = new google.maps.marker.AdvancedMarkerElement({
                    position: position,
                    map: addMap,
                    title: "Drag to adjust location",
                    gmpDraggable: true
                });

                addMarker.addListener("dragend", () => {
                    const newPos = addMarker.position;
                    getAddAddress(newPos.lat, newPos.lng);
                });
            }
    }

    function getAddAddress(lat, lng) 
    {
        console.log("getAddAddress() called with:", lat, lng);

        let latlng = new google.maps.LatLng(lat, lng);
        let map = new google.maps.Map(document.createElement("div")); // Dummy map container

        let service = new google.maps.places.PlacesService(map);
        let request = {
            location: latlng,
            radius: 50 // meters
        };

        service.nearbySearch(request, function (results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK && results.length > 0) {
                let address = results[0].name;
                console.log("Nearest place:", results[0]);

                // Update fields safely
                const textarea = document.getElementById("textarea_location");
                if (textarea) {
                    textarea.value = address;
                    textarea.removeAttribute("readonly");
                    textarea.removeAttribute("disabled");
                }

                const heading = document.getElementById("address_heading");
                if (heading) heading.textContent = address;

                const restaurantInput = document.getElementById("restaurant_wrap");
                if (restaurantInput) restaurantInput.value = address;

                // Save to localStorage
                localStorage.setItem("selected_lat", lat);
                localStorage.setItem("selected_lng", lng);
                localStorage.setItem("selected_address", address);

                console.log("Saved lat/lng/address to localStorage");

            } else {
                console.error("Places API failed. Status:", status);
                alert("Couldn't find a place near this location. Try again.");
            }
        });
    }





   
    document.addEventListener("click", function (e) 
    {

        if (e.target.closest(".icon_edit")) {
            e.preventDefault();
            const addressId = e.target.closest(".icon_edit").dataset.id;
            openEditAddressModal(addressId);
        }

        function openEditAddressModal(addressId) 
        {

            const address = allAddresses.find(a => a.id == addressId); // Get full address object

            if (!address) return;

            const countryIso = getCountryIsoFromDialCode(address.hte);

            initializeIntlTelInput("#edit_locationphone", countryIso);

            
            const rawPhoneNumber = address.phone_number.replace(address.hte, '');
            document.getElementById("edit_locationphone").value = rawPhoneNumber;
            document.getElementById("edit_name").value = address.name;
            document.getElementById("edit_location_id").value = address.id;

            document.getElementById("edit_textarea_location").value = address.address;

            // You can store lat/lng if needed later
            // initEditMap(address.latitude, address.longitude, address.address);

            $('#EditAddress').modal('show');

            $('#EditAddress').on('shown.bs.modal', function () {
                // Delay slightly to ensure input is rendered
                setTimeout(() => {
                    let edit_searchInput = document.getElementById("edit_searchBox");
                    if (edit_searchInput) {
                        edit_searchInput.focus();
                        if (!searchAutocomplete) {
                            initSearchAutocomplete();
                        }
                    }
                }, 300);
            });


            initEditMap(address.a_lat, address.a_long, address.address);


        }


        function initEditMap(lat, lng, addressText = '') 
        {

            geocoder = new google.maps.Geocoder();
            let initialLat = parseFloat(lat);
            let initialLng = parseFloat(lng);

            if (!map) {
                map = new google.maps.Map(document.getElementById("edit_map"), {
                    center: { lat: initialLat, lng: initialLng },
                    zoom: 15,
                    mapId: "de6ec126d3ec9697"
                });
            }

            if (!marker) 
            {
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

            const searchBoxInput = document.getElementById("edit_searchBox");

            if (!searchBoxInput) {
                console.error("Search box input field not found!");
                return;
            }

            
            searchAutocomplete = new google.maps.places.Autocomplete(searchBoxInput, {
                types: ["establishment", "geocode"]
            });

            setTimeout(() => {
                searchBoxInput.setAttribute("autocomplete", "on");
                console.log("initSearchAutocomplete Autocomplete attribute overridden to 'on '");
            }, 1000);
            
            setTimeout(() => {
                let pacContainer = document.querySelector(".pac-container"); // Correct selector
                let modalDialog = document.querySelector("#EditAddress .wraps_input");

                if (pacContainer && modalDialog && !modalDialog.contains(pacContainer)) {
                    modalDialog.appendChild(pacContainer);
                    pacContainer.classList.add("pac-edit-container"); // For custom styling
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

                // document.getElementById("restaurant_wrap").value = address;

                // Update UI
                searchBoxInput.value = address;
                let textarea = document.getElementById("edit_textarea_location");
                textarea.value = address;
                

                updateMap(lat, lng);

            });
        }

        
        function updateMap(lat, lng) 
        {

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

        function getAddress(lat, lng) 
        {
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

                    let textarea = document.getElementById("edit_textarea_location");
                    textarea.value = address;
                    textarea.removeAttribute("readonly"); // Enable input
                    textarea.removeAttribute("disabled"); // Enable input			
                    // document.getElementById("address_heading").textContent = address;
                    // document.getElementById("address_heading_next").textContent = address;
                    // document.getElementById("restaurant_wrap").value = address; //update restaurant_wrap value when change address drag and drop from map


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



            

        function initializeIntlTelInput(selector, countryCode = "us") 
        {
                var input = document.querySelector(selector);
                if (input) {
                    if (input.dataset.intlInitialized === "true") {
                        // If already initialized, just update country
                        const iti = window.intlTelInputGlobals.getInstance(input);
                        iti.setCountry(countryCode);
                    } else {
                        window.intlTelInput(input, {
                            separateDialCode: true,
                            initialCountry: countryCode,
                            preferredCountries: ["us", "gb", "ca", "au", "in", "lk"],
                            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
                        });
                        input.dataset.intlInitialized = "true"; // Mark as initialized
                    }
                }
        }

        function getCountryIsoFromDialCode(code) 
        {
            const dialCodeMap = {
                "+91": "in",
                "+44": "gb",
                "+94": "lk",
                "+1": "us", // covers US/Canada
                "+61": "au"
            };
            return dialCodeMap[code] || "lk"; // fallback to US if unknown
        }

    });


    

   
    function initSearch_Edit_Autocomplete() 
    {

        if (searchAutocomplete) {
            console.warn("Autocomplete already initialized.");
            return; // Prevent multiple initializations
        }
        

        if (!window.google?.maps?.places || !google.maps.marker?.AdvancedMarkerElement) {
            console.error("Google Maps API or AdvancedMarkerElement not loaded.");
            setTimeout(initSearch_Edit_Autocomplete, 1000); // Retry after 1 second
            return;
        }

        const searchBoxInput_add = document.getElementById("searchBox");

        if (!searchBoxInput_add) {
            console.error("Search box input field not found!");
            return;
        }

        
        searchAutocomplete = new google.maps.places.Autocomplete(searchBoxInput_add, {
            types: ["establishment", "geocode"]
        });

        setTimeout(() => {
            searchBoxInput_add.setAttribute("autocomplete", "on");
            console.log("Autocomplete attribute overridden to 'new-add-password'");
        }, 1000);
        
        setTimeout(() => {
            let pacContainer = document.querySelector(".pac-container"); // Correct selector
            let modalDialog = document.querySelector("#EditAddress .wraps_input");

            if (pacContainer && modalDialog && !modalDialog.contains(pacContainer)) {
                modalDialog.appendChild(pacContainer);
                pacContainer.classList.add("pac-add-container"); // For custom styling
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

            // document.getElementById("restaurant_wrap").value = address;

            // Update UI
            searchBoxInput_add.value = address;
            let textarea = document.getElementById("edit_textarea_location");
            textarea.value = address;
            

            updateMap(lat, lng);

        });
    }


    function initMap() 
    {

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


    var input = document.querySelector("#edit_locationphone");
    var nameInput = document.querySelector("#edit_name");

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


    //update address code start here

    document.addEventListener("submit", function (e) {
        if (e.target.closest("#EditAddress form")) {
            e.preventDefault();

        const name          = document.getElementById("edit_name").value;
        const phoneNumber   = document.getElementById("edit_locationphone").value;
        const address       = document.getElementById("edit_textarea_location").value;
        const countryCode   = document.querySelector("#edit_locationphone").closest(".iti").querySelector(".iti__selected-dial-code").innerText || '+94';
        const a_lat         = localStorage.getItem("selected_lat");
        const a_long        = localStorage.getItem("selected_lng");
        const fullAddress   = localStorage.getItem("selected_address") || address;
        const addressId     = document.getElementById("edit_location_id").value;

        const formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("location", fullAddress);
        formData.append("com_address", fullAddress);
        formData.append("landmark", fullAddress);
        formData.append("hte", countryCode);
        formData.append("address", fullAddress);
        formData.append("house_number", "");
        formData.append("building_number", "");
        formData.append("city", "");
        formData.append("postal_code", "");
        formData.append("phone_number", countryCode.replace("+", "") + phoneNumber);
        formData.append("name", name);
        formData.append("a_lat", a_lat);
        formData.append("a_long", a_long);
        formData.append("id", addressId);

        fetch(`${API_BASE_URL}/API/users.php/update_addres`, {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.code === "200") {
                // alert("Address updated successfully.");
                $('#EditAddress').modal('hide');
                toastr.success(data.message); 

                fetchAddresses();
                // Optionally refresh address list here
            } else {
                // alert("Failed to update address: " + data.message);
            }
        })
        .catch(err => {
            // console.error("Error updating address:", err);
            // alert("Something went wrong while updating the address.");
        });




        }
            
       
    });



   //delete address list

   function deleteAddress(addressId) 
   {
        if (!confirm("Are you sure you want to delete this address?")) {
            return; // Stop if user cancels deletion
        }

        const API_BASE_URL = "{{ asset('/backend') }}";

        
        let delete_addres  = `${API_BASE_URL}/API/users.php/delete_addres`;


        // let apiUrl = "https://xeat.co.uk/backend/API/users.php/delete_addres";

        let formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("id", addressId);

        fetch(delete_addres, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.code === "200") {
                toastr.success("Address deleted successfully!");
                fetchAddresses(); // Refresh the address list
            } else {
                // toastr.error(data.message || "Failed to delete address.");
            }
        })
        .catch(error => {
            // toastr.error("Error deleting address. Please try again.");
            console.error("Delete Address Error:", error);
        });
    }

  //fetch wallet data dynamically

   document.addEventListener("DOMContentLoaded", function () {
    fetchWalletData();
    fetchTotalPenny(); // Fetch transactions from user_wallet API
    fetchOrderHistory();

   });

   function fetchTotalPenny() 
   {
    const API_BASE_URL = "{{ asset('/backend') }}";

        let userId = "{{$user->id}}"; // Ensure correct user ID
        let totalPennyApiUrl  = `${API_BASE_URL}/api/user_total_penny`;

        // let totalPennyApiUrl = "https://xeat.co.uk/backend/api/user_total_penny";

        let formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("user_id", userId);

        fetch(totalPennyApiUrl, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "1" && data.data) {
                document.querySelector(".wrap_wallet p").innerText = `${data.data.total_rewards} Penny`;
            } else {
                // toastr.error(data.message);

                console.error("Failed to fetch total rewards:", data.message);
            }
        })
        .catch(error => {
            
            console.error("Error fetching total rewards:", error);
        });
    }

    function fetchWalletData() 
    {
        let userId = "{{$user->id}}"; // Ensure correct user ID
        const API_BASE_URL = "{{ asset('/backend') }}";

        let user_wallet  = `${API_BASE_URL}/api/user_wallet`;

        // let apiUrl = "https://xeat.co.uk/backend/api/user_wallet";

        let formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("user_id", userId);

        fetch(user_wallet, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "1") {

                let transactionsContainer = document.querySelector(".wrap_wallet_items");
                transactionsContainer.innerHTML = `<h3>Transactions</h3>`;

                if (data.data.length > 0) {
                 data.data.forEach(transaction => {
                    let transactionHtml = `
                        <div class="inner_transactions">
                            <div class="row wrappr_left-transactions">
                                <div class="col">
                                    <div class="wraps_orderdetails justify-content-start">
                                        <h5>Order ID #${transaction.order_id}</h5>
                                        <p>${transaction.created_at}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex justify-content-end">
                                        <div class="text-end wraps_transactions-prics">
                                            <p class="price_wraps">${transaction.amount < 0 ? '-' : '+'}${transaction.currency} ${Math.abs(transaction.amount)}</p>
                                            <p class="wraps_rewards">${transaction.rewards > 0 ? `+${transaction.rewards} Reward Penny Credits` : ''}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    transactionsContainer.innerHTML += transactionHtml;
                });
            } else {
                transactionsContainer.innerHTML += `<p>No transactions found.</p>`;
            }
            } else {
                // toastr.error(data.message || "Failed to fetch wallet data.");
            }
        })
        .catch(error => {
            // toastr.error("Error fetching wallet data. Please try again.");
            console.error("Wallet Fetch Error:", error);
        });
    }

    //order details api

    function fetchOrderHistory() 
    {
        let userId = "{{$user->id}}"; // Ensure correct user ID
        const API_BASE_URL = "{{ asset('/backend') }}";

        
        let order_history_detail  = `${API_BASE_URL}/api/order_history_detail`;

        // let apiUrl = "https://xeat.co.uk/backend/api/order_history_detail";

        let formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("user_id", userId);

        fetch(order_history_detail, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
        if (data.status === "1" && Array.isArray(data.data)) {
            let ordersContainer = document.querySelector(".wrapper_orders");
            ordersContainer.innerHTML = "";

            if (data.data.length > 0) {
                data.data.forEach(order => {
                    let itemsHtml = order.items.map(item => `<h4>${item.Iname} * ${item.count}</h4>`).join("");

                    let orderHtml = `
                           <div class="wrap_order-details" style="margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #ddd;">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 wraps_width_custom">
                                    <div class="row order_img_text-flex">
                                        <div class="wrap_orderimage">
                                            <img src="${order.res_image}" alt="image-food" onerror="this.src=''">
                                        </div>
                                        <div class="wrapr_food-details">
                                            <div class="wraps_details-order-itms">
                                                <h4>${order.res_name}</h4>
                                                <p class="restrurent_name">${order.res_location}</p>
                                                <p class="order_no_date-time">Order #${order.id} | ${formatDate(order.created_at)}</p>
                                                <p class="wrap_view-detils" data-bs-toggle="modal" data-bs-target="#viewdetail" onclick="loadOrderDetails(${order.id})">VIEW DETAILS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-lg-4 wrap_padding_none">
                                    <div class="wraps_delivered_date-time">
                                        <p>Delivered on ${formatDate(order.updated_at)} <span class="wrap_check" style="float: right;"><i class="fa-solid fa-check"></i></span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="wraps_bottom_order">
                                <div class="row">
                                    <div class="col-md-8 col-lg-8">
                                        <div class="wrap_heading-bottoms">
                                            ${itemsHtml}
                                            <a href="#" class="wrap_helps" data-bs-toggle="modal" data-bs-target="#orderhelpModal" 
                                            onClick="SetOrderHelp(${order.id})">HELP</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <p class="text-end wrap_last">Total Paid: ${order.currency} ${order.total_user_pad}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    ordersContainer.innerHTML += orderHtml;
                });
            } else {
                ordersContainer.innerHTML = `<p>No past orders found.</p>`;
            }
        } else {

            // toastr.error(data.message);
            console.error("Failed to fetch order history:", data.message);
        }
        })
        .catch(error => {
            console.error("Error fetching order history:", error);
        });
    }

    // Helper function to format date
    function formatDate(dateString) {
        let date = new Date(dateString);
        return date.toLocaleString("en-GB", {
            weekday: "short",
            month: "short",
            day: "2-digit",
            year: "numeric",
            hour: "2-digit",
            minute: "2-digit",
            hour12: true
        });
    }



    function loadOrderDetails(orderId) 
    {
        // let apiUrl = "https://xeat.co.uk/backend/api/order_detail_new";
        const API_BASE_URL = "{{ asset('/backend') }}";

        let order_detail_new  = `${API_BASE_URL}/api/order_detail_new`;


        let formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("oid", orderId);

        fetch(order_detail_new, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
        if (data.status === "1" && data.data) {
            let order = data.data;

            // Update order details
            document.querySelector("#viewdetail .flex-heading-order-details h3").innerText = `Order ID #${order.id}`;
            document.querySelector(".name_detail_restrurent").innerText = order.res_name;

            // Fixing restaurant location (Updating both location elements separately)
            let locationElements = document.querySelectorAll(".restrurent_location");
            if (locationElements.length > 0) {
                locationElements[0].innerText = order.res_location || "Not Available"; // Restaurant location
                locationElements[1].innerText = order.location || "Not Available"; // Delivery address
            }

            document.querySelector(".order_delivered p").innerText = `Order Delivered on: ${order.updated_at}`;

            // Update items list dynamically
            let itemsHtml = order.items.map(item => `
                <div class="wrap_flex-order">
                    <div class="order_item-detail">
                        <h4>${item.Iname} * ${item.count}</h4>
                    </div>
                    <div class="order_item_prics">
                        <p>${order.currency} ${item.Total.toFixed(2)}</p>
                    </div>
                </div>
            `).join("");

            document.querySelector(".wraps_details_orders").innerHTML = itemsHtml;

            // Update billing details
            let billHtml = `
                <h3>Bill Details</h3>
                <div class="wrapper_field_wrpds">
                    <div class="wraps_coupon">
                        <div class="wrap_coupnform">
                            <div class="wraps_prics_totals">
                                <h5>Subtotal</h5>
                                <h6>${order.currency} ${parseFloat(order.item_total).toFixed(2)}</h6>
                            </div>
                            <div class="wraps_prics_totals">
                                <h5>Delivery Charges</h5>
                                <h6>${order.currency} ${parseFloat(order.delivery_f).toFixed(2)}</h6>
                            </div>
                            <div class="wraps_prics_totals">
                                <h5>Discount</h5>
                                <h6>${order.currency} ${parseFloat(order.discount_amount).toFixed(2)}</h6>
                            </div>
                            <div class="wraps_prics_totals">
                                <h5>Service Charges</h5>
                                <h6>${order.currency} ${parseFloat(order.drop_f).toFixed(2)}</h6>
                            </div>
                            <div class="wraps_prics_totals">
                                <h5>Small order charges</h5>
                                <h6>${order.currency} ${parseFloat(order.small_charges).toFixed(2)}</h6>
                            </div>
                            <div class="wraps_prics_totals">
                                <h5>Other Platform Charges</h5>
                                <h6>${order.currency} ${parseFloat(order.transaction_fees).toFixed(2)}</h6>
                            </div>
                            <div class="wraps_prics_totals">
                                <h5>VAT</h5>
                                <h6>${order.currency} 0.00</h6>
                            </div>
                            <div class="wraps_totals-amount">
                                <h5>Total Payable Bill</h5>
                                <div class="wraps_prices-etctols">
                                    <h6>${order.currency} ${parseFloat(order.total_user_pad).toFixed(2)}</h6>
                                    <p>(Paid By ${order.payment_mode == "1" ? "Cash" : "Card"})</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            document.querySelector(".wraps_details_orders").innerHTML += billHtml;

            // Update Driver Rating (if driver rating exists)
            let driverRatingHtml = generateStarRating(order.reting_driver);
            document.querySelector(".wrap_order-rate_driver .star_wraps").innerHTML = driverRatingHtml;

            // Show Driver Name or Hide Section if No Driver
            // if (order.drivername) {
            let driver_name = order.drivername ? order.drivername : '';
                document.querySelector(".wrap_order-rate_driver p").innerText = `Rate driver: ${driver_name}`;
                document.querySelector(".wrap_order-rate_driver").style.display = "block";
            // } else {
            //     document.querySelector(".wrap_order-rate_driver").style.display = "none"; // Hide if no driver
            // }

            // Update Food Rating
            let foodRatingHtml = generateStarRating(order.reting_user);
            document.querySelector(".wrap_order-rate_food .star_wraps").innerHTML = foodRatingHtml;

            // Show Bootstrap modal dynamically
            let modal = new bootstrap.Modal(document.getElementById('viewdetail'));
            modal.show();
        } else {
            toastr.error(data.message);
        }
        })
        .catch(error => {
            console.error("Error fetching order details:", error);
        });
    }

    // Function to generate star rating dynamically
    function generateStarRating(rating) {
        rating = parseInt(rating) || 0; // Ensure rating is a number (fallback to 0 if undefined/null)
        let fullStars = Math.min(rating, 5); // Max 5 stars
        let emptyStars = 5 - fullStars;

        return (
            `${'<i class="fa-solid fa-star active"></i>'.repeat(fullStars)}` +
            `${'<i class="fa-regular fa-star"></i>'.repeat(emptyStars)}`
        );
    }


    //help section script start here


    function SetOrderHelp(orderId) {
      document.getElementById("helpOrderId").value = orderId;
    }

    // Ensure event listener is added only once
    document.addEventListener("DOMContentLoaded", function () {
        let submitButton = document.getElementById("openchatModal");

        // Remove any previous event listeners to avoid duplicate calls
        submitButton.replaceWith(submitButton.cloneNode(true));
        
        // Add event listener again
        document.getElementById("openchatModal").addEventListener("click", function () {
            let orderId = document.getElementById("helpOrderId").value;
            let userId = "{{ $user->id }}"; // Replace with dynamic user ID if available
            let selectedIssue = document.querySelector('input[name="comment"]:checked');

            if (!selectedIssue) {
                toastr.error("Please select an issue before submitting.");
                return;
            }
            const API_BASE_URL = "{{ asset('/backend') }}";


            let order_help  = `${API_BASE_URL}/API/users.php/order_help`;


            // let apiUrl = "https://xeat.co.uk/backend/API/users.php/order_help";
            let formData = new FormData();
            formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
            formData.append("order_id", orderId);
            formData.append("user_id", userId);
            formData.append("comment", selectedIssue.nextElementSibling.innerText.trim());

            fetch(order_help, {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data.code === "200") {
                    toastr.success("Your issue has been submitted successfully.");
                    document.querySelectorAll('input[name="comment"]').forEach(input => input.checked = false);
                    document.querySelector("#orderhelpModal .btn-close").click(); // Close modal

                    let orderHelpModal = bootstrap.Modal.getInstance(document.getElementById("orderhelpModal"));
                    orderHelpModal.hide();

                    let orderHelpId = data.data.order_help_id; // Get order_help_id from API response

                    let chatModal = new bootstrap.Modal(document.getElementById("chatModal"));
                    document.querySelector("#chatModal .wrap_orderid_texts").innerText = `Order #${orderId}`;
                    chatModal.show();

                    document.getElementById("chatModal").setAttribute("data-order-help-id", orderHelpId);


                } else {
                    toastr.error("Failed to submit the issue. Try again later.");
                }
            })
            .catch(error => {
                console.error("Error submitting help request:", error);
                toastr.error("Something went wrong. Please try again.");
            });
        });
    });


    // Function to open chat modal dynamically

   
    document.addEventListener("DOMContentLoaded", function () {
        const API_BASE_URL = "{{ asset('/backend') }}";


        let sendButton       = document.getElementById("sendBtnmsg");
        let messageInput     = document.getElementById("messageInput");
        let chatBox          = document.getElementById("chatBox");
        let chatModalElement = document.getElementById("chatModal");

        // Ensure no duplicate event listeners
        sendButton.replaceWith(sendButton.cloneNode(true));
        sendButton = document.getElementById("sendBtnmsg");

        sendButton.addEventListener("click", function () {
            let message = messageInput.value.trim();
            if (message === "") {
                toastr.error("Message cannot be empty.");
                return;
            }

            let userId = "{{ $user->id }}"; // Replace with dynamic user ID if available
            let orderHelpId = chatModalElement.getAttribute("data-order-help-id"); // Get stored order_help_id

            if (!orderHelpId) {
                toastr.error("Order help ID is missing. Please try again.");
                return;
            }

            let order_help_chat  = `${API_BASE_URL}/API/users.php/order_help_chat`;


            // let apiUrl = "https://xeat.co.uk/backend/API/users.php/order_help_chat";
            let formData = new FormData();
            formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
            formData.append("user_id", userId);
            formData.append("order_help_id", orderHelpId);
            formData.append("comment", message);
            formData.append("type", "0");

            fetch(order_help_chat, {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data.code === "200") {
                    toastr.success("Message sent successfully.");

                    // Append the sent message to the chat box
                    let messageElement = document.createElement("div");
                    messageElement.classList.add("message", "outgoing");
                    messageElement.innerText = message;
                    chatBox.appendChild(messageElement);

                    // Clear input field
                    messageInput.value = "";

                    // Auto-close the chat modal after sending the message
                    let chatModal = bootstrap.Modal.getInstance(chatModalElement);
                    chatModal.hide();
                } else {
                    toastr.error("Failed to send message. Try again later.");
                }
            })
            .catch(error => {
                console.error("Error sending message:", error);
                toastr.error("Something went wrong. Please try again.");
            });
        });

    });


    document.getElementById('viewdetail').addEventListener('hidden.bs.modal', function () {
        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
        document.body.classList.remove('modal-open'); // Remove the class that prevents scrolling
        document.body.style.overflow = 'auto'; // Restore scrolling
    });


</script>
 
<script>

    //Update Profile Section
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("updateProfileForm");

        // Remove any existing event listener before adding a new one
        form.removeEventListener("submit", handleProfileUpdate);
        form.addEventListener("submit", handleProfileUpdate);
    });

    function handleProfileUpdate(e) {
        e.preventDefault(); // Prevent default form submission

        let submitButton = document.querySelector(".wrap_submit");
        submitButton.disabled = true; // Disable button to prevent multiple clicks

        let formData = new FormData(e.target); // Use 'e.target' instead of 'this'
        let user_id = "{{$user->id}}";
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd");
        formData.append("userid", user_id);
        formData.append("name", document.getElementById("name").value);
        formData.append("email", document.getElementById("email").value);

        let imageInput = document.getElementById("image");
        if (imageInput.files.length > 0) {
            formData.append("user_img", imageInput.files[0]); // Ensure correct image key
        }

        const API_BASE_URL = "{{ asset('/backend') }}";


        // Debugging: Log formData to confirm all values are sent
        // for (let [key, value] of formData.entries()) {
        //     console.log(key, value);
        // }

        let update_profile  = `${API_BASE_URL}/API/users.php/update_profile`;


        fetch(update_profile, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {

            if (data.code === "200") {
                toastr.success(data.message);
                document.getElementById("previewImage").src = data.data.image;
                document.getElementById("name").value = data.data.name;
                document.getElementById("email").value = data.data.email;
            } else {
                toastr.error(data.message);
            }
        })
        .catch(error => {
            toastr.error("Something went wrong");
        })
        .finally(() => {
            submitButton.disabled = false; // Re-enable button after request completes
        });
    }


    //Update_password script start here

    document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("changePasswordForm");
        // Remove any existing event listener before adding a new one
        form.removeEventListener("submit", handlePasswordChange);
        form.addEventListener("submit", handlePasswordChange);
    });

    async function handlePasswordChange(event) {
        event.preventDefault(); // Prevent page reload

        let submitButton      = document.querySelector(".password_wrap_submit");
        submitButton.disabled = true; // Disable button to prevent multiple clicks
        let currentPassword   = document.getElementById("current_password").value.trim();
        let newPassword       = document.getElementById("new_password").value.trim();
        let confirmPassword   = document.getElementById("confirm_password").value.trim();

        // Validate input fields
        if (!currentPassword || !newPassword || !confirmPassword) {
            toastr.error("All fields are required.");
            submitButton.disabled = false;
            return;
        }

        if (newPassword.length < 8) {
            toastr.error("New password must be at least 8 characters long.");
            submitButton.disabled = false;
            return;
        }

        if (newPassword !== confirmPassword) {
            toastr.error("New password and confirm password do not match.");
            submitButton.disabled = false;
            return;
        }

        // Create FormData object
        let formData = new FormData();
        formData.append("accesstoken", "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd"); // Replace with actual access token
        formData.append("olt_password", currentPassword);
        formData.append("new_password", newPassword);
        formData.append("contact", "{{ $user->contact }}"); // Replace with the actual user contact info

        try {
        let update_password  = `${API_BASE_URL}/API/users.php/update_password`;

            let response = await fetch(update_password, {
                method: "POST",
                body: formData
            });

            let result = await response.json();
            console.log("Response:", result);

            if (result.code === "200") {
                toastr.success(result.message);
                // Optionally, clear form fields
                document.getElementById("changePasswordForm").reset();
            } else {
                toastr.error(result.message);
            }
        } catch (error) {
            console.error("Error:", error);
            toastr.error("Something went wrong. Please try again.");
        } finally {
            submitButton.disabled = false; // Re-enable button
        }
    }


    //end update_password script


    //Start delete_user script

    document.addEventListener("DOMContentLoaded", function () {
     const deleteBtn = document.getElementById("user_delete");

        // Remove all previous click events before adding a new one
        deleteBtn.replaceWith(deleteBtn.cloneNode(true)); // Removes all existing event listeners
        const newDeleteBtn = document.getElementById("user_delete");

      newDeleteBtn.addEventListener("click", async function (event) {
        event.preventDefault(); // Prevent default link behavior
        event.stopImmediatePropagation(); // Stop all other event listeners on this element

        let userId = "{{$user->id}}"; // User ID
        let accessToken = "VIBadfsgsdgadfssadf231312323cxfsdf342q43qdswd"; // API Token

        let formData = new FormData();
        formData.append("accesstoken", accessToken);
        formData.append("user_id", userId);

        try {
        let delete_user  = `${API_BASE_URL}/api/delete_user`;

            let response = await fetch(delete_user, {
                method: "POST",
                body: formData
            });

            let data = await response.json();

            if (data.code === "200") {
                toastr.success("Account deleted successfully. Redirecting...");
                
                // Disable the button after the first success message to prevent multiple calls
                newDeleteBtn.disabled = true; 

                setTimeout(() => {
                    window.location.href = "{{ route('login') }}"; // Redirect after deletion
                }, 2000);
            } else {
                toastr.error(data.message || "Failed to delete account.");
            }
        } catch (error) {
            console.error("Error:", error);
            toastr.error("Something went wrong. Please try again.");
        }
      }, { once: true }); // Ensures the event runs only once
   });





</script>

<script type="text/javascript">
    // order related help
	$(document).ready(function () {
    $('.wraps_radio').change(function () {
        // Remove 'active' class from all parent divs
        $('.wraps_issues').removeClass('issueactive');

        // Add 'active' class to the parent div of the selected radio
        $(this).closest('.wraps_issues').addClass('issueactive');
    });
});
</script>

<!---------------------------------------------------- chat modal start--------------------------------------->


<!-- <script>

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
            chatBox.appendChild(newMessage); // Adds message at the bottom
            input.value = "";
            scrollToBottom(); // Scroll to bottom after adding a new message
        }
    });

    document.getElementById("messageInput").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            document.getElementById("sendBtnmsg").click();
        }
});

// Scroll to bottom when the modal is opened
document.getElementById("chatModal").addEventListener("shown.bs.modal", scrollToBottom);

// Ensure chat starts at the bottom on page load
window.onload = scrollToBottom;
</script> -->


<!-------------------------------------------- logout modal start ---------------------------------------------------------->


<script type="text/javascript">
	$('.wrap_chats-open').click(function(){
    $('#chatModal').modal('show');
 });
</script>


<script>
//     var input = document.querySelector("#locationphone");
//   var iti = window.intlTelInput(input, {
//     initialCountry: "auto",
//     geoIpLookup: function(callback) {
//       fetch("https://ipapi.co/json")
//         .then(response => response.json())
//         .then(data => callback(data.country_code))
//         .catch(() => callback("us")); // Default to US if lookup fails
//     },
//     separateDialCode: true, // Shows country code separately
//     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
//   });
</script>


<script>
document.getElementById("wrap_next").addEventListener("click", function() {
    document.querySelector(".wraps_none-next").style.display = "none"; // Hide the div
    document.querySelector(".wraps_addrress_fields").style.display = "block"; // Show the form div
});
</script>

<script>
    //logout functionality start here

    document.addEventListener("DOMContentLoaded", function () {
    const logoutButton = document.getElementById("user_logout");

    // Remove existing event listeners to prevent duplicate calls
    logoutButton.removeEventListener("click", handleLogout);

    // Add event listener
    logoutButton.addEventListener("click", handleLogout);
});

function handleLogout() {
    let logoutButton = this;
    logoutButton.disabled = true; // Prevent multiple clicks

    fetch("{{ route('logout_user') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
            "Content-Type": "application/json",
        },
        body: JSON.stringify({})
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success("Logout successful!");

             // **CLEAR LOCALSTORAGE ON LOGOUT**
             localStorage.removeItem("selected_address");
            localStorage.removeItem("selected_lat");
            localStorage.removeItem("selected_lng");
            sessionStorage.removeItem("address_saved");


            setTimeout(() => {
                window.location.href = "{{ route('login') }}";
            }, 2000);
        } else {
            toastr.error("Logout failed. Try again.");
        }
    })
    .catch(error => {
        console.error("Error:", error);
        toastr.error("An error occurred. Please try again.");
    })
    .finally(() => {
        logoutButton.disabled = false; // Re-enable button
    });
}



</script>
@endpush