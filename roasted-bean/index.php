<?php get_header(); ?>

<main class="site-main">

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-label">Locally Roasted · Ethically Sourced</span>

                <h2>Freshly Roasted Coffee Every Day</h2>

                <p>
                    Handcrafted drinks made from beans we roast in-house,
                    served in a space that feels like home.
                </p>

                <div class="hero-actions">
                    <a href="<?php echo home_url('/menu'); ?>" class="btn btn-primary">View Menu</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-secondary">Visit Us</a>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-drinks">
        
    <div class="container">

        <div id="featured-drinks" class="section-heading">
            <span class="section-label">Our Favorites</span>
            <h2>Featured Drinks</h2>
        </div>

        <div class="drinks-grid">

            <article class="drink-card">
                <img src="https://images.unsplash.com/photo-1517701604599-bb29b565090c?auto=format&fit=crop&w=800&q=80" alt="Espresso">
                <div class="drink-card-content">
                    <div class="drink-card-header">
                        <h3>Espresso</h3>
                        <span>$3.50</span>
                    </div>
                    <p>Rich, bold, and perfectly pulled. Our signature single-origin shot.</p>
                </div>
            </article>

            <article class="drink-card">
                <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&w=800&q=80" alt="Latte">
                <div class="drink-card-content">
                    <div class="drink-card-header">
                        <h3>Latte</h3>
                        <span>$5.00</span>
                    </div>
                    <p>Silky steamed milk over a double shot, finished with delicate latte art.</p>
                </div>
            </article>

            <article class="drink-card">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=800&q=80" alt="Cold Brew">
                <div class="drink-card-content">
                    <div class="drink-card-header">
                        <h3>Cold Brew</h3>
                        <span>$4.75</span>
                    </div>
                    <p>Steeped for 18 hours for an ultra-smooth, naturally sweet finish.</p>
                </div>
            </article>

        </div>

        <div class="section-action">
            <a href="<?php echo home_url('/menu'); ?>" class="btn btn-primary">Full Menu</a>
        </div>

    </div>
</section>
<section id="about-coffee" class="about-coffee">
    <div class="container">
        <div class="about-grid">

            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=1200&q=80" alt="Coffee roasting process">
            </div>

            <div class="about-content">
                <span class="section-label">Our Coffee</span>

                <h2>Roasted with Care,<br>Sourced with Purpose</h2>

                <p>
                    Every batch of coffee at Roasted Bean is roasted in small quantities right here in our shop.
                    We partner directly with farms in Colombia, Ethiopia, and Guatemala to bring you single-origin
                    beans that are ethically sourced and sustainably grown.
                </p>

                <p>
                    From seed to cup, we believe in transparency, quality, and respect for the people and land
                    that make great coffee possible.
                </p>

               <a href="<?php echo home_url('/about'); ?>" class="btn btn-primary">Our Story</a>
            </div>

        </div>
    </div>
</section>
<section id="testimonials" class="testimonials">
    <div class="container">

        <div class="section-heading">
            <span class="section-label">What People Say</span>
            <h2>Loved by Our Community</h2>
        </div>

        <div class="testimonials-grid">

            <article class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>
                    “The best coffee in town, hands down. I come here every morning and it always makes my day.”
                </p>
                <h3>Emily R.</h3>
            </article>

            <article class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>
                    “Their cold brew changed my life. Smooth, never bitter, and the staff is incredibly friendly.”
                </p>
                <h3>Marcus T.</h3>
            </article>

            <article class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>
                    “A warm, welcoming space with incredible coffee. It feels like a second home to me.”
                </p>
                <h3>Aisha K.</h3>
            </article>

        </div>

    </div>
</section>
<section id="location-hours" class="location-hours">
    <div class="container">

        <div class="section-heading">
            <span class="section-label">Find Us</span>
            <h2>Location & Hours</h2>
        </div>

        <div class="location-grid">

            <div class="location-details">

                <div class="info-block">
                    <h3>Address</h3>
                    <p>
                        142 Oak Street<br>
                        Brooklyn, NY 11201
                    </p>
                </div>

                <div class="info-block">
                    <h3>Hours</h3>
                    <p>Monday – Friday: 6:30 AM – 7:00 PM</p>
                    <p>Saturday – Sunday: 7:30 AM – 8:00 PM</p>
                </div>

                <div class="info-block">
                    <h3>Contact</h3>
                    <p>(718) 555-0192</p>
                    <p>hello@roastedbeancoffee.com</p>
                </div>

            </div>

            <div class="map-placeholder">
                <div class="map-content">
                    <h3>142 Oak Street, Brooklyn</h3>
                    <p>Map placeholder — embed your Google Map here</p>
                </div>
            </div>

        </div>

    </div>
</section>
<section id="contact" class="cta-section">
    <div class="container">
        <div class="cta-content">

            <h2>Come Say Hello</h2>

            <p>
                Whether you need your morning pick-me-up or a cozy spot to work,
                we'd love to welcome you. Stop by or follow us for updates,
                specials, and latte art that'll make your day.
            </p>

            <div class="cta-actions">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get in Touch</a>
                <a href="<?php echo home_url('/menu'); ?>" class="btn btn-secondary-dark">See the Menu</a>
            </div>

            <div class="cta-socials">
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
            </div>

        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>