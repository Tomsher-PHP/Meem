@extends('layouts.app')

@section('page_id', 'contact-page')

@section('content')
<section class="relative overflow-hidden h-[350px] sm:h-[450px] lg:h-[460px]">
    <img src="{{ asset('assets/contact_us.webp') }}" alt="Contact Us" class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0">
        <div class="mx-auto flex h-full items-end px-5 pb-6 sm:px-10 sm:pb-16 lg:px-16 lg:pb-20 xl:px-20">
            <h1 class="display-title hero-reveal text-[42px] leading-none sm:text-[50px] text-white">
                Contact Us
            </h1>
        </div>
    </div>
</section>

<section class="contact-main flex items-center bg-white px-5 py-10 sm:px-10 sm:py-20 lg:px-16 xl:px-20">
    <div class="mx-auto grid w-full gap-14 lg:grid-cols-[1.05fr_.95fr] lg:gap-28">
        <div class="reveal-up max-w-[550px]" data-reveal>
            <p class="about-copy text-justify text-[15px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]">
                Our team is available from Monday to Friday and from 9:00 AM to 6:00 PM. For enquiries or assistance, please don’t hesitate to contact us and a member of our team will be pleased to help you.
            </p>
        </div>

        <div class="space-y-7 text-[15px] leading-[1.5] sm:text-[15px] sm:leading-[1.5]">
            <a class="contact-link reveal-up flex items-start gap-5" data-reveal href="https://maps.google.com/?q=Sharjah+UAE" target="_blank" rel="noreferrer">
                <img src="{{ asset('assets/location.svg') }}" width="30px" alt="">
                <span>MEEM Real Estate Investment LLC<br>PO Box 29559, Sharjah – UAE</span>
            </a>
            <a class="contact-link reveal-up flex items-center gap-5" data-reveal style="--reveal-delay:100ms" href="tel:+97168868888">
                <img src="{{ asset('assets/phone.svg') }}" width="35px" alt="">
                <span>+971 6 886 8888</span>
            </a>
            <a class="contact-link reveal-up flex items-center gap-5" data-reveal style="--reveal-delay:200ms" href="mailto:info@meemrealestate.com">
                <img src="{{ asset('assets/email.svg') }}" width="35px" alt="">
                <span>info@meemrealestate.com</span>
            </a>
        </div>
    </div>
</section>
@endsection
