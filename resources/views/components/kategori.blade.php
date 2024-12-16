<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#" onclick="showSection('home')">Home</a></li>
            <li><a href="#" onclick="showSection('about')">About</a></li>
            <li><a href="#" onclick="showSection('certificate')">Certificate</a></li>
        </ul>
    </nav>

    <!-- Home Section -->
    <section id="home" class="section">
        <h2>Home</h2>
        <p>Welcome to my portfolio website. Explore more about me and my achievements!</p>
    </section>

    <!-- About Section -->
    <section id="about" class="section" style="display:none;">
        <h2>About Me</h2>
        <p>I am a developer with a passion for technology and innovation. My focus is on creating meaningful solutions through code and design.</p>
    </section>

    <!-- Certificate Section -->
    <section id="certificate" class="section" style="display:none;">
        <h2>My Certificates</h2>
        <div class="certificate">
            <h3>Certificate 1: Web Development</h3>
            <p>Issued by: Coursera - Completed in 2023</p>
        </div>
        <div class="certificate">
            <h3>Certificate 2: Data Science</h3>
            <p>Issued by: edX - Completed in 2022</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 My Portfolio. All rights reserved.</p>
    </footer>

    <script src="scripts.js"></script>
</body>

</html>
