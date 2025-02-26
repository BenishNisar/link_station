
@extends("Layout.layout")
@section("Content")

<div class="container my-5">
    <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-md-6 position-relative">
            <div class="glassmorphism-card p-4 shadow-lg rounded-4">
                <img src="{{ asset('assets/img/customer.jpeg') }}" alt="Web Development"
                    class="img-fluid rounded-4 shadow-lg" style="max-width: 100%; height: auto; border-radius: 20px;">

                <!-- Decorative Gradient Shape -->
                <div class="position-absolute top-50 start-50 translate-middle bg-gradient-primary rounded-circle"
                    style="width: 120px; height: 120px; opacity: 0.3; filter: blur(10px);"></div>
            </div>
        </div>

        <!-- Text Section -->
        <div class="col-md-6">
            <h2 class="fw-bold mb-3" style="font-size: 36px;color:#4dc6f4;">🚀 Customer</h2>
            <p class="text-muted" style="font-size: 18px; line-height: 1.8;">
                Interacting with customers Handling customer queries and complaints Gathering customer feedback.
            </p>


            <!-- CTA Buttons -->
            <div class="d-flex align-items-center mt-4">
                <a href="https://wa.me/922132640403?text=Chat%20on%20WhatsApp%20with%20%2B92%2021%2032640403"
                    class="btn btn-glass btn-success fw-bold rounded-pill px-4 py-2 shadow-lg me-3 d-flex align-items-center"
                    target="_blank" style="transition: 0.3s; font-size: 18px;color:black;">
                    <i class="bi bi-whatsapp me-2" style="font-size: 22px;color:black;"></i> Let's Talk
                </a>

                <a href="{{ asset("/service") }}" class="btn btn-neumorphic btn-outline-primary fw-bold rounded-pill px-4 py-2"
                    style="font-size: 18px; transition: 0.3s;">
                    View Our Services
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
