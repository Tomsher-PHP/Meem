@extends('layouts.app')

@section('page_id', 'strategy-page')

@section('content')
<section class="strategy-hero">
    <div class="strategy-hero-copy mx-auto px-5 pb-12 sm:px-10 sm:pb-16 lg:px-16 xl:px-20">
        <div class="max-w-[304px]" style="max-width: 304px;">
            <h1 class="display-title hero-reveal text-[50px] leading-none">Strategy</h1>
            <div class="hero-reveal mt-8 space-y-7 text-justify text-[14px] leading-[1.5] text-meem-deep sm:text-[16px] sm:leading-[1.5]" style="--reveal-delay: 160ms">
                <p>
                    MEEM adopts a disciplined and forward-looking investment approach focused on long-term value creation.
                </p>
                <p>
                    Rooted in a deep understanding of the UAE's evolving landscape, each investment is carefully evaluated to deliver measurable outcomes.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="grid min-h-[780px] bg-meem-ivory lg:grid-cols-2">
    <div class="image-reveal min-h-[480px] overflow-hidden lg:min-h-[780px]" data-reveal="image">
        <img class="h-full w-full object-cover object-center" src="{{ asset('assets/strategy-second-img.png') }}" alt="Prosperous UAE waterfront development at golden hour">
    </div>

    <div class="strategy-list flex items-center px-5 py-10 sm:px-12 sm:py-16 lg:px-16 xl:px-[6vw]">
        <div class="relative z-10 w-full">
            <article class="strategy-item reveal-up" data-reveal>
                <span class="strategy-number">1</span>
                <div>
                    <h2 class="text-2xl font-semibold">Strategic Acquisitions</h2>
                    <p class="mt-2 text-justify text-[14px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]">Targeting high-quality and high-potential assets across key UAE markets.</p>
                </div>
            </article>

            <article class="strategy-item reveal-up" data-reveal style="--reveal-delay: 100ms">
                <span class="strategy-number">2</span>
                <div>
                    <h2 class="text-2xl font-semibold">Portfolio Diversification</h2>
                    <p class="mt-2 text-justify text-[14px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]">Allocating capital across sectors to enhance stability and mitigate market cycle risks.</p>
                </div>
            </article>

            <article class="strategy-item reveal-up" data-reveal style="--reveal-delay: 180ms">
                <span class="strategy-number">3</span>
                <div>
                    <h2 class="text-2xl font-semibold">Active Asset Oversight</h2>
                    <p class="mt-2 text-justify text-[14px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]">Enhancing asset performance through lifecycle management, preventive maintenance, and continuous optimization.</p>
                </div>
            </article>

            <article class="strategy-item reveal-up" data-reveal style="--reveal-delay: 260ms">
                <span class="strategy-number">4</span>
                <div>
                    <h2 class="text-2xl font-semibold">Market Alignment</h2>
                    <p class="mt-2 text-justify text-[14px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]">Aligning investments with the UAE's economic diversification and infrastructure development initiatives to capture long-term growth opportunities.</p>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
