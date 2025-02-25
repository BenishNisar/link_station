
@extends("Layout.layout")
<style>
    .bg-brown {
    background-color: #4bc5f3; /* Brown Color */
    color: white;
}

.shadow-lg {
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
}

</style>
@section("Content")

{{-- Contact Us Section --}}
<div class="container-fluid hero-section position-relative overflow-hidden py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side: Contact Details -->
            <div class="col-lg-6 text-start">
                <h1 class="display-4 fw-bold text-dark animate__animated animate__fadeInUp">
                    Contact Us
                </h1>
                <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">
                    We are your one-stop solution for all your business needs.
                    Contact us via phone, email, or social media.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                        14th & 15th Floor, BRR Tower, I.I Chundrigar Road, Karachi
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope text-primary"></i>
                        <a href="mailto:contact@linksstation.com.pk" class="text-dark">contact@linksstation.com.pk</a>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone text-primary"></i>
                        <a href="tel:02132640403" class="text-dark">021 32640403</a>
                    </li>
                </ul>
                <h5 class="mt-4">Keep in Touch</h5>
                <a href="https://facebook.com" class="me-3 text-dark"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://instagram.com" class="me-3 text-dark"><i class="fab fa-instagram fa-2x"></i></a>
            </div>

            <!-- Right Side: Google Map -->
            <div class="col-lg-6 text-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28941.07362467385!2d66.99475647683242!3d24.847637667611918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33df2a06cfd71%3A0x6e1a4f7b5d062c98!2sBRR%20Tower!5e0!3m2!1sen!2s!4v1690000000000"
                    width="100%"
                    height="350"
                    style="border:0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</div>
{{-- End Contact Us Section --}}
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="d-flex shadow-lg rounded overflow-hidden">

                <!-- Left Side: Contact Info -->
                <div class="col-md-5 text-white p-4 d-flex flex-column justify-content-center align-items-start" style="background: linear-gradient(135deg, #4a148c, #00aeee);">
                    <h3 class="fw-bold"><i class="fas fa-headset"></i> Get In Touch</h3>
                    <p class="mt-3">
                        Have questions? Let's discuss how we can help you.
                        Drop us a message and we'll get back to you ASAP!
                    </p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fas fa-map-marker-alt"></i> 14th & 15th Floor, BRR Tower, Karachi</li>
                        <li class="mb-2"><i class="fas fa-envelope"></i> <a href="mailto:contact@linksstation.com.pk" class="text-white text-decoration-none">contact@linksstation.com.pk</a></li>
                        <li class="mb-2"><i class="fas fa-phone"></i> <a href="tel:02132640403" class="text-white text-decoration-none">021 32640403</a></li>
                    </ul>
                    <div class="mt-3">
                        <a href="https://facebook.com" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://instagram.com" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>

                <!-- Right Side: Contact Form -->
                <div class="col-md-7 p-4 bg-light">
                    <h4 class="fw-bold text-dark">Send Us A Message</h4>
                    <form method="POST" action="#" class="mt-3">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control shadow-sm" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Your Email</label>
                            <input type="email" class="form-control shadow-sm" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Your Message</label>
                            <textarea class="form-control shadow-sm" rows="3" placeholder="Type your message here..." required></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="reset" class="btn btn-outline-danger">Cancel</button>
                            <button type="submit" class="btn text-white px-4" style="background-color: #4bc5f3;">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection
