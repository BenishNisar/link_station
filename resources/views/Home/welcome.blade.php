@extends("Layout.layout")
@section("Content")

<!-- Hero Section -->
<div class="container-fluid hero-section position-relative overflow-hidden py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side: Text Content -->
            <div class="col-lg-6 text-start">
                <h1 class="display-4 fw-bold text-dark animate__animated animate__fadeInUp">
                    Links Station Your Business Solution Destination
                </h1>
                <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">
                    Are you looking for a one stop solution for all your business needs ? Then Links station is your destination. We provide a wide verity of services which include digital marketing, website development, software development, search engine optimization, travel documentation and printing and packaging solutions to suit the needs of every business whether big or small.
                </p>
                <a href="#" style="border-radius: 50px;" class="btn btn-primary btn-lg mt-3 animate__animated animate__fadeInUp animate__delay-2s">
                    Get Started <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>

            <!-- Right Side: Video -->
            <div class="col-lg-6 d-flex justify-content-center animate__animated animate__zoomIn animate__delay-1s">
                <video
                src="{{ asset('assets/video/link_station.mp4') }}"
                autoplay
                muted
                loop
                playsinline
                class="video-container">
            </video>

            </div>

        </div>
    </div>
</div>


<!-- Hero Section -->
<div class="hero-section position-relative text-center d-flex align-items-center justify-content-center">
    <!-- Background Image -->
    <div class="hero-bg">
        <img src="{{ asset('assets/img/business.gif') }}" class="hero-image" alt="Background">
        <div class="overlay"></div>
    </div>

    <!-- Play Button -->
    <a href="https://www.youtube.com/watch?v=GlLRYm18mCY&t=3238" target="_blank" class="play-button">
        <i class="fas fa-play-circle"></i>
    </a>

    <!-- Content -->
    <div class="container text-white text-center">
        <h1 >Link Station</h1>
        <p class="hero-subtitle">Track performance & insights in one place.</p>

        <div class="row justify-content-center mt-4">
            <!-- Performance Card -->
          <!-- Cards Section -->
<div class="row justify-content-center mt-4">
    <!-- Performance Card -->
    <div class="col-md-4 d-flex">
        <div class="performance-card w-100 p-3 d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-center fw-bold">Overall Performance</h2>
            <div class="progress-container">
                <svg width="120" height="120">
                    <circle cx="60" cy="60" r="50" class="progress-bg"></circle>
                    <circle cx="60" cy="60" r="50" class="progress-bar"></circle>
                </svg>
                <div class="progress-content">
                    <i class="fas fa-user-circle user-icon"></i>
                    <h1 class="count">565</h1>
                </div>
            </div>
            <div class="d-flex justify-content-between text-muted mt-3 w-100">
                <span class="new-users">● New <strong>4.8k</strong></span>
                <span class="returning-users">● Rating <strong>349</strong></span>
            </div>
        </div>
    </div>



    <!-- Steps Graph Card -->
    <div class="col-md-4 d-flex">
        <div class="glass-card w-100">
            <h6>Average Time</h6>
            <h3>1,000 <small>steps</small></h3>
            <img src="{{ asset("assets/img/graph.webp") }}" class="img-fluid rounded" alt="Graph">
            <div class="d-flex align-items-center justify-content-between mt-2">
                <span>Set Reminder</span>
                <input type="checkbox" class="form-check-input">
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>

<!-- Our Technologies Section -->
<div style="background: linear-gradient(135deg,#fff,#00aeee); " class="container tech-section" >

    <h1 class="display-4 fw-bold text-dark animate__animated animate__fadeInUp">
      Popular Services
    </h1>
        <span class="sub-heading">Top Categories</span>

    <p class="description">
        Your website is the center of your digital presence. It’s one of the few places on the internet where you can
        deliver your brand’s message free of distortion or distraction. Our web development experts can help grow your
        brand through professional and fast websites.
    </p>
    <a href="#" class="btn btn-custom">Read more</a>

    <div class="tech-icons mt-3">
        <h3>Our Technologies</h3>
        <div class="icons">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968267.png" alt="HTML">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968242.png" alt="CSS">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968292.png" alt="JS">
            <img src="https://cdn-icons-png.flaticon.com/128/1126/1126012.png" alt="React">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968672.png" alt="Bootstrap">
            <img src="https://cdn-icons-png.flaticon.com/128/174/174881.png" alt="WordPress">
        </div>
    </div>


</div>

