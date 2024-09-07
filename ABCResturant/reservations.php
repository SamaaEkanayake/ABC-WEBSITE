<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Restaurant - Reservations</title>
    <link rel="stylesheet" href="Css/styles.css">
</head>
<body>
    <header>
        <h1>ABC Restaurant - Reservations</h1>
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
        <!-- Check Rates and Availability Section -->
        <section id="rates-availability">
            <h2>Check Rates and Availability</h2>
            <form action="check_availability.php" method="post">
                <label for="service">Select Service:</label>
                <select id="service" name="service" required>
                    <option value="fine_dining">Fine Dining</option>
                    <option value="takeaway">Takeaway</option>
                    <option value="delivery">Delivery</option>
                    <option value="catering">Event Catering</option>
                    <option value="private_dining">Private Dining</option>
                </select>
                <label for="date">Select Date:</label>
                <input type="date" id="date" name="date" required>
                <input type="submit" value="Check Availability">
            </form>
        </section>

        <!-- Manage Reservations Section -->
        <section id="manage-reservations">
            <h2>Manage Your Reservations</h2>

            <!-- Create a New Reservation -->
            <section id="new-reservation">
                <h3>Make a New Reservation</h3>
                <form action="create_reservation.php" method="post">
                    <label for="service">Select Service:</label>
                    <select id="service" name="service" required>
                        <option value="fine_dining">Fine Dining</option>
                        <option value="takeaway">Takeaway</option>
                        <option value="delivery">Delivery</option>
                        <option value="catering">Event Catering</option>
                        <option value="private_dining">Private Dining</option>
                    </select>
                    <label for="date">Select Date:</label>
                    <input type="date" id="date" name="date" required>
                    <label for="time">Select Time:</label>
                    <input type="time" id="time" name="time" required>
                    <label for="people">Number of People:</label>
                    <input type="number" id="people" name="people" min="1" required>
                    <input type="submit" value="Create Reservation">
                </form>
            </section>

            <!-- View Existing Reservations -->
            <section id="view-reservations">
                <h3>Your Reservations</h3>
                <?php
                // Fetch user reservations from the database
                include 'db_config.php';

                $user_id = $_SESSION['user_id']; // Assuming user ID is stored in session
                $sql = "SELECT * FROM Reservations WHERE user_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('i', $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>Service</th><th>Date</th><th>Time</th><th>People</th><th>Status</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['service']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['reservation_date']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['reservation_time']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['number_of_people']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No reservations found.</p>";
                }

                $stmt->close();
                $conn->close();
                ?>
            </section>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 ABC Restaurant. All rights reserved.</p>
    </footer>
</body>
</html>
