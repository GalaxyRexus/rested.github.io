<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Life Is Full Of Favor</title>
  <link rel="stylesheet" href="{{asset('css/landing-page/menu.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg fw-bold sticky-top not-scrolled">
        <div class="container-fluid">
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
  <div class="banner">
    <img class="w-100" src="{{ asset('images/bannerh3.jpg') }}" alt="Flavors" style="height: 450px;">
    <div class="position-absolute top-50 start-50 translate-middle">
      <h1 class=" fs-1">Life is Full of Flavor</h1>
      <p class="fs-5 text-white">With 12+ flavors and counting, we've got one for every occasion.</p>
    </div>
  </div>
  
  <div class="container">
    <div class="text-black fw-bold">
        <h1>SEASONAL</h1>
        <hr class="border border-black border-2 opacity-100 mt-3">
    </div>
    <div class="row mt-3">
        <div class="col-md-7 text-center">
            <img src="{{ asset('images/kp1.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>SUSU JAHE BUTTERSCOTCH</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>
                        A warm and beneficial traditional Indonesian drink, combining creamy milk, 
                        red ginger, and the sweetness of butterscotch
                        for a smooth taste while supporting the immune system.
                    </p>
                </div>
            </div>
        </div>        
    </div>
    <div class="text-black fw-bold" style="margin-top: 100px;">
        <h1>COFFEE</h1>
        <hr class="border border-black border-2 opacity-100 mt-3">
    </div>
    <div class="row mt-3">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp2.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>JAGO BLACK COFFEE ( HOT/ICED )</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>
                        Black coffee with 100% Indonesian Arabica coffee beans. 
                        Available in hot and cold with manual brew method.
                    </p>
                </div>
            </div>
        </div>        
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp3.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>KOPI SUSU JAGO</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>Jago's brown sugar iced coffee</p>
                </div>
            </div>
        </div>        
    </div>
    <div class="row mt-5">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp4.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>CITRUS COLD BREW</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>Iced coffee with cold brew technique and a fresh, unique citrus taste.</p>
                </div>
            </div>
        </div>        
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp5.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>vanilla latte VANILLA LATTE</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>
                        Espresso and milk with the taste and scent of vanilla. 
                        Feel this tasty and premium combination in every sip.
                    </p>
                </div>
            </div>
        </div>        
    </div>
    <div class="row mt-5">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp6.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>SALTED CARAMEL LATTE</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>
                        Combination of espresso, milk, and salted caramel. 
                        Perfect for your everyday companion.
                    </p>
                </div>
            </div>
        </div>        
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp7.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>KOPI SUSU OATSIDE</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>High-quality creamy coffee, perfect for non-dairy drinkers.</p>
                </div>
            </div>
        </div>        
    </div>

    <div class="text-black fw-bold" style="margin-top: 100px;">
        <h1>NON-COFFEE</h1>
        <hr class="border border-black border-2 opacity-100 mt-3">
    </div>
    <div class="row mt-3">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp8.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>EARL GREY MILK TEA</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>Combination of Earl Grey tea with milk, served with ice.</p>
                </div>
            </div>
        </div>        
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp9.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>JAGO CHOCOLATE</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>The real chocolate milk uses 100% High Quality Belgian Dark Chocolate creating sweet, 
                        bitter, and creamy taste. Served with ice.
                    </p>
                </div>
            </div>
        </div>        
    </div>
    <div class="row mt-5">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp10.png') }}" class="w-50" alt="" srcset="">
            <div class="row mt-3 ">
                <div class="col text-center">
                    <h2>HOJICHA LYCHEE TEA</h2> 
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col text-center">
                    <p>Tea with the taste of lychee and basil seeds as topping.</p>
                </div>
            </div>
        </div>              
    </div>

    <div class="text-black fw-bold" style="margin-top: 100px;">
        <h1>BUNDLES</h1>
        <hr class="border border-black border-2 opacity-100 mt-3">
    </div>
    <div class="row mt-3">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp11.png') }}" class="w-75" alt="" srcset="">
            <div class="row ">
                <div class="col text-center">
                    <h2>JAGOAN KILAT</h2> 
                </div>
            </div>
            <div class="row mt-2 ">
                <div class="col text-center">
                    <p>2 Kopi Susu Jago & 3 JAGO Chocolate</p>
                </div>
            </div>
        </div>        
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp12.png') }}" class="w-75" alt="" srcset="">
            <div class="row ">
                <div class="col text-center">
                    <h2>JAGOAN CAKEP</h2> 
                </div>
            </div>
            <div class="row ">
                <div class="col text-center">
                    <p>1 JAGO Chocolate, 1 Earl Grey Milk Tea, & 1 Kopi Susu JAGO</p>
                </div>
            </div>
        </div>        
    </div>
    <div class="row mt-5">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/kp13.png') }}" class="w-75" alt="" srcset="">
            <div class="row ">
                <div class="col text-center">
                    <h2>JAGOAN NGOPI</h2> 
                </div>
            </div>
            <div class="row ">
                <div class="col text-center">
                    <p>2 Kopi Susu JAGO, 2 Citrus Cold Brew</p>
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
  <!-- Bootstrap JS -->
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
