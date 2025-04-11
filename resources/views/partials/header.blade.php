<header class="main_header {{ Route::currentRouteName() == 'privacy' ? 'hide_menubars' : '' }}">
    <div class="container">
        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-sm navbar-light wrap_desktop">
                    <div class="header_left">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('public/images/combine-logo.png') }}" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        @if (session()->has('user_id'))
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about_web') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>

                        @endif


                    </div>

                    @if (session()->has('user_id'))
                    <div class="header_center">
                        <form class="d-flex wrap_searchform" action="#" method="GET">
                            <input class="form-control wrap_searchinput" type="text" name="query" placeholder="Search">
                            <button class="btn btn-primary wrap_searchbtn" type="submit">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.25 10.5C19.25 15.3325 15.3325 19.25 10.5 19.25C5.66751 19.25 1.75 15.3325 1.75 10.5C1.75 5.66751 5.66751 1.75 10.5 1.75C15.3325 1.75 19.25 5.66751 19.25 10.5ZM10.5 20.75C16.1609 20.75 20.75 16.1609 20.75 10.5C20.75 4.83908 16.1609 0.25 10.5 0.25C4.83908 0.25 0.25 4.83908 0.25 10.5C0.25 16.1609 4.83908 20.75 10.5 20.75ZM19.5303 18.4697C19.2374 18.1768 18.7626 18.1768 18.4697 18.4697C18.1768 18.7626 18.1768 19.2374 18.4697 19.5303L20.4696 21.5303C20.7625 21.8232 21.2374 21.8232 21.5303 21.5303C21.8232 21.2374 21.8232 20.7625 21.5303 20.4696L19.5303 18.4697Z" fill="#4D5461"></path>
                                </svg>
                            </button>
                        </form>

                        <div class="wraps_header-icons">
						     	<!-- <a href="https://wa.me/9477520775" target="_blank" class="helpsupport_wraps"><i class="fa-solid fa-headset"></i></a> -->
						     	<a href="{{ route('cart') }}" class="cart_wraps">
                                    
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.99967 4.66536H20.9997C23.577 4.66536 25.6663 6.7547 25.6663 9.33203V15.1654C25.6663 17.7427 23.577 19.832 20.9997 19.832H11.6663C9.08901 19.832 6.99967 17.7427 6.99967 15.1654V4.66536ZM6.99967 4.66536C6.99967 3.3767 5.95501 2.33203 4.66634 2.33203H2.33301" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.833 23.918C12.833 24.8845 12.0495 25.668 11.083 25.668C10.1165 25.668 9.33301 24.8845 9.33301 23.918C9.33301 22.9515 10.1165 22.168 11.083 22.168C12.0495 22.168 12.833 22.9515 12.833 23.918Z" stroke-width="1.5"></path>
                                                <path d="M23.333 23.918C23.333 24.8845 22.5495 25.668 21.583 25.668C20.6165 25.668 19.833 24.8845 19.833 23.918C19.833 22.9515 20.6165 22.168 21.583 22.168C22.5495 22.168 23.333 22.9515 23.333 23.918Z" stroke-width="1.5"></path>
                                                <path d="M16.333 9.33203L16.333 15.1654" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M19.2503 12.25L13.417 12.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                    @php
                                        $userId = session('user_id');
                                        $cartCount = 0;

                                        if ($userId) {
                                            $cartCount = DB::table('cart_items')
                                                ->join('cart', 'cart.id', '=', 'cart_items.cart_id')
                                                ->where('cart.user_id', $userId)
                                                ->sum('cart_items.count');
                                        }
                                    @endphp

                            @if($cartCount > 0)
                                <span  id="cart-badge-count" class="cart-badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $cartCount }}
                                </span>
                           @endif
                                        
                                </a>
						</div>
                    </div>
                    @endif



                    <div class="header_right">
                        <a href="https://wa.me/9477520775" target="_blank" class="helpsupport_wraps">
                           <i class="fa-brands fa-whatsapp"></i>
                        </a>

                        @if (session()->has('user_id'))
                            <a href="{{ route('user_dashboard') }}" class="wrap_userlogin">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="wrap_login">Login</a>
                            <a href="{{ route('signup') }}" class="wrap_signup">Signup</a>
                        @endif
                    </div>
                </nav>

                <!-- Mobile Navbar -->

                <!--------------------------------- Mobile Navbar --------------------------------->
                <nav class="navbar navbar-expand-lg wrap_mobile">
                    <div class="wrapper_mobile-menus">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('public/images/combine-logo.png') }}" alt="logo">
                        </a>

                        <div class="wraps_header-icons">
                            <a href="https://wa.me/9477520775" target="_blank" class="helpsupport_wraps">
                                <i class="fa-solid fa-headset"></i>
                            </a>
                            <a href="{{ route('cart') }}" class="cart_wraps">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99967 4.66536H20.9997C23.577 4.66536 25.6663 6.7547 25.6663 9.33203V15.1654C25.6663 17.7427 23.577 19.832 20.9997 19.832H11.6663C9.08901 19.832 6.99967 17.7427 6.99967 15.1654V4.66536ZM6.99967 4.66536C6.99967 3.3767 5.95501 2.33203 4.66634 2.33203H2.33301" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.833 23.918C12.833 24.8845 12.0495 25.668 11.083 25.668C10.1165 25.668 9.33301 24.8845 9.33301 23.918C9.33301 22.9515 10.1165 22.168 11.083 22.168C12.0495 22.168 12.833 22.9515 12.833 23.918Z" stroke-width="1.5"></path>
                                    <path d="M23.333 23.918C23.333 24.8845 22.5495 25.668 21.583 25.668C20.6165 25.668 19.833 24.8845 19.833 23.918C19.833 22.9515 20.6165 22.168 21.583 22.168C22.5495 22.168 23.333 22.9515 23.333 23.918Z" stroke-width="1.5"></path>
                                    <path d="M16.333 9.33203L16.333 15.1654" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M19.2503 12.25L13.417 12.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>

                                @php
                                        $userId = session('user_id');
                                        $cartCount = 0;

                                        if ($userId) {
                                            $cartCount = DB::table('cart_items')
                                                ->join('cart', 'cart.id', '=', 'cart_items.cart_id')
                                                ->where('cart.user_id', $userId)
                                                ->sum('cart_items.count');
                                        }
                                    @endphp

                            @if($cartCount > 0)
                                <span id="cart-badge-count" class="cart-badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $cartCount }}
                                </span>
                           @endif
                            </a>
                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about_web')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                            </li>
                            
                            @if (session()->has('user_id'))
                                <li class="nav-item">
                                    <a class="nav-link" class="wrap_userlogin" href="{{ route('user_dashboard') }}"><i class="fa-solid fa-user"></i></a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('signup') }}">Signup</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
<!--------------------------------- Mobile Navbar End --------------------------------->

                {{-- <nav class="navbar navbar-expand-lg wrap_mobile">
                    <div class="wrapper_mobile-menus">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('public/images/combine-logo.png') }}" alt="logo">
                        </a>

                        <div class="header_right">
                            <a href="https://wa.me/9477520775" target="_blank" class="helpsupport_wraps">
                            <i class="fa-brands fa-whatsapp"></i>
                            </a>

                            @if (session()->has('user_id'))
                                <a href="user-dashboard.html" class="wrap_userlogin">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="wrap_login">Login</a>
                                <a href="{{ route('signup') }}" class="wrap_signup">Signup</a>
                            @endif
                        </div>
                    </div>
                </nav> --}}
                <!-- Mobile Navbar End -->

            </div>
        </div>
    </div>
</header>
