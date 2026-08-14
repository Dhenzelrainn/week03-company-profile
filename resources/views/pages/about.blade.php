@extends('layouts.app')

@section('title', 'TOMORO COFFEE | About')

@section('content')

<section class="page-hero">

    <div class="page-hero-content">

        <span class="eyebrow">
            ABOUT TOMORO
        </span>

        <h1>
            Coffee with
            <span>a purpose.</span>
        </h1>

        <p>
            Learn more about the story, values, and people
            behind TOMORO COFFEE.
        </p>

    </div>

</section>


<!-- HISTORY -->

<section class="about-story section">

    <div class="section-label">
        01 — OUR STORY
    </div>

    <div class="two-column">

        <div>

            <h2>
                Built around
                <span>good coffee.</span>
            </h2>

        </div>

        <div>

            <p class="large-text">
                TOMORO COFFEE was created with the goal of
                making quality coffee and enjoyable beverage
                experiences more accessible to everyday customers.
            </p>

            <p>
                The brand continues to focus on creating welcoming
                coffee moments through thoughtfully prepared drinks,
                friendly service, and spaces where people can relax,
                connect, and enjoy their day.
            </p>

        </div>

    </div>

</section>


<!-- MISSION / VISION -->

<section class="mission-section section">

    <div class="mission-card">

        <span>OUR MISSION</span>

        <h2>
            To create enjoyable coffee experiences
            that bring people together.
        </h2>

    </div>

    <div class="vision-card">

        <span>OUR VISION</span>

        <h2>
            To become a trusted coffee brand known
            for quality, accessibility, and meaningful moments.
        </h2>

    </div>

</section>


<!-- CORE VALUES -->

<section class="values section">

    <div class="section-label">
        03 — CORE VALUES
    </div>

    <h2>
        What we believe in.
    </h2>

    <div class="values-grid">

        <div class="value-item">

            <span>01</span>

            <h3>Quality</h3>

            <p>
                We value consistency and care in every
                beverage and customer experience.
            </p>

        </div>


        <div class="value-item">

            <span>02</span>

            <h3>Community</h3>

            <p>
                We believe coffee creates opportunities
                for people to connect.
            </p>

        </div>


        <div class="value-item">

            <span>03</span>

            <h3>Warmth</h3>

            <p>
                We aim to create friendly and welcoming
                experiences for everyone.
            </p>

        </div>


        <div class="value-item">

            <span>04</span>

            <h3>Innovation</h3>

            <p>
                We continue to explore new ideas,
                flavors, and ways to serve our customers.
            </p>

        </div>

    </div>

</section>


<!-- TEAM -->

<section class="team section">

    <div class="section-heading">

        <div>

            <div class="section-label">
                04 — OUR TEAM
            </div>

            <h2>
                People behind
                <span>the experience.</span>
            </h2>

        </div>

    </div>


    <div class="team-grid">

        <div class="team-card">

            <div class="team-avatar">
                <img src="{{ asset('images/dhenzel.jpg') }}" alt="Brand Team">
                <span class="team-stamp">01</span>
            </div>

            <span class="team-role">The Roastery</span>

            <h3>Brand Team</h3>

            <p>Creating the TOMORO experience.</p>

        </div>


        <div class="team-card">

            <div class="team-avatar">
                <img src="{{ asset('images/cj.jpg') }}" alt="Coffee Team">
                <span class="team-stamp">02</span>
            </div>

            <span class="team-role">The Espresso Bar</span>

            <h3>Coffee Team</h3>

            <p>Crafting quality beverages.</p>

        </div>


        <div class="team-card">

            <div class="team-avatar">
                <img src="{{ asset('images/dimps.jpg') }}" alt="Store Team">
                <span class="team-stamp">03</span>
            </div>

            <span class="team-role">The Front Counter</span>

            <h3>Store Team</h3>

            <p>Making every visit welcoming.</p>

        </div>

    </div>

</section>

@endsection