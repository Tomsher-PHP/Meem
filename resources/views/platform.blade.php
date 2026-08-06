@extends('layouts.app')

@section('page_id', 'platform-page')

@section('content')
<section class="platform-hero">
    <div class="platform-hero-copy mx-auto px-5 pb-12 sm:px-10 sm:pb-16 lg:px-16 xl:px-20">
        <div class="max-w-[310px] text-color-meem-green xl:text-white">
            <h1 class="display-title hero-reveal text-[50px] leading-none">Expertise</h1>
            <p class="about-copy hero-reveal mt-8 text-justify text-[14px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]" style="--reveal-delay: 160ms">
                {{-- MEEM delivers a fully integrated real estate expertise combining investment, asset, and property management to ensure operational efficiency, asset sustainability, and consistent income generation.  --}}
                {{-- MEEM delivers a fully integrated real estate solution that combines investment, asset, and property management to ensure operational efficiency, asset sustainability, and consistent income generation. Our services are designed to deliver value across the entire real estate lifecycle, from acquisition to ongoing operations. --}}

                MEEM delivers a fully integrated real estate solution that combines investment, asset, and property management to ensure operational efficiency, asset sustainability, and consistent income generation.
            </p>
        </div>
    </div>
</section>

<section class="grid lg:grid-cols-3">
    <article class="service-card reveal-up flex flex-col items-center px-5 py-10 text-center sm:px-12 sm:py-16 lg:px-10 lg:py-24" data-reveal>
        <img src="{{ asset('assets/platform_icon3.png') }}" class="w-[160px]" alt="">
        <h2 class="mt-8 text-3xl font-semibold">Investment Management</h2>
        <div class="my-6 h-px w-full max-w-[350px] bg-white/80"></div>
        <p class="max-w-[390px] text-center text-[15px] leading-[1.5]">
            Identifying and acquiring high-potential real estate opportunities that deliver long-term value and sustainable growth.
        </p>
    </article>

    <article class="service-card reveal-up flex flex-col items-center px-5 py-10 text-center sm:px-12 sm:py-16 lg:px-10 lg:py-24" data-reveal style="--reveal-delay: 120ms">
        <img src="{{ asset('assets/platform_icon2.png') }}" class="w-[160px]" alt="">
        <h2 class="mt-8 text-3xl font-semibold">Asset Management</h2>
        <div class="my-6 h-px w-full max-w-[350px] bg-white/80"></div>
        <p class="max-w-[390px] text-center text-[15px] leading-[1.5]">
            Enhancing asset performance through proactive oversight, lifecycle management, and strategic optimization.
        </p>
    </article>

    <article class="service-card reveal-up flex flex-col items-center px-5 py-10 text-center sm:px-12 sm:py-16 lg:px-10 lg:py-24" data-reveal style="--reveal-delay: 240ms">
        <img src="{{ asset('assets/platform_icon1.png') }}" class="w-[160px]" alt="">
        <h2 class="mt-8 text-3xl font-semibold">Property Management</h2>
        <div class="my-6 h-px w-full max-w-[350px] bg-white/80"></div>
        <p class="max-w-[390px] text-center text-[15px] leading-[1.5]">
            Delivering efficient operations, tenant satisfaction,<br> and sustained asset value.
        </p>
    </article>
</section>
@endsection
