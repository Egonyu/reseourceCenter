<!DOCTYPE html>
<html class="" lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('partials.head')

<body class="skill has-banner is-laravel guest ">
    <script id="flash-template" type="text/template">
        <div class="notification is-primary for-user" dusk="flash-notification">
            <a href="#" class="notification-body inherits-color" target="_blank" rel="noreferrer noopener"></a>
        </div>
    </script>
    <div id="root" class="page">
        <div>
            <div class="header-wrap tw-relative tw-bg-blue-darker">
                <nav class="section new-nav lg:tw-z-50 tw-py-4 tw-bg-transparent lg:tw-py-3">
                    <div class="tw-flex tw-justify-between tw-h-full tw-items-center tw-relative">
                        <div id="header-logo-arrow" class="has-animation xl:tw-flex-1 tw-mr-4 xl:tw-mr-0">
                            <a href="../index.html" @click.right.prevent="visitAssetsWebsite" class="tw-cursor-pointer tw-leading-none tw-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
                                    <g fill="none" fill-rule="evenodd">
                                        <g fill="#FFF">
                                            <path d="M4.608 6.721l3.798 3.799a1.948 1.948 0 0 1-2.754 2.754L1.853 9.476A1.948 1.948 0 0 1 4.608 6.72zM12.631 14.745l8.086 8.085a1.948 1.948 0 1 1-2.755 2.754L9.877 17.5a1.948 1.948 0 0 1 2.754-2.754z" />
                                            <path d="M2.755 6.22L24.105.836a2.057 2.057 0 0 1 2.483 1.433 1.94 1.94 0 0 1-1.392 2.411l-21.35 5.385a2.057 2.057 0 0 1-2.483-1.434 1.94 1.94 0 0 1 1.392-2.41z" />
                                            <path d="M17.384 23.604l5.385-21.35A1.94 1.94 0 0 1 25.179.86a2.057 2.057 0 0 1 1.434 2.483l-5.384 21.35a1.94 1.94 0 0 1-2.411 1.392 2.057 2.057 0 0 1-1.434-2.482z" />
                                        </g>
                                        <path class="tw-fill-current" d="M16.541 13.778l-7.63 7.631a2.015 2.015 0 1 1-2.85-2.849l7.631-7.63a2.015 2.015 0 1 1 2.85 2.848zM5.111 25.208l-1.108 1.109a2.015 2.015 0 1 1-2.85-2.85l1.11-1.108a2.015 2.015 0 1 1 2.848 2.85z" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="navbar-links tw-relative tw-hidden md:tw-flex md:tw-justify-around tw-text-sm xl:tw-pt-2 xl:tw-w-1/2">
                            <a href="laravel.html" class="navbar-link tw-text-white is-active xl:tw-w-1/5 xl:tw-text-center md:tw-px-5 xl:tw-px-0 tw-block tw-uppercase tw-text-transparent-50 tw-font-semibold hover:tw-text-white">Journeys</a>
                            <a href="../seriesa236.html?curated" class="navbar-link  xl:tw-w-1/5 xl:tw-text-center md:tw-px-5 xl:tw-px-0 tw-block tw-uppercase tw-text-transparent-50 tw-font-semibold hover:tw-text-white" @mouseover="dispatch('ShowSeriesMegaMenu')" @mouseout="dispatch('HideSeriesMegaMenu')">Series</a>
                            <a href="../discuss.html" class="navbar-link xl:tw-w-1/5 xl:tw-text-center md:tw-px-5 xl:tw-px-0  tw-block tw-uppercase tw-text-transparent-50 tw-font-semibold hover:tw-text-white">Discussions</a>
                            <a href="../podcast.html" class="navbar-link xl:tw-w-1/5 xl:tw-text-center md:tw-px-5 xl:tw-px-0  tw-relative tw-block tw-uppercase tw-text-transparent-50 tw-font-semibold hover:tw-text-white">Podcast</a>
                            <a href="#" class="navbar-link xl:tw-w-1/5 xl:tw-text-center tw-hidden lg:tw-block  md:tw-px-5 xl:tw-px-0 tw-block tw-uppercase tw-text-transparent-50 tw-font-semibold hover:tw-text-white" @click.prevent="$modal.show('testimonials-modal')">Testimonials</a>
                        </div>
                        <div class="md:tw-hidden tw-flex tw-items-center">
                            <search-button id="mobile-search" class="tw-mr-4 " width="20">
                            </search-button>
                            <mobile-nav-menu></mobile-nav-menu>
                        </div>
                        <div class="tw-hidden md:tw-block tw-relative tw-flex-1">
                            <div class="tw-flex tw-items-center tw-justify-end">
                                <search-button id="search-trigger" class="tw-leading-none tw-bg-transparent-10 hover:tw-bg-transparent-25 tw-p-3 tw-rounded-xl">
                                    <button id="search-trigger" title="Tip: press / or s anywhere to instantly activate me.">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 15 15">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-2-2h20v20H-2z"></path>
                                                <path fill="#FFF" d="M10.443 9.232h-.638l-.226-.218A5.223 5.223 0 0 0 10.846 5.6 5.247 5.247 0 1 0 5.6 10.846c1.3 0 2.494-.476 3.414-1.267l.218.226v.638l4.036 4.028 1.203-1.203-4.028-4.036zm-4.843 0A3.627 3.627 0 0 1 1.967 5.6 3.627 3.627 0 0 1 5.6 1.967 3.627 3.627 0 0 1 9.232 5.6 3.627 3.627 0 0 1 5.6 9.232z"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </search-button>
                                <a href="../login.html" class="tw-text-white hover:tw-text-white link tw-font-bold tw-uppercase tw-mx-6 tw-text-xs" @click.prevent="dispatch('Login')">Sign In</a>
                                <a class="tw-text-white hover:tw-bg-white hover:tw-text-blue tw-font-bold tw-uppercase tw-border tw-rounded-full tw-text-xs tw-px-3 tw-py-2 tw-leading-tight" href="../index59f8.html" @click.prevent="dispatch('Join')">Get Started</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <series-mega-menu></series-mega-menu>
                <portal-target name="nav-after"></portal-target>
                <section class="">
                    <div class="container">
                        <div class="lg:tw-flex lg:tw-items-center tw-text-center lg:tw-text-left">
                            <div class="skill-banner-sidebar lg:tw-mr-10 tw-flex-none">
                                <img src="{{ asset('frontend_images/journeys/journey-laravel.svg') }}" class="skill-banner-thumbnail" alt="Laravel thumbnail">
                            </div>
                            <div class="primary phone:tw-pt-0 tw-text-white">
                                <h1 class="tw-text-white tw-text-3xl tw-mb-4">Journey Through Laracasts</h1>
                                <div class="tw-text-transparent-75 tw-mb-8 tw-pb-4 generic-content tw-leading-normal xl:tw-pr-10">
                                    A Journey is a recommended guide through Laracasts for a given skill. Each section provides new tips and techniques that build upon what you've already learned. That said, feel free to jump around as you see fit.
                                </div>
                                <div class="tw-flex tw-flex-wrap tw-justify-center lg:tw-justify-start tw--mx-2">
                                    <div class="tw-mx-2">
                                        <a href="laravel.html" class="tw-block inherits-color">
                                            <div class="skill-thumbnail-card is-laravel is-current tw-relative tw-rounded-lg tw-p-4 tw-flex tw-flex-col tw-items-center tw-justify-center tw-cursor-pointer">
                                                <img src="{{ asset('frontend_images/series/2018/laravel-defaultb6f5.svg?v=10') }}" width="63" style="height: 63px" alt="Laravel icon" class="tw-mb-2">
                                                <h3 class="tw-text-xs tw-uppercase tw-font-semibold">Laravel</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tw-mx-2">
                                        <a href="testing.html" class="tw-block inherits-color">
                                            <div class="skill-thumbnail-card is-testing  tw-relative tw-rounded-lg tw-p-4 tw-flex tw-flex-col tw-items-center tw-justify-center tw-cursor-pointer">
                                                <img src="{{ asset('frontend_images/series/2018/testing-defaultb6f5.svg?v=10') }}" width="63" style="height: 63px" alt="Testing icon" class="tw-mb-2">
                                                <h3 class="tw-text-xs tw-uppercase tw-font-semibold">Testing</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tw-mx-2">
                                        <a href="php.html" class="tw-block inherits-color">
                                            <div class="skill-thumbnail-card is-php  tw-relative tw-rounded-lg tw-p-4 tw-flex tw-flex-col tw-items-center tw-justify-center tw-cursor-pointer">
                                                <img src="{{ asset('frontend_images/series/2018/php-defaultb6f5.svg?v=10') }}" width="63" style="height: 63px" alt="PHP icon" class="tw-mb-2">
                                                <h3 class="tw-text-xs tw-uppercase tw-font-semibold">PHP</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tw-mx-2">
                                        <a href="vue.html" class="tw-block inherits-color">
                                            <div class="skill-thumbnail-card is-vue  tw-relative tw-rounded-lg tw-p-4
                                    tw-flex tw-flex-col tw-items-center tw-justify-center tw-cursor-pointer">
                                                <img src="{{ asset('frontend_images/series/2018/vue-defaultb6f5.svg?v=10') }}" width="63" style="height: 63px" alt="Vue icon" class="tw-mb-2">
                                                <h3 class="tw-text-xs tw-uppercase tw-font-semibold">Vue</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tw-mx-2">
                                        <a href="tooling.html" class="tw-block inherits-color">
                                            <div class="skill-thumbnail-card is-tooling  tw-relative tw-rounded-lg tw-p-4
                                    tw-flex tw-flex-col tw-items-center tw-justify-center tw-cursor-pointer">
                                                <img src="{{ asset('frontend_images/series/2018/tooling-defaultb6f5.svg?v=10') }}" width="63" style="height: 63px" alt="Tooling icon" class="tw-mb-2">
                                                <h3 class="tw-text-xs tw-uppercase tw-font-semibold">Tooling</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="section">
                <div class="container">
                    <div class="lg:tw-flex">
                        <div class="skill-main-sidebar tw-mb-6 lg:tw-mb-0 lg:tw-mr-10 xl:tw-mt-10">
                            <h1 class="tw-text-black tw-text-2xl tw-mb-6 tw-inline-flex tw-items-center">
                            <img src="{{ asset('frontend_images/series/series-available-icon.svg') }}" alt="" class="tw-mr-2">
                            Laravel Skill
                            </h1>
                            <p class="tw-text-grey-30 lg:tw-text-sm tw-mb-8 lg:tw-pr-8">
                                Laravel is a PHP framework for constructing everything from small to enterprise-level applications. As you&#039;ll find, it&#039;s a joy to use, and just might make you love writing PHP again. It&#039;s that good.
                            </p>
                            <p>
                                <a href="../series/laravel-from-scratch-2018.html" class="tw-btn tw-btn-blue tw-inline-block lg:tw-px-10">Begin Journey</a>
                            </p>
                        </div>
                        <div>
                            <div class="tw-mb-8 lg:tw-mb-10" style="max-width: 706px">
                                <div class="tw-relative tw-bg-grey-panel tw-rounded-lg tw-p-4 tw-mb-5">
                                    <h2 class="tw-font-bold tw-text-xl md:tw-text-lg tw-text-black">
                                    <span class="tw-text-lg md:tw-text-base">Section 1</span>
                                    <span class="tw-w-px tw-inline-block tw-mx-2 lg:tw-mx-4 tw-bg-grey-light tw-align-middle" style="height: 30px"></span>
                                    Learn the Basics
                                    </h2>
                                </div>
                                <div class="container expands-wide">
                                    <div class="series-collection-wrap md:tw-flex md:tw-flex-wrap  tw-mb-2 tw--mx-2">
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10 hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2 tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
                                                        Laravel
                                                        </a>
                                                        <a href="../series/laravel-from-scratch-2018.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/laravel-from-scratch.png') }}" alt="Laravel 5.7 From Scratch" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-beginner tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Beginner
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
                                                        <a href="../series/laravel-from-scratch-2018.html">
                                                        Laravel 5.7 From Scratch
                                                        </a>
                                                        </h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>"Laravel From Scratch" has been the go-to video resource for Laravel newcomers since 2013. Considering this, as you can imagine, this truth requires t...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/laravel-from-scratch-2018.html" class="inherits-color link no-transition">38 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>6:32:47 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/laravel-from-scratch-2018.html" class="expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                                                        tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full tw-py-2 hover:tw-border-blue hover:tw-text-blue tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                                                        tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10 hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2 tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
                                                        Laravel
                                                        </a>
                                                        <a href="../series/laravel-6-from-scratch.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/laravel-6-from-scratch.png') }}" alt="Laravel 6 From Scratch" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
                                                        <a href="../series/laravel-6-from-scratch.html">
                                                        Laravel 6 From Scratch
                                                        </a>
                                                        </h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>In this series, step by step, I'll show you how to build web applications with Laravel 6. We'll start with the basics and incrementally dig deeper and...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/laravel-6-from-scratch.html" class="inherits-color link no-transition">35 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>3:22:45 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/laravel-6-from-scratch.html" class="expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                                                        tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                                                        tw-py-2 hover:tw-border-blue hover:tw-text-blue
                                                        tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                                                        tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-mb-8 lg:tw-mb-10" style="max-width: 706px">
                                <div class="tw-relative tw-bg-grey-panel tw-rounded-lg tw-p-4 tw-mb-5">
                                    <h2 class="tw-font-bold tw-text-xl md:tw-text-lg tw-text-black">
