<body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=home><img src="/img/logo.png" alt=""></a>
                    </li>
                </ul>
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
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Blog') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('preguntas') }}">{{ __('Preguntas') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresa') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Crea una cuenta') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href=login><i class="fas fa-shopping-cart"></i></a>
                            </li>
                            @else           
                            @if (Auth::user()->role!='9')
                                @include('partials.navUser')
                            @else
                                @include('partials.navAdmin')
                            @endif    
                            @endguest
                    </ul>
                </div>
            </div>
        </nav>
</body>