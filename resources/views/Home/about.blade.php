@extends("Layout.layout")
@section("Content")

{{-- about --}}
<div class="container-fluid hero-section position-relative overflow-hidden py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side: Text Content -->
            <div class="col-lg-6 text-start">
                <h1 class="display-4 fw-bold text-dark animate__animated animate__fadeInUp">
                    What We're All About
                </h1>
                <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">
                    Links Station is your destination to all your business needs. In this fast moving world where everything is going digital or online from sales/marketing to billing, accounting and inventory management. It has become vital for any business whether big or small to keep itself updated according to the latest digital requirements in-order to stay a step ahead from its competitors.
                </p>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/img/about.webp') }}" alt="Code Image"
                     class="img-fluid rounded-3 shadow-lg animate__animated animate__fadeInRight">
            </div>

        </div>
    </div>
</div>


{{-- about --}}

{{-- About Us --}}
<div class="container py-5">
    <div class="row align-items-center">

        <!-- Left Side: Content -->
        <div class="col-lg-6">
            <h6 class="text-uppercase text-primary fw-bold">Our Vision</h6>
            <h1 class="display-5 fw-bold text-dark">Who We Are</h1>
            <blockquote class="blockquote text-dark mt-3">
                <p class="mb-0 fw-bold fst-italic">"It is impossible for a man to learn what he thinks he already knows."</p>
            </blockquote>
            <p class="text-muted mt-3">
                Links Station is offering solutions to keep your business innovative, competitive, efficient & effective in today's challenging business environment. We’re providing custom-made solutions that cater to a wide variety of businesses, whether big or small.
            </p>
            <ul class="list-unstyled text-muted">
                <li>✔ Creating brand awareness and customer engagement.</li>
                <li>✔ In-depth analysis of marketing campaigns.</li>
                <li>✔ Monthly performance reports & weekly overviews.</li>
                <li>✔ Engaging digital marketing campaigns.</li>
                <li>✔ Responsive, bug-free websites with SEO optimization.</li>
                <li>✔ User-friendly & glitch-free software solutions.</li>
                <li>✔ Ergonomically designed printing and packaging services.</li>
            </ul>
        </div>

        <!-- Right Side: Image -->
        <div class="col-lg-6 text-center">
            <img src="{{ asset('assets/img/aboutus.jpg') }}" alt="About Us Image"
                 class="img-fluid rounded-3 shadow-lg animate__animated animate__fadeInRight">
        </div>

    </div>
</div>
{{-- About Us --}}



@endsection