<span class="tw-text-lg md:tw-text-base">Section 2</span>
<span class="tw-w-px tw-inline-block tw-mx-2 lg:tw-mx-4 tw-bg-grey-light tw-align-middle" style="height: 30px"></span>
Build an App
</h2>
                                </div>
                                <div class="container expands-wide">
                                    <div class="series-collection-wrap md:tw-flex md:tw-flex-wrap  tw-mb-2 tw--mx-2">
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/lets-build-a-forum-with-laravel.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/lets-build-a-forum.png') }}" alt="Let&#039;s Build A Forum with Laravel and TDD" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-advanced tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Advanced
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/lets-build-a-forum-with-laravel.html">
Let&#039;s Build A Forum with Laravel and TDD
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>A forum is a deceptively complex thing. Sure, it's made up of threads and replies, but what else might exist as part of a forum? What about profiles,...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/lets-build-a-forum-with-laravel.html" class="inherits-color link no-transition">102 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>19:29:26 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/lets-build-a-forum-with-laravel.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/build-a-laravel-app-with-tdd.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/build-an-app-with-tdd.png') }}" alt="Build A Laravel App With TDD" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/build-a-laravel-app-with-tdd.html">
Build A Laravel App With TDD
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>It's time to take the techniques we learned in Laravel From Scratch, and put them to good use building your first real-world application. Together, we...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/build-a-laravel-app-with-tdd.html" class="inherits-color link no-transition">44 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>8:51:04 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/build-a-laravel-app-with-tdd.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-vue is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="vue.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Vue
</a>
                                                        <a href="../series/laravel-vue-and-spas.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/laravel-vue-and-spas.png') }}" alt="Laravel, Vue and SPAs" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/laravel-vue-and-spas.html">
