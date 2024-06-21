<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Transport Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Healthcare Transport Services</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#request">Request Transport</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Admin</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>Welcome to Our Healthcare Transport Services</h2>
        <p>We provide urgent transport services to the healthcare sector, ensuring quick response and safe transport for patients in need.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <p>We offer immediate transport services for patients to hospitals, clinics, and other healthcare facilities. Our registered vehicles are equipped to handle urgent medical needs.</p>
    </section>

    <section id="request">
        <h2>Request Transport</h2>
        <form action="process_request.php" method="post" id="requestForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="condition">Condition:</label>
            <textarea id="condition" name="condition" required></textarea>

            <button type="submit">Request Transport</button>
        </form>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: dsoftwaretechnologies@gmail.com</p>
        <p>Phone: +254704629251</p>
    </section>

    <footer>
        <p>&copy; 2024 Healthcare Transport Services. All rights reserved. powered by D Software Technologies</p>
    </footer>
</body>
</html>
