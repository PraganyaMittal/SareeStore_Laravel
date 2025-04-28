@extends('layouts.app')

@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="contact-us container">
        <div class="mw-930">
            <h2 class="page-title">About Us</h2>
        </div>

        <div class="about-us__content pb-5 mb-5">
            <p class="mb-5">
                <video class="w-100" style="height: 450px; object-fit: cover;" autoplay muted loop playsinline>
                    <source src="{{ asset('v1.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </p>

            <div class="mw-930">
                <h3 class="mb-4">Our Story</h3>
                <p class="fs-6 fw-medium mb-4">
                    KALPA H&S was founded with a deep passion for Indian handlooms and the rich traditions they represent. Situated in the heart of Gachibowli, Hyderabad, we bring you an exclusive collection of sarees and suits sourced directly from weavers and manufacturers across India. Our journey began with the vision of making state-specific handlooms easily accessible to handloom lovers and everyday customers, offering quality at affordable prices. Whether you are shopping for a personal event or wholesale needs, KALPA is here to offer you homely support and an authentic shopping experience.
                </p>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5 class="mb-3">Our Mission</h5>
                        <p class="mb-3">
                            To promote the beauty and heritage of Indian handlooms by providing high-quality sarees and suits at affordable prices, while supporting weavers and manufacturers across India.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="mb-3">Our Vision</h5>
                        <p class="mb-3">
                            To become a trusted destination for handloom enthusiasts and customers worldwide, preserving traditional craftsmanship and offering a seamless, personalized shopping experience through both retail and wholesale.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mw-930 d-lg-flex align-items-lg-center">
                <div class="image-wrapper col-lg-6">
                    <video class="w-auto" width="550" height="500" autoplay muted loop playsinline>
                        <source src="{{ asset('v2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="content-wrapper col-lg-6 px-lg-4">
                    <h5 class="mb-3">The Company</h5>
                    <p>
                        KALPA H&S is a registered firm dedicated to celebrating the diversity of Indian handlooms. We specialize in handloom cottons, silks, and pattu sarees, carefully curated from skilled artisans and weavers. With a commitment to authenticity, quality, and affordability, KALPA offers a blend of tradition and modernity to meet the needs of every saree and suit lover. Visit our website at <a href="https://www.kalpahs.com" target="_blank">www.kalpahs.com</a> to explore our latest collections, and reach out to us on WhatsApp at +91 99897 32425 / +91 99087 46834 for inquiries, pricing, and bookings.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
