<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Restaurant - Queries</title>
    <link rel="stylesheet" href="Css/styles.css">
</head>
<body>
    <header>
        <h1>ABC Restaurant - Queries</h1>
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
        <section>
            <h2>Submit a Query</h2>
            <form action="submit_query.php" method="post">
                <label for="query">Your Query:</label>
                <textarea id="query" name="query_text" rows="4" required></textarea>
                <input type="submit" value="Submit Query">
            </form>
        </section>
        <section>
            <h2>Existing Queries</h2>
            <?php
            include 'db_config.php';
            $user_id = $_SESSION['user_id'];
            $result = $conn->query("SELECT * FROM Queries WHERE user_id = $user_id");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='query'>";
                    echo "<p><strong>Query:</strong> " . htmlspecialchars($row['query_text']) . "</p>";
                    if ($row['response_text']) {
                        echo "<p><strong>Response:</strong> " . htmlspecialchars($row['response_text']) . "</p>";
                    } else {
                        echo "<p><strong>Status:</strong> " . htmlspecialchars($row['status']) . "</p>";
                    }
                    echo "</div>";
                }
            } else {
                echo "No queries found.";
            }

            $conn->close();
            ?>
        </section>
    </main>
</body>
</html>
