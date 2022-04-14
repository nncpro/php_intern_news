<header class="primary">
    <div class="firstbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="brand">
                        <a href="index.html">
                            <img src="{{ asset('bower_components/magz-master-theme/images/logo.png') }}"
                                alt="Magz Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form class="search" autocomplete="off">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control"
                                    placeholder="{{ __('Type something here') }}">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="ion-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-12 text-right">
                    <ul class="nav-icons">
                        <li><a href="register.html"><i class="ion-person-add"></i>
                                <div>{{ __('Register') }}</div>
                            </a></li>
                        <li><a href="login.html"><i class="ion-person"></i>
                                <div>{{ __('Login') }}</div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start nav -->
    <nav class="menu">
        <div class="container">
            <div class="brand">
                <a href="#">
                    <img src="{{ asset('bower_components/magz-master-theme/images/logo.png') }}" alt="Magz Logo">
                </a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
            </div>
            <div id="menu-list">
                <ul class="nav-list">
                    <li class="for-tablet nav-title"><a>{{ __('Menu') }}</a></li>
                    <li class="for-tablet"><a href="login.html">{{ __('Login') }}</a></li>
                    <li class="for-tablet"><a href="register.html">{{ __('Register') }}</a></li>
                    <li><a href="category.html">{{ __('Home') }}</a></li>
                    <li class="dropdown magz-dropdown">
                        <a href="category.html">{{ 'Categories' }}<i class="ion-ios-arrow-right"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">{{ __('Category') }}</a></li>
                            <li class="dropdown magz-dropdown">
                                <a href="#">{{ __('Category') }}<i class="ion-ios-arrow-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="403.html">{{ __('Sub Category') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown magz-dropdown"><a href="#"> {{ __('Pages') }} <i
                                class="ion-ios-arrow-right"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="category.html">{{ __('About') }}</a></li>
                            <li><a href="category.html">{{ __('Contact') }}</a></li>
                        </ul>
                    </li>
                    <li class="dropdown magz-dropdown"><a href="#">{{ __('Personal') }} <i
                                class="ion-ios-arrow-right"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon ion-person"></i> {{ __('My Account') }}</a></li>
                            <li><a href="#"><i class="icon ion-heart"></i> {{ __('Manage Articles') }}</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon ion-log-out"></i> {{ __('Logout') }}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End nav -->
</header>