Laravel, Vue and SPAs
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>In this series, come along as I build an "assets" website for Laracasts. Using Laravel as a backend, step-by-step, we'll pull in Vue and Vue Router to...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/laravel-vue-and-spas.html" class="inherits-color link no-transition">10 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:24:07 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/laravel-vue-and-spas.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-mb-8 lg:tw-mb-10" style="max-width: 706px">
                                <div class="tw-relative tw-bg-grey-panel tw-rounded-lg tw-p-4 tw-mb-5">
                                    <h2 class="tw-font-bold tw-text-xl md:tw-text-lg tw-text-black">
<span class="tw-text-lg md:tw-text-base">Section 3</span>
<span class="tw-w-px tw-inline-block tw-mx-2 lg:tw-mx-4 tw-bg-grey-light tw-align-middle" style="height: 30px"></span>
Beyond the Basics
</h2>
                                </div>
                                <div class="container expands-wide">
                                    <div class="series-collection-wrap md:tw-flex md:tw-flex-wrap  tw-mb-2 tw--mx-2">
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/intermediate-laravel.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/intermediate-laravel.png') }}" alt="Intermediate Laravel" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/intermediate-laravel.html">
Intermediate Laravel
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Made your way through Laravel 5 Fundamentals yet? Nice job! It's time to dig a bit deeper. In this series, not only will we review higher level featur...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/intermediate-laravel.html" class="inherits-color link no-transition">12 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>2:30:07 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/intermediate-laravel.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/laravel-authentication-techniques.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/laravel-authentication-techniques.png') }}" alt="Laravel Authentication Techniques" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/laravel-authentication-techniques.html">
Laravel Authentication Techniques
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>While Laravel offers a robust, traditional authentication setup out of the box, you may find that you require unique setups for certain projects. Perh...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/laravel-authentication-techniques.html" class="inherits-color link no-transition">2 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>52:32 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/laravel-authentication-techniques.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/how-to-create-custom-presets.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/how-to-create-custom-presets.png') }}" alt="How to Create Custom Laravel Presets" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/how-to-create-custom-presets.html">
How to Create Custom Laravel Presets
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Laravel ships with a small handful of custom front-end presets, but if you'd like to tailor the scaffolding specifically to your needs and preferences...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/how-to-create-custom-presets.html" class="inherits-color link no-transition">5 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>26:36 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/how-to-create-custom-presets.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/laravel-explained.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/laravel-explained.png') }}" alt="Laravel Explained" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/laravel-explained.html">
Laravel Explained
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>In this series, for each episode, I'll answer one Laravel-related question that has cropped up in the Laracasts community. Who knows, maybe your ques...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/laravel-explained.html" class="inherits-color link no-transition">7 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>

                                                                <span>1:26:07 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/laravel-explained.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/eloquent-relationships.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/eloquent-relationships.png') }}" alt="Eloquent Relationships" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-beginner tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Beginner
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/eloquent-relationships.html">
Eloquent Relationships
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>
                                                                Eloquent make the process of interacting with your database tables as natural and intuitive as possible. It's vital that you recognize and understand...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/eloquent-relationships.html" class="inherits-color link no-transition">6 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:25:45 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/eloquent-relationships.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-mb-8 lg:tw-mb-10" style="max-width: 706px">
                                <div class="tw-relative tw-bg-grey-panel tw-rounded-lg tw-p-4 tw-mb-5">
                                    <h2 class="tw-font-bold tw-text-xl md:tw-text-lg tw-text-black">
