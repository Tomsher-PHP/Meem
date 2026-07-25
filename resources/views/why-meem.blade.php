@extends('layouts.app')

@section('page_id', 'why-page')

@section('content')
<section class="why-hero">
    <div class="why-hero-copy mx-auto px-5 pb-12 sm:px-10 sm:pb-16 lg:px-16 xl:px-20">
        <div class="max-w-[480px]">
            <h1 class="display-title hero-reveal text-[50px] leading-none">Why MEEM?</h1>
            <div class="about-copy hero-reveal mt-8 space-y-3 xl:space-y-7 text-justify text-[14px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]" style="--reveal-delay:160ms">
                <p>
                    MEEM combines UAE market insight, investment expertise, and disciplined asset management to deliver sustainable returns, resilient portfolios, and long-term real estate value.
                </p>
                <p>
                    With an integrated approach spanning investment, asset, and property management, MEEM is uniquely positioned to create value at every stage of the real estate lifecycle.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="why-panel grid bg-[linear-gradient(90deg,rgba(247,243,236,0.18)_0%,rgba(247,243,236,0.68)_45%,rgba(247,243,236,0.96)_100%),url('/assets/who_we_are_bg.webp')] bg-cover bg-center max-[639px]:bg-[linear-gradient(180deg,rgba(247,243,236,0.18)_0%,rgba(247,243,236,0.78)_48%,rgba(247,243,236,0.98)_100%),url('/assets/who_we_are_bg.webp')] max-[639px]:bg-top lg:grid-cols-2">
    <div class="image-reveal why-panel-image overflow-hidden" data-reveal="image">
        <img class="h-full w-full object-cover object-center" src="{{ asset('assets/why-img1.png') }}" alt="Emirati investor overlooking Dubai beside the UAE flag">
    </div>
    <div class="flex items-center px-5 py-10 sm:px-12 sm:py-14 lg:px-16 xl:px-[7vw]">
        <div class="w-full space-y-3 xl:space-y-7">
            <div class="benefit-item reveal-up flex items-center gap-5" data-reveal>
                <img src="{{ asset('assets/why-icon1.png') }}" class="w-[65px]" alt="">
                <p class="text-justify">Integrated Expertise across investment, asset, and property management</p>
            </div>
            <div class="benefit-item reveal-up flex items-center gap-5" data-reveal style="--reveal-delay:80ms">
                <img src="{{ asset('assets/why-icon2.png') }}" class="w-[65px]" alt="">
                <p class="text-justify">Deep UAE Market Insight</p>
            </div>
            <div class="benefit-item reveal-up flex items-center gap-5" data-reveal style="--reveal-delay:160ms">
                <img src="{{ asset('assets/why-icon3.png') }}" class="w-[65px]" alt="">
                <p class="text-justify">Value-Driven Investment Approach</p>
            </div>
            <div class="benefit-item reveal-up flex items-center gap-5" data-reveal style="--reveal-delay:240ms">
                <img src="{{ asset('assets/why-icon4.png') }}" class="w-[65px]" alt="">
                <p class="text-justify">Operational Excellence</p>
            </div>
            <div class="benefit-item reveal-up flex items-center gap-5" data-reveal style="--reveal-delay:320ms">
                <img src="{{ asset('assets/why-icon5.png') }}" class="w-[65px]" alt="">
                <p class="text-justify">Strong Governance &amp; Risk Management</p>
            </div>
        </div>
    </div>
</section>

<section class="why-panel grid bg-white lg:grid-cols-2">
    <div class="order-2 flex items-center px-5 py-10 sm:px-12 sm:py-16 lg:order-1 lg:px-16 xl:px-[7vw]">
        <div class="reveal-up max-w-[590px]" data-reveal>
            <h2 class="text-4xl font-semibold">Vision</h2>
            <p class="about-copy mt-5 text-justify text-[14px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]">To be a leading real estate investment and property management platform in the UAE, recognized for delivering sustainable returns, building high-performing property portfolios, and contributing to the nation's economic diversification and urban development.</p>
        </div>
    </div>
    <div class="image-reveal why-panel-image order-1 overflow-hidden lg:order-2" data-reveal="image">
        <img class="h-full w-full object-cover object-center" src="{{ asset('assets/why-img2.png') }}" alt="Golden UAE desert dunes and distant Dubai skyline with a falcon">
    </div>
</section>

<section class="why-panel grid bg-[linear-gradient(90deg,rgba(247,243,236,0.18)_0%,rgba(247,243,236,0.68)_45%,rgba(247,243,236,0.96)_100%),url('/assets/who_we_are_bg.webp')] bg-cover bg-center max-[639px]:bg-[linear-gradient(180deg,rgba(247,243,236,0.18)_0%,rgba(247,243,236,0.78)_48%,rgba(247,243,236,0.98)_100%),url('/assets/who_we_are_bg.webp')] max-[639px]:bg-top lg:grid-cols-2">
    <div class="image-reveal why-panel-image overflow-hidden" data-reveal="image">
        <img class="h-full w-full object-cover object-center" src="{{ asset('assets/why-img3.png') }}" alt="Dubai Marina towers rising through sunrise mist">
    </div>
    <div class="flex items-center px-5 py-10 sm:px-12 sm:py-16 lg:px-16 xl:px-[7vw]">
        <div class="reveal-up max-w-[590px]" data-reveal>
            <h2 class="text-4xl font-semibold">Mission</h2>
            <p class="about-copy mt-5 text-justify text-[14px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]">To identify, acquire, manage, and grow high-quality real estate investments through strategic capital deployment, professional property management, active portfolio oversight, and disciplined governance that maximizes stakeholder value.</p>
        </div>
    </div>
</section>

<section class="why-panel grid bg-white lg:grid-cols-2">
    <div class="order-2 flex items-center px-5 py-10 sm:px-12 sm:py-16 lg:order-1 lg:px-16 xl:px-[7vw]">
        <div class="reveal-up max-w-[620px]" data-reveal>
            <h2 class="text-4xl font-semibold">Our Values</h2>
            <p class="about-copy mt-5 text-justify text-[14px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]">We focus on building enduring value through carefully selected, diversified investments that balance stability, opportunity, and long-term growth. With a disciplined approach to risk management, sustainable performance, and transparent governance, we aim to protect capital while generating stable income and consistent appreciation. Our investment philosophy is guided by integrity, professional accountability, and a clear alignment with the UAE's long-term economic vision.</p>
        </div>
    </div>
    <div class="image-reveal why-panel-image order-1 overflow-hidden lg:order-2" data-reveal="image">
        <img class="h-full w-full object-cover object-center" src="{{ asset('assets/why-img4.png') }}" alt="Traditional Emirati heritage building with a wind tower">
    </div>
</section>
@endsection
