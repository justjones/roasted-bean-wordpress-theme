<?php get_header(); ?>

<main class="site-main">

<section class="page-hero">
    <div class="container">
        <span class="section-label">Contact Us</span>
        <h1>We’d Love to Hear From You</h1>
        <p>
            Stop by for a coffee, send us a message, or reach out with questions
            about our menu, hours, or private events.
        </p>
    </div>
</section>

<section class="contact-page">
    <div class="container">

        <div class="contact-grid">

            <div class="contact-details">

                <div class="info-block">
                    <h2>Visit Us</h2>
                    <p>
                        142 Oak Street<br>
                        Brooklyn, NY 11201
                    </p>
                </div>

                <div class="info-block">
                    <h2>Hours</h2>
                    <p>Monday – Friday: 6:30 AM – 7:00 PM</p>
                    <p>Saturday – Sunday: 7:30 AM – 8:00 PM</p>
                </div>

                <div class="info-block">
                    <h2>Contact</h2>
                    <p>(718) 555-0192</p>
                    <p>hello@roastedbeancoffee.com</p>
                </div>

            </div>

            <div class="contact-form-wrap">
                <h2>Send a Message</h2>

                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your email">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" placeholder="How can we help?"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>

    </div>
</section>

<section class="contact-map">
    <div class="container">
        <div class="map-placeholder">
            <div class="map-content">
                <h2>Find Us in Brooklyn</h2>
                <p>Map placeholder — embed your Google Map here</p>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>