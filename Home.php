<?php include 'navbar.php'; ?> <!-- Include the navigation bar -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="home.css"> <!-- Link to your CSS file -->
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>Welcome to Our Website</h1>
            <p>Your one-stop destination for all things amazing!</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <section class="main-content">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="product-list">
                <!-- Example product cards -->
                <div class="product-card">
                    <img src="product1.jpg" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>Description of product 1.</p>
                    <a href="product-details.php?id=1">View Details</a>
                </div>
                <div class="product-card">
                    <img src="product2.jpg" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Description of product 2.</p>
                    <a href="product-details.php?id=2">View Details</a>
                </div>
                <div class="product-card">
                    <img src="product3.jpg" alt="Product 3">
                    <h3>Product 3</h3>
                    <p>Description of product 3.</p>
                    <a href="product-details.php?id=3">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
            <ul class="social-links">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
