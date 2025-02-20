<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bed Reservation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        .hero-section {
            position: relative;
            text-align: center;
            color: white;
            overflow: hidden;
        }
        .hero-section video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            padding: 150px 20px;
            background: rgba(0, 0, 0, 0.6);
        }
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-content p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            border-radius: 10px;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 40px 0;
        }
        .footer a {
            color: #ffc107;
            text-decoration: none;
        }
        .footer a:hover {
            color: #fff;
        }
        .footer .social-icons a {
            font-size: 1.5rem;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/images/logo.png" alt="Logo" width="90" height="70" class="d-inline-block align-text-top">
                <span class="ms-2">Bed Reservation</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
   

    <!-- Main Content -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact Info</h5>
                    <p>Email: support@bedreservation.com</p>
                    <p>Phone: +123 456 7890</p>
                    <p>Address: 123 Health St, City, Country</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="#" class="text-warning"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-warning"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-warning"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-warning"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="bg-light">
            <p class="mb-0">&copy; 2025 Bed Reservation System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>