<span class="tw-text-lg md:tw-text-base">Section 4</span>
<span class="tw-w-px tw-inline-block tw-mx-2 lg:tw-mx-4 tw-bg-grey-light tw-align-middle" style="height: 30px"></span>
Laravel and the Frontend
</h2>
                                </div>
                                <div class="container expands-wide">
                                    <div class="series-collection-wrap md:tw-flex md:tw-flex-wrap  tw-mb-2 tw--mx-2">
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/real-time-laravel-with-socket-io.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/realtime-laravel-with-socket-io.png') }}" alt="Real-time Laravel with Socket.io" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-advanced tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Advanced
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/real-time-laravel-with-socket-io.html">
Real-time Laravel with Socket.io
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>When we want to broadcast events on our server to the client, how exactly do we do that? Well, there's a number of ways to tackle it, including using...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/real-time-laravel-with-socket-io.html" class="inherits-color link no-transition">4 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>40:54 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/real-time-laravel-with-socket-io.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-vue is-normal tw-flex tw-pr-4">

                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="vue.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Vue
</a>
                                                        <a href="../series/learn-laravel-mix.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/learn-laravel-mix.png') }}" alt="Learn Laravel Mix" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/learn-laravel-mix.html">
Learn Laravel Mix
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Webpack is the most powerful and flexible asset compilation tool available today. With that power, however, comes a certain level of complexity. That'...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/learn-laravel-mix.html" class="inherits-color link no-transition">11 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:25:47 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/learn-laravel-mix.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/get-real-with-laravel-echo.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/get-real-with-laravel-echo.png') }}" alt="Get Real With Laravel Echo" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-advanced tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Advanced
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/get-real-with-laravel-echo.html">
Get Real With Laravel Echo
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Wouldn't it be great if you could alert the users of your application about important changes, without requiring that they manually refresh the page?...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/get-real-with-laravel-echo.html" class="inherits-color link no-transition">8 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:09:06 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/get-real-with-laravel-echo.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-vue is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="vue.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Vue
</a>
                                                        <a href="../series/laravel-vue-and-spas.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/laravel-vue-and-spas.png') }}" alt="Laravel, Vue and SPAs" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/laravel-vue-and-spas.html">
