@extends("Layout.layout")
@section("Content")

<div class="container my-5">
    <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-md-6">
            <div class="position-relative">
                @if(isset($packagingData) && $packagingData->img)
                    <img src="{{ asset($packagingData->img) }}" alt="Packaging Design"
                        class="img-fluid rounded-4 shadow-lg" style="max-width: 100%; height: auto;">
                @else
                    <img src="{{ asset('assets/img/default-placeholder.jpg') }}" alt="Default Image"
                        class="img-fluid rounded-4 shadow-lg" style="max-width: 100%; height: auto;">
                @endif

                <!-- Decorative Shape (Optional) -->
                <div class="position-absolute top-50 start-50 translate-middle bg-primary rounded-circle"
                    style="width: 120px; height: 120px; opacity: 0.2;"></div>
            </div>
        </div>

        <!-- Text Section -->
        <div class="col-md-6">
            <h2 class="fw-bold text-dark mb-3" style="font-size: 32px;color:#4dc6f4;">{{ $packagingData->title }} </h2>

            @if(isset($packagingData))


                <p class="text-muted" style="font-size: 18px; line-height: 1.8;">
                    {{ $packagingData->descripation }}
                </p>
            @else
                <p class="text-muted" style="font-size: 18px; line-height: 1.8;">
                    No Packaging Designing data available. Please update it from the admin panel.
                </p>
            @endif

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
