@extends('layouts.app')

@section('content')
<section id="home" class="hero">
    <div class="hero-copy mx-auto px-5 pb-12 sm:px-10 sm:pb-16 lg:px-16 xl:px-20">
        <div class="max-w-[780px]">
            <h1 class="display-title hero-reveal text-[50px] leading-[.94] text-meem-green">
                <span class="hero-title-desktop">
                    Building Sustainable<br>
                    Real Estate Value in<br>
                    the UAE
                </span>
                <span class="hero-title-mobile">
                    <span>Building Sustainable</span>
                    <span>Real Estate Value</span>
                    <span>in the UAE</span>
                </span>
            </h1>
            <p class="hero-reveal mt-8 max-w-[570px] text-justify text-[14px] leading-[1.5] text-meem-deep sm:text-[16px] sm:leading-[1.5]" style="--reveal-delay: 160ms">
                An integrated real estate investment and property <br> management platform delivering long-term value, <br> resilient portfolios, and operational excellence.
            </p>
        </div>
    </div>
</section>

<section id="about" class="grid bg-[linear-gradient(90deg,rgba(247,243,236,0.18)_0%,rgba(247,243,236,0.68)_45%,rgba(247,243,236,0.96)_100%),url('/assets/who_we_are_bg.webp')] bg-cover bg-center max-[639px]:bg-[linear-gradient(180deg,rgba(247,243,236,0.18)_0%,rgba(247,243,236,0.78)_48%,rgba(247,243,236,0.98)_100%),url('/assets/who_we_are_bg.webp')] max-[639px]:bg-top lg:min-h-[720px] lg:grid-cols-2">
    <div class="image-reveal overflow-hidden lg:min-h-[720px]" data-reveal="image">
        <img class="h-full w-full object-cover object-center" src="{{ asset('assets/about-gallery.png') }}" alt="Real estate professionals reviewing a premium Dubai development model">
    </div>
    <div class="flex items-center justify-end px-5 py-10 max-[639px]:items-end sm:px-12 sm:py-20 lg:min-h-[720px] lg:px-16 xl:px-[8vw]">
        <div class="max-w-[600px]">
            <h2 class="display-title reveal-up text-[50px] leading-none" data-reveal>Who We Are</h2>
            <div class="reveal-up mt-9 space-y-7 text-justify text-[14px] leading-[1.5] text-meem-deep sm:text-[15px] sm:leading-[1.5]" data-reveal style="--reveal-delay: 120ms">
                <p>
                    MEEM Real Estate Investment LLC is a UAE-based platform focused on acquiring, developing, and managing diversified real estate assets across residential, commercial, hospitality, and retail sectors.
                </p>
                <p>
                    Through disciplined investment strategies and professional management, we deliver sustainable income, long-term capital appreciation, and resilient portfolio growth.
                </p>
            </div>
            <a class="reveal-up mt-10 inline-flex min-h-14 items-center justify-center bg-meem-gold px-12 text-[13px] font-bold tracking-[.14em] text-white transition hover:bg-meem-green sm:mt-12" data-reveal style="--reveal-delay: 220ms" href="{{ route('about') }}">
                LEARN MORE
            </a>
        </div>
    </div>
</section>

<section id="platform" class="bg-white px-5 py-10 sm:px-10 sm:py-16 lg:px-16 xl:px-20">
    <div class="mx-auto grid max-w-[1400px] gap-7 sm:grid-cols-2 lg:grid-cols-[1fr_1fr_.95fr] lg:gap-[90px]">
        <a class="feature-card reveal-up relative h-[430px] overflow-hidden sm:h-[480px]" data-reveal href="{{ route('platform') }}" aria-label="Explore our platform">
            <img class="absolute inset-0 h-full w-full object-cover object-[66%_center]" src="{{ asset('assets/home_platform.webp') }}" alt="">
            <span class="display-title absolute inset-0 z-10 flex items-end justify-center pb-7 text-[50px] text-white sm:pb-8">Platform</span>
        </a>
        <a id="strategy" class="feature-card reveal-up relative h-[430px] overflow-hidden sm:h-[480px]" data-reveal style="--reveal-delay: 120ms" href="{{ route('strategy') }}" aria-label="Explore our strategy">
            <img class="absolute inset-0 h-full w-full object-cover object-[72%_center]" src="{{ asset('assets/home_stratergy.webp') }}" alt="">
            <span class="display-title absolute inset-0 z-10 flex items-end justify-center pb-7 text-[50px] text-white sm:pb-8">Strategy</span>
        </a>
        <a id="why-meem" class="brand-large reveal-scale flex min-h-[390px] items-center justify-center sm:col-span-2 lg:col-span-1 lg:min-h-0" data-reveal style="--reveal-delay: 220ms" href="{{ route('why-meem') }}" aria-label="Learn why MEEM">
            <div class="logo-mark scale-[.84] sm:scale-100">
                <img src="{{ asset('assets/logo.webp') }}" alt="MEEM Real Estate Investment">
                <span class="logo-m">M</span>
                <span class="logo-name">MEEM</span>
                <span class="logo-arabic" dir="rtl">ميم للاستثمار العقاري</span>
                <span class="logo-tagline">REAL ESTATE INVESTMENT</span>
            </div>
        </a>
    </div>
</section>
@endsection