Laravel, Vue and SPAs
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>In this series, come along as I build an "assets" website for Laracasts. Using Laravel as a backend, step-by-step, we'll pull in Vue and Vue Router to...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/laravel-vue-and-spas.html" class="inherits-color link no-transition">10 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:24:07 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/laravel-vue-and-spas.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-mb-8 lg:tw-mb-10" style="max-width: 706px">
                                <div class="tw-relative tw-bg-grey-panel tw-rounded-lg tw-p-4 tw-mb-5">
                                    <h2 class="tw-font-bold tw-text-xl md:tw-text-lg tw-text-black">
<span class="tw-text-lg md:tw-text-base">Section 5</span>
 <span class="tw-w-px tw-inline-block tw-mx-2 lg:tw-mx-4 tw-bg-grey-light tw-align-middle" style="height: 30px"></span>
Level Up Your Testing
</h2>
                                </div>
                                <div class="container expands-wide">
                                    <div class="series-collection-wrap md:tw-flex md:tw-flex-wrap  tw-mb-2 tw--mx-2">
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-testing is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="testing.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Testing
</a>
                                                        <a href="../series/testing-jargon.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/testing-jargon.png') }}" alt="Testing Jargon" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/testing-jargon.html">
Testing Jargon
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>There's no two ways about it: terminology in the testing world is incredibly overwhelming. Let's fix that! Bit by bit, we'll break all of these confus...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/testing-jargon.html" class="inherits-color link no-transition">8 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:05:34 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/testing-jargon.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-testing is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="testing.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Testing
</a>
                                                        <a href="../series/phpunit-testing-in-laravel.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/testing-laravel.png') }}" alt="Testing Laravel" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/phpunit-testing-in-laravel.html">
Testing Laravel
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Given the number of testing tools and resources available to PHP developers, it's no wonder why so many developers feel overwhelmed. In this series, w...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/phpunit-testing-in-laravel.html" class="inherits-color link no-transition">18 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>3:53:32 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/phpunit-testing-in-laravel.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/lets-build-a-forum-with-laravel.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/lets-build-a-forum.png') }} alt="Let&#039;s Build A Forum with Laravel and TDD" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-advanced tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Advanced
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/lets-build-a-forum-with-laravel.html">
Let&#039;s Build A Forum with Laravel and TDD
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>A forum is a deceptively complex thing. Sure, it's made up of threads and replies, but what else might exist as part of a forum? What about profiles,...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/lets-build-a-forum-with-laravel.html" class="inherits-color link no-transition">102 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>19:29:26 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/lets-build-a-forum-with-laravel.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-mb-8 lg:tw-mb-10" style="max-width: 706px">
                                <div class="tw-relative tw-bg-grey-panel tw-rounded-lg tw-p-4 tw-mb-5">
                                    <h2 class="tw-font-bold tw-text-xl md:tw-text-lg tw-text-black">
<span class="tw-text-lg md:tw-text-base">Section 6</span>
<span class="tw-w-px tw-inline-block tw-mx-2 lg:tw-mx-4 tw-bg-grey-light tw-align-middle" style="height: 30px"></span>
Services and Tooling
</h2>
                                </div>
                                <div class="container expands-wide">
                                    <div class="series-collection-wrap md:tw-flex md:tw-flex-wrap  tw-mb-2 tw--mx-2">
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-tooling is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="tooling.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Tooling
</a>
                                                        <a href="../series/laravel-spark.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/laravel-spark.png') }} alt="Laravel Spark" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/laravel-spark.html">
Laravel Spark
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Spark, scheduled to launch on April 19th, provides the perfect starting point for your next big idea. Forget all the boilerplate and focus on what mat...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/laravel-spark.html" class="inherits-color link no-transition">6 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>39:17 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/laravel-spark.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-vue is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="vue.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Vue
</a>
                                                        <a href="../series/webpack-for-everyone.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/webpack-for-everyone.png') }}" alt="Webpack for Everyone" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/webpack-for-everyone.html">
