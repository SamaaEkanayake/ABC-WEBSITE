<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Restaurant - Home</title>
    <link rel="stylesheet" href="Css/styles.css">
    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>
    <header>
        <h1>Welcome to ABC Restaurant</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="reservations.php">Reservations</a></li>
                <li><a href="queries.php">Queries</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Overview Section -->
        <section id="overview">
            <h2>About Us</h2>
            <p>Welcome to ABC Restaurant, a premier dining destination offering a variety of delectable dishes and a memorable dining experience. With locations across Sri Lanka, we pride ourselves on exceptional service and a warm, inviting atmosphere.</p>
        </section>

        <!-- Services Section -->
        <section id="services">
            <h2>Our Services</h2>
            <ul>
                <li>Fine Dining</li>
                <li>Takeaway</li>
                <li>Delivery</li>
                <li>Event Catering</li>
                <li>Private Dining</li>
            </ul>
        </section>

        <!-- Slider Section -->
        <section class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center text-center">
                        <div class="col-md-10 col-sm-12 ftco-animate">
                            <h1 class="mb-3">Book a table for yourself at a time convenient for you</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center text-center">
                        <div class="col-md-10 col-sm-12 ftco-animate">
                            <h1 class="mb-3">Tasty & Delicious Food</h1> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url('images/bg_3.jpg');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center text-center">
                        <div class="col-md-10 col-sm-12 ftco-animate">
                            <h1 class="mb-3">Book a table for yourself at a time convenient for you</h1> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Offers Section -->
        <section id="offers">
            <h2>Special Offers</h2>
            <p>Check out our latest promotions and discounts. Enjoy exclusive deals on our menu items and special events throughout the year.</p>
            <ul>
                <li>10% off on your first order</li>
                <li>Happy Hour - 50% off drinks from 5 PM to 7 PM</li>
                <li>Weekend Brunch Specials</li>
            </ul>
        </section>

        <!-- Facilities Section -->
        <section id="facilities">
            <h2>Facilities</h2>
            <p>We offer a range of facilities to enhance your dining experience:</p>
            <ul>
                <li>Free Wi-Fi</li>
                <li>Accessible Restrooms</li>
                <li>Outdoor Seating</li>
                <li>Private Rooms for Events</li>
            </ul>
        </section>

        <!-- Gallery Section -->
        <section id="gallery">
            <h2>Gallery</h2>
            <div class="gallery-grid">
                <img src="images/dining.jpg" alt="Dining Area">
                <img src="images/dining2.jpg" alt="Food Presentation">
                <img src="images/chef.jpg" alt="Our Chef">
                <img src="images/event.jpg" alt="Event Setup">
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 ABC Restaurant. All rights reserved.</p>
    </footer>

    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Initialize Owl Carousel -->
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
    $(document).ready(function(){
        $('.home-slider').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true
        });
    });
    </script>
</body>
</html>
