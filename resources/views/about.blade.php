@extends('layouts.app')

@section('page_id', 'about-page')

@section('content')
<section class="about-hero">
    <div class="about-hero-copy mx-auto px-5 pb-12 sm:px-10 sm:pb-16 lg:px-16 xl:px-20">
        <div class="max-w-[310px]">
            <h1 class="display-title hero-reveal text-[50px] leading-none">About Us</h1>
            <p class="about-copy hero-reveal mt-8 text-justify text-[14px] leading-[1.5] text-meem-deep sm:text-[15px] sm:leading-[1.5]" style="--reveal-delay: 160ms">
                <!--MEEM Real Estate Investment LLC (MEEM) is a UAE-based real estate investment and property management company focused on acquiring, developing, and managing diversified property assets across key sectors, including residential, commercial, hospitality, and retail.-->
                
                MEEM Real Estate Investment LLC (MEEM) is a UAE-based real estate investment and property management company focused on acquiring, developing, and managing diversified property assets across key sectors, including residential, commercial, hospitality, and retail.
            </p>
        </div>
    </div>
</section>

<section class="about-story relative isolate grid min-h-[760px] bg-meem-ivory lg:grid-cols-2">
    <img class="absolute inset-0 -z-10 h-full w-full object-cover opacity-[53%]" src="{{ asset('assets/about-second-img-bg.png') }}" alt="">
    <div class="image-reveal min-h-[480px] overflow-hidden lg:min-h-[760px]" data-reveal="image">
        <img class="h-full w-full object-cover object-center" src="{{ asset('assets/about-second-img.webp') }}" alt="Luxury Dubai balcony overlooking the city skyline at sunrise">
    </div>
    <div class="relative z-10 flex items-center px-5 py-10 sm:px-12 sm:py-20 lg:px-16 xl:px-[7vw]">
        <div class="about-copy max-w-[630px] space-y-3 xl:space-y-7 text-justify text-[14px] leading-[1.5] text-meem-deep sm:text-[15px] sm:leading-[1.5]">
            <p class="reveal-up" data-reveal>
                The company invests in high-potential real estate opportunities that generate sustainable income streams, long-term capital appreciation, and resilient portfolio growth. Through disciplined investment strategies, active asset oversight, and professional property management, the company enhances asset performance while effectively managing risk.
            </p>
            <p class="reveal-up" data-reveal style="--reveal-delay: 120ms">
                By integrating investment expertise with operational excellence, MEEM ensures efficient property operations, enhanced tenant experiences, and long-term asset sustainability; maximizing value across the entire real estate lifecycle.
            </p>
            <p class="reveal-up" data-reveal style="--reveal-delay: 220ms">
                MEEM is positioned as a strategic investor and manager, committed to delivering superior value, portfolio resilience, and long-term leadership within the UAE real estate market.
            </p>
        </div>
    </div>
</section>
@endsection
