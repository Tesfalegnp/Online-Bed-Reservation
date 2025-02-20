@extends('app')

@section('title', 'Bed Reservation')

@section('content')
    <!-- Hero Section -->
    <header class="hero-section" style="width:100%; position: relative; overflow: hidden; text-align: center;">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/Cmq_wSz7FL0?autoplay=1&loop=1&playlist=Cmq_wSz7FL0&mute=1&controls=0&modestbranding=1&showinfo=0&disablekb=1&fs=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <div class="hero-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);">
            <h1 class="display-4">Welcome to Our Bed Reservation System</h1>
            <p class="lead">Find the most comfortable beds for your perfect rest.</p>
            <a href="#" class="btn btn-primary btn-lg">Reserve a Bed</a>
            <a href="/explore" class="btn btn-outline-light btn-lg">Explore Beds</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="container text-center my-5">
        <h2 class="mb-4">Why Choose Our Beds?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4 shadow animate__animated animate__fadeInUp">
                    <img src="/assets/images/comport.jpg" alt="Comfortable Bed" class="img-fluid">
                    <h4>Ultimate Comfort</h4>
                    <p>Our beds are designed to provide superior comfort and relaxation.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow animate__animated animate__fadeInUp animate__delay-1s">
                    <img src="/assets/images/sleep.jpg" alt="Luxury Bed" class="img-fluid">
                    <h4>Luxury & Style</h4>
                    <p>Sleep in style with our elegant and luxurious beds.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow animate__animated animate__fadeInUp animate__delay-2s">
                    <img src="/assets/images/night.jpeg" alt="Spacious Bed" class="img-fluid">
                    <h4>Spacious & Cozy</h4>
                    <p>Enjoy spacious and cozy beds for the best night’s sleep.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
