<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="{{ route('front.index') }}"><img src="{{ asset('assets/img/header_logo.svg') }}" alt=""
                    class="img-fluid" style="width:30%;"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto align-items-center mb-lg-0">


                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item ">
                                <a href="{{ route('login') }}" class="nav-link">login in</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item add-btn-hide">
                                <button type="button" class="btn btn-success btn-hover btn_a"><a
                                        href="{{ route('register') }}"
                                        class="d-flex justify-content-center align-items-center  "> <img
                                            src="./assets/img/Fill 4.svg" class="me-2 " alt="">
                                        Register</a></button>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="{{ route('front.index') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="{{ route('front.live.match') }}">Live Matching</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="#">Highlights</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="{{ route('front.news') }}">News</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="#">Blog</a>
                        </li>

                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="btn dropdown-toggle btn btn-success btn-hover btn_a" href="#" role="button"
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    @if (Auth::user()->hasRole('admin'))
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Dashboard
                                    </a>
                                    @endif
                                    
                                    <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>

                        {{-- <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline small">{{ Auth::user()->name }}</span>
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            </div>
                            
                        </li> --}}

                    @endguest
                </ul>


                <span></span>
            </div>
        </div>
    </nav>
</header>
