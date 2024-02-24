@extends('layouts.app')


@section('content')
    {{-- Hero --}}

    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">


        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5">
                    <h2 class="text-white">{{ __('post.wellcome') }}</h2>

                    <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                        <span>{{ __('post.blogger is') }}</span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">{{ __('post.modern') }}</b>
                            <b>{{ __('post.creative') }}</b>
                            <b>{{ __('post.lifestyle') }}</b>
                        </span>
                    </h1>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 253">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>

    </section>


    <section class="about-section" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-lg-5 mb-4">{{ __('post.about') }} Blogger</h2>
                </div>

                <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                    <h3 class="mb-3">Blogger {{ __('post.history') }}</h3>

                    <p>{{ __('post.about-text') }}</p>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                    <div class="member-block">
                        <div class="member-block-image-wrap">
                            <img src="images/members/portrait-young-handsome-businessman-wearing-suit-standing-with-crossed-arms-with-isolated-studio-white-background.jpg"
                                class="member-block-image img-fluid" alt="">


                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a class="social-icon-link " href=""> <svg xmlns="http://www.w3.org/2000/svg"
                                            width="30" height="30" fill="currentColor" class="bi bi-whatsapp"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                        </svg></a>
                                </li>

                                <li class="social-icon-item">
                                    <a class="social-icon-link " href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="member-block-info d-flex align-items-center">
                            <h4>Michael</h4>

                            <p class="ms-auto">{{ __('post.founder') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="member-block">
                        <div class="member-block-image-wrap">
                            <img src="images/members/successful-asian-lady-boss-red-blazer-holding-clipboard-with-documens-pen-working-looking-happy-white-background.jpg"
                                class="member-block-image img-fluid" alt="">

                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a class="social-icon-link " href=""> <svg xmlns="http://www.w3.org/2000/svg"
                                            width="30" height="30" fill="currentColor" class="bi bi-whatsapp"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                        </svg></a>
                                </li>

                                <li class="social-icon-item">
                                    <a class="social-icon-link " href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="member-block-info d-flex align-items-center">
                            <h4>Sandy</h4>

                            <p class="ms-auto">{{ __('post.co-founder') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-bg-image">
        <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0">
            </path>
            <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z"
                stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                stroke-width="0"></path>
        </svg>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <div class="section-bg-image-block">
                        <h2 class="mb-lg-3">{{ __('post.member') }}</h2>

                        <p>{{ __('post.member-text') }}</p>


                        <div class="reg">
                            <a class="custom-btn" href="{{ route('register') }}">{{ __('post.register') }}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z"
                stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                stroke-width="0"></path>
        </svg>
    </section>




    <section class="events-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="mb-lg-3">{{ __('post.last added') }}</h2>
                </div>

                @foreach ($posts as $post)
                    <div class="row custom-block mb-3">
                        <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                            <div
                                class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0"></h6>

                                <strong class="text-white">{{ date('d-m-y', strtotime($post->updated_at)) }}</strong>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                            <div class="custom-block-image-wrap">
                                <a href="/blog/{{ $post->slug }}">
                                    <img src="/images/{{ $post->image_path }}" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 order-3 order-lg-0">
                            <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="event-detail.html" class="events-title mb-3">{{ $post->title }}</a>

                                <p class="mb-0">
                                    {{ implode(' ', array_slice(str_word_count($post->description, 1), 0, 10)) }}</p>


                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">
                                        <div class="mb-4 mb-lg-0">
                                            <div class="d-flex flex-wrap align-items-center mb-1">
                                                <span class="custom-block-span">{{ __('post.author') }}:</span>
                                                <p class="mb-0">{{ $post->user->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row justify-content-center mt-3"> <!-- New row for the second div, aligned to center -->
                                        <div class="col-12 col-md-6"> <!-- Takes up 6 columns in medium devices and the full width in mobile -->
                                            <div class="d-flex align-items-center justify-content-center">
                                                <a href="/blog/{{ $post->slug }}" class="btn custom-btn">{{ __('post.read more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>


@endsection
