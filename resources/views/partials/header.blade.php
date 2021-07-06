@guest
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            app tablet
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

    {{-- //altro --}}


    {{-- <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="div">
        <a class="" href="{{ url('/') }}"> 

        </a>
        </div>

        <div class="nav_top_right">
            <span class="hamburger_nav"><i class="fas fa-hamburger"></i></span>
            <a class="ml-2 " href="{{ route('login') }}">
                <button class="button_card_menu ">
                    <i class="fas fa-external-link-square-alt"></i>
                        <span>{{ __('Login') }}</span>
                </button>
            </a>
                             
        </div>

    </div>
    


    @else



 <div class="main_nav_home">
    <a class="ml-2 " href="{{ route('logout') }}">
        <button class="btn " onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
                <span>{{ __('Logout') }}</span>
        </button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
            @csrf
        </form>  

    </a>

    <a class="ml-2 mr-4" href="{{route('home')}}">
        <button class="button_card_menu " >
            <i class="fas fa-chart-line"></i>
            <span>Torna alla Dashboard</span>
        </button>

    </a>

    


</div>


    <div class="nav_top_right">

        

                         
    </div>
    

</div>
</div> --}}
@endguest