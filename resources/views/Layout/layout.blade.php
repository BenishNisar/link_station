<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links Station</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset("assets/img/Logos.png") }}" type="image/x-icon">

</head>
<body>


 <!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 fixed-top">
    <div class="container">
        <!-- Brand Name (Left Side) -->
<img src="{{ asset("assets/img/link_station.webp") }}" alt="" width="100px">
        <!-- Navbar Toggler for Mobile -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items (Right Side) -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="{{ asset("/") }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ asset("/service") }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ asset("/about") }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ asset("/contact") }}">Contact Us</a>
                </li>
            </ul>

            <!-- Contact Now Button -->
            <a  href="https://wa.me/922132640403?text=Chat%20on%20WhatsApp%20with%20%2B92%2021%2032640403"
               class="btn btn-success fw-bold rounded-pill px-4 py-2 ms-5" target="_blank">
                <i style="color: green;" class="bi bi-whatsapp"></i> Contact Now
            </a>
        </div>
    </div>
</nav>





<div class="custom-cursor"></div>


 {{-- Navbar --}}



@yield("Content")

<!-- footer -->


<footer>
    <div class="footer-body mt-3" style="
    background: linear-gradient(rgba(30, 60, 114, 0.8), rgba(0, 174, 238, 0.8)),
    url('{{ asset('assets/img/footerdes.avif') }}');
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 60px 0;
">
    <div class="container">
        <div class="row">
            <!-- Logo & About Section -->
            <div class="col-md-4">
                <img src="{{ asset('assets/img/link_station.webp') }}" height="80px" alt="Links Station Logo">
                <p class="mt-3" style="font-size: 15px; line-height: 1.8; opacity: 0.9;">
                    Elevate your business with Links Station. We provide cutting-edge digital solutions to keep you ahead in a fast-paced world.
                </p>
                <div class="mt-3">
                    <a href="#" class="me-3 social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Popular Services -->
            <div class="col-md-4">
                <h5 class="fw-bold text-uppercase mb-3">Popular Services</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">All Services</a></li>
                    <li><a href="#" class="footer-link">Packaging Designing</a></li>
                    <li><a href="#" class="footer-link">App Development</a></li>
                    <li><a href="#" class="footer-link">Digital Marketing</a></li>
                    <li><a href="#" class="footer-link">Web Designing & SEO</a></li>
                    <li><a href="#" class="footer-link">Travel Documentation</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4">
                <h5 class="fw-bold text-uppercase mb-3">Contact Info</h5>
                <ul class="list-unstyled">
                    <li class="footer-contact"><i class="fas fa-map-marker-alt"></i> 14th & 15th Floor, BRR Tower, I.I Chundrigar Road, Karachi</li>
                    <li class="footer-contact"><i class="fas fa-phone"></i> 021 32640403</li>
                    <li class="footer-contact">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:contact@linksstation.com.pk" class="footer-link">contact@linksstation.com.pk</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


    <!-- Small Copyright Footer -->
    <div class="footer-banner" style="

    text-align: center;
    color: black;
    padding: 20px;
    font-size: 14px;
    font-weight: bold;
">
    <p class="mb-0 text-center">© 2025 All Rights Reserved | Designed with ❤️ by Links Station</p>
</div>
</footer>





</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset("assets/js/app.js")}}"></script>

</html>
