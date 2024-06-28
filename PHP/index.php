<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Home Page</title>
</head>
<body>
    <nav>
        <div class="menu-icon">
            <label for="check" class="checkbox">
                <i class="ri-menu-line"></i>
            </label>
        </div>
        <div class="nav__content">
            <div class="logo"><a href="#">Pedro</a></div>
            <div class="dropdown">
                <button class="dropbtn"> Menu </button>
                <div class="dropdown-content">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="cv.html">CV</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </div>
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="cv.html">CV</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <section class="section">
        <div class="section__container">
            <div class="content">
                <p class="subtitle">HELLO</p>
                <h1 class="title">
                    I'm Pedro<br />a Student in IT
                </h1>
                <p class="description">
                    Welcome to my portfolio! I'm Pedro, a 17 years old student in IT and
                    with a passion for developing my skills as a web designer,
                    I've worked on a variety of web projects throughout my school years, 
                    like basic websites, personal blogs,...
                </p>
                <div class="action__btns">
                    <button class="portfolio" id="blogButton">Blog</button>
                </div>
                <script>
                    document.getElementById("blogButton").addEventListener("click", function() {
                        // Rediriger vers la page blog.html
                        window.location.href = "blog.html"; 
                    });
                </script>
            </div>
            <div class="image">
                <img src="../IMG/profile.png" alt="profile" loading="lazy" />
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Pedro Borges</p>
    </footer>
</body>
