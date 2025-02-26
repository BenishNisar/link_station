
@extends("Layout.layout")
@section("Content")

<div class="container my-5">
    <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-md-6 position-relative">
            <div class="glassmorphism-card p-4 shadow-lg rounded-4">
                <img src="{{ asset('assets/img/mobile_app.jpeg') }}" alt="Web Development"
                    class="img-fluid rounded-4 shadow-lg" style="max-width: 100%; height: auto; border-radius: 20px;">

                <!-- Decorative Gradient Shape -->
                <div class="position-absolute top-50 start-50 translate-middle bg-gradient-primary rounded-circle"
                    style="width: 120px; height: 120px; opacity: 0.3; filter: blur(10px);"></div>
            </div>
        </div>

        <!-- Text Section -->
        <div class="col-md-6">
            <h2 class="fw-bold mb-3" style="font-size: 36px;color:#4dc6f4;">🚀 SEO</h2>
            <p class="text-muted" style="font-size: 18px; line-height: 1.8;">
                Billions of web browsing sessions begin with a search query every day. With more than a billion websites competing for the top spot in search results, it can be difficult to drive traffic to your site from search engines.
                At Links Station, we specialize in an innovative approach to SEO that uses white-hat tactics to put your website at the top of your target audience’s searches.
            </p>

            <p class="text-muted" style="font-size: 18px; line-height: 1.8;">
                Our SEO services include:
                <ul>
                    <li>Keyword Research</li>
                    <li>Technical SEO</li>
                    <li>Full SEO Audits</li>
                    <li>SEO Consulting</li>
                </ul>
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
