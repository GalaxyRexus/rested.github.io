<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How It Works</title>
    <link rel="stylesheet" href="{{asset('css/landing-page/how.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg fw-bold sticky-top not-scrolled">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Copedia Logo" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/landing-page/about') }}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/landing-page/menu') }}">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/landing-page/howitwork') }}">HOW IT WORKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/landing-page/blog') }}">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/order-page/order-menu') }}">ORDER SEKARANG</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Banner Section -->
    <div class="banner">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h1 class="display-4 fw-bold">Welcome To Copedia</h1>
            <p class="lead">Explore endless opportunities with us</p>
        </div>
    </div>

    <div class="location-section">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h1 class="display-4 fw-bold">WHERE TO FIND US?</h1>
                    <p class="lead">Our Jagoans currently serving up these neighborhoods.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="location-card">
                        <div class="location-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <h2 class="location-title">Karet Kuningan Area</h2>
                        <p class="location-hours">Mon-Sat 7am to 6pm.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="location-card">
                        <div class="location-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <h2 class="location-title">Cipete Area</h2>
                        <p class="location-hours">Mon-Sat 7am to 6pm.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="location-card">
                        <div class="location-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <h2 class="location-title">Sahid Sudirman Area</h2>
                        <p class="location-hours">Mon-Sat 7am to 6pm.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="location-card">
                        <div class="location-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <h2 class="location-title">Pondok Pinang Area</h2>
                        <p class="location-hours">Mon-Sat 7am to 6pm.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="location-card">
                        <div class="location-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <h2 class="location-title">Menteng Atas</h2>
                        <p class="location-hours">Mon-Sat 7am to 6pm.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-lol">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Copedia Party Logo">
        </div>
        <h1 class="tagline">Is it your birthday? Or maybe it's your company's birthday?</h1>
        <p class="description">
            Order a Copedia cart for your event and we'll set up for however long you need.
        </p>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="pricing-card">
                    <h2 class="text-center fw-bold">50 - 100 CUPS</h2>
                    <div class="text-center">
                        <div class="price-tag">
                            <span>Start from Rp 500.000</span>
                        </div>
                    </div>
                    <p class="terms text-center">Price and terms and conditions</p>
                    <ul class="specs-list">
                        <li>
                            <span>Maximum Distance<br>(Free Delivery)</span>
                            <span>10 km</span>
                        </li>
                        <li>
                            <span>Maximum Standby Duration</span>
                            <span>1 Hour</span>
                        </li>
                        <li>
                            <span>Copedia Cart Included</span>
                            <span>Yes</span>
                        </li>
                        <li>
                            <span>Number of Jagoan/Barista</span>
                            <span>1</span>
                        </li>
                        <li>
                            <span>Booking Time</span>
                            <span>D-2</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="book-now">BOOK NOW</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="pricing-card">
                    <h2 class="text-center fw-bold">101 - 200 CUPS</h2>
                    <div class="text-center">
                        <div class="price-tag">
                            <span>Start from 1.000.000</span>
                        </div>
                    </div>
                    <p class="terms text-center">Price and terms and conditions</p>
                    <ul class="specs-list">
                        <li>
                            <span>Maximum Distance<br>(Free Delivery)</span>
                            <span>10 km</span>
                        </li>
                        <li>
                            <span>Maximum Standby Duration</span>
                            <span>1.5 Hour</span>
                        </li>
                        <li>
                            <span>Copedia Cart Included</span>
                            <span>Yes</span>
                        </li>
                        <li>
                            <span>Number of Jagoan/Barista</span>
                            <span>2</span>
                        </li>
                        <li>
                            <span>Booking Time</span>
                            <span>D-2</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="book-now">BOOK NOW</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="pricing-card">
                    <h2 class="text-center fw-bold">201 - 300 CUPS</h2>
                    <div class="text-center">
                        <div class="price-tag">
                            <span>Start from 2.000.000</span>
                        </div>
                    </div>
                    <p class="terms text-center">Price and terms and conditions</p>
                    <ul class="specs-list">
                        <li>
                            <span>Maximum Distance<br>(Free Delivery)</span>
                            <span>10 km</span>
                        </li>
                        <li>
                            <span>Maximum Standby Duration</span>
                            <span>2 Hour</span>
                        </li>
                        <li>
                            <span>Copedia Cart Included</span>
                            <span>Yes</span>
                        </li>
                        <li>
                            <span>Number of Jagoan/Barista</span>
                            <span>3</span>
                        </li>
                        <li>
                            <span>Booking Time</span>
                            <span>D-2</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="book-now">BOOK NOW</button>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="pricing-card">
                    <h2 class="text-center fw-bold">301 - 400 CUPS</h2>
                    <div class="text-center">
                        <div class="price-tag">
                            <span>Start from 3.000.000</span>
                        </div>
                    </div>
                    <p class="terms text-center">Price and terms and conditions</p>
                    <ul class="specs-list">
                        <li>
                            <span>Maximum Distance<br>(Free Delivery)</span>
                            <span>10 km</span>
                        </li>
                        <li>
                            <span>Maximum Standby Duration</span>
                            <span>2 Hour</span>
                        </li>
                        <li>
                            <span>Copdeia Cart Included</span>
                            <span>Yes</span>
                        </li>
                        <li>
                            <span>Number of Jagoan/Barista</span>
                            <span>3</span>
                        </li>
                        <li>
                            <span>Booking Time</span>
                            <span>D-2</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="book-now">BOOK NOW</button>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="pricing-card">
                    <h2 class="text-center fw-bold">401 - 500 CUPS</h2>
                    <div class="text-center">
                        <div class="price-tag">
                            <span>Start from 4.000.000</span>
                        </div>
                    </div>
                    <p class="terms text-center">Price and terms and conditions</p>
                    <ul class="specs-list">
                        <li>
                            <span>Maximum Distance<br>(Free Delivery)</span>
                            <span>10 km</span>
                        </li>
                        <li>
                            <span>Maximum Standby Duration</span>
                            <span>2 Hour</span>
                        </li>
                        <li>
                            <span>Copedia Cart Included</span>
                            <span>Yes</span>
                        </li>
                        <li>
                            <span>Number of Jagoan/Barista</span>
                            <span>3</span>
                        </li>
                        <li>
                            <span>Booking Time</span>
                            <span>D-2</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="book-now">BOOK NOW</button>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="pricing-card">
                    <h2 class="text-center fw-bold">501+ CUPS</h2>
                    <div class="text-center">
                        <div class="price-tag">
                            <span>Start from 5.000.000</span>
                        </div>
                    </div>
                    <p class="terms text-center">Price and terms and conditions</p>
                    <ul class="specs-list">
                        <li>
                            <span>Maximum Distance<br>(Free Delivery)</span>
                            <span>10 km</span>
                        </li>
                        <li>
                            <span>Maximum Standby Duration</span>
                            <span>2 Hour</span>
                        </li>
                        <li>
                            <span>Copedia Cart Included</span>
                            <span>Yes</span>
                        </li>
                        <li>
                            <span>Number of Jagoan/Barista</span>
                            <span>3</span>
                        </li>
                        <li>
                            <span>Booking Time</span>
                            <span>D-2</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="book-now">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <!-- Top Row -->
        <div class="row g-4 mb-4">
            <!-- Card 1 - Text -->
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="quote-mark">"</div>
                        <p class="testimonial-text">Now every time I have a company event, I always order Copedia Party!
                            It's so convenient, now I can order it via Copedia delivery.</p>
                        <p class="author">— BAYU</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 - Image -->
            <div class="col-md-3">
                <div class="card shadow">
                    <img src="{{ asset('images/bartender.jpeg') }}" alt="Copedia staff in red uniforms" class="card-img">
                </div>
            </div>
            <!-- Card 3 - Text -->
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="quote-mark">"</div>
                        <p class="testimonial-text">I had Copedia Party for my wedding, and my guests gave lots of
                            compliments! They said it's so unique and the drink is good.</p>
                        <p class="author">— SYAFIRA</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 - Image -->
            <div class="col-md-3">
                <div class="card shadow">
                    <img src="{{ asset('images/bartender 1.jpg') }}" alt="Copedia coffee cart" class="card-img">
                </div>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="row g-4">
            <!-- Card 5 - Image -->
            <div class="col-md-3">
                <div class="card shadow">
                    <img src="{{ asset('images/bartender 2.jpg') }}" alt="Copedia service setup" class="card-img">
                </div>
            </div>
            <!-- Card 6 - Text -->
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="quote-mark">"</div>
                        <p class="testimonial-text">I like having Jago in my events whether it's for my company or
                            family related. The Copedia has a great attitude and the drinks served are fresh!</p>
                        <p class="author">— NAURA</p>
                    </div>
                </div>
            </div>
            <!-- Card 7 - Image -->
            <div class="col-md-3">
                <div class="card shadow">
                    <img src="{{ asset('images/bartender 3.jpg') }}" alt="Copedia service setup" class="card-img">
                </div>
            </div>
            <!-- Card 8 - Text -->
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="quote-mark">"</div>
                        <p class="testimonial-text">I never thought I could bring Copedia carts to my events before! It
                            surely gave an interesting experience for me and my co-workers. Will definitely order
                            another Copedia Party.</p>
                        <p class="author">— EVAN</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-container">
        <h1 class="main-title">FAQ ABOUT COPEDIA PARTY</h1>
        <p class="subtitle">Everything you need to know about the Copedia Party</p>

        <div class="accordion" id="jagoFAQ">
            <!-- Question 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question1">
                        How much should I pay if I want to add additional cups?
                    </button>
                </h2>
                <div id="question1" class="accordion-collapse collapse show" data-bs-parent="#CopediaFAQ">
                    <div class="accordion-body">
                        Additional cups cost IDR 10,000/cup (please inform D-2)
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question2">
                        Can I adjust my order time later on the D-day?
                    </button>
                </h2>
                <div id="question2" class="accordion-collapse collapse" data-bs-parent="#CopediaFAQ">
                    <div class="accordion-body">
                        No. An order time that has been set cannot be changed on the day of the event
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question3">
                        How much is the maximum distance for the delivery?
                    </button>
                </h2>
                <div id="question3" class="accordion-collapse collapse" data-bs-parent="#CopediaFAQ">
                    <div class="accordion-body">
                        Maximum delivery distance is within 25 km radius from our nearest outlet
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question4">
                        How much will it cost for additional time?
                    </button>
                </h2>
                <div id="question4" class="accordion-collapse collapse" data-bs-parent="#CopediaFAQ">
                    <div class="accordion-body">
                        Additional time costs IDR 100,000 per hour (please inform at least 1 hour before event ends)
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question5">
                        Which drinks can I choose?
                    </button>
                </h2>
                <div id="question5" class="accordion-collapse collapse" data-bs-parent="#CopediaFAQ">
                    <div class="accordion-body">
                        You can choose from our signature drinks menu including:
                        <ul class="mt-2">
                            <li>Classic Coffee (Hot/Ice)</li>
                            <li>Cafe Latte (Hot/Ice)</li>
                            <li>Cappuccino (Hot/Ice)</li>
                            <li>Mocha (Hot/Ice)</li>
                            <li>Various Tea selections</li>
                            <li>Special non-coffee beverages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="info-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="info-title">NEED MORE INFORMATION?</h1>
                    <p class="info-text">Let us know if you need further assistant about our pricing or application. We will do our best to help</p>
                    <a href="#" class="contact-btn">CONTACT US</a>
                </div>
                <div class="col-lg-6">
                    <div class="image-container">
                        <img src="{{ asset('images/bartender 4.jpg') }}" alt="Jago staff preparing coffee" class="info-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Logo and Address -->
                <div class="col-lg-3 mb-4">
                    <a class="me-5" href="#">
                        <img src="{{ asset('images/logo.png') }}" alt="Copedia Logo" style="height: 90px;">
                    </a>
                    <p class="small">Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex illo sint accusamus voluptatibus porro, debitis ut cum blanditiis repellendus totam numquam, suscipit in rerum odit explicabo molestiae. Maiores, nisi dolorum.</p>
                </div>

                <!-- Company Links -->
                <div class="col-lg-2 mb-4">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="about">About us</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="menu">Menu</a></li>
                        <li><a href="howitwork">How It Work</a></li>
                        <li><a href="#">Terms And Conditions</a></li>
                    </ul>
                </div>

                <!-- Products & Services -->
                <div class="col-lg-2 mb-4">
                    <h5>Product & Services</h5>
                    <ul>
                        <li><a href="">How It Works</a></li>
                        <li><a href="#">Copedia Party</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="col-lg-2 mb-4">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">Email</a></li>
                        <li><a href="#">WhatsApp</a></li>
                    </ul>
                </div>

                <!-- Download Section -->
                <div class="col-lg-3 mb-4">
                    <div class="text-center text-lg-end">
                        <h5>DOWNLOAD SEKARANG</h5>
                        <div class="qr-code mb-3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Rickrolling_QR_code.png"
                                alt="QR Code">
                        </div>
                        <div class="store-badges mb-3">
                            <a href="https://wa.me/6285156573718" target="_blank" class="whatsapp-button">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                                    alt="WhatsApp Icon" class="whatsapp-icon">
                                Hubungi Kami
                            </a>
                        </div>
                        <div class="gratis-coffee">
                            <h4>GRATIS BLACK COFFEE KHAS NGAWI*</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright and Social Media -->
            <div class="row mt-4 pt-4 border-top">
                <div class="col-md-6">
                    <p class="mb-0">Copyright © Copedia Coffee. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.remove('not-scrolled');
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
                navbar.classList.add('not-scrolled');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>