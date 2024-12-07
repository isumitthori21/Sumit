<?php
// Disable error display completely (for production environment)
ini_set('display_errors', 0);  // Disable PHP error display
error_reporting(0);            // Don't report any errors

// Initialize login message
$loginMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example hardcoded validation (replace with actual authentication logic)
    if ($username == "admin" && $password == "password123") {
        $loginMessage = "Welcome, $username!";
    } else {
        $loginMessage = "Invalid username or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystic Journeys</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
        /* Inline CSS for Modal and Form styling */
        .modal {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .modal.hidden {
            display: none;
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .close-btn:hover {
            color: red;
        }

        form input, form button {
            padding: 10px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .login-message {
            text-align: center;
            margin-top: 10px;
            font-size: 18px;
            color: green;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>

    <!-- Login Section -->
    <div id="container">
        <button id="login-btn">Login</button>

        <!-- Modal for Login -->
        <div id="login-modal" class="modal hidden">
            <div class="modal-content">
                <span class="close-btn" id="close-modal">&times;</span>
                <h2>Login</h2>
                <form id="login-form" method="POST" action="index.php">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Login</button>
                </form>

                <!-- Display login message -->
                <?php if ($loginMessage): ?>
                    <div class="login-message <?php echo strpos($loginMessage, 'Invalid') !== false ? 'error-message' : ''; ?>">
                        <?php echo $loginMessage; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const loginBtn = document.getElementById("login-btn");
            const modal = document.getElementById("login-modal");
            const closeModal = document.getElementById("close-modal");

            // Show login modal
            loginBtn.addEventListener("click", () => {
                modal.classList.remove("hidden");
            });

            // Close modal
            closeModal.addEventListener("click", () => {
                modal.classList.add("hidden");
            });

            // Prevent form from submitting with JS
            document.getElementById("login-form").addEventListener("submit", (e) => {
                e.preventDefault(); // Prevent form submission for testing
                const username = document.getElementById("username").value;
                const password = document.getElementById("password").value;

                alert(`Welcome, ${username}!`);
                modal.classList.add("hidden");
            });
        });
    </script>

</body>
</html>


