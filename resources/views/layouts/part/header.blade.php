<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white bg-gradient ">
        <!-- Container wrapper -->
        <div class="container-fluid  p-3 text-dark">
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars text-dark"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img
                        src="../img/logo.png"
                        height="45"
                        alt=""
                        loading="lazy"
                    />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-4 " >
                    <li class="nav-item ">
                        <a class="nav-link text-dark px-4 " href="#sec_one">Информация о компании</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-4" href="#sec_two">Наши работы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-4 " href="#sec_fre">Список товара</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-4" href="#sec_fo">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-4" href="#">Отзывы</a>
                    </li>

                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->

                <a class="nav-link text-dark px-4" href="#" id="number"><font id="orange">+7 (3532) 240-230</font>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left -->

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        @if(Cart::getContent()->count() > 0)
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="{{ route('cart.index') }}">
                                    <span class="badge badge-success z-depth-1 mr-1"> {{ Cart::getContent()->count() }} </span>
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="text-primary clearfix d-none d-sm-inline-block"> Корзина </span>
                                </a>
                            </li>
                        @endif

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item " >
                                <a class="nav-link   " id="header_auth" href="{{ route('login') }}">{{ __('Войти') }}</a>
                            </li>
                            <li class="nav-item" >
                                @if (Route::has('register'))
                                    <a class="nav-link" id="header_auth" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="header_auth" class="nav-link dropdown-toggle " href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>


                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                >


                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>

                <!-- Avatar -->

                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                >

                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
</header>