Webpack for Everyone
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Webpack is a wonderful tool for bundling front-end assets. Having said that, it can sometimes be a bit confusing to newcomers who switch over from a m...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/webpack-for-everyone.html" class="inherits-color link no-transition">14 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:19:20 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/webpack-for-everyone.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/get-real-with-laravel-echo.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/get-real-with-laravel-echo.png') }}" alt="Get Real With Laravel Echo" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-advanced tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Advanced
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/get-real-with-laravel-echo.html">
Get Real With Laravel Echo
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Wouldn't it be great if you could alert the users of your application about important changes, without requiring that they manually refresh the page?...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/get-real-with-laravel-echo.html" class="inherits-color link no-transition">8 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:09:06 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/get-real-with-laravel-echo.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-tooling is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="tooling.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Tooling
</a>
                                                        <a href="../series/learn-laravel-forge.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/server-management-with-forge.png') }}" alt="Learn Laravel Forge" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-beginner tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Beginner
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/learn-laravel-forge.html">
Learn Laravel Forge
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>In this series, guest instructor Marcel Pociot (Beyond Code) will steer you through the ins and outs of building and configuring servers with Laravel...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/learn-laravel-forge.html" class="inherits-color link no-transition">23 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:32:12 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/learn-laravel-forge.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/laravel-nova-mastery.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/laravel-nova-mastery.png') }}" alt="Laravel Nova Mastery" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/laravel-nova-mastery.html">
Laravel Nova Mastery
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>The latest first-party offering from the creators of Laravel is finally here. Laravel Nova is a gorgeous backend tool for configuring and administerin...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/laravel-nova-mastery.html" class="inherits-color link no-transition">15 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>2:22:51 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/laravel-nova-mastery.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/queue-it-up.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/queue-it-up.png') }}" alt="Queue it Up" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/queue-it-up.html">
Queue it Up
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Learning about queues can be a daunting task. It's not fun to be met with confusing jargon that you can't decipher. But that's what I'm here for. Let'...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/queue-it-up.html" class="inherits-color link no-transition">11 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:16:40 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/queue-it-up.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-tooling is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="tooling.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Tooling
</a>
                                                        <a href="../series/mysql-database-design.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/mysql-database-design.png') }}" alt="MySQL Database Design " width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/mysql-database-design.html">
MySQL Database Design
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Developers often dive in without taking the necessary time to learn the fundamentals of the technologies they're using. Basic database design is a per...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/mysql-database-design.html" class="inherits-color link no-transition">17 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:42:26 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/mysql-database-design.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-tooling is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="tooling.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Tooling
</a>
                                                        <a href="../series/envoyer.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/envoyer.png') }}" alt="Envoyer" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/envoyer.html">
Envoyer
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Envoyer deploys your PHP applications with zero downtime. Just push your code, and let Envoyer deliver your application to one or many servers without...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/envoyer.html" class="inherits-color link no-transition">10 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>36:03 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/envoyer.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-mb-8 lg:tw-mb-10" style="max-width: 706px">
                                <div class="tw-relative tw-bg-grey-panel tw-rounded-lg tw-p-4 tw-mb-5">
                                    <h2 class="tw-font-bold tw-text-xl md:tw-text-lg tw-text-black">
<span class="tw-text-lg md:tw-text-base">Section 7</span>
<span class="tw-w-px tw-inline-block tw-mx-2 lg:tw-mx-4 tw-bg-grey-light tw-align-middle" style="height: 30px"></span>
Laravel Releases
</h2>
                                </div>
                                <div class="container expands-wide">
                                    <div class="series-collection-wrap md:tw-flex md:tw-flex-wrap  tw-mb-2 tw--mx-2">
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/whats-new-in-laravel-5-5.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/whats-new-in-laravel-5.4.png') }}" alt="What&#039;s New in Laravel 5.5" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/whats-new-in-laravel-5-5.html">
What&#039;s New in Laravel 5.5
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Here we go again! Currently scheduled for an August release date, we're on the verge of Laravel 5.5. With that in mind, let's get a head start on the...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/whats-new-in-laravel-5-5.html" class="inherits-color link no-transition">20 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:31:44 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/whats-new-in-laravel-5-5.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/whats-new-in-laravel-5-6.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/whats-new-in-laravel-5.4.png') }}" alt="What&#039;s New in Laravel 5.6" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/whats-new-in-laravel-5-6.html">
What&#039;s New in Laravel 5.6
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Laravel 5.6 is upon us! While it's true that this release isn't quite as flashy, there are still a number of incredibly useful new additions and updat...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/whats-new-in-laravel-5-6.html" class="inherits-color link no-transition">8 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>37:29 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/whats-new-in-laravel-5-6.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/whats-new-in-laravel-5-7.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/whats-new-in-laravel-5.4.png') }}" alt="What&#039;s New in Laravel 5.7" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/whats-new-in-laravel-5-7.html">
What&#039;s New in Laravel 5.7
</a>
 </h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Laravel 5.7 is now available! Along with it comes, not just the reveal of Laravel Nova, but also email verification functionality, dump-server integra...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/whats-new-in-laravel-5-7.html" class="inherits-color link no-transition">4 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>22:47 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/whats-new-in-laravel-5-7.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/whats-new-in-laravel-5-8.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/whats-new-in-laravel-5.4.png') }}" alt="What&#039;s New in Laravel 5.8" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-beginner tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Beginner
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/whats-new-in-laravel-5-8.html">
What&#039;s New in Laravel 5.8
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Laravel 5.8, which released on February 26th, 2019, ships with a new Eloquent relationship, automatic policy discovery, PHPUnit 8 support, and so much...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/whats-new-in-laravel-5-8.html" class="inherits-color link no-transition">5 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>24:21 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/whats-new-in-laravel-5-8.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/whats-new-in-laravel-6.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/whats-new-in-laravel-6.png') }}" alt="What&#039;s New in Laravel 6" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/whats-new-in-laravel-6.html">
What&#039;s New in Laravel 6
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>
                                                                Laravel 6 is here! Along with a fresh website design comes a variety of new features and improvements, including lazy collections, Laravel Vapor comp...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/whats-new-in-laravel-6.html" class="inherits-color link no-transition">5 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>35:11 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/whats-new-in-laravel-6.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-mb-8 lg:tw-mb-10" style="max-width: 706px">
                                <div class="tw-relative tw-bg-grey-panel tw-rounded-lg tw-p-4 tw-mb-5">
                                    <h2 class="tw-font-bold tw-text-xl md:tw-text-lg tw-text-black">
