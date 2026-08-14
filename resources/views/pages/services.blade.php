@extends('layouts.app')

@section('title', 'TOMORO COFFEE | Services')

@section('content')

<section class="page-hero">

    <div class="page-hero-content">

        <span class="eyebrow">
            OUR SERVICES
        </span>

        <h1>
            Everything for your
            <span>coffee moment.</span>
        </h1>

        <p>
            Discover the products and experiences that
            make TOMORO COFFEE part of your everyday routine.
        </p>

    </div>

</section>


<section class="services-section section">

    <div class="section-label">
        01 — WHAT WE OFFER
    </div>

    <div class="services-grid">


        <article class="service-card">

            <div class="service-number">01</div>

            <div class="big-service-icon">
                ☕
            </div>

            <h2>Signature Coffee</h2>

            <p>
                Enjoy carefully prepared coffee beverages
                created for coffee lovers looking for
                quality and consistency.
            </p>

            <span class="service-tag">
                COFFEE
            </span>

        </article>


        <article class="service-card">

            <div class="service-number">02</div>

            <div class="big-service-icon">
                🧋
            </div>

            <h2>Specialty Beverages</h2>

            <p>
                Discover refreshing and creative beverages
                that offer something different for every
                coffee moment.
            </p>

            <span class="service-tag">
                BEVERAGES
            </span>

        </article>


        <article class="service-card">

            <div class="service-number">03</div>

            <div class="big-service-icon">
                🍰
            </div>

            <h2>Food & Pastries</h2>

            <p>
                Complement your drink with food and pastry
                options perfect for quick breaks or relaxed
                coffee sessions.
            </p>

            <span class="service-tag">
                FOOD
            </span>

        </article>


        <article class="service-card">

            <div class="service-number">04</div>

            <div class="big-service-icon">
                📱
            </div>

            <h2>Digital Ordering</h2>

            <p>
                Make your coffee experience more convenient
                through digital ordering and accessible
                customer services.
            </p>

            <span class="service-tag">
                DIGITAL
            </span>

        </article>


        <article class="service-card">

            <div class="service-number">05</div>

            <div class="big-service-icon">
                🏪
            </div>

            <h2>Coffee Shop Experience</h2>

            <p>
                Enjoy a comfortable environment where
                customers can relax, meet friends, or simply
                take a break.
            </p>

            <span class="service-tag">
                EXPERIENCE
            </span>

        </article>


        <article class="service-card">

            <div class="service-number">06</div>

            <div class="big-service-icon">
                🎁
            </div>

            <h2>Promotions & Offers</h2>

            <p>
                Discover special promotions and seasonal
                offers designed to make every TOMORO visit
                more rewarding.
            </p>

            <span class="service-tag">
                OFFERS
            </span>

        </article>


    </div>

</section>


<section class="services-cta">

    <div>

        <span class="eyebrow">
            READY FOR YOUR NEXT CUP?
        </span>

        <h2>
            Let's make your
            next moment better.
        </h2>

    </div>

    <a href="{{ route('contact') }}" class="button button-light">
        Contact TOMORO →
    </a>

</section>

@endsection