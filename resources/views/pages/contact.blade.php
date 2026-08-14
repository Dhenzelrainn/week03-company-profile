@extends('layouts.app')

@section('title', 'TOMORO COFFEE | Contact')

@section('content')

<section class="page-hero">

    <div class="page-hero-content">

        <span class="eyebrow">
            CONTACT TOMORO
        </span>

        <h1>
            Let's start a
            <span>conversation.</span>
        </h1>

        <p>
            Have a question, suggestion, or simply want to
            know more about TOMORO COFFEE?
        </p>

    </div>

</section>


<section class="contact-section section">

    <div class="contact-grid">


        <!-- CONTACT INFO -->

        <div class="contact-info">

            <div class="section-label">
                GET IN TOUCH
            </div>

            <h2>
                We'd love to
                <span>hear from you.</span>
            </h2>

            <p>
                Reach out to us through the information below
                or send us a message using the form.
            </p>


            <div class="contact-details">

                <div class="contact-detail">

                    <span class="contact-icon">
                        📍
                    </span>

                    <div>

                        <strong>Address</strong>

                        <p>
                            908 Nicanor Reyes St., Sampaloc, Manila
                        </p>

                    </div>

                </div>


                <div class="contact-detail">

                    <span class="contact-icon">
                        ✉
                    </span>

                    <div>

                        <strong>Email</strong>

                        <p>
                            tomorocoffee.ph@gmail.com
                        </p>

                    </div>

                </div>


                <div class="contact-detail">

                    <span class="contact-icon">
                        ☎
                    </span>

                    <div>

                        <strong>Phone</strong>

                        <p>
                            +63 900 000 0000
                        </p>

                    </div>

                </div>

            </div>


            <div class="social-links">

                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">TikTok</a>

            </div>

        </div>


        <!-- FORM -->

        <div class="contact-form-wrapper">

            <div class="form-header">

                <span>
                    SEND A MESSAGE
                </span>

                <h3>
                    Tell us what's on your mind.
                </h3>

            </div>


            <form>

                <div class="form-group">

                    <label for="name">
                        Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        placeholder="Your name"
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        placeholder="you@example.com"
                    >

                </div>


                <div class="form-group">

                    <label for="subject">
                        Subject
                    </label>

                    <input
                        type="text"
                        id="subject"
                        placeholder="How can we help?"
                    >

                </div>


                <div class="form-group">

                    <label for="message">
                        Message
                    </label>

                    <textarea
                        id="message"
                        rows="6"
                        placeholder="Write your message..."
                    ></textarea>

                </div>


                <button
                    type="button"
                    class="button button-primary form-button"
                >
                    Send Message →
                </button>

                <small>
                    This contact form is for interface demonstration only.
                </small>

            </form>

        </div>

    </div>

</section>


<section class="contact-bottom">

    <div>

        <span class="eyebrow">
            TOMORO COFFEE
        </span>

        <h2>
            Good coffee is
            better together.
        </h2>

    </div>

    <div class="contact-circle">
        ☕
    </div>

</section>

@endsection