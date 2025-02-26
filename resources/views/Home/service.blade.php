@extends("Layout.layout")
@section("Content")
{{-- services --}}
<div class="container-fluid hero-section position-relative overflow-hidden py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side: Text Content -->
            <div class="col-lg-6 text-start">
                <h1 class="display-4 fw-bold text-dark animate__animated animate__fadeInUp">
                    Popular Services
                </h1>
                <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">
                    Your website is the center of your digital presence. It’s one of the few places on the internet where you can deliver your brand’s message free of distortion or distraction. Liks Station web development services are perfect for brands at any stage. Our web development team experts can help you in growing your brand through your websites and make your brand a center mark in the market as fast as possible.
                </p>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/img/service.jpg') }}" alt="Code Image"
                     class="img-fluid rounded-3 shadow-lg animate__animated animate__fadeInRight">
            </div>

        </div>
    </div>
</div>



{{-- services --}}
{{-- services --}}
<div class="container-fluid my-5 service-container mt-0">
    <div class="container">
        <h1 class="text-center text-white mb-4">Our Services</h1>
        <div class="row g-4">
            <!-- Web Development -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Web Development</h5>
                    <img src="{{ asset('assets/img/code.jpeg') }}" alt="Web Development">
                    <a href="{{ asset('/webdevelopment') }}" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- Packaging Designing -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Packaging Designing</h5>
                    <img src="{{ asset('assets/img/package.jpeg') }}" alt="Packaging Designing">
                    <a href="{{ asset("/packaging") }}" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- App Development -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>App Development</h5>
                    <img src="{{ asset('assets/img/mobile_app.jpeg') }}" alt="App Development">
                    <a href="{{ asset("/appdevelopment") }}" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Digital Marketing</h5>
                    <img src="{{ asset('assets/img/digital.jpeg') }}" alt="Digital Marketing">
                    <a href="{{ asset('/digital') }}" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- SEO -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>SEO Optimization</h5>
                    <img src="{{ asset('assets/img/seo.jpeg') }}" alt="SEO">
                    <a href="{{ asset('/seo') }}" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- Travel Documentation -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Travel Documentation</h5>
                    <img src="{{ asset('assets/img/travel.jpeg') }}" alt="Travel Documentation">
                    <a href="{{ asset('/traveldoc') }}" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- Customer Liaison -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Customer Liaison</h5>
                    <img src="{{ asset('assets/img/customer.jpeg') }}" alt="Customer Liaison">
                    <a href="{{ asset('/customer') }}" class="btn btn-custom">Read more</a>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Call Us Section -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center p-4 border rounded">
                <h5 class="mb-0 fw-bold">Would you like to start a project with us? Call Now.</h5>
                <a href="tel:02132640403" class="btn btn-primary px-4 py-2">021 32640403</a>
            </div>
        </div>
    </div>
</div>

@endsection
