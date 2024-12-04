<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystic Journeys</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
    <!-- Inline CSS -->
    <style>
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
            visibility: visible;
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
            color: #333;
        }

        .close-btn:hover {
            color: red;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        form label {
            font-size: 14px;
            font-weight: bold;
        }

        form input,
        form textarea {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            width: 100%;
        }

        form button {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="container">
        <nav>
            <div class="navbar">
                <div class="logo"><a class="me" href="#">Majestic Journeys</a></div>
                <ul class="links">
                    <li class="nav-links"><a class="home-btn" href="#home">Home</a></li>
                    <li class="nav-links"><a class="home-btn" href="#Popular-tours">Tours</a></li>
                    <li class="nav-links"><a class="home-btn" href="#services">Services</a></li>
                    <li class="nav-links"><a class="home-btn" href="#contact">Contact</a></li>
                    <li class="nav-links"><a class="home-btn" id="login-btn">Login</a></li>
                </ul>
                <a href="#" class="action-btn">Let's Explore</a>
            </div>
        </nav>

        <section id="home">
            <h1 class="home-tagline">Let's Explore the <br><span class="tagline-main">Incredible India</span> with <br>
                <span class="me me-home">Majestic Journeys</span></h1>
            <a href="#" class="action-btn homeBtn">Let's Explore</a>
        </section>

        <?php
        $section_heading = "Get in Touch With Us";
        $section_subhead = "Want to know more about our services and packages? Reach out to us!";
        ?>

        <section id="contact">
            <div class="contact-section1">
                <h2 class="section-heading"><?php echo $section_heading; ?></h2>
                <p class="section-subhead"><?php echo $section_subhead; ?></p>
            </div>
            <div class="contact-section2">
                <form id="contact-form">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Your Message" rows="4" required></textarea>

                    <button type="submit" class="action-btn">Send Message</button>
                </form>
            </div>
        </section>

        <div id="login-modal" class="modal hidden">
            <div class="modal-content">
                <span class="close-btn" id="close-modal">&times;</span>
                <h2>Login</h2>
                <form id="login-form">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>

                    <button type="submit" class="action-btn">Login</button>
                </form>
            </div>
        </div>

        <footer>
            <a href="#container" class="icon-up"><i class="fa-solid fa-angle-up up-arrow"></i></a>
            <div class="footer-section">
                <a class="me logo-me" href="#container">Majestic Journeys</a>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const loginBtn = document.getElementById("login-btn");
            const modal = document.getElementById("login-modal");
            const closeModal = document.getElementById("close-modal");

            loginBtn.addEventListener("click", () => {
                modal.classList.remove("hidden");
            });

            closeModal.addEventListener("click", () => {
                modal.classList.add("hidden");
            });

            document.getElementById("login-form").addEventListener("submit", (e) => {
                e.preventDefault();
                const username = document.getElementById("username").value;
                const password = document.getElementById("password").value;

                alert(`Welcome, ${username}!`);
                modal.classList.add("hidden");
            });
        });
    </script>
</body>
</html>
