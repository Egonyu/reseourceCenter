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
            <a href="laravel.html" class="navbar-link tw-text-white is-active xl:tw-w-1/5 xl:tw-text-center md:tw-px-3 xl:tw-px-0 tw-block tw-uppercase tw-text-transparent-50 tw-font-semibold hover:tw-text-white">Journeys</a>
            <a href="../seriesa236.html?curated" class="navbar-link  xl:tw-w-1/5 xl:tw-text-center md:tw-px-3 xl:tw-px-0 tw-block tw-uppercase tw-text-transparent-50 tw-font-semibold hover:tw-text-white" @mouseover="dispatch('ShowSeriesMegaMenu')" @mouseout="dispatch('HideSeriesMegaMenu')">Series</a>
            <a href="../discuss.html" class="navbar-link xl:tw-w-1/5 xl:tw-text-center md:tw-px-3 xl:tw-px-0  tw-block tw-uppercase tw-text-transparent-50 tw-font-semibold hover:tw-text-white">Discussions</a>
            <a href="../podcast.html" class="navbar-link xl:tw-w-1/5 xl:tw-text-center md:tw-px-3 xl:tw-px-0  tw-relative tw-block tw-uppercase tw-text-transparent-50 tw-font-semibold hover:tw-text-white">Podcast</a>
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