<span class="tw-text-lg md:tw-text-base">Section 8</span>
<span class="tw-w-px tw-inline-block tw-mx-2 lg:tw-mx-4 tw-bg-grey-light tw-align-middle" style="height: 30px"></span>
Laravel Workflow
</h2>
                                </div>
                                <div class="container expands-wide">
                                    <div class="series-collection-wrap md:tw-flex md:tw-flex-wrap  tw-mb-2 tw--mx-2">
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-php is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="php.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
PHP
</a>
                                                        <a href="../series/how-do-i.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/how-do-i.png') }}" alt="How Do I" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/how-do-i.html">
How Do I
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>It's cool, we all hit road blocks from time to time. Have a web-related question that could be solved in ten minutes or less as a video? If so, tweet...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/how-do-i.html" class="inherits-color link no-transition">25 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>5:33:58 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/how-do-i.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/hands-on-community-contributions.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/hands-on-community-contributions.png') }}" alt="Hands On: Community Contributions" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/hands-on-community-contributions.html">
Hands On: Community Contributions
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>In this mini-series, we'll, from scratch, allow users to register, submit community articles and tutorials, and then vote on their favorites. Exactly...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/hands-on-community-contributions.html" class="inherits-color link no-transition">13 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>2:19:14 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/hands-on-community-contributions.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-tooling is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="tooling.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Tooling
</a>
                                                        <a href="../series/how-to-manage-an-open-source-project.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/how-to-maintain-an-open-source-project.png') }}" alt="How to Manage an Open Source Project" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-advanced tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Advanced
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/how-to-manage-an-open-source-project.html">
How to Manage an Open Source Project
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Managing a popular open source project can be daunting at first. How do we maintain all these issues, or automatically trigger our test suite for inco...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/how-to-manage-an-open-source-project.html" class="inherits-color link no-transition">24 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>4:42:41 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/how-to-manage-an-open-source-project.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-php is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="php.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
PHP
</a>
                                                        <a href="../series/how-to-read-code.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/how-to-read-code.png') }}" alt="How to Read Code" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/how-to-read-code.html">
How to Read Code
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>To improve as a developer, you must focus on three things: learning, reading, and writing. Or, in other words, learn from somebody more seasoned than...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/how-to-read-code.html" class="inherits-color link no-transition">6 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:17:11 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/how-to-read-code.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/how-to-create-custom-presets.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/how-to-create-custom-presets.png') }}" alt="How to Create Custom Laravel Presets" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/how-to-create-custom-presets.html">
How to Create Custom Laravel Presets
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Laravel ships with a small handful of custom front-end presets, but if you'd like to tailor the scaffolding specifically to your needs and preferences...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/how-to-create-custom-presets.html" class="inherits-color link no-transition">5 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>26:36 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/how-to-create-custom-presets.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-laravel is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="laravel.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Laravel
</a>
                                                        <a href="../series/unlocking-badges-workshop.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/unlocking-badges-workshop.png') }}" alt="Unlocking Badges Workshop" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-advanced tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Advanced
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/unlocking-badges-workshop.html">
Unlocking Badges Workshop
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Together, in this series we'll add an "Unlockable Badge" feature to the Laracasts website. Perhaps when a user reaches a certain XP threshold, they un...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/unlocking-badges-workshop.html" class="inherits-color link no-transition">21 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>2:54:13 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/unlocking-badges-workshop.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-tooling is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="tooling.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
Tooling
</a>
                                                        <a href="../series/build-and-configure-a-staging-server.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/build-a-staging-server.png') }}" alt="Build a Staging Server" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/build-and-configure-a-staging-server.html">
Build a Staging Server
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>Once your application reaches a certain size, it might prove useful to prepare a staging server. With this setup, all new features and additions would...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/build-and-configure-a-staging-server.html" class="inherits-color link no-transition">6 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>24:19 mins</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/build-and-configure-a-staging-server.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mx-2">
                                            <div class="tw-mb-3
    ">
                                                <div class="card expanded-card  is-incomplete is-php is-normal tw-flex tw-pr-4">
                                                    <div class="expanded-card-left tw-mr-4 tw-rounded-xl tw-flex tw-flex-col tw-justify-between tw-items-center tw-py-5 tw-px-4">
                                                        <a href="php.html" class="expanded-card-skill-button tw-w-full tw-bg-black-transparent-10
                       hover:tw-bg-white hover:tw-text-grey-darkest tw-rounded-full tw-py-2
                       tw-leading-none tw-px-4 tw-text-white tw-uppercase tw-text-2xs tw-font-bold tw-text-center">
