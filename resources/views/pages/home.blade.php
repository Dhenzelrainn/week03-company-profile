@extends('layouts.app')

@section('title', 'TOMORO COFFEE | Home')

@section('content')

<!-- HERO -->

<section class="hero">

    <div class="hero-content">

        <span class="eyebrow">
            COFFEE • COMMUNITY • MOMENTS
        </span>

        <h1>
            GOOD COFFEE.
            <span>GOOD MOMENTS.</span>
        </h1>

        <p>
            TOMORO COFFEE brings together quality coffee,
            refreshing beverages, and welcoming spaces made
            for every moment of your day.
        </p>

        <div class="hero-actions">

            <a href="{{ route('services') }}" class="button button-primary">
                Explore Our Services
            </a>

            <a href="{{ route('about') }}" class="button button-outline">
                Discover TOMORO
            </a>

        </div>

    </div>

    <div class="hero-decoration">

        <div class="coffee-circle">

            <div class="coffee-cup">
                ☕
            </div>

        </div>

        <div class="orange-shape"></div>
        <div class="yellow-shape"></div>

    </div>

</section>


<!-- COMPANY INTRODUCTION -->

<section class="intro section">

    <div class="section-label">
        01 — WHO WE ARE
    </div>

    <div class="intro-grid">

        <div>

            <h2>
                More than coffee.
                <span>It's a moment.</span>
            </h2>

        </div>

        <div>

            <p class="large-text">
                TOMORO COFFEE is a coffee brand built around
                the simple idea that great coffee can make
                ordinary moments better.
            </p>

            <p>
                From carefully prepared beverages to comfortable
                spaces and friendly service, TOMORO aims to create
                an experience that customers can enjoy every day.
            </p>

        </div>

    </div>

</section>


<!-- FEATURED SERVICES -->

<section class="featured section">

    <div class="section-heading">

        <div>
            <div class="section-label">
                02 — WHAT WE OFFER
            </div>

            <h2>
                Made for every
                <span>coffee moment.</span>
            </h2>
        </div>

        <a href="{{ route('services') }}" class="text-link">
            View all services →
        </a>

    </div>


    <div class="service-preview-grid">

        <article class="service-preview orange-card">

            <div class="service-icon">
                ☕
            </div>

            <h3>Signature Coffee</h3>

            <p>
                Carefully crafted coffee beverages made
                for everyday coffee lovers.
            </p>

        </article>


        <article class="service-preview yellow-card">

            <div class="service-icon">
                ✦
            </div>

            <h3>Refreshing Beverages</h3>

            <p>
                Explore refreshing drinks created for
                every mood and occasion.
            </p>

        </article>


        <article class="service-preview dark-card">

            <div class="service-icon">
                ♡
            </div>

            <h3>Comfortable Spaces</h3>

            <p>
                Enjoy your coffee in a welcoming environment
                designed for good conversations.
            </p>

        </article>

    </div>

</section>


<!-- CTA -->

<section class="cta">

    <div>

        <span class="eyebrow">
            YOUR NEXT COFFEE MOMENT
        </span>

        <h2>
            Take a moment.
            Make it TOMORO.
        </h2>

    </div>

    <a href="{{ route('contact') }}" class="button button-light">
        Get in Touch →
    </a>

</section>

@endsection