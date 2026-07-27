<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="{{ $meta_description ?? 'MEEM Real Estate Investment - Building sustainable real estate value in the UAE.' }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/webp" href="{{ asset('assets/logo.webp') }}">
    <title>{{ $title ?? 'MEEM Real Estate Investment' }}</title>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'MEEM Real Estate Investment' }}">
    <meta property="og:description" content="{{ $meta_description ?? 'MEEM Real Estate Investment - Building sustainable real estate value in the UAE.' }}">
    <meta property="og:image" content="{{  asset('assets/logo.webp') }}">
    <meta property="og:site_name" content="MEEM Real Estate Investment">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? 'MEEM Real Estate Investment' }}">
    <meta property="twitter:description" content="{{ $meta_description ?? 'MEEM Real Estate Investment - Building sustainable real estate value in the UAE.' }}">
    <meta property="twitter:image" content="{{  asset('assets/logo.webp') }}">

    <!-- JSON-LD Structured Data (RealEstateAgent) -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "RealEstateAgent",
      "name": "MEEM Real Estate Investment LLC",
      "image": "{{ asset('assets/logo.webp') }}",
      "@@id": "{{ url('/') }}#organization",
      "url": "{{ url('/') }}",
      "telephone": "+971 6 886 8888",
      "email": "info@meemrealestate.com",
      "logo": {
        "@@type": "ImageObject",
        "url": "{{ asset('assets/logo.webp') }}"
      },
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "PO Box 29559",
        "addressLocality": "Sharjah",
        "addressCountry": "AE"
      }
    }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="site-header fixed inset-x-0 top-0 z-30">
        <div class="header-shell mx-auto flex items-start justify-between px-6 pt-7 sm:px-10 sm:pt-10 lg:px-16 lg:pt-14 xl:px-20">
            <a class="header-logo logo-mark scale-[.52] origin-top-left sm:scale-[.85] lg:scale-100" href="{{ request()->routeIs('home') ? '#home' : route('home') }}" aria-label="MEEM home">
                <img src="{{ asset('assets/logo.webp') }}" alt="MEEM Real Estate Investment">
            </a>

            <nav class="desktop-nav hidden items-center gap-8 text-[15px] font-semibold text-white lg:flex xl:gap-12" aria-label="Primary navigation">
                <a class="nav-link {{ request()->routeIs('home') ? 'active text-meem-green' : '' }}" style="--nav-delay: 180ms" href="{{ request()->routeIs('home') ? '#home' : route('home') }}">Home</a>
                <a class="nav-link {{ request()->routeIs('about') ? 'active text-meem-green' : '' }}" style="--nav-delay: 240ms" href="{{ request()->routeIs('about') ? '#about-page' : route('about') }}">About</a>
                <a class="nav-link {{ request()->routeIs('expertise') ? 'active text-meem-green' : '' }}" style="--nav-delay: 300ms" href="{{ request()->routeIs('expertise') ? '#platform-page' : route('expertise') }}">Expertise</a>
                <a class="nav-link {{ request()->routeIs('strategy') ? 'active text-meem-green' : '' }}" style="--nav-delay: 360ms" href="{{ request()->routeIs('strategy') ? '#strategy-page' : route('strategy') }}">Strategy</a>
                <a class="nav-link {{ request()->routeIs('why-meem') ? 'active text-meem-green' : '' }}" style="--nav-delay: 420ms" href="{{ request()->routeIs('why-meem') ? '#why-meem-page' : route('why-meem') }}">Why MEEM</a>
                <a class="nav-link {{ request()->routeIs('contact') ? 'active text-meem-green' : '' }}" style="--nav-delay: 480ms" href="{{ request()->routeIs('contact') ? '#contact-page' : route('contact') }}">Contact</a>
            </nav>

            <button id="menu-button" class="menu-trigger mt-2 grid h-11 w-11 place-items-center border border-meem-green/30 bg-meem-ivory/75 text-meem-deep backdrop-blur-sm lg:hidden" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-label="Open menu">
                <span class="sr-only">Open menu</span>
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="fixed inset-0 z-40 bg-meem-ivory px-7 py-8 lg:hidden">
            <div class="flex justify-end">
                <button id="menu-close" class="grid h-11 w-11 place-items-center border border-meem-green/30" type="button" aria-label="Close menu">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                        <path d="M6 6l12 12M18 6 6 18" />
                    </svg>
                </button>
            </div>
            <nav class="mt-14 flex flex-col gap-6 font-display text-4xl" aria-label="Mobile navigation">
                <a style="--mobile-delay: 90ms" href="{{ request()->routeIs('home') ? '#home' : route('home') }}">Home</a>
                <a style="--mobile-delay: 140ms" href="{{ request()->routeIs('about') ? '#about-page' : route('about') }}">About</a>
                <a style="--mobile-delay: 190ms" href="{{ request()->routeIs('expertise') ? '#platform-page' : route('expertise') }}">Expertise</a>
                <a style="--mobile-delay: 240ms" href="{{ request()->routeIs('strategy') ? '#strategy-page' : route('strategy') }}">Strategy</a>
                <a style="--mobile-delay: 290ms" href="{{ request()->routeIs('why-meem') ? '#why-meem-page' : route('why-meem') }}">Why MEEM</a>
                <a style="--mobile-delay: 340ms" href="{{ request()->routeIs('contact') ? '#contact-page' : route('contact') }}">Contact</a>
            </nav>
        </div>
    </header>

    <main id="@yield('page_id')">
        @yield('content')
    </main>

    <footer id="contact" class="bg-meem-deep px-6 py-2 xl:py-7 text-center text-[10px] text-white/85 sm:text-xs">
        Copyright © 2026, MEEM Real Estate Investment LLC. All Rights Reserved.
    </footer>
</body>

</html>
