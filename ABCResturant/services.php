<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Restaurant - Services</title>
    <link rel="stylesheet" href="Css/styles.css">
</head>
<body>
    <header>
        <h1>ABC Restaurant - Services</h1>
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
        <!-- Overview of Services -->
        <section id="overview">
            <h2>Our Services</h2>
            <p>At ABC Restaurant, we offer a variety of dining experiences to suit your needs. Whether you're looking for a fine dining experience, convenient takeaway, or special event catering, we have something for everyone. Explore our services below:</p>
            <!-- Add more details about services here -->
        </section>

        <!-- Product/Service Types Section -->
        <section id="service-types">
            <h2>Service Types</h2>
            <ul>
                <li>Fine Dining</li>
                <li>Takeaway</li>
                <li>Delivery</li>
                <li>Event Catering</li>
                <li>Private Dining</li>
            </ul>
        </section>

        <!-- Offers Section -->
        <section id="offers">
            <h2>Current Offers</h2>
            <p>Check out our latest offers and promotions:</p>
            <!-- Add offers here -->
        </section>

        <!-- Facilities Section -->
        <section id="facilities">
            <h2>Our Facilities</h2>
            <p>Discover the excellent facilities we provide for your comfort and convenience:</p>
            <!-- Add facility details here -->
        </section>

        <!-- Gallery Section -->
        <section id="gallery">
            <h2>Gallery</h2>
            <p>Browse through our gallery to see our restaurant and facilities:</p>
            <!-- Add images or gallery content here -->
        </section>

        <!-- Search Facilities Section -->
        <section id="search">
            <h2>Search for Services</h2>
            <form action="search_results.php" method="get">
                <input type="text" name="query" placeholder="Search for services, offers, etc." required>
                <input type="submit" value="Search">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 ABC Restaurant. All rights reserved.</p>
    </footer>
</body>
</html>
