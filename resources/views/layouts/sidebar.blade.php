<!-- navbar -->
<nav class="sidebar">
    <div calss="text">
        <br>
        {{-- <img src="{{ asset('images/llog.png') }}" alt="" title=""> --}}
        <hr>
        <ul>
            <li>
                <a class="feat-btn">{{ __('pages') }}
                    <i class="fas fa-caret-down first"></i>
                </a>
                <ul class="feat-show">
                    <li> <a href="/home" class="w3-bar-item w3-button">{{ __('Home') }}</a></li>
                    <li><a href="/about" class="w3-bar-item w3-button">{{ __('AboutUs') }}</a></li>
                    <li><a href="/services" class="w3-bar-item w3-button">{{ __('VISION') }}</a></li>
                    <li><a href="/objective" class="w3-bar-item w3-button">{{ __('OBJECTIV') }}</a></li>



                </ul>
            </li>
            <li>
                <a class="feat-btn">{{ __('Requests') }}
                    <i class="fas fa-caret-down first"></i>
                </a>
                <ul class="feat-show">
                    <li> <a href="/contactus" class="w3-bar-item w3-button">{{ __('contactus') }}</a></li>
                    {{-- <li> <a href="/form" class="w3-bar-item w3-button">{{ __('form') }}</a></li> --}}



                </ul>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link class="feat-show" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>

            </li>
        </ul>
    </div>
</nav>
<script>
    $('.feat-btn').click(function() {
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
    });
    $('nav ul li').click(function() {
        $(this).addClass("active").siblings().removeClass("active");
    });
</script>