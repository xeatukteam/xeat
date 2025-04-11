@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<main>

        <!-- first section -->
	<section class="wrap_contact-banner">
			<div class="container">
				<div class="col-lg-12">
				<div class="wrap_about_heading">
					<h1>Contact Us</h1>
				</div>
			</div>
			</div>
			
	</section>

    <section class="wrap_about-texts">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="wrap_contact">
                        <h2>Get in Touch</h2>

                        <div class="wrapicon-text">
                            <div class="contacticon">
                                <a href="mailto: xeatuk@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                            </div>
                            <div class="contacttexts">
                                <h4>Email Us</h4>
                                <p><a href="mailto: xeatuk@gmail.com">xeatuk@gmail.com</a></p>
                            </div>
                        </div>

                        <div class="wrapicon-text">
                            <div class="contacticon">
                                <a  href="tel: +44 01582 510304"><i class="fa-solid fa-phone-volume"></i></a>
                            </div>
                            <div class="contacttexts">
                                <h4>Call Us</h4>
                                <p><a href="tel: +44 01582 510304">+44 01582 510304</a></p>
                                <p><a href="tel: +94 0775207752">+94 0775207752</a></p>
                            </div>
                        </div>

                        <div class="wrapicon-text">
                            <div class="contacticon">
                                <a href="https://maps.app.goo.gl/4k7z9rtXoLbbfseY8" target="blank"><i class="fa-solid fa-location-dot"></i></a>
                            </div>
                            <div class="contacttexts">
                                <h4>Location</h4>
                                <p><a href="https://maps.app.goo.gl/4k7z9rtXoLbbfseY8" target="blank">393 Luton Road Harpenden AL53NF UNITED KINGDOM</a></p>
                            </div>
                        </div>

                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    
                    <form class="wrap_contact-form" action="#">
                        <div class="mb-4 mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                        </div>
                        <div class="mb-4 mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                        </div>
                        <div class="mb-4 mt-3">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
                        </div>

                        <div class="mb-3 mt-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary wrap_submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


            <!------------------------------------ faq section end ---------------------------------------------------------->
        <section class="map">
            <div class="container">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2465.6063848119866!2d-0.38288619999999995!3d51.8316205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487647f53fb43f93%3A0x9a4bd2178513e67b!2s393%20Luton%20Rd%2C%20Harpenden%20AL5%203NF%2C%20UK!5e0!3m2!1sen!2sin!4v1740032277706!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>


</main>

@endsection