PHP
</a>
                                                        <a href="../series/building-laracasts.html" class="tw-relative card-thumbnail tw-block tw-my-4 md:tw-my-0">
                                                            <img class="tw-absolute tw-top-0 tw-left-0 tw-w-full lazyload" data-src="{{ asset('frontend_images/series/2018/pngs/building-laracasts.png') }}" alt="Building Laracasts" width="94" height="94" loading="lazy">
                                                        </a>
                                                        <div class="expanded-card-difficulty tw-flex tw-items-center">
                                                            <div class="difficulty-meter is-intermediate tw-mr-2">
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-mb-1 tw-rounded tw-block tw-w-3 tw-h-1"></span>
                                                                <span class="tw-block tw-rounded tw-w-3 tw-h-1"></span>
                                                            </div>
                                                            <div class="tw-font-bold tw-text-2xs tw-text-white">Intermediate
                                                                <br>Difficulty</div>
                                                        </div>
                                                    </div>
                                                    <div class="expanded-card-right tw-relative tw-flex tw-flex-col tw-py-5">
                                                        <h3 class="expanded-card-heading tw-text-base xl:tw-text-lg tw-mb-4 tw-tracking-tight link">
<a href="../series/building-laracasts.html">
Building Laracasts
</a>
</h3>
                                                        <div class="expanded-card-description tw-text-xs tw-text-grey-darkest tw-flex-1 generic-content">
                                                            <p>While many courses at Laracasts focus on the workflow of building something entirely from scratch, this one is a bit different. Come along as I work o...</p>
                                                        </div>
                                                        <div class="tw-hidden lg:tw-flex expanded-card-meta tw-text-grey-dark tw-text-2xs">
                                                            <div class="expanded-card-meta-lessons tw-mr-8 tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path>
                                                                </svg>
                                                                <a href="../series/building-laracasts.html" class="inherits-color link no-transition">4 Lessons</a>
                                                            </div>
                                                            <div class="expanded-card-meta-length tw-flex tw-items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="inherits-color tw-mr-2">
                                                                    <path class="tw-fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path>
                                                                </svg>
                                                                <span>1:06:50 hrs</span>
                                                            </div>
                                                        </div>
                                                        <a href="../series/building-laracasts.html" class="
                    expanded-card-play-button tw-absolute tw-w-full tw-bg-grey-panel
                    tw-text-black tw-font-bold tw-border tw-border-transparent-25 tw-rounded-full
                    tw-py-2 hover:tw-border-blue hover:tw-text-blue
                    tw-font-bold tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center
                    tw-text-sm tw-mb-1" style="bottom: 11px">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="tw-mr-2">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M-1-1h18v18H-1z"></path>
                                                                    <path class="tw-fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path>
                                                                </g>
                                                            </svg>
                                                            Play
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="tw-hidden md:tw-block signup-banner tw-text-white tw-py-0">
                <div class="container tw-mx-auto">
                    <div class="tw-flex tw-justify-center tw-items-center tw-h-full">
                        <div class="tw-mr-9">
                            <img src="{{ asset('frontend_images/call-to-action/robot-illustration5e1f.svg?v=2') }}" style="mix-blend-mode: luminosity" alt="Laracasts Sign Up Mascot">
                        </div>
                        <div class="tw-w-1/2">
                            <h3 class="tw-text-3xl tw-mb-6">The most concise screencasts for the working developer, updated daily.</h3>
                            <p class="tw-mb-10">
                                There's no shortage of content at Laracasts. In fact, you could watch nonstop for days upon days, and still not see everything!
                            </p>
                            <p>
                                <a href="../index59f8.html" @click.prevent="$modal.show('join-modal')" class="tw-btn tw-btn-outlined tw-text-white tw-inline-block hover:tw-bg-white hover:tw-text-blue hover:tw-border-white">Get Started</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="footer-wrap mobile:tw-text-lg">
                <section class="footer-section top md:tw-pb-0 tw-pt-0">
                    <div class="container">
                        <div class="md:tw-w-4/5 lg:tw-w-1/2 tw-mx-auto tw-text-center">
                            <div>
                                <h2 class="tw-text-white tw-text-3xl pr-1-tablet tw-mb-8 tw-tracking-tight">Want us to email you occasionally with Laracasts news?</h2>
                            </div>
                            <div>
                                <newsletter-form></newsletter-form>
                            </div>
                        </div>
                    </div>
                </section>
                @include('partials.footer')
            </div>
        </div>
        <login-modal token="KKdqBASHPdfEWlxNMoJpqEEO6FVGeUbzP9gylNTo"></login-modal>
        <join initial-category="personalPlans"></join>
        <testimonials-modal></testimonials-modal>
        <search-modal></search-modal>
    </div>
    @include('partials.footerJs')
</body>

<!-- Mirrored from laracasts.com/skills/laravel by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2019 09:16:18 GMT -->

</html>