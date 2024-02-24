<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 340" class="back_nav">
    <path fill="#3D405B" fill-opacity="1"
        d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
    </path>
</svg>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
            <span class="navbar-brand-text">
                Blogger
            </span>
        </a>

        <div class="d-lg-none ms-auto me-3">
            <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                role="button" aria-controls="offcanvasExample">{{ __('post.login') }}</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('home') }}">{{ __('post.blog') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('blog.index') }}">{{ __('post.posts') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('home') }}#about">{{ __('post.about') }}</a>
                </li>

                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" class="nav-link" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
                @guest
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('post.register') }}</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <div class="d-none d-lg-block ms-lg-3">
                            <a class="nav-link  custom-btn custom-border-btn" data-bs-toggle="offcanvas"
                                href="#offcanvasExample" role="button"
                                aria-controls="offcanvasExample">{{ __('post.login') }}</a>
                        </div>
                    </li>
                @else
                    <span class="nav-link" style="font-size: 20px">{{ Auth::user()->name }}</span>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link "
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('post.logout') }}</a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </ul>


        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{ __('post.login') }}</h5>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body d-flex flex-column">
        <form class="custom-form member-login-form" method="POST" action="{{ route('login') }}" role="form">
            @csrf
            <div class="member-login-form-body">
                <div class="mb-4">
                    <label class="form-label mb-2" for="member-login-number">{{ __('post.email') }}</label>

                    <input id="email" type="email" class="form-control @error('email') border-red-500 @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label mb-2" for="member-login-password">{{ __('post.password') }}</label>

                    <input id="password" type="password"
                        class="form-control @error('password') border-red-500 @enderror" name="password" required>

                    @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-check mb-4">
                    <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                        <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span class="ml-2">{{ __('post.remember me') }}</span>
                    </label>

                </div>

                <div class="col-lg-5 col-md-7 col-8 mx-auto">
                    <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-gray-700 hover:bg-gray-500 sm:py-4">
                        {{ __('post.login') }}
                    </button>
                </div>

                <div class="text-center my-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                            href="{{ route('password.request') }}">
                            {{ __('post.forget password') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>

        <div class="mt-auto mb-5">
            <p>
                <strong class="text-white me-3">{{ __('post.any question') }}</strong>

                <a href="tel: 010-020-0340" class="contact-link">
                    010-020-0340
                </a>
            </p>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#3D405B" fill-opacity="1"
            d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
