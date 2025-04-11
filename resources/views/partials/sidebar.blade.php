<!-- Sidebar -->
<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- Menu Items -->
    <ul class="menu-sidebar p-t-95 p-b-70">
        <li class="t-center m-b-13">
            <a href="{{ route('home') }}" class="txt19">Home</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ url('about_web') }}" class="txt19">About</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('contact') }}" class="txt19">Contact</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('faq') }}" class="txt19">FAQ</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('privacy') }}" class="txt19">Privacy Policy</a>
        </li>

        <li class="t-center">
            <!-- Register Button -->
            <a href="{{ route('register') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                Register Restaurant
            </a>
        </li>
    </ul>

    <!-- Sidebar Gallery (if needed) -->
    <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
        <!-- Add gallery content here if required -->
    </div>
</aside>
