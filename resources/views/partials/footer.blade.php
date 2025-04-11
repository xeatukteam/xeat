<footer class="wrap_site-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="wrap-footer">
					<div class="footer_logo">
						<img src="{{ $homepageSection5->image }}" alt="footer-logo">
					</div>

					<div class="footer_texts">
						<p>{{ $homepageSection5->message }}</p>
					</div>
					<div class="social-icons">
                        <a href="https://www.facebook.com/share/12KSiWGWmSf/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.tiktok.com/@xeatlk?_t=ZS-8uDKaYUmksL&_r=1" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://www.instagram.com/xeat.co.uk/profilecard/?igsh=bDN5ZDhoZHhieDJv" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/96661534" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
				</div>
			</div>

			<div class="col-lg-8">
				<div class="row">
				    <div class="col-lg-3">
						<div class="wrap_quick-links">
							<h4>Quick Links</h4>
							<div class="quick-menu_links">
								<ul>
									@if(isset($links) && $links->count() > 0)
										@foreach ($links as $link)
											<li>
												<a href="{{ $link->link }}">{{ $link->title }}</a>
											</li>
										@endforeach
									@else
										<li>No links available</li>
									@endif
								</ul>
							</div>
						</div>
					</div>


					<div class="col-lg-4">
						<div class="newsletter_section">
                                    <h4>Head office</h4>

                              <div class="wrap_icon_box">
                              	<div class="inner_icon">
                              		<a href="https://www.google.co.uk/maps?q=393+Luton+Road,+Harpenden,+UK" target="_blank"><i class="fa-solid fa-location-dot"></i></a>
                              	</div>
                              	<div class="box_texts-wraps">
                              		<a href="https://www.google.co.uk/maps?q=393+Luton+Road,+Harpenden,+UK" target="blank">{{$head_office->address}}</a>
                              	</div>
                              </div> 

                            

                               <div class="wrap_icon_box">
                              	<div class="inner_icon">
                              		<a href="tel:+44 1582510304"><i class="fa-solid fa-phone-volume"></i></a>
                              	</div>
                              	<div class="box_texts-wraps">
                              		<a href="tel:+44 1582510304">{{$head_office->phone}}</a> 
                              	</div>
                              </div>


                              <div class="wrap_icon_box">
                              	<div class="inner_icon">
                              		<a href="mailto:xeatuk@gmail.com"><i class="fa-solid fa-envelope-open-text"></i></a>
                              	</div>
                              	<div class="box_texts-wraps">
                              		<a href="mailto:xeatuk@gmail.com">{{$head_office->email}}</a>
                              	</div>
                              </div>
                            </div>
					</div>

					<div class="col-lg-5">
                            <div class="newsletter_section">
                                    <h4>Branch office</h4>

                             

                              <div class="wrap_icon_box">
                              	<div class="inner_icon">
                              		<a href="https://www.google.co.uk/maps?q=XEAT,+1st+Cross+Street,+Vavuniya,+Sri+Lanka" target="_blank"><i class="fa-solid fa-location-dot"></i></a>
                              	</div>
                              	<div class="box_texts-wraps">
                              		<a href="https://www.google.co.uk/maps?q=XEAT,+1st+Cross+Street,+Vavuniya,+Sri+Lanka" target="blank">{{ $branch_office->address }}</a>
                              	</div>
                              </div>

                               

                              <div class="wrap_icon_box">
                              	<div class="inner_icon">
                              		<a href="tel:+94 0775207752"><i class="fa-solid fa-phone-volume"></i></a>
                              	</div>
                              	<div class="box_texts-wraps">
                              		<a href="tel:+94 0775207752">{{$branch_office->phone}}</a> 
                              	</div>
                              </div>

                              <div class="wrap_icon_box">
                              	<div class="inner_icon">
                              		<a href="mailto:xeatuk@gmail.com"><i class="fa-solid fa-envelope-open-text"></i></a>
                              	</div>
                              	<div class="box_texts-wraps">
                              		<a href="mailto:xeatuk@gmail.com"> {{ $branch_office->email }}</a>
                              	</div>
                              </div>


                                <div class="payment-method">
                                    <h5>We accept Payment methods:</h5>
                                </div>

                                <div class="payment-icon-images">
                                    <a href="#">
                                        <img src="{{ asset('public/images/Visa.png') }}" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('public/images/Amex.png') }}" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('public/images/Mastercard.png') }}" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('public/images/appleimag.png') }}" alt="img" class="applepay">
                                    </a>
                                </div>
                            </div>
                        </div>
				</div>
			</div>
		</div>
	</div>

	<div id="cart-container"></div>

	<!-- <div class="track_order">
		<div class="wraps_row">
			<div class="wraps_left-texts">
				<h5>Order id: 446785</h5>
				<p>Your order is ready to collect</p>
			</div>
			<div class="wraps_right-button">
				<a href="#" class="wraps_track_order"><button type="button" class="order_track_button">Track Order</button></a>
			</div>
		</div>
		
	</div> -->
</footer>

<div class="copyright">
        <div class="container">
                    <div class="copyright-text">
                        <p>©2025 <span>Xeat</span>. All rights reserved</p>
            </div>
        </div>
    </div>