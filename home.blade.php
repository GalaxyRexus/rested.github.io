<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copedia</title>
    <link rel="stylesheet" href="{{ asset('css/landing-page/home.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <div class="banner-overlay">
            <div class="banner-content">
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="display-1 fw bold">Welcome To Copedia</h1>
                <p class="lead">Explore endless opportunities with us</p>
              </div>
            </div>
        <!--<div class="banner-content">
            <h1 class="display-1 fw-bold">Welcome To Copedia</h1>
            <p class="lead">Explore endless opportunities with us</p>
        </div>-->
        </div>
    </div>


    <section class="d-flex align-items-center justify-content-center h-100">
        <div class="container mt-5 mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-start">
                    <h1 class="fw-bold">Crafted with passion,<br>brewed with precision.</h1>
                    <p class="mt-4">
                        Copedia Coffee merupakan brand spesialisasi kopi dengan konsep <strong>"Made to Order"</strong>
                        yang menyajikan Fresh Quality Coffee.
                        Dengan menggunakan 100% biji kopi asli Indonesia yang disajikan oleh barista terlatih dengan
                        mesin kopi standar internasional.
                        Berdiri sejak tahun 2016, dan kini sudah hadir tersedia di lebih dari 1.200 outlet di seluruh
                        Indonesia untuk mempermudah Cop People menjangkau Copedia Coffee.
                    </p>
                    <a href="#" class="btn btn-success mt-3">Lihat Selengkapnya</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/kopi.png') }}"
                        alt="Point Coffee" class="img-fluid rounded adjust-image">
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex align-items-center justify-content-center h-100">
        <div class="container mt-5 mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/es capcin.png') }}"
                        alt="Point Coffee" class="img-fluid rounded adjust-image">
                </div>
                <div class="col-lg-6 text-end ">
                    <h1 class="fw-bold">Crafted with care,<br> brewed with heart.</h1>
                    <p class="mt-4">
                        Copedia Brew adalah brand spesialisasi kopi yang mengusung konsep <strong>"Freshly Brewed For You"</strong>,
                        menyajikan kopi berkualitas dengan cita rasa unik. Dengan biji kopi pilihan yang diproses oleh
                        barista berpengalaman, kami menghadirkan pengalaman minum kopi yang lebih personal. Berdiri
                        sejak 2018, kini hadir di lebih dari 500 lokasi di seluruh Indonesia untuk membawa keceriaan dan
                        rasa yang sempurna di setiap tegukan.
                    </p>
                    <a href="#" class="btn btn-success mt-3">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>


    <div class="container text-center my-5">
        <h2 class="fw-bold">CURIOUS ABOUT COPEDIA COFFEE?</h2>
        <p class="fw-bold">GET YOURS NOW!</p>
    </div>

    <div class="container my-5">
        <div class="scroll-container">
            <div class="scroll-content" id="scrollContent">
                <!-- Original Items -->
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/675f7dc51141e7514adbf9b3_PRODUCT%20IMAGES_2.Menu%20Jago%20App-p-500.png"
                        alt="Susu Jahe Butterscotch" class="product-image">
                    <p class="product-title">ES STMJ</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/67613bde8c95210450090847_KOPI%20SUSU%20OATSIDE%20JAGO%20APP-p-500.png"
                        alt="Kopi Susu Oatside" class="product-image">
                    <p class="product-title">KOPI SUSU OATSIDE</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c30f6dfb1ea762297819_BLACK%20COFFEE%20ICED%20WEBSITE-p-500.png"
                        alt="Jago Black Coffee" class="product-image">
                    <p class="product-title">BLACK ICE COFFEE</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c30f6b231d3de89a61f5_KOPI%20SUSU%20JAGO%20WEBSITE-p-500.png"
                        alt="Kopi Susu Jago" class="product-image">
                    <p class="product-title">KOPI GULA AREN</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c30ff7921178af191071_CITRUS%20COLD%20BREW%20WEBSITE-p-500.png"
                        alt="Kopi Susu Jago" class="product-image">
                    <p class="product-title">ES TEH LEMON</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c30f7ba5f5053c4e7cd2_VANILLA%20LATTE%20WEBSITE-p-500.png"
                        alt="Kopi Susu Jago" class="product-image">
                    <p class="product-title">ES CAPUCINNO</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c3116b231d3de89a6387_SALTED%20CARAMEL%20LATTE%20WEBSITE-p-500.png"
                        alt="Kopi Susu Jago" class="product-image">
                    <p class="product-title">CARAMEL LATTE</p>
                </div>
                
                <!-- Duplicated Items for Seamless Looping -->
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/675f7dc51141e7514adbf9b3_PRODUCT%20IMAGES_2.Menu%20Jago%20App-p-500.png"
                        alt="Susu Jahe Butterscotch" class="product-image">
                    <p class="product-title">ES STMJ</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/67613bde8c95210450090847_KOPI%20SUSU%20OATSIDE%20JAGO%20APP-p-500.png"
                        alt="Kopi Susu Oatside" class="product-image">
                    <p class="product-title">KOPI SUSU OATSIDE</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c30f6dfb1ea762297819_BLACK%20COFFEE%20ICED%20WEBSITE-p-500.png"
                        alt="Jago Black Coffee" class="product-image">
                    <p class="product-title">BLACK ICE COFFEE</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c30f6b231d3de89a61f5_KOPI%20SUSU%20JAGO%20WEBSITE-p-500.png"
                        alt="Kopi Susu Jago" class="product-image">
                    <p class="product-title">KOPI GULA AREN</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c30ff7921178af191071_CITRUS%20COLD%20BREW%20WEBSITE-p-500.png"
                        alt="Kopi Susu Jago" class="product-image">
                    <p class="product-title">ES TEH LEMON</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c30f7ba5f5053c4e7cd2_VANILLA%20LATTE%20WEBSITE-p-500.png"
                        alt="Kopi Susu Jago" class="product-image">
                    <p class="product-title">ES CAPUCINNO</p>
                </div>
                <div class="scroll-item">
                    <img src="https://cdn.prod.website-files.com/5f6155765ae52524090d3a01/6708c3116b231d3de89a6387_SALTED%20CARAMEL%20LATTE%20WEBSITE-p-500.png"
                        alt="Kopi Susu Jago" class="product-image">
                    <p class="product-title">CARAMEL LATTE</p>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials-section text-center">
        <h2 class="fw-bold">WHAT OUR CUSTOMERS ARE COMMENT</h2>
        <div class="container mt-5">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="testimonial-card p-4">
                        <p>The cart design and the concept of cafe-on-wheels are really cool! It’s giving a whole new
                            experience for customers</p>
                        <p class="testimonial-author">— Rizky</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="testimonial-card p-4">
                        <p>A solution for people who want to get a cafe quality coffee with a home-made coffee price.
                            Copedia Coffee rocks!</p>
                        <p class="testimonial-author">— Ayu</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="testimonial-card p-4">
                        <p>My go-to whenever I crave for a coffee but too lazy to spend a delivery fee. Copedia Coffee is
                            indeed the solution</p>
                        <p class="testimonial-author">— Budi</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="testimonial-card p-4">
                        <p>You can book Copedia Coffee for events too! The baristas are super friendly. Cool! And Price Of The Coffee Is Very Cheep.</p>
                        
                        <p class="testimonial-author">— Putri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Privacy</a></li>
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
    <script src="{{ asset('js/js-landing-page/home.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>