{{-- services --}}
<div  class="container-fluid my-5 service-container">
    <div class="container">
        <h1 class="display-4 fw-bold text-dark animate__animated animate__fadeInUp text-center">
            Our Services
          </h1>
        <div class="row g-4 mt-2">
            <!-- Web Development -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Web Development</h5>
                    <img src="{{ asset('assets/img/code.jpeg') }}" alt="Web Development">
                    <a href="#" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- Packaging Designing -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Packaging Designing</h5>
                    <img src="{{ asset('assets/img/package.jpeg') }}" alt="Packaging Designing">
                    <a href="#" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- App Development -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>App Development</h5>
                    <img src="{{ asset('assets/img/mobile_app.jpeg') }}" alt="App Development">
                    <a href="#" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Digital Marketing</h5>
                    <img src="{{ asset('assets/img/digital.jpeg') }}" alt="Digital Marketing">
                    <a href="#" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- SEO -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>SEO Optimization</h5>
                    <img src="{{ asset('assets/img/seo.jpeg') }}" alt="SEO">
                    <a href="#" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- Travel Documentation -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Travel Documentation</h5>
                    <img src="{{ asset('assets/img/travel.jpeg') }}" alt="Travel Documentation">
                    <a href="#" class="btn btn-custom">Read more</a>
                </div>
            </div>

            <!-- Customer Liaison -->
            <div class="col-md-4">
                <div class="service-card">
                    <h5>Customer Liaison</h5>
                    <img src="{{ asset('assets/img/customer.jpeg') }}" alt="Customer Liaison">
                    <a href="#" class="btn btn-custom">Read more</a>
                </div>
            </div>

        </div>
    </div>
</div>


{{-- services --}}
<div  class="container-fluid my-5 py-5 service-section">
    <div class="row g-4 justify-content-center">
        <!-- Service Cards -->
        <div class="col-lg-3 col-md-6">
            <div class="card_three">
                <img src="{{ asset('assets/img/web.webp') }}" class="card-img-top" alt="Web Development">
                <div class="card-body">
                    <h1 class="card-title">Web Development</h1>
                    <p class="card-text">
                        From B2B to B2C websites to much more. We make your website stand out from your competitors. Our website design services can help you boost more revenue, greater brand engagement and higher conversions with measurable results.

                    </p>

                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card_three">
                <img src="{{ asset('assets/img/digital.jpeg') }}" class="card-img-top" alt="Digital Marketing">
                <div class="card-body">
                    <h1 class="card-title">Digital Marketing</h1>
                    <p class="card-text mb-5">
                        One of our key benefits is that we provide a cost-effective way to reach a huge audience while simultaneously targeting a specific group within the audience.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card_three">
                <img src="{{ asset('assets/img/seo.jpeg') }}" class="card-img-top" alt="SEO">
                <div class="card-body">
                    <h1 class="card-title mt-3">SEO</h1>
                    <p class="card-text mb-5">
                        When your site is optimized for search engines, it gets more traffic which equates to increased brand awareness, as well as helps to bring more website traffic, more customers, and a better reputation for your brand.
                    </p>
                </div>
            </div>
        </div>

        <!-- Study Section -->
        <div class="col-lg-3 col-md-6">
            <div class="card_three">
                <img src="{{ asset('assets/img/study.jpg') }}" class="card-img-top" alt="Study">
                <div class="card-body">
                    <span class="text-muted">Study at Your Own Pace</span>
                    <h4 class="mt-2">Boost Your Business with Us</h4>
                    <ul class="text-start">
                        <li>All Services</li>
                        <li>Web Development</li>
                        <li>Digital Marketing</li>
                        <li>App Development</li>
                        <li>Customer Liaison</li>
                        <li>Travel Documentation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- services_two --}}

{{-- why choose us --}}
<div class="container my-5 text-center">
    <h2 class="mb-4">Why Choose Us?</h2>
    <p>Links Station is your destination to all your business needs. In this fast moving world where everything is going digital or online from sales/marketing to billing, accounting and inventory management. It has become vital for any business whether big or small to keep itself updated according to the latest digital requirements in-order to stay a step ahead from its competitors.</p>
    <div class="row justify-content-center">
        <!-- First Card - Best Industry Leaders -->
        <div class="col-md-6">
            <div class="card_four">
                <div class="circle">
                    <span class="icon">&#128081;</span> <!-- 👑 Crown icon for Leadership -->
                </div>
                <h4>Best Industry Leaders</h4>
                <p>The success of a company often rests in the hands of its leaders. We are responsible for setting goals, motivating team members, and embodying the spirit and culture of the company that we work for.</p>
            </div>
        </div>

        <!-- Second Card - Business Online at Your Own Pace -->
        <div class="col-md-6">
            <div class="card_four">
                <div class="circle">
                    <span class="icon">&#128640;</span> <!-- 🚀 Rocket icon for Business Growth -->
                </div>
                <h4>Business Online at Your Own Pace</h4>
                <p>Your business your way to handle. We will just to provide the best ways to help your business to reach the sky with our expert skills.</p>
            </div>
        </div>
    </div>

