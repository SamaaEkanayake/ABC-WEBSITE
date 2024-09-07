<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Restaurant - Login</title>
    <link rel="stylesheet" href="Css/styles.css">
    <script>
        function toggleForms() {
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        }
    </script>
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
        <section id="login-form">
            <h2>Login</h2>
            <form action="login_process.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Login">
            </form>
            <p>Don't have an account? <a href="javascript:void(0);" onclick="toggleForms()">Sign up now</a></p>
        </section>

        <section id="register-form" style="display: none;">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="customer">Customer</option>
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option>
                </select>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone">
                <input type="submit" value="Register">
            </form>
            <p>Already have an account? <a href="javascript:void(0);" onclick="toggleForms()">Login here</a></p>
        </section>
    </main>
</body>
</html>
