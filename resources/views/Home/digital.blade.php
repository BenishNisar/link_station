@extends("Layout.layout")
@section("Content")

<div class="container my-5">
    <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-md-6">
            <div class="position-relative">
                <img src="{{ asset('assets/img/digitalmark.png') }}" alt="Web Development"
                    class="img-fluid rounded-4 shadow-lg" style="max-width: 100%; height: auto;">

                <!-- Decorative Shape (Optional) -->
                <div class="position-absolute top-50 start-50 translate-middle bg-primary rounded-circle"
                    style="width: 120px; height: 120px; opacity: 0.2;"></div>
            </div>
        </div>

        <!-- Text Section -->
        <div class="col-md-6">
            <h2 class="fw-bold text-dark mb-3" style="font-size: 32px;">Digital Marketing
            </h2>
            <p class="text-muted" style="font-size: 18px; line-height: 1.8;">
                Digital marketing services provide businesses of all sizes with an opportunity to market their brand 24/7 at a low cost. From startups to medium-sized enterprises to multiple-location companies, a digital marketing company helps you expand your niche market reach to offer goods and services to your target customers, irrespective of time differences or location.


                Social Media has changed how brands communicate with their audiences forever. Whether your business is a B2B or B2C brand, social media is a powerful way to build brand awareness, build a positive image, and drive lead generation. We specialize in strategic social media campaigns that focus on building and protecting a positive brand image, creating loyalty among fans, and driving new leads for your business.

            </p>

            <!-- CTA Buttons -->
            <div class="d-flex align-items-center mt-4">
                <a href="https://wa.me/922132640403?text=Chat%20on%20WhatsApp%20with%20%2B92%2021%2032640403"
                    class="btn btn-success fw-bold rounded-pill px-4 py-2 shadow-lg me-3 d-flex align-items-center"
                    target="_blank" style="transition: 0.3s; font-size: 18px;">
                    <i class="bi bi-whatsapp me-2" style="font-size: 22px;"></i> Chat with Us
                </a>

                <a href="{{ asset("/service") }}" class="btn btn-outline-primary fw-bold rounded-pill px-4 py-2"
                    style="font-size: 18px; transition: 0.3s;">
                    Explore Services
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