</div>

{{-- why choose us --}}

<!-- Advanced About Us Section -->
<section class="about-us py-5 position-relative" style="background: linear-gradient(135deg, #f3f4f6, #e5e7eb);">
    <div class="container shadow-lg p-4 rounded-4" style="max-width: 1100px; background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
        <h1 class="text-center text-dark mb-4">About Us</h1>

        <div class="row align-items-center">
            <!-- Left Content with Tab Navigation -->
            <div class="col-md-6">
                <ul class="nav nav-tabs border-0" id="aboutTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fw-bold text-dark" id="story-tab" data-bs-toggle="tab" data-bs-target="#story" type="button" role="tab" aria-controls="story" aria-selected="true">Company Story</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-bold text-dark" id="team-tab" data-bs-toggle="tab" data-bs-target="#team" type="button" role="tab" aria-controls="team" aria-selected="false">Our Vision</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="aboutTabsContent">
                    <div class="tab-pane fade show active" id="story" role="tabpanel" aria-labelledby="story-tab">
                        <h2 class="fw-bold" style="color: #00aeee;">What We're All About</h2>
                        <p class="text-muted">Links Station is your one-stop destination for all business needs. As businesses go digital, we provide solutions for marketing, sales, billing, and inventory management—ensuring you stay ahead of the competition.</p>
                    </div>
                    <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
                        <h2 class="fw-bold text-primary">Who We Are</h2>
                        <p class="text-muted">We create innovative solutions for businesses, keeping them efficient and competitive. Our services include digital marketing, SEO, web development, and custom software solutions that drive business success.</p>
                    </div>
                </div>
            </div>
            <!-- Right Image with Hover Effects -->
            <div class="col-md-6 text-center position-relative">
                <div class="d-flex justify-content-center gap-3">
                    <div class="image-box position-relative overflow-hidden rounded-4 shadow-lg" style="width: 250px; height: 350px;">
                        <img src="assets/img/about.webp" class="img-fluid w-100 h-100 object-fit-cover rounded-4 transition" alt="Team Member 1">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-white fw-bold opacity-0 transition" style="background: rgba(0,0,0,0.6);">
                            Meet Our Team
                        </div>
                    </div>
                    <div class="image-box position-relative overflow-hidden rounded-4 shadow-lg" style="width: 250px; height: 350px;">
                        <img src="assets/img/abouttwo.webp" class="img-fluid w-100 h-100 object-fit-cover rounded-4 transition" alt="Our Vision">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-white fw-bold opacity-0 transition" style="background: rgba(0,0,0,0.6);">
                            Our Vision
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- about_us --}}



{{-- testimonial --}}
<div class="container my-5">
    <h2 class="text-center fw-bold">OUR TESTIMONIAL</h2>
    <p class="text-center">What Clients Say About Us?</p>

    <div class="row">
        <div class="col-md-4 d-flex align-items-stretch mt-2">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ Our skin care brand needed recognition. Links station helped us establish our brand. ”</p>
                <img src="{{ asset('assets/img/cute_face.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">CUTE FACE</h5>
                <p>Designer, LLC Team</p>
            </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch mt-2" >
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ Links Station developed my website which enabled me to connect with prospects all over the world. Their friendly staff helped me learn about website operation and online interactions. ”</p>
                <img src="{{ asset('assets/img/quran.png') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">Quran Lesson</h5>
                <p>Developer, Tech Inc.</p>
            </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch mt-2">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>





        <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>


        <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>

         <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>


        <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="testimonial-card p-4 text-center border rounded">
                <p class="quote">“ E Boot provides a wide variety of IT solutions. Links station worked with us closely and helped us connect with customers through our website. ”</p>
                <img src="{{ asset('assets/img/eboot.jpeg') }}" class="rounded-circle my-2" width="60" alt="Client">
                <h5 class="fw-bold">E Boot</h5>
                <p>Manager, CorpX</p>
            </div>
        </div>

    </div>
</div>
{{-- testimonial --}}

{{-- contact_us --}}

{{-- contact_us --}}

<div class="container-fluid" style="background: url('{{ asset('assets/img/contact.jpg') }}') no-repeat center center; background-size: cover; padding: 150px 20px; color: white; text-align: center; min-height: 450px; position: relative;">
    <div class="row justify-content-center align-items-center hero-section-new">
        <div class="col-md-6">
            <div class="contact-content">
                <h1>Ready to Elevate Your Content?</h1>
                <p>Let's start a conversation for your next projects, contact us</p>
                <a href="{{ asset('/contact') }}" class="contact-btn">Contact Us →</a>
            </div>
        </div>
    </div>
</div>

{{-- contact_us --}}